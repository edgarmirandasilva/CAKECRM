
<div class="col-md-12">
    <div class="x_panel">
        <div class="content">

            <div class="col-md-3 col-sm-3 col-xs-12">

                <section>

                    <div class="x_title">
                        <h2>Descrição do projecto</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <h4 class="green"> <?php
                            echo $this->Html->icon('king');
                            echo ' ';
                            echo h($projecto->titulo);
                            ?></h4>
                        <p><?php echo $projecto->descri ?></p>
                        <br />

                        <div class="project_detail">

                            <p class="title">Cliente</p>
                            <p><?= $projecto->has('cliente') ? $this->Html->link($projecto->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $projecto->cliente->id]) : '' ?></p>
                            <p class="title">Leader de projecto</p>
                            <p><?= $projecto->has('user') ? $this->Html->link($projecto->user->nome, ['controller' => 'Users', 'action' => 'view', $projecto->user->id]) : '' ?></p>
                            <p class="btn btn-default"><?php echo $this->Html->icon('pencil'); ?><?= $this->Html->link(__('Editar Projecto'), ['action' => 'edit', $projecto->id]) ?> </p>
                        </div>

                        <br />
                        <!--<h5>Ficheiros do projecto</h5>
                        <ul class="list-unstyled project_files">
                            <li><a href=""><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                            </li>
                            <li><a href=""><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                            </li>
                            <li><a href=""><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                            </li>
                            <li><a href=""><i class="fa fa-picture-o"></i> Logo.png</a>
                            </li>
                            <li><a href=""><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                            </li>
                        </ul>
                        <br />

                        <div class="mtop20">
                            <a href="#" class="btn btn-sm btn-primary">Adicionar ficheiros</a>
                        </div>-->
                    </div>

                </section>

            </div>
            <!-- end project-detail sidebar -->

            <div class="col-md-9 col-sm-9 col-xs-12">
                <hr>
                <ul class="stats-overview">
                    <li>
                        <span class="name">Inicio do projecto </span>
                        <span class="value text-success"><p><?= h($projecto->created) ?></p></span>
                    </li>
                    <li>
                        <span class="name"> Estado do projecto </span>
                        <span class="value text-success"><?php echo round($percent); ?>% | 100%</span>
                    </li>
                    <li class="hidden-phone">
                        <span class="name"> Estimativa de fim do projecto </span>
                        <span class="value text-success"><?= h($projecto->projectend) ?></span>
                    </li>
                </ul>
                <br />

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#timeline" data-toggle="tab">Tarefas de projecto</a></li>
                        <li><a href="#activity" data-toggle="tab">Actividade recente</a></li>

                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="timeline">
                            <div class="btn-group btn-group-justified">
                                <a href="/crm/tarefas/add" class="btn btn-primary">Nova tarefa</a>
                            </div>
                            <table cellpadding="0" cellspacing="0" class="table">
                                <thead>
                                    <tr>
                                        <th><?= $this->Paginator->sort('descri', 'Descrição') ?></th>
                                        <th><?= $this->Paginator->sort('users_id', 'Responsavel') ?></th>
                                        <th><?= $this->Paginator->sort('created', 'Creada') ?></th>
                                        <th><?= $this->Paginator->sort('taskend', 'Fim') ?></th>
                                        <th><?= $this->Paginator->sort('progresso_id', 'Estado') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tarefas as $tarefa): ?>
                                        <tr>
                                            <td><?php echo $tarefa->descri ?></td>
                                            <td>
                                                <?= $tarefa->has('user') ? $this->Html->link($tarefa->user->nome, ['controller' => 'Users', 'action' => 'view', $tarefa->user->id]) : '' ?>
                                            </td>
                                            <td><?= h($tarefa->created) ?></td>
                                            <td><?= h($tarefa->taskend) ?></td>
                                            <td>
                                                <?= $tarefa->has('progresso') ? $this->Html->link($tarefa->progresso->estados, ['controller' => 'Progresso', 'action' => 'view', $tarefa->progresso->id]) : '' ?>
                                            </td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('View'), ['controller' => 'Tarefas', 'action' => 'view', $tarefa->id]) ?>
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tarefas', 'action' => 'edit', $tarefa->id]) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tarefas', 'action' => 'delete', $tarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]) ?>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="activity">
                            <div class="btn-group btn-group-justified">
                                <a  data-toggle="modal" data-target="#myModal" class="btn btn-primary">Nova mensagem</a>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                
                                <div class="panel panel-default">

                                    <?php foreach ($mensagens as $mensagen): ?>
                                        <div class="panel-body msg_container_base">
                                            <?php
                                            if ($mensagen->user->id == $uid) {
                                                echo '<div class="row msg_container base_sent">';
                                            } else {
                                                echo '<div class="row msg_container base_receive">'
                                                . '<div class="col-md-2 col-xs-2 avatar">
                                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                            </div>';
                                            }
                                            ?>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="messages msg_sent">
                                                    <p><?= h($mensagen->mensagem) ?></p>
                                                    <time><?= $mensagen->has('user') ? $this->Html->link($mensagen->user->nome, ['controller' => 'Users', 'action' => 'view', $mensagen->user->id]) : '' ?> • <?= h($mensagen->created) ?></time>
                                                    
                                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Mensagens','action' => 'delete', $mensagen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mensagen->id)]) ?>
                                                </div>
                                            </div>
                                            <?php
                                            if ($mensagen->user->id == $uid) {
                                                echo '<div class="col-md-2 col-xs-2 avatar">
                                                    <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                                </div>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start project-detail sidebar -->
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nova mensagem</h4>
            </div>
            <div class="modal-body">
                <?php
                echo $this->Form->create(null, [
                    'url' => ['controller' => 'mensagens', 'action' => 'add']
                ]);
                ?>
                <fieldset>
                    <?php
                    echo $this->Form->hidden('users_id', array('default' => $this->Number->format($uid)));
                    echo $this->Form->textarea('mensagem');
                    echo $this->Form->hidden('projectos_id', array('default' => $this->Number->format($projecto->id)));
                    ?>
                </fieldset>
            </div>
            <div class="modal-footer">
                <?= $this->Form->button(__('Enviar'), array('class' => ('btn btn-default col-md-12'))) ?>
                <?= $this->Form->end() ?>  
            </div>
        </div>

    </div>
</div>