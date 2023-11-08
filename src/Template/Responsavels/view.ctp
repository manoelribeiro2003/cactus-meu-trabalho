<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsavel $responsavel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Responsavel'), ['action' => 'edit', $responsavel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Responsavel'), ['action' => 'delete', $responsavel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsavel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Responsavels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsavel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="responsavels view large-9 medium-8 columns content">
    <h3><?= h($responsavel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($responsavel->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($responsavel->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($responsavel->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation') ?></th>
            <td><?= $responsavel->has('situation') ? $this->Html->link($responsavel->situation->nome_situacao, ['controller' => 'Situations', 'action' => 'view', $responsavel->situation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($responsavel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($responsavel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($responsavel->modified) ?></td>
        </tr>
    </table>
</div>
