<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estado'), ['controller' => 'Estado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estado', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Anegocio'), ['controller' => 'Anegocio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anegocio'), ['controller' => 'Anegocio', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="col-md-10">
  <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Clientes</div>
  <table cellpadding="0" cellspacing="0" class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('nif') ?></th>
            <th><?= $this->Paginator->sort('morada') ?></th>
            <th><?= $this->Paginator->sort('codigopostal') ?></th>
            <th><?= $this->Paginator->sort('site') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= $this->Number->format($cliente->id) ?></td>
            <td><?= h($cliente->nome) ?></td>
            <td><?= h($cliente->nif) ?></td>
            <td><?= h($cliente->morada) ?></td>
            <td><?= h($cliente->codigopostal) ?></td>
            <td><?= h($cliente->site) ?></td>
            <td><?= h($cliente->email) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
  </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
