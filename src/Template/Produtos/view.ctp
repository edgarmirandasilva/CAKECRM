<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="produtos view col-md-10">
    <h2><?= h($produto->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descric') ?></h6>
            <p><?= h($produto->descric) ?></p>
            <h6 class="subheader"><?= __('Tiposoportunidade') ?></h6>
            <p><?= $produto->has('tiposoportunidade') ? $this->Html->link($produto->tiposoportunidade->tipos, ['controller' => 'Tiposoportunidade', 'action' => 'view', $produto->tiposoportunidade->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Titulo') ?></h6>
            <p><?= h($produto->titulo) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($produto->id) ?></p>
            <h6 class="subheader"><?= __('Valor') ?></h6>
            <p><?= $this->Number->format($produto->valor) ?></p>
        </div>
    </div>
</div>
