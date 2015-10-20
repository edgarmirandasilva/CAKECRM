<div class="row">
<div class="col-md-3">
    <!-- Profile Image -->
    <div class="box box-primary">
        <div class="box-body box-profile">
            <?php echo $this->Html->image('uploads/' . $cliente->logo, ['class' => 'img-responsive']); ?>
            <h3 class="text-center"><?= h($cliente->nome) ?></h3>
            <p class="text-muted text-center"><?= h($cliente->site) ?></p>

            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>NIF</b> <p class="pull-right"><?= h($cliente->nif) ?></p>
                </li>
                <li class="list-group-item">
                    <b>Morada</b> <p><?= h($cliente->morada) ?></p>
                </li>
                <li class="list-group-item">
                    <b>Email</b> <a href="mailto:<?= h($cliente->email) ?>" class="pull-right"><?= h($cliente->email) ?></a>
                </li>
                <li class="list-group-item">
                    <b>Telefone</b> <p class="pull-right"><?= h($cliente->tel) ?></p>
                </li>
                <li class="list-group-item">
                    <b>Área de negócio</b> <p><?= h($cliente->anegocio->area) ?></p>
                </li>
                <li class="list-group-item">
                    <b>Estado</b> <p class="pull-right"><?= h($cliente->estado->ver) ?></p>
                </li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-body">
                    <?= $this->Form->create(null, ['type' => 'file']) ?>
                    <?= $this->Form->input('logo', ['type' => 'file']) ?>
                    <?= $this->Form->button('Guardar', ['type' => 'submit']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
            <?php
            echo $this->Html->link('Editar cliente', ['action' => 'edit', $cliente->id], ['class' => 'btn btn-primary btn-block']);
            ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div><!-- /.col -->
<div class="col-md-9">
    
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Oportunidades</a></li>
            <li><a href="#timeline" data-toggle="tab">Projectos</a></li>
        </ul>
        <div class="tab-content">
            <div class="active tab-pane" id="activity">
                <div class="panel panel-default">
                    <table cellpadding="0" cellspacing="0" class="table">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('clientes_id') ?></th>
                                <th><?= $this->Paginator->sort('tiposoportunidade_id') ?></th>
                                <th><?= $this->Paginator->sort('origemvenda_id') ?></th>
                                <th><?= $this->Paginator->sort('descri') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($oportunidades as $oportunidade): ?>
                                <tr>
                                    <td>
                                        <?= $oportunidade->has('cliente') ? $this->Html->link($oportunidade->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $oportunidade->cliente->id]) : '' ?>
                                    </td>
                                    <td>
                                        <?= $oportunidade->has('tiposoportunidade') ? $this->Html->link($oportunidade->tiposoportunidade->tipos, ['controller' => 'Tiposoportunidade', 'action' => 'view', $oportunidade->tiposoportunidade->id]) : '' ?>
                                    </td>
                                    <td>
                                        <?= $oportunidade->has('origemvenda') ? $this->Html->link($oportunidade->origemvenda->origens, ['controller' => 'Origemvenda', 'action' => 'view', $oportunidade->origemvenda->id]) : '' ?>
                                    </td>
                                    <td><?= h($oportunidade->descri) ?></td>
                                    <td><?= h($oportunidade->created) ?></td>
                                    <td><?= h($oportunidade->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Oportunidades', 'action' => 'view', $oportunidade->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Oportunidades','action' => 'edit', $oportunidade->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Oportunidades','action' => 'delete', $oportunidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oportunidade->id)]) ?>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                </div>
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="timeline">
                <div class="panel panel-default">
                    <table cellpadding="0" cellspacing="0" class="table">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('projectend') ?></th>
                                <th><?= $this->Paginator->sort('descri') ?></th>
                                <th><?= $this->Paginator->sort('estado') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($projectos as $projecto): ?>
                                <tr>
                                    <td><?= h($projecto->projectend) ?></td>
                                    <td><?php echo $projecto->descri; ?></td>
                                    <td><?= $this->Number->format($projecto->estado) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Ver'), ['controller' => 'projectos','action' => 'view', $projecto->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projecto->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projecto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projecto->id)]) ?>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            </div>
        </div><!-- /.tab-pane -->
    </div><!-- /.tab-content -->
</div><!-- /.nav-tabs-custom -->
</div>

