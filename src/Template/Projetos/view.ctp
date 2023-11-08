<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projeto'), ['action' => 'edit', $projeto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projeto'), ['action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Startups'), ['controller' => 'Startups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Startup'), ['controller' => 'Startups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetos view large-9 medium-8 columns content">
    <h3><?= h($projeto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= h($projeto->projeto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation') ?></th>
            <td><?= $projeto->has('situation') ? $this->Html->link($projeto->situation->nome_situacao, ['controller' => 'Situations', 'action' => 'view', $projeto->situation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Startup') ?></th>
            <td><?= $projeto->has('startup') ? $this->Html->link($projeto->startup->id, ['controller' => 'Startups', 'action' => 'view', $projeto->startup->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projeto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projeto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projeto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($projeto->descricao)); ?>
    </div>
</div>
