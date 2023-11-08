<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsavel[]|\Cake\Collection\CollectionInterface $responsavels
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Responsavel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsavels index large-9 medium-8 columns content">
    <h3><?= __('Responsavels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($responsavels as $responsavel): ?>
            <tr>
                <td><?= $this->Number->format($responsavel->id) ?></td>
                <td><?= h($responsavel->responsavel) ?></td>
                <td><?= h($responsavel->telefone) ?></td>
                <td><?= h($responsavel->email) ?></td>
                <td><?= $responsavel->has('situation') ? $this->Html->link($responsavel->situation->nome_situacao, ['controller' => 'Situations', 'action' => 'view', $responsavel->situation->id]) : '' ?></td>
                <td><?= h($responsavel->created) ?></td>
                <td><?= h($responsavel->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $responsavel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $responsavel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $responsavel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsavel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
