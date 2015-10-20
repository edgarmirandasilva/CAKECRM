<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('New Tiposoportunidade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['controller' => 'Oportunidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="tiposoportunidade index col-md-10">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('tipos') ?></th>
            <th><?= $this->Paginator->sort('descri') ?></th>
            <th><?= $this->Paginator->sort('valor') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tiposoportunidade as $tiposoportunidade): ?>
        <tr>
            <td><?= $this->Number->format($tiposoportunidade->id) ?></td>
            <td><?= h($tiposoportunidade->tipos) ?></td>
            <td><?= h($tiposoportunidade->descri) ?></td>
            <td><?= $this->Number->format($tiposoportunidade->valor) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $tiposoportunidade->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposoportunidade->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposoportunidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposoportunidade->id)]) ?>
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
