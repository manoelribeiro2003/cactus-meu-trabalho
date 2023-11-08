<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AutorsSobs Controller
 *
 * @property \App\Model\Table\AutorsSobsTable $AutorsSobs
 *
 * @method \App\Model\Entity\AutorsSob[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutorsSobsController extends AppController
{

    /**
     * Edit method
     *
     * @param string|null $id Autors Sob id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autorsSob = $this->AutorsSobs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autorsSob = $this->AutorsSobs->patchEntity($autorsSob, $this->request->getData());
            if ($this->AutorsSobs->save($autorsSob)) {
                $this->Flash->success(__('Sobre autor editado com sucesso'));
                //return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Erro: Sobre autor não foi editado com sucesso'));
            }            
        }
        $situations = $this->AutorsSobs->Situations->find('list', ['limit' => 200]);
        $this->set(compact('autorsSob', 'situations'));
    }

}
