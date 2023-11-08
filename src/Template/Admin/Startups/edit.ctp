<div class="startups form large-9 medium-8 columns content">
    <?= $this->Form->create($startup) ?>
    <fieldset>
        <legend><?= __('Edit Startup') ?></legend>
        <?php
            echo $this->Form->control('startup',['class'=>'form-control']);
            echo $this->Form->control('situation_id', ['class'=>'form-control','options' => $situations]);
            echo $this->Form->control('responsavels_id', ['class'=>'form-control','options' => $responsavels]);
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button(__('Editar'),['class' => 'btn btn-outline-primary btn-sm']) ?>
    <?= $this->Form->end() ?>
</div>
