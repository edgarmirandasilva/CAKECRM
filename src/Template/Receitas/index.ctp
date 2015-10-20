<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Receita'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="receitas index col-md-10">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('valor') ?></th>
            <th><?= $this->Paginator->sort('clientes_id') ?></th>
            <th><?= $this->Paginator->sort('estadorec') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($receitas as $receita): ?>
        <tr>
            <td><?= $this->Number->format($receita->id) ?></td>
            <td><?= $this->Number->format($receita->valor) ?></td>
            <td>
                <?= $receita->has('cliente') ? $this->Html->link($receita->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $receita->cliente->id]) : '' ?>
            </td>
            <td><?= h($receita->estadorec) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $receita->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $receita->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $receita->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receita->id)]) ?>
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
