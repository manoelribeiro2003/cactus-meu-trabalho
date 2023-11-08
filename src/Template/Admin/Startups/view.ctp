<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Startup</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Listar'), ['controller' => 'Startups', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>

            <?= $this->Html->link(__('Editar'), ['controller' => 'Startups', 'action' => 'edit', $startup->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>

            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Startups', 'action' => 'delete', $startup->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Relamente deseja apagar o carousel # {0}?', $startup->id)]) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                <?= $this->Html->link(__('Listar'), ['controller' => 'Startups', 'action' => 'index'], ['class' => 'dropdown-item']) ?>

                <?= $this->Html->link(__('Editar'), ['controller' => 'Startups', 'action' => 'edit', $startup->id], ['class' => 'dropdown-item']) ?>

                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Startups', 'action' => 'delete', $startup->id], ['class' => 'dropdown-item', 'confirm' => __('Relamente deseja apagar o carousel # {0}?', $startup->id)]) ?>                                    
            </div>
        </div>
    </div>
</div><hr>
<?= $this->Flash->render() ?>
<dl class="row">
    <dt class="col-sm-3">Imagem</dt>
    <dd class="col-sm-9">
        <div class="img-perfil">
            <?php if(!empty($startup->imagem)){ ?>
                <?= $this->Html->image('../files/carousel/'.$startup->id.'/'.$startup->imagem, ['width' => '250', 'height' => '120']) ?>&nbsp;
                
                <div class="edit">
                    <?= $this->Html->link(
                        '<i class="fas fa-pencil-alt"></i>',
                        [
                            'controller' => 'Startups',
                            'action' => 'alterarFotoStartup',
                            $startup->id
                        ],
                        [
                            'escape'=> false
                        ]
                    ); ?>
                </div>

            <?php } else { ?>
                <?= $this->Html->image('../files/carousel/preview_img.jpg', ['width' => '250', 'height' => '120']) ?>&nbsp;

                <div class="edit">
                    <?= $this->Html->link(
                        '<i class="fas fa-pencil-alt"></i>',
                        [
                            'controller' => 'Startups',
                            'action' => 'alterarFotoStartup',
                            $startup->id
                        ],
                        [
                            'escape'=> false
                        ]
                    ); ?>
                </div>
            <?php } ?>
        </div>        
    </dd>

    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($startup->id) ?></dd>

    <dt class="col-sm-3">Responsavel ID</dt>
    <dd class="col-sm-9"><?= h($startup->responsavel_id) ?></dd>

    <dt class="col-sm-3">Startup</dt>
    <dd class="col-sm-9"><?= h($startup->startup) ?></dd>

    <dt class="col-sm-3">Descrição</dt>
    <dd class="col-sm-9"><?= h($startup->descricao) ?></dd>

    <dt class="col-sm-3">Slug</dt>
    <dd class="col-sm-9"><?= h($startup->slug) ?></dd>

    <dt class="col-sm-3">Quantidade de acesso</dt>
    <dd class="col-sm-9"><?= h($startup->qnt_acesso) ?></dd>

    <dt class="col-sm-3">Logo URL</dt>
    <dd class="col-sm-9"><?= h($startup->logo_url) ?></dd>

    <dt class="col-sm-3">Situação ID</dt>
    <dd class="col-sm-9"><?= h($startup->situation_id) ?></dd>

    <dt class="col-sm-3">Created</dt>
    <dd class="col-sm-9"><?= h($startup->created) ?></dd>

    <dt class="col-sm-3 text-truncate">Modified</dt>
    <dd class="col-sm-9"><?= h($startup->modified) ?></dd>

</dl>