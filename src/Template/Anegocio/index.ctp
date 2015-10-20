<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('New Anegocio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="anegocio index col-md-10">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('area') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($anegocio as $anegocio): ?>
        <tr>
            <td><?= $this->Number->format($anegocio->id) ?></td>
            <td><?= h($anegocio->area) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $anegocio->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $anegocio->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $anegocio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anegocio->id)]) ?>
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
