<main role="main">
  <div class="jumbotron contato">
    <div class="container">
      <h2 class="display-4 text-center contato-titulo">Contato</h2>
      <?= $this->Flash->render() ?>
      <?= $this->Form->create($contatoMsg) ?>
      <?= $this->Form->control('conts_msgs_sit_id',['type' => 'hidden', 'value' => 2, 'label' => false]) ?>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label><span class="text-danger">*</span> Nome</label>
            <?= $this->Form->control('nome',['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]) ?>
          </div>
          <div class="form-group col-md-6">
            <label><span class="text-danger">*</span> Email</label>
            <?= $this->Form->control('email',['class' => 'form-control', 'placeholder' => 'Seu melhor e-mail', 'label' => false]) ?>
          </div>
        </div>
        <div class="form-group">
          <label><span class="text-danger">*</span> Assunto</label>
          <?= $this->Form->control('assunto',['class' => 'form-control', 'placeholder' => 'Assunto da mensagem', 'label' => false]) ?>
        </div>

        <div class="form-group">
          <label><span class="text-danger">*</span> Mensagem</label>
          <?= $this->Form->control('mensagem',['class' => 'form-control', 'placeholder' => 'Conteúdo da mensagem', 'rows' => 4, 'label' => false]) ?>
        </div>

        <p>
            <span class="text-danger">* </span>Campo obrigatório
        </p>
        <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-info']) ?>
      <?= $this->Form->end() ?>

      <hr class="featurette-divider">
    </div>
  </div>
</main>