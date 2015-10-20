<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('Edit Oportunidade'), ['action' => 'edit', $oportunidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Oportunidade'), ['action' => 'delete', $oportunidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oportunidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiposoportunidade'), ['controller' => 'Tiposoportunidade', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Origemvenda'), ['controller' => 'Origemvenda', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Origemvenda'), ['controller' => 'Origemvenda', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="oportunidades view col-md-10">
    <h2><?= h($oportunidade->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Cliente') ?></h6>
            <p><?= $oportunidade->has('cliente') ? $this->Html->link($oportunidade->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $oportunidade->cliente->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Tiposoportunidade') ?></h6>
            <p><?= $oportunidade->has('tiposoportunidade') ? $this->Html->link($oportunidade->tiposoportunidade->tipos, ['controller' => 'Tiposoportunidade', 'action' => 'view', $oportunidade->tiposoportunidade->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Origemvenda') ?></h6>
            <p><?= $oportunidade->has('origemvenda') ? $this->Html->link($oportunidade->origemvenda->origens, ['controller' => 'Origemvenda', 'action' => 'view', $oportunidade->origemvenda->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Descri') ?></h6>
            <p><?= h($oportunidade->descri) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $oportunidade->has('user') ? $this->Html->link($oportunidade->user->nome, ['controller' => 'Users', 'action' => 'view', $oportunidade->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($oportunidade->id) ?></p>
            <h6 class="subheader"><?= __('Valor') ?></h6>
            <p><?= $this->Number->format($oportunidade->valor) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($oportunidade->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($oportunidade->modified) ?></p>
        </div>
    </div>
</div>