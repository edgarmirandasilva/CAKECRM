<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tarefa'), ['action' => 'edit', $tarefa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tarefa'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tarefas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tarefa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projectos'), ['controller' => 'Projectos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projecto'), ['controller' => 'Projectos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Progresso'), ['controller' => 'Progresso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Progresso'), ['controller' => 'Progresso', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tarefas view col-md-10">
    <h2><?= h($tarefa->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descri') ?></h6>
            <p><?= h($tarefa->descri) ?></p>
            <h6 class="subheader"><?= __('Projecto') ?></h6>
            <p><?= $tarefa->has('projecto') ? $this->Html->link($tarefa->projecto->titulo, ['controller' => 'Projectos', 'action' => 'view', $tarefa->projecto->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $tarefa->has('user') ? $this->Html->link($tarefa->user->nome, ['controller' => 'Users', 'action' => 'view', $tarefa->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Obs') ?></h6>
            <p><?= h($tarefa->obs) ?></p>
            <h6 class="subheader"><?= __('Progresso') ?></h6>
            <p><?= $tarefa->has('progresso') ? $this->Html->link($tarefa->progresso->estados, ['controller' => 'Progresso', 'action' => 'view', $tarefa->progresso->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($tarefa->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($tarefa->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($tarefa->modified) ?></p>
            <h6 class="subheader"><?= __('Taskend') ?></h6>
            <p><?= h($tarefa->taskend) ?></p>
        </div>
    </div>
</div>
