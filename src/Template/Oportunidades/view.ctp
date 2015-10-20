
<div class="col-md-3">
    <!-- Profile Image -->
    <div class="box box-primary">
        <div class="box-body box-profile">
            <h3 class="text-center">Oportunidade <?= h($oportunidade->tiposoportunidade->tipos) ?></h3>
            <p class="text-muted text-center">Valor <?php echo $sum; ?>€</p>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Cliente</b> <p class="pull-right"><?= h($oportunidade->cliente->nome) ?></p>
                </li>
                <li class="list-group-item">
                    <b>Origem</b> <p class="pull-right"><?= h($oportunidade->origemvenda->origens) ?></p>
                </li>
                <li class="list-group-item">
                    <b>Creada por </b> <p><?= h($oportunidade->user->nome) ?></p>
                </li>
                <li class="list-group-item">
                    <b>Descrição</b> <p><?= h($oportunidade->descri) ?></p>
                </li>
            </ul>
            <?php
            echo $this->Html->link(
                    'Editar oportunidade', ['action' => 'edit', $oportunidade->id], ['class' => 'btn btn-primary btn-block']
            );
            ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div><!-- /.col -->
<div class="col-md-9">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Evolução da Oportunidade</a></li>
            <li><a href="#timeline" data-toggle="tab">Produtos & Orçamentos</a></li>

        </ul>
        <div class="tab-content">

            <div class="active tab-pane" id="activity">
                <div class="row">
                    <div class="col-md-12">
                        <h5>Fase da venda</h5>
                        <div class="wizard col-md-12">
                            <a><span class="badge">1</span> Leads</a>
                            <a><span class="badge">2</span> Levantamento</a>
                            <a class="current"><span class="badge badge-inverse">3</span> Proposta</a>
                            <a><span class="badge">4</span> Negociação</a>
                            <a><span class="badge">5</span> Venda</a>
                        </div>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <?php
                        echo $this->Form->create(null, [
                            'url' => ['controller' => 'Oportunidades', 'action' => 'edit', $this->Number->format($oportunidade->id)]
                        ]);
                        ?>
                        <fieldset>
                            <legend><?= __('Edit Oportunidade') ?></legend>
                            <?php
                            echo $this->Form->textarea('obs', array('default' => $oportunidade->obs));
                            ?>
                        </fieldset>
                        <?= $this->Form->button(__('Guardar'), array('class' => ('btn btn-default btn-lg pull-right'))) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="timeline">
                <div class="row">
                    <div class="col-md-12">
                        <p><?php
                            echo $this->Html->link(
                                    'Imprimir', '/users/add', ['class' => 'btn btn-default pull-right', 'target' => '_blank']
                            );
                            ?>
                        </p>
                    </div>
                </div>
                <?php
                echo $this->Form->create(null, [
                    'url' => ['controller' => 'Orcamentos', 'action' => 'add']
                ]);
                ?>
                <fieldset>
                    <legend><?= __('Adicionar produtos') ?></legend>
                    <?php
                    echo $this->Form->hidden('oportunidades_id', array('default' => $this->Number->format($oportunidade->id)));
                    echo $this->Form->input('produtos_id', array('options' => $produtos, 'empty' => true, 'class' => 'form-control'));
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'), array('class' => ('btn btn-default col-md-12'))) ?>
                <?= $this->Form->end() ?>  
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Produto</th>
                                    <th>Descrição</th>
                                    <th>Valor</th>
                                    <th>Apagar?</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($orcamentos as $orcamento): ?>
                                    <tr>

                                        <td><?= $orcamento->has('produto') ? $this->Html->link($orcamento->produto->titulo, ['controller' => 'Produtos', 'action' => 'view', $orcamento->produto->id]) : '' ?></td>
                                        <td><?php echo $orcamento->has('produto') ? $this->Html->link($orcamento->produto->descric, ['controller' => 'Produtos', 'action' => 'view', $orcamento->produto->id]) : '' ?></td>
                                        <td><?= $orcamento->has('produto') ? $this->Html->link($orcamento->produto->valor, ['controller' => 'Produtos', 'action' => 'view', $orcamento->produto->id]) : '' ?> €</td>
                                        <td><?= $this->Form->postLink(__('Delete'), ['controller' => 'Orcamentos', 'action' => 'delete', $orcamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orcamento->id)]) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div><!-- /.tab-pane -->
        </div><!-- /.tab-content -->
    </div><!-- /.nav-tabs-custom -->
</div><!-- /.col -->
