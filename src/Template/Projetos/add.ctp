<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Startups'), ['controller' => 'Startups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Startup'), ['controller' => 'Startups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetos form large-9 medium-8 columns content">
    <?= $this->Form->create($projeto) ?>
    <fieldset>
        <legend><?= __('Add Projeto') ?></legend>
        <?php
            echo $this->Form->control('projeto');
            echo $this->Form->control('descricao');
            echo $this->Form->control('situation_id', ['options' => $situations]);
            echo $this->Form->control('startups_id', ['options' => $startups]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
