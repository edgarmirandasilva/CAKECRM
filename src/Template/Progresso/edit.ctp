<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $progresso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $progresso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Progresso'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="progresso col-md-10">
    <?= $this->Form->create($progresso) ?>
    <fieldset>
        <legend><?= __('Edit Progresso') ?></legend>
        <?php
            echo $this->Form->input('estados');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), array('class' => ('btn btn-default btn-lg pull-right'))) ?>
    <?= $this->Form->end() ?>
</div>
