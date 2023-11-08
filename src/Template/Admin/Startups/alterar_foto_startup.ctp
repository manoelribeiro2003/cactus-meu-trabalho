<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Imagem da StartUp</h2>
    </div>
        <div class="p-2">
            <span class="d-none d-md-block">
                <?= $this->Html->link(__('Listar'), ['controller' => 'Startups', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>

                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Startups', 'action' => 'view', $startup->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Startups', 'action' => 'delete', $startup->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Relamente deseja apagar o slide do carousel # {0}?', $startup->id)]) ?>
            </span>
            <div class="dropdown d-block d-md-none">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                    <?= $this->Html->link(__('Listar'), ['controller' => 'Startups', 'action' => 'index'], ['class' => 'dropdown-item']) ?>

                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Startups', 'action' => 'view', $startup->id], ['class' => 'dropdown-item']) ?>

                    <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Startups', 'action' => 'delete', $startup->id], ['class' => 'dropdown-item', 'confirm' => __('Relamente deseja apagar o slide do carousel # {0}?', $startup->id)]) ?>                                    
                </div>
            </div>
        </div>
</div><hr>
<?= $this->Flash->render() ?>

<?= $this->Form->create($startup, ['enctype' => 'multipart/form-data']) ?>

<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Foto (1920x846)</label>
        <?= $this->Form->control('imagem', ['type' => 'file', 'label' => false, 'onchange'=>'previewImagem()']) ?>
    </div>

    <div class="form-group col-md-6">
        <?php
        if(($startup->logo_url !== null) OR (!empty($startup->logo_url))){
            $imagem_antiga = '../../../files/startups/'.$startup->id.'/'.$startup->logo_url;
        }else{
            $imagem_antiga = '../../../files/startups/preview_img.jpg';
        }
        ?>

        <img src='<?= $imagem_antiga ?>' alt='<?= $startup->name ?>' id='preview-img' class='img-thumbnail' style="width: 250px; height: 120px;">
    </div>
</div>

<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
<?= $this->Form->end() ?>