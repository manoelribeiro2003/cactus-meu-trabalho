<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * SobreEmpresa Controller
 *
 * @property \App\Model\Table\UsersTable $SobreEmpresa
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SobreEmpresaController extends AppController
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
        $empSobTable = TableRegistry::get('EmpresasSobs');
        $empSobs = $empSobTable->getListarEmpSob();

        $this->set(compact('empSobs'));
    }

}
