<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Mensagens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projectos'), ['controller' => 'Projectos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projecto'), ['controller' => 'Projectos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="mensagens form col-md-10">
    <?= $this->Form->create($mensagen) ?>
    <fieldset>
        <legend><?= __('Add Mensagen') ?></legend>
        <?php
            echo $this->Form->input('users_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('mensagem');
            echo $this->Form->input('projectos_id', ['options' => $projectos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
