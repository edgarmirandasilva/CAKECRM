<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('Edit Progresso'), ['action' => 'edit', $progresso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Progresso'), ['action' => 'delete', $progresso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $progresso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Progresso'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Progresso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="progresso view col-md-10">
    <h2><?= h($progresso->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Estados') ?></h6>
            <p><?= h($progresso->estados) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($progresso->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Tarefas') ?></h4>
    <?php if (!empty($progresso->tarefas)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Taskend') ?></th>
            <th><?= __('Descri') ?></th>
            <th><?= __('Projectos Id') ?></th>
            <th><?= __('Users Id') ?></th>
            <th><?= __('Obs') ?></th>
            <th><?= __('Progresso Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($progresso->tarefas as $tarefas): ?>
        <tr>
            <td><?= h($tarefas->id) ?></td>
            <td><?= h($tarefas->created) ?></td>
            <td><?= h($tarefas->modified) ?></td>
            <td><?= h($tarefas->taskend) ?></td>
            <td><?= h($tarefas->descri) ?></td>
            <td><?= h($tarefas->projectos_id) ?></td>
            <td><?= h($tarefas->users_id) ?></td>
            <td><?= h($tarefas->obs) ?></td>
            <td><?= h($tarefas->progresso_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tarefas', 'action' => 'view', $tarefas->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tarefas', 'action' => 'edit', $tarefas->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tarefas', 'action' => 'delete', $tarefas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefas->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
