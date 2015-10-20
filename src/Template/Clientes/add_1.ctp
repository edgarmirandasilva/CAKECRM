<div class="col-md-2">
    <h3><?= __('Menu') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Html->link(__('Ver clientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova area de negócio'), ['controller' => 'Anegocio', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="col-md-10">
    <?=$this->Form->create($cliente);?>
    <fieldset>
        <legend><?= __('Adicionar cliente') ?></legend>
        <?php
        echo $this->Form->input('nome', array('class' => ('form-control')));
        echo $this->Form->input('nif', array('class' => ('form-control')));
        echo $this->Form->input('morada', array('class' => ('form-control')));
        echo $this->Form->input('codigopostal', array('class' => ('form-control')));
        echo $this->Form->input('site', array('class' => ('form-control')));
        echo $this->Form->input('email', array('class' => ('form-control')));
        echo $this->Form->input('tel', array('class' => ('form-control')));
        echo $this->Form->input('anegocio_id', array('options' => $anegocio, 'empty' => true, 'class' => 'form-control'));
        echo $this->Form->input('estado_id', array('options' => $estado, 'empty' => true,'class' => 'form-control'));
        echo $this->Form->input('logo', array('class' => ('form-control')));
        ?>
        <hr>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), array('class' => ('btn btn-default btn-lg pull-right'))) ?>
    <?= $this->Form->end() ?>
</div>
