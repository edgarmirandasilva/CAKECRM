<div class="container">
<div class="clientes col-md-12">
    <?= $this->Form->create($cliente, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
        echo $this->Form->input('nome');
        echo $this->Form->input('nif');
        echo $this->Form->input('morada');
        echo $this->Form->input('codigopostal');
        echo $this->Form->input('site');
        echo $this->Form->input('email');
        echo $this->Form->input('tel');
        echo $this->Form->input('estado_id', ['options' => $estado, 'empty' => true]);
        echo $this->Form->input('anegocio_id', ['options' => $anegocio, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), array('class' => ('btn btn-default btn-lg pull-right'))) ?>
    <?= $this->Form->end() ?>
    
</div>
</div>