<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * ContatosMsgs Controller
 *
 * @property \App\Model\Table\ContatosMsgsTable $ContatosMsgs
 *
 * @method \App\Model\Entity\ContatosMsg[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatosMsgsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'ContsMsgsSits', 'ContsMsgsSits.Colors'],
            'order' => ['ContatosMsgs.id' => 'DESC']
        ];
        $contatosMsgs = $this->paginate($this->ContatosMsgs);

        $this->set(compact('contatosMsgs'));
    }

    /**
     * View method
     *
     * @param string|null $id Contatos Msg id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contatosMsgsTable = TableRegistry::get('ContatosMsgs');
        $contatosMsgResul = $contatosMsgsTable->getSitMsg($id);

        if($contatosMsgResul){
            $contatosMsg = $contatosMsgsTable->newEntity();

            $contatosMsg->id = $id;
            $contatosMsg->conts_msgs_sit_id = 1;

            $contatosMsgsTable->save($contatosMsg);
        }

        

        $contatosMsg = $this->ContatosMsgs->get($id, [
            'contain' => ['Users', 'ContsMsgsSits', 'ContsMsgsSits.Colors']
        ]);

        $this->set('contatosMsg', $contatosMsg);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contatosMsg = $this->ContatosMsgs->newEntity();
        if ($this->request->is('post')) {
            $contatosMsg = $this->ContatosMsgs->patchEntity($contatosMsg, $this->request->getData());
            if ($resultSave = $this->ContatosMsgs->save($contatosMsg)) {
                $id = $resultSave->id; // último id inserido
                $this->Flash->success(__('Mensagem de contato cadastrada com sucesso.'));
                return $this->redirect(['controller' => 'ContatosMsgs', 'action' => 'view', $id]);
            }
            $this->Flash->danger(__('Erro: Mensagem de contato não foi cadastrada com sucesso.'));
        }
        $users = $this->ContatosMsgs->Users->find('list', ['limit' => 200]);
        $contsMsgsSits = $this->ContatosMsgs->ContsMsgsSits->find('list', ['limit' => 200]);
        $this->set(compact('contatosMsg', 'users', 'contsMsgsSits'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contatos Msg id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contatosMsg = $this->ContatosMsgs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contatosMsg = $this->ContatosMsgs->patchEntity($contatosMsg, $this->request->getData());
            if ($this->ContatosMsgs->save($contatosMsg)) {
                $this->Flash->success(__('Mensagem de contato editada com sucesso.'));

                return $this->redirect(['controller' => 'ContatosMsgs', 'action' => 'view', $id]);
            }
            $this->Flash->danger(__('Erro: Mensagem de contato não foi editada com sucesso.'));
        }
        $users = $this->ContatosMsgs->Users->find('list', ['limit' => 200]);
        $contsMsgsSits = $this->ContatosMsgs->ContsMsgsSits->find('list', ['limit' => 200]);
        $this->set(compact('contatosMsg', 'users', 'contsMsgsSits'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contatos Msg id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contatosMsg = $this->ContatosMsgs->get($id);
        if ($this->ContatosMsgs->delete($contatosMsg)) {
            $this->Flash->success(__('Mensagem de contato apagada com sucesso.'));
        } else {
            $this->Flash->danger(__('Erro: Mensagem de contato não foi apagada com sucesso.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
