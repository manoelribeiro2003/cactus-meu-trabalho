<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Model\Entity\Startup;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Database\Expression\QueryExpression;

/**
 * Startups Controller
 *
 * @property \App\Model\Table\StartupsTable $Startups
 *
 * @method \App\Model\Entity\Startup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StartupsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index, view']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       $startupTable = TableRegistry::get('Startups');

        $this->paginate = [
            'limit' => 6,
            'conditions' => [
                'Startups.situation_id = ' => 1
            ],
            'order' => [
                'Startups.id' => 'desc',
            ]
        ];
        $startups = $this->paginate($startupTable);

        $startupUltimos = $startupTable->getStartupUltimos();
        $startupDestaques = $startupTable->getStartupDestaques();

        $responsavelTable = TableRegistry::get('Responsavels');
        $responsavel = $responsavelTable->getVerResponsavel();

        $redeSociaTable = TableRegistry::get('RedesSocias');
        $redeSocias = $redeSociaTable->getListRedeSocias();  

        $this->set(compact('startups', 'startupUltimos','startupDestaques', 'responsavel', 'redeSocias'));
    }

    /**
     * View method
     *
     * @param string|null $id Startup id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $startupTable = TableRegistry::get('Startups');
        $startup = $startupTable->getVerStartUp($id);
        if($startup){
            $startupAnt = $startupTable->getStartupAnt($startup->id);
            $startupProx = $startupTable->getStartupProx($startup->id);

            $expression = new QueryExpression('qnt_acesso = qnt_acesso + 1');
            $startupTable->updateAll([$expression], ['Startups.id' => $startup->id]);

        }
        $startupUltimos = $startupTable->getStartupUltimos();
        $startupDestaques = $startupTable->getStartupDestaques(); 

        // $responsavelTable = TableRegistry::get('Respopnsavels');
        // $responsavel = $responsavelTable->getVerResponsavel();     

        $responsavelTable = TableRegistry::get('Respopnsavels');
        $responsavel = [];     

        $redeSociaTable = TableRegistry::get('RedesSocias');
        $redeSocias = $redeSociaTable->getListRedeSocias();   

        $this->set(compact('startup', 'startupAnt','startupProx', 'startupUltimos', 'startupDestaques', 'autorSob', 'redeSocias'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $startup = $this->Startups->newEntity();
        if ($this->request->is('post')) {
            $startup = $this->Startups->patchEntity($startup, $this->request->getData());
            if ($this->Startups->save($startup)) {
                $this->Flash->success(__('The startup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The startup could not be saved. Please, try again.'));
        }
        $responsavels = $this->Startups->Responsavels->find('list', ['limit' => 200]);
        $situations = $this->Startups->Situations->find('list', ['limit' => 200]);
        $this->set(compact('startup', 'responsavels', 'situations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Startup id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $startup = $this->Startups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $startup = $this->Startups->patchEntity($startup, $this->request->getData());
            if ($this->Startups->save($startup)) {
                $this->Flash->success(__('The startup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The startup could not be saved. Please, try again.'));
        }
        $situations = $this->Startups->Situations->find('list', ['limit' => 200]);
        $responsavels = $this->Startups->Responsavels->find('list', ['limit' => 200]);
        $this->set(compact('startup', 'situations', 'responsavels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Startup id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $startup = $this->Startups->get($id);
        if ($this->Startups->delete($startup)) {
            $this->Flash->success(__('The startup has been deleted.'));
        } else {
            $this->Flash->error(__('The startup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function alterarFotoStartup($id = null)
    {
        $startup = $this->Startups->get($id);
        $imagemAntiga = $startup->logo_url;

        if($this->request->is(['patch', 'post', 'put'])){
            $startup = $this->Startups->newEntity();
            $startup = $this->Startups->patchEntity($startup, $this->request->getData());
            if(!$startup->errors()){
                $startup->logo_url = $this->Startups->slugUploadImgRed($this->request->getData()['imagem']['name']);
                $startup->id = $id;
                if($this->Startups->save($startup)){
                    $destino = WWW_ROOT. "files" . DS . "startups" . DS . $id . DS;                
                    $imgUpload = $this->request->getData()['imagem'];
                    $imgUpload['name'] = $startup->logo_url;
                    
                    if($this->Startups->uploadImgRed($imgUpload, $destino, 1820, 846)){
                        $this->Startups->deleteFile($destino, $imagemAntiga, $startup->logo_url);
                        $this->Flash->success(__('Imagem editada com sucesso'));
                        return $this->redirect(['controller' => 'Startups', 'action' => 'view', $id]);
                    }else{
                        $startup->logo_url = $imagemAntiga;
                        $this->Users->save($startup);
                        $this->Flash->danger(__('Erro: Imagem não foi editada com sucesso. Erro ao realizar o upload'));
                    }
                }else{
                    $this->Flash->danger(__('Erro: Imagem não foi editada com sucesso.'));
                }
            }else{
                $this->Flash->danger(__('Erro: Imagem não foi editada com sucesso.'));
            }          
            
        }  

        $this->set(compact('startup'));
    }
}
