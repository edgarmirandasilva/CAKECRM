<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tarefa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tarefas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projectos'), ['controller' => 'Projectos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projecto'), ['controller' => 'Projectos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Progresso'), ['controller' => 'Progresso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Progresso'), ['controller' => 'Progresso', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="tarefas form col-md-10">
    <?= $this->Form->create($tarefa) ?>
    <fieldset>
        <legend><?= __('Edit Tarefa') ?></legend>
        <?php
            echo $this->Form->input('taskend');
            echo $this->Form->input('descri');
            echo $this->Form->input('projectos_id', ['options' => $projectos]);
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('obs');
            echo $this->Form->input('progresso_id', ['options' => $progresso, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
