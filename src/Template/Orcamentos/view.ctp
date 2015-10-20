<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Orcamento'), ['action' => 'edit', $orcamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orcamento'), ['action' => 'delete', $orcamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orcamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orcamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orcamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['controller' => 'Oportunidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orcamentos view col-md-10">
    <h2><?= h($orcamento->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Oportunidade') ?></h6>
            <p><?= $orcamento->has('oportunidade') ? $this->Html->link($orcamento->oportunidade->id, ['controller' => 'Oportunidades', 'action' => 'view', $orcamento->oportunidade->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Produto') ?></h6>
            <p><?= $orcamento->has('produto') ? $this->Html->link($orcamento->produto->titulo, ['controller' => 'Produtos', 'action' => 'view', $orcamento->produto->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($orcamento->id) ?></p>
        </div>
    </div>
</div>
