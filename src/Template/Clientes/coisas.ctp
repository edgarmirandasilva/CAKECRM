<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estado'), ['controller' => 'Estado', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estado', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Anegocio'), ['controller' => 'Anegocio', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anegocio'), ['controller' => 'Anegocio', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientes view col-md-10">
    <h2><?= h($cliente->nome) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($cliente->nome) ?></p>
            <h6 class="subheader"><?= __('Nif') ?></h6>
            <p><?= h($cliente->nif) ?></p>
            <h6 class="subheader"><?= __('Morada') ?></h6>
            <p><?= h($cliente->morada) ?></p>
            <h6 class="subheader"><?= __('Codigopostal') ?></h6>
            <p><?= h($cliente->codigopostal) ?></p>
            <h6 class="subheader"><?= __('Site') ?></h6>
            <p><?= h($cliente->site) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($cliente->email) ?></p>
            <h6 class="subheader"><?= __('Tel') ?></h6>
            <p><?= h($cliente->tel) ?></p>
            <h6 class="subheader"><?= __('Estado') ?></h6>
            <p><?= $cliente->has('estado') ? $this->Html->link($cliente->estado->ver, ['controller' => 'Estado', 'action' => 'view', $cliente->estado->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Anegocio') ?></h6>
            <p><?= $cliente->has('anegocio') ? $this->Html->link($cliente->anegocio->area, ['controller' => 'Anegocio', 'action' => 'view', $cliente->anegocio->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Logo') ?></h6>
            <p><?= h($cliente->logo) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($cliente->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($cliente->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($cliente->modified) ?></p>
        </div>
    </div>
</div>