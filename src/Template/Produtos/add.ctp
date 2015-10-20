<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="produtos form col-md-10">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Add Produto') ?></legend>
        <?php
            echo $this->Form->input('descric', array('type' => 'textarea'));
            echo $this->Form->input('valor');
            echo $this->Form->input('tiposoportunidade_id', ['options' => $tiposoportunidade, 'empty' => true]);
            echo $this->Form->input('titulo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
