
<div class="projectos form col-md-12">
    <?= $this->Form->create($projecto) ?>
    <fieldset>
        <legend><?= __('Editar Projecto') ?></legend>
        <?php
            echo $this->Form->input('projectend');
            echo $this->Form->textarea('descri');
            echo $this->Form->input('clientes_id', ['options' => $clientes]);
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('titulo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
