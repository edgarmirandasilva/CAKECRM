<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Projectos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="projectos form col-md-10">
    <?= $this->Form->create($projecto) ?>
    <fieldset>
        <legend><?= __('Add Projecto') ?></legend>
        <?php
            echo $this->Form->input('projectend');
            echo $this->Form->input('descri');
            echo $this->Form->input('estado');
            echo $this->Form->input('clientes_id', ['options' => $clientes]);
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('titulo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
