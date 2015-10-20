<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Receita'), ['action' => 'edit', $receita->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Receita'), ['action' => 'delete', $receita->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receita->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Receitas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Receita'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="receitas view col-md-10">
    <h2><?= h($receita->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Cliente') ?></h6>
            <p><?= $receita->has('cliente') ? $this->Html->link($receita->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $receita->cliente->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Estadorec') ?></h6>
            <p><?= h($receita->estadorec) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($receita->id) ?></p>
            <h6 class="subheader"><?= __('Valor') ?></h6>
            <p><?= $this->Number->format($receita->valor) ?></p>
        </div>
    </div>
</div>
