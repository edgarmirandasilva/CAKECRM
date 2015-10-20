<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orcamento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orcamento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Orcamentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['controller' => 'Oportunidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="orcamentos form col-md-10">
    <?= $this->Form->create($orcamento) ?>
    <fieldset>
        <legend><?= __('Edit Orcamento') ?></legend>
        <?php
            echo $this->Form->input('oportunidades_id', ['options' => $oportunidades, 'empty' => true]);
            echo $this->Form->input('produtos_id', ['options' => $produtos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
