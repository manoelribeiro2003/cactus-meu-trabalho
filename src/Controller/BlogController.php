<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Blog Controller
 *
 * @property \App\Model\Table\UsersTable $Blog
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $artigoTable = TableRegistry::get('Artigos');

        $this->paginate = [
            'limit' => 6,
            'conditions' => [
                'Artigos.situation_id = ' => 1
            ],
            'order' => [
                'Artigos.id' => 'desc',
            ]
        ];
        $artigos = $this->paginate($artigoTable);

        $artigoUltimos = $artigoTable->getArtigoUltimos();
        $artigoDestaques = $artigoTable->getArtigoDestaques();

        $autorSobTable = TableRegistry::get('AutorsSobs');
        $autorSob = $autorSobTable->getVerSobAutor();

        $redeSociaTable = TableRegistry::get('RedesSocias');
        $redeSocias = $redeSociaTable->getListRedeSocias();  

        $this->set(compact('artigos', 'artigoUltimos','artigoDestaques', 'autorSob', 'redeSocias'));
    }

}
