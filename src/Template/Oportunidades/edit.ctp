<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $oportunidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $oportunidade->id)]
            )
        ?></li>
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
        <legend><?= __('Edit Oportunidade') ?></legend>
        <?php
            echo $this->Form->input('clientes_id', ['options' => $clientes]);
            echo $this->Form->input('tiposoportunidade_id', ['options' => $tiposoportunidade]);
            echo $this->Form->input('origemvenda_id', ['options' => $origemvenda]);
            echo $this->Form->input('descri');
            echo $this->Form->input('valor');
            echo $this->Form->input('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), array('class' => ('btn btn-default btn-lg pull-right'))) ?>
    <?= $this->Form->end() ?>
</div>
