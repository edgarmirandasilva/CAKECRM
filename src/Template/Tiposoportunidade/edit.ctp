<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposoportunidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposoportunidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tiposoportunidade'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['controller' => 'Oportunidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="tiposoportunidade col-md-10">
    <?= $this->Form->create($tiposoportunidade) ?>
    <fieldset>
        <legend><?= __('Edit Tiposoportunidade') ?></legend>
        <?php
            echo $this->Form->input('tipos');
            echo $this->Form->input('descri');
            echo $this->Form->input('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), array('class' => ('btn btn-default btn-lg pull-right'))) ?>
    <?= $this->Form->end() ?>
</div>
