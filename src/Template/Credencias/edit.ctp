
<div class="credencias form col-md-12">
    <?= $this->Form->create($credencia) ?>
    <fieldset>
        <legend><?= __('Editar Credêncial') ?></legend>
        <?php
            echo $this->Form->input('clientes_id', ['options' => $clientes, 'empty' => true]);
            echo $this->Form->textarea('credici');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    
</div>

