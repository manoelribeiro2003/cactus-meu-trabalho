<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Database\Expression\QueryExpression;

/**
 * Blog Controller
 *
 * @property \App\Model\Table\UsersTable $Blog
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtigoController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function view($slug = null)
    {
        $artigoTable = TableRegistry::get('Artigos');
        $artigo = $artigoTable->getVerArtigo($slug);
        if($artigo){
            $artigoAnt = $artigoTable->getArtigoAnt($artigo->id);
            $artigoProx = $artigoTable->getArtigoProx($artigo->id);

            $expression = new QueryExpression('qnt_acesso = qnt_acesso + 1');
            $artigoTable->updateAll([$expression], ['Artigos.id' => $artigo->id]);

        }
        $artigoUltimos = $artigoTable->getArtigoUltimos();
        $artigoDestaques = $artigoTable->getArtigoDestaques(); 

        $autorSobTable = TableRegistry::get('AutorsSobs');
        $autorSob = $autorSobTable->getVerSobAutor();     

        $redeSociaTable = TableRegistry::get('RedesSocias');
        $redeSocias = $redeSociaTable->getListRedeSocias();   

        $this->set(compact('artigo', 'artigoAnt','artigoProx', 'artigoUltimos', 'artigoDestaques', 'autorSob', 'redeSocias'));
    }

}
