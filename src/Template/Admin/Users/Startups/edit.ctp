<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Startup $startup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $startup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $startup->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Startups'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Responsavels'), ['controller' => 'Responsavels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsavel'), ['controller' => 'Responsavels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="startups form large-9 medium-8 columns content">
    <?= $this->Form->create($startup) ?>
    <fieldset>
        <legend><?= __('Edit Startup') ?></legend>
        <?php
            echo $this->Form->control('startup');
            echo $this->Form->control('situation_id', ['options' => $situations]);
            echo $this->Form->control('responsavels_id', ['options' => $responsavels]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
