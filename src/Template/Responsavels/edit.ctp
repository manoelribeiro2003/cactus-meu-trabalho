<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsavel $responsavel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $responsavel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $responsavel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Responsavels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsavels form large-9 medium-8 columns content">
    <?= $this->Form->create($responsavel) ?>
    <fieldset>
        <legend><?= __('Edit Responsavel') ?></legend>
        <?php
            echo $this->Form->control('responsavel');
            echo $this->Form->control('telefone');
            echo $this->Form->control('email');
            echo $this->Form->control('situation_id', ['options' => $situations]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
