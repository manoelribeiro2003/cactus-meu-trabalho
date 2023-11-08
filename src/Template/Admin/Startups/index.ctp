<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Listar Startpus</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(__('Cadastrar'),['controller' => 'Startups','action' => 'add'], ['class' => 'btn btn-outline-success btn-sm']);
        ?>
    </div>
</div>
<?= $this->Flash->render() ?>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>                
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($startups as $startup): ?>
                <tr>
                    <td><?= $this->Number->format($startup->id) ?></td>
                    <td><?= h($startup->startup) ?></td>
                    <td>
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Startups', 'action' => 'view', $startup->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

<?= $this->Html->link(__('Editar'), ['controller' => 'Startups', 'action' => 'edit', $startup->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>

<?= $this->Form->postLink(__('Apagar'), ['controller' => 'Startups', 'action' => 'delete', $startup->id], ['class' =>'btn btn-outline-danger btn-sm', 'confirm' => __('Relamente deseja apagar o carousel # {0}?', $startup->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>