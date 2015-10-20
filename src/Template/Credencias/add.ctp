<div class="col-md-12">
    <?= $this->Form->create($credencia) ?>
    <fieldset>
        <legend><?= __('Adicionar credêncial') ?></legend>
        <?php
            echo $this->Form->input('clientes_id', ['options' => $clientes, 'empty' => true]);
            echo $this->Form->textarea('credici');
        ?>
    </fieldset>
    <hr>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
