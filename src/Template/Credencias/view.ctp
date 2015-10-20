
    <div class="box box-primary">
        <div class="box-body">
            <h2><p><?= $credencia->has('cliente') ? $this->Html->link($credencia->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $credencia->cliente->id]) : '' ?></p></h2>
            <?php echo $credencia->credici ?>
        </div>
    </div>

