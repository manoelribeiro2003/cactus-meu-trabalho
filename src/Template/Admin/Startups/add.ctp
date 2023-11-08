<div class="startups form large-9 medium-8 columns content">
    <?= $this->Form->create($startup) ?>
    <fieldset>
        <legend><?= __('Cadastrar Startup') ?></legend>
        <?php
            echo $this->Form->control('responsavel_id', ['class'=>'form-control','options' => $responsavels]);
            echo $this->Form->control('startup',['class'=>'form-control']);
            echo $this->Form->control('descricao',['class'=>'form-control']);
            echo $this->Form->control('slug',['class'=>'form-control']);
            echo $this->Form->control('qnt_acesso',['class'=>'form-control']);
            echo $this->Form->control('logo_url',['class'=>'form-control']);
            echo $this->Form->control('situation_id', ['class'=>'form-control','options' => $situations]);
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button(__('Cadastrar'),['class' => 'btn btn-outline-primary btn-sm']) ?>
    <?= $this->Form->end() ?>
</div>
