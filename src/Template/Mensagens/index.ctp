<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Mensagen'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projectos'), ['controller' => 'Projectos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projecto'), ['controller' => 'Projectos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="mensagens index col-md-10">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('users_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('mensagem') ?></th>
            <th><?= $this->Paginator->sort('projectos_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($mensagens as $mensagen): ?>
        <tr>
            <td><?= $this->Number->format($mensagen->id) ?></td>
            <td>
                <?= $mensagen->has('user') ? $this->Html->link($mensagen->user->nome, ['controller' => 'Users', 'action' => 'view', $mensagen->user->id]) : '' ?>
            </td>
            <td><?= h($mensagen->created) ?></td>
            <td><?= h($mensagen->mensagem) ?></td>
            <td>
                <?= $mensagen->has('projecto') ? $this->Html->link($mensagen->projecto->titulo, ['controller' => 'Projectos', 'action' => 'view', $mensagen->projecto->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $mensagen->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mensagen->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mensagen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mensagen->id)]) ?>
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
