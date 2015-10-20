<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $anegocio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $anegocio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Anegocio'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="col-md-10">
    <?= $this->Form->create($anegocio) ?>
    <fieldset>
        <legend><?= __('Edit Anegocio') ?></legend>
        <?php
            echo $this->Form->input('area');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), array('class' => ('btn btn-default btn-lg pull-right'))) ?>
    <?= $this->Form->end() ?>
</div>
