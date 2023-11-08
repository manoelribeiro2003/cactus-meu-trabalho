<?= $this->Form->create($user, ['class' => 'form-signin']) ?>

<h1 class="h3 mb-3 font-weight-normal">Alterar a Senha</h1>

<?= $this->Flash->render(); ?>

<div class="form-group">
    <label>Senha</label>
    <?= $this->Form->control('password', ['class'=> 'form-control', 'placeholder' => 'Digite a senha', 'label' => false]) ?>
</div>

<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-lg btn-danger btn-block']) ?>

<p class="text-center">
	<?= $this->Html->link(__('Clique aqui'), ['controller' => 'Users', 'action' => 'login']) ?> para acessar
</p>

<?= $this->Form->end() ?>
