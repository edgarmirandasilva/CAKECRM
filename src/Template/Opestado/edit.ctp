<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $opestado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $opestado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Opestado'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['controller' => 'Oportunidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="opestado form col-md-10">
    <?= $this->Form->create($opestado) ?>
    <fieldset>
        <legend><?= __('Edit Opestado') ?></legend>
        <?php
            echo $this->Form->input('opestado');
            echo $this->Form->input('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
