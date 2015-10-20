<div class="col-md-12">
    <div class="page-header"><?php echo $this->Html->image('task.png', ['alt' => 'CakePHP']); ?> Tarefas
    <?php echo $this->Html->link('Nova Tarefa', '/tarefas/add', ['class' => 'btn btn-default btn-lg pull-right']); ?></div>
</div>
<div class="tarefas index col-md-12">
    <table cellpadding="0" cellspacing="0" class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('descri') ?></th>
            <th><?= $this->Paginator->sort('projectos_id') ?></th>
            <th><?= $this->Paginator->sort('users_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= $this->Paginator->sort('taskend') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tarefas as $tarefa): ?>
        <tr>
            <td><?php echo ($tarefa->descri) ;?></td>
            <td>
                <?= $tarefa->has('projecto') ? $this->Html->link($tarefa->projecto->titulo, ['controller' => 'Projectos', 'action' => 'view', $tarefa->projecto->id]) : '' ?>
            </td>
            <td>
                <?= $tarefa->has('user') ? $this->Html->link($tarefa->user->nome, ['controller' => 'Users', 'action' => 'view', $tarefa->user->id]) : '' ?>
            </td>
            <td><?= h($tarefa->created) ?></td>
            <td><?= h($tarefa->modified) ?></td>
            <td><?= h($tarefa->taskend) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $tarefa->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tarefa->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]) ?>
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
