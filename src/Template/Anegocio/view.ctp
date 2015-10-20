<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('Edit Anegocio'), ['action' => 'edit', $anegocio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Anegocio'), ['action' => 'delete', $anegocio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anegocio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Anegocio'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anegocio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="anegocio view col-md-10">
    <h2><?= h($anegocio->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Area') ?></h6>
            <p><?= h($anegocio->area) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($anegocio->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Clientes') ?></h4>
    <?php if (!empty($anegocio->clientes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Nome') ?></th>
            <th><?= __('Nif') ?></th>
            <th><?= __('Morada') ?></th>
            <th><?= __('Codigopostal') ?></th>
            <th><?= __('Site') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Tel') ?></th>
            <th><?= __('Estado') ?></th>
            <th><?= __('Anegocio Id') ?></th>
            <th><?= __('Logo') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($anegocio->clientes as $clientes): ?>
        <tr>
            <td><?= h($clientes->id) ?></td>
            <td><?= h($clientes->nome) ?></td>
            <td><?= h($clientes->nif) ?></td>
            <td><?= h($clientes->morada) ?></td>
            <td><?= h($clientes->codigopostal) ?></td>
            <td><?= h($clientes->site) ?></td>
            <td><?= h($clientes->email) ?></td>
            <td><?= h($clientes->tel) ?></td>
            <td><?= h($clientes->estado) ?></td>
            <td><?= h($clientes->anegocio_id) ?></td>
            <td><?= h($clientes->logo) ?></td>
            <td><?= h($clientes->created) ?></td>
            <td><?= h($clientes->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
