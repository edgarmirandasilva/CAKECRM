<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $receita->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $receita->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Receitas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="receitas form col-md-10">
    <?= $this->Form->create($receita) ?>
    <fieldset>
        <legend><?= __('Edit Receita') ?></legend>
        <?php
            echo $this->Form->input('valor');
            echo $this->Form->input('clientes_id', ['options' => $clientes, 'empty' => true]);
            echo $this->Form->input('estadorec');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
