<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('New Progresso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="progresso index col-md-10">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('estados') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($progresso as $progresso): ?>
        <tr>
            <td><?= $this->Number->format($progresso->id) ?></td>
            <td><?= h($progresso->estados) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $progresso->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $progresso->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $progresso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $progresso->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
