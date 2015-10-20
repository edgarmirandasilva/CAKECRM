
<section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Projectos</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
              <div class="box-body">
<div class="projectos index col-md-12">
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('projectend') ?></th>
                <th><?= $this->Paginator->sort('descri') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th><?= $this->Paginator->sort('clientes_id') ?></th>
                <th class="actions"><?= __('Menu') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projectos as $projecto): ?>
                <tr>
                    <td><?= h($projecto->created) ?></td>
                    <td><?= h($projecto->projectend) ?></td>
                    <td><?php echo $projecto->descri ?></td>
                    <td><?= $this->Number->format($projecto->estado) ?> %</td>
                    <td>
                        <?= $projecto->has('cliente') ? $this->Html->link($projecto->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $projecto->cliente->id]) : '' ?>
                    </td>
                    <td class="actions">
                        <div class="btn-group" role="group" aria-label="...">
  <?php
                        echo $this->Html->link('Ver'
                                , ['controller' => 'Projectos', 'action' => 'view', $projecto->id], array(
                            'class' => 'btn flat-butt flat-info-butt',
                            'escape' => false)
                        );
                        ?>
                        <?php
                        echo $this->Html->link('Editar'
                                , ['controller' => 'Projectos', 'action' => 'edit', $projecto->id], array(
                            'class' => 'btn flat-butt flat-info-butt',
                            'escape' => false)
                        );
                        ?>
                        <?php
                        echo $this->Form->postLink('Apagar'
                                , ['controller' => 'Projectos', 'action' => 'delete', $projecto->id], array(
                            'class' => 'btn flat-butt flat-info-butt',
                            'escape' => false)
                        );
                        ?>
</div>
                        
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
</div>
              </div>
          
</section>