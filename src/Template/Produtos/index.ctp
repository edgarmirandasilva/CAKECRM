<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="produtos index col-md-10">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('descric') ?></th>
            <th><?= $this->Paginator->sort('valor') ?></th>
            <th><?= $this->Paginator->sort('tiposoportunidade_id') ?></th>
            <th><?= $this->Paginator->sort('titulo') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?php echo $produto->descric ?></td>
            <td><?= $this->Number->format($produto->valor) ?> €</td>
            <td>
                <?= $produto->has('tiposoportunidade') ? $this->Html->link($produto->tiposoportunidade->tipos, ['controller' => 'Tiposoportunidade', 'action' => 'view', $produto->tiposoportunidade->id]) : '' ?>
            </td>
            <td><?= h($produto->titulo) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $produto->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
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
