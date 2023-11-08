<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Depoimentos Controller
 *
 * @property \App\Model\Table\DepoimentosTable $Depoimentos
 *
 * @method \App\Model\Entity\Depoimento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepoimentosController extends AppController
{

    /**
     * View method
     *
     * @param string|null $id Depoimento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $depoimento = $this->Depoimentos->get($id, [
            'contain' => []
        ]);

        $this->set('depoimento', $depoimento);
    }

    /**
     * Edit method
     *
     * @param string|null $id Depoimento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $depoimento = $this->Depoimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $depoimento = $this->Depoimentos->patchEntity($depoimento, $this->request->getData());
            if ($this->Depoimentos->save($depoimento)) {
                $this->Flash->success(__('Vídeo editado com sucesso'));
                return $this->redirect(['controller' => 'Depoimentos', 'action' => 'view', '1']);
            }else{
                $this->Flash->danger(__('Erro: Vídeo não foi editado com sucesso.'));
            }
        }
        $this->set(compact('depoimento'));
    }

}
