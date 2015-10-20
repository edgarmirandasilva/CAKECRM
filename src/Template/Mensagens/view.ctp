<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Mensagen'), ['action' => 'edit', $mensagen->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mensagen'), ['action' => 'delete', $mensagen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mensagen->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mensagens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mensagen'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projectos'), ['controller' => 'Projectos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projecto'), ['controller' => 'Projectos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="mensagens view col-md-10">
    <h2><?= h($mensagen->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $mensagen->has('user') ? $this->Html->link($mensagen->user->nome, ['controller' => 'Users', 'action' => 'view', $mensagen->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Mensagem') ?></h6>
            <p><?= h($mensagen->mensagem) ?></p>
            <h6 class="subheader"><?= __('Projecto') ?></h6>
            <p><?= $mensagen->has('projecto') ? $this->Html->link($mensagen->projecto->titulo, ['controller' => 'Projectos', 'action' => 'view', $mensagen->projecto->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($mensagen->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($mensagen->created) ?></p>
        </div>
    </div>
</div>
