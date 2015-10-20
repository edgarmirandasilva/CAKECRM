
<section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista de clientes</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class="hidden-xs hidden-sm">Nif</th>
                            <th class="hidden-xs hidden-sm">Email</th>
                            <th class="actions">Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clientes as $cliente): ?>
                            <tr>
                                <td><?= h($cliente->nome) ?></td>
                                <td class="hidden-xs hidden-sm"><?= h($cliente->nif) ?></td>
                                <td class="hidden-xs hidden-sm"><?= h($cliente->email) ?></td>
                                <td class="actions">
                                    <?php
                                    echo $this->Html->link('<span class="glyphicon btn-glyphicon glyphicon-search  img-circle text-muted"></span>Ver cliente'
                                            , ['action' => 'view', $cliente->id], array(
                                        'class' => 'btn icon-btn btn-default pull-right',
                                        'escape' => false)
                                    );
                                    ?>
                                    <?php
                                    echo $this->Html->link('<span class="glyphicon btn-glyphicon glyphicon-pencil  img-circle text-muted"></span>Editar'
                                            , ['action' => 'edit', $cliente->id], array(
                                        'class' => 'btn icon-btn btn-default pull-right',
                                        'escape' => false)
                                    );
                                    ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th class="hidden-xs hidden-sm">Nif</th>
                            <th class="hidden-xs hidden-sm">Email</th>
                            <th class="actions">Menu</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
    </div>
</section>
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>