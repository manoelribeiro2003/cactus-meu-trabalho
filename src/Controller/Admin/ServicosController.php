<?php
namespace App\Controller\admin;

use App\Controller\AppController;

/**
 * Servicos Controller
 *
 * @property \App\Model\Table\ServicosTable $Servicos
 *
 * @method \App\Model\Entity\Servico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServicosController extends AppController
{    

    /**
     * View method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servico = $this->Servicos->get($id, [
            'contain' => []
        ]);

        $this->set('servico', $servico);
    }

    
    /**
     * Edit method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servico = $this->Servicos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servico = $this->Servicos->patchEntity($servico, $this->request->getData());
            if ($this->Servicos->save($servico)) {
                ;
                $this->Flash->success(__('Serviço editado com sucesso'));
                return $this->redirect(['controller' => 'Servicos', 'action' => 'view', '1']);
            }else{
                $this->Flash->danger(__('Erro: Serviço não foi editada com sucesso.'));
            }
        }
        $this->set(compact('servico'));
    }
}
