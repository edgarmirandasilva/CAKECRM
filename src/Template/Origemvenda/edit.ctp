<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $origemvenda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $origemvenda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Origemvenda'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['controller' => 'Oportunidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="origemvenda col-md-10">
    <?= $this->Form->create($origemvenda) ?>
    <fieldset>
        <legend><?= __('Edit Origemvenda') ?></legend>
        <?php
            echo $this->Form->input('origens');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), array('class' => ('btn btn-default btn-lg pull-right'))) ?>
    <?= $this->Form->end() ?>
</div>
