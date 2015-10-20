<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Oportunidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Origemvenda'), ['controller' => 'Origemvenda', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Origemvenda'), ['controller' => 'Origemvenda', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opestado'), ['controller' => 'Opestado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opestado'), ['controller' => 'Opestado', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="oportunidades form col-md-10">
    <?= $this->Form->create($oportunidade) ?>
    <fieldset>
        <legend><?= __('Add Oportunidade') ?></legend>
        <?php
            echo $this->Form->input('clientes_id', ['options' => $clientes]);
            echo $this->Form->input('tiposoportunidade_id', ['options' => $tiposoportunidade]);
            echo $this->Form->input('origemvenda_id', ['options' => $origemvenda]);
            echo $this->Form->input('descri');
            echo $this->Form->input('valor');
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('opestado_id', ['options' => $opestado, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
