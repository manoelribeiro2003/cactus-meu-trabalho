<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Responsavels Controller
 *
 * @property \App\Model\Table\ResponsavelsTable $Responsavels
 *
 * @method \App\Model\Entity\Responsavel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResponsavelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Situations']
        ];
        $responsavels = $this->paginate($this->Responsavels);

        $this->set(compact('responsavels'));
    }

    /**
     * View method
     *
     * @param string|null $id Responsavel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $responsavel = $this->Responsavels->get($id, [
            'contain' => ['Situations']
        ]);

        $this->set('responsavel', $responsavel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $responsavel = $this->Responsavels->newEntity();
        if ($this->request->is('post')) {
            $responsavel = $this->Responsavels->patchEntity($responsavel, $this->request->getData());
            if ($this->Responsavels->save($responsavel)) {
                $this->Flash->success(__('The responsavel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsavel could not be saved. Please, try again.'));
        }
        $situations = $this->Responsavels->Situations->find('list', ['limit' => 200]);
        $this->set(compact('responsavel', 'situations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Responsavel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $responsavel = $this->Responsavels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $responsavel = $this->Responsavels->patchEntity($responsavel, $this->request->getData());
            if ($this->Responsavels->save($responsavel)) {
                $this->Flash->success(__('The responsavel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsavel could not be saved. Please, try again.'));
        }
        $situations = $this->Responsavels->Situations->find('list', ['limit' => 200]);
        $this->set(compact('responsavel', 'situations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Responsavel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $responsavel = $this->Responsavels->get($id);
        if ($this->Responsavels->delete($responsavel)) {
            $this->Flash->success(__('The responsavel has been deleted.'));
        } else {
            $this->Flash->error(__('The responsavel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
