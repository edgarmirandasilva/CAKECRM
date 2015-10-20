<div class="col-md-2">
    <h3><?= __('Menu') ?></h3>
    <ul class="nav nav-pills nav-stacked">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Tem a certeza que dejesa apagar o { 0}?', $user->email)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Ver utilizadores'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users col-md-10">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), array('class' => ('btn btn-default btn-lg pull-right'))) ?>
    <?= $this->Form->end() ?>
</div>
