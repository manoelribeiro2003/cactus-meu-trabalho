<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Home Controller
 *
 * @property \App\Model\Table\UsersTable $Home
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
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
        $carouselTable = TableRegistry::get('Carousels');
        $carousels = $carouselTable->getListarSlidesHome();

        $servicosTable = TableRegistry::get('Servicos');
        $servicos = $servicosTable->getListarServicoHome('1');

        $depoimentosTable = TableRegistry::get('Depoimentos');
        $depoimentos = $depoimentosTable->getListarDepHome('2');

        // $artigoTable = TableRegistry::get('Artigos');
        // $artigosUltimos = $artigoTable->getListarUltArt();


        $startupsTable = TableRegistry::get('Startups');
        $startupUltimos = $startupsTable->getListarUltStartups();

        $this->set(compact('carousels', 'servicos', 'depoimentos', 'startupUltimos'));
    }

}
