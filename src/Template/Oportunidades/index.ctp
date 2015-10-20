<div class="col-md-12">
    <div class="page-header"><?php echo $this->Html->image('target.png', ['alt' => 'CakePHP']); ?> Oportunidades
     <?php
                        echo $this->Html->link('<span class="glyphicon btn-glyphicon glyphicon-file  img-circle text-muted"></span>Nova oportunidade'
                                ,'/oportunidades/add', array(
                            'class' => 'btn icon-btn btn-default pull-right',
                            'escape' => false)
                        );
                        ?>   
    </div>
<div class="col-md-12">
    <table cellpadding="0" cellspacing="0" class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('tiposoportunidade_id') ?></th>
            <th><?= $this->Paginator->sort('descri') ?></th>
            <th class="hidden-xs hidden-sm"><?= $this->Paginator->sort('clientes_id') ?></th>
            <th class="hidden-xs hidden-sm"><?= $this->Paginator->sort('origemvenda_id') ?></th>
            <th class="hidden-xs hidden-sm"><?= $this->Paginator->sort('created') ?></th>
            <th class="hidden-xs hidden-sm"><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($oportunidades as $oportunidade): ?>
        <tr>
            <td>
                <?= $oportunidade->has('tiposoportunidade') ? $this->Html->link($oportunidade->tiposoportunidade->tipos, ['controller' => 'Tiposoportunidade', 'action' => 'view', $oportunidade->tiposoportunidade->id]) : '' ?>
            </td>
            <td><?php echo($oportunidade->descri) ?></td>
            <td class="hidden-xs hidden-sm">
                <?= $oportunidade->has('cliente') ? $this->Html->link($oportunidade->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $oportunidade->cliente->id]) : '' ?>
            </td>
            <td class="hidden-xs hidden-sm">
                <?= $oportunidade->has('origemvenda') ? $this->Html->link($oportunidade->origemvenda->origens, ['controller' => 'Origemvenda', 'action' => 'view', $oportunidade->origemvenda->id]) : '' ?>
            </td class="hidden-xs hidden-sm">
            <td class="hidden-xs hidden-sm"><?= h($oportunidade->created) ?></td>
            <td class="hidden-xs hidden-sm"><?= h($oportunidade->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $oportunidade->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $oportunidade->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $oportunidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oportunidade->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
