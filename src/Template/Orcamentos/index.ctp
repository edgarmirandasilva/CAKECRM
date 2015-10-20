<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Orcamento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['controller' => 'Oportunidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="orcamentos index col-md-10">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('oportunidades_id') ?></th>
            <th><?= $this->Paginator->sort('produtos_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orcamentos as $orcamento): ?>
        <tr>
            <td><?= $this->Number->format($orcamento->id) ?></td>
            <td>
                <?= $orcamento->has('oportunidade') ? $this->Html->link($orcamento->oportunidade->id, ['controller' => 'Oportunidades', 'action' => 'view', $orcamento->oportunidade->id]) : '' ?>
            </td>
            <td>
                <?= $orcamento->has('produto') ? $this->Html->link($orcamento->produto->titulo, ['controller' => 'Produtos', 'action' => 'view', $orcamento->produto->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $orcamento->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orcamento->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orcamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orcamento->id)]) ?>
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
