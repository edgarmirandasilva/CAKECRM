<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('New Origemvenda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['controller' => 'Oportunidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="origemvenda index col-md-10">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('origens') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($origemvenda as $origemvenda): ?>
        <tr>
            <td><?= $this->Number->format($origemvenda->id) ?></td>
            <td><?= h($origemvenda->origens) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $origemvenda->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $origemvenda->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $origemvenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $origemvenda->id)]) ?>
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
