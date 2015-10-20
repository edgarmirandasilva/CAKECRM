<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Opestado'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['controller' => 'Oportunidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="opestado index col-md-10">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('opestado') ?></th>
            <th><?= $this->Paginator->sort('order') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($opestado as $opestado): ?>
        <tr>
            <td><?= $this->Number->format($opestado->id) ?></td>
            <td><?= h($opestado->opestado) ?></td>
            <td><?= $this->Number->format($opestado->order) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $opestado->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opestado->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opestado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opestado->id)]) ?>
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
