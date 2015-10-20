<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('List Oportunidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Origemvenda'), ['controller' => 'Origemvenda', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Origemvenda'), ['controller' => 'Origemvenda', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="oportunidades col-md-10">
    <?= $this->Form->create($oportunidade) ?>
    <fieldset>
        <legend><?= __('Add Oportunidade') ?></legend>
        <?php
            echo $this->Form->input('clientes_id', array('options' => $clientes, 'empty' => true,'class' => 'form-control'));
            echo $this->Form->input('tiposoportunidade_id', array('options' => $tiposoportunidade, 'empty' => true,'class' => 'form-control'));
            echo $this->Form->input('origemvenda_id', array('options' => $origemvenda, 'empty' => true,'class' => 'form-control'));
            echo $this->Form->input('opestado_id', array('options' => $opestado, 'empty' => true,'class' => 'form-control'));
            echo $this->Form->input('descri', array('class' => ('form-control')));
            echo $this->Form->input('users_id', array('options' => $users, 'empty' => true,'class' => 'form-control'));
        ?>
    </fieldset>
    <hr>
    <?= $this->Form->button(__('Guardar'), array('class' => ('btn btn-default btn-lg pull-right'))) ?>
    <?= $this->Form->end() ?>
</div>
