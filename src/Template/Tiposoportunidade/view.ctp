<div class="col-md-2">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('Edit Tiposoportunidade'), ['action' => 'edit', $tiposoportunidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tiposoportunidade'), ['action' => 'delete', $tiposoportunidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposoportunidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tiposoportunidade'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiposoportunidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Oportunidades'), ['controller' => 'Oportunidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tiposoportunidade view col-md-10">
    <h2><?= h($tiposoportunidade->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Tipos') ?></h6>
            <p><?= h($tiposoportunidade->tipos) ?></p>
            <h6 class="subheader"><?= __('Descri') ?></h6>
            <p><?= h($tiposoportunidade->descri) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($tiposoportunidade->id) ?></p>
            <h6 class="subheader"><?= __('Valor') ?></h6>
            <p><?= $this->Number->format($tiposoportunidade->valor) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Oportunidades') ?></h4>
    <?php if (!empty($tiposoportunidade->oportunidades)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Clientes Id') ?></th>
            <th><?= __('Tiposoportunidade Id') ?></th>
            <th><?= __('Origemvenda Id') ?></th>
            <th><?= __('Descri') ?></th>
            <th><?= __('Valor') ?></th>
            <th><?= __('Users Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tiposoportunidade->oportunidades as $oportunidades): ?>
        <tr>
            <td><?= h($oportunidades->id) ?></td>
            <td><?= h($oportunidades->created) ?></td>
            <td><?= h($oportunidades->modified) ?></td>
            <td><?= h($oportunidades->clientes_id) ?></td>
            <td><?= h($oportunidades->tiposoportunidade_id) ?></td>
            <td><?= h($oportunidades->origemvenda_id) ?></td>
            <td><?= h($oportunidades->descri) ?></td>
            <td><?= h($oportunidades->valor) ?></td>
            <td><?= h($oportunidades->users_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Oportunidades', 'action' => 'view', $oportunidades->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Oportunidades', 'action' => 'edit', $oportunidades->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Oportunidades', 'action' => 'delete', $oportunidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oportunidades->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>