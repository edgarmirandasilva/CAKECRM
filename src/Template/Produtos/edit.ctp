<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="produtos form col-md-10">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Edit Produto') ?></legend>
        <?php
            echo $this->Form->textarea('descric');
            echo $this->Form->input('valor');
            echo $this->Form->input('tiposoportunidade_id', ['options' => $tiposoportunidade, 'empty' => true]);
            echo $this->Form->input('titulo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
