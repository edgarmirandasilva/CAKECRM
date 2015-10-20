<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon"><i class="glyphicon glyphicon-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Clientes Existentes</span>
                    <span class="info-box-number"><?php echo $quanto ?><small> clientes</small></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon"><i class="glyphicon glyphicon-star-empty"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Clientes Possiveis</span>
                    <span class="info-box-number"><?php echo $quanto2 ?><small> clientes</small></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Qt. Projectos</span>
                    <span class="info-box-number"><?php echo $proj ?><small> projectos</small></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon"><i class="glyphicon glyphicon-euro"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Qt. oportunidades</span>
                    <span class="info-box-number"><?php echo $oporc ?><small> oportunidades</small></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Actividade do site numero de visitas</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <div class="btn-group">
                            <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>Actividade do site</strong>
                            </p>
                            <div class="chart">
                                <div id="embed-api-auth-container"></div>
                                <div id="chart-container"></div>
                            </div><!-- /.chart-responsive -->
                        </div><!-- /.col -->
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Ferramentas</strong>
                            </p>
                            <div id="view-selector-container"></div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- ./box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-md-8">

            <!-- MAP & BOX PANE -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Ultimos projectos</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive">
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
                                        <td><?= $this->Number->format($projecto->estado) ?>%</td>
                                        <td>
                                            <?= $projecto->has('cliente') ? $this->Html->link($projecto->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $projecto->cliente->id]) : '' ?>
                                        </td>
                                        <td class="actions">
                                             <?php
                                            echo $this->Html->link('<span class="glyphicon btn-glyphicon glyphicon-search  img-circle text-muted"></span>Ver'
                                                    , ['controller' => 'Projectos', 'action' => 'view', $projecto->id], array(
                                                'class' => 'btn icon-btn btn-default',
                                                'escape' => false)
                                            );
                                            ?>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <!-- MAP & BOX PANE -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Ultimas oportunidades</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" class="table">
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('created') ?></th>
                                    <th><?= $this->Paginator->sort('modified') ?></th>
                                    <th><?= $this->Paginator->sort('descri') ?></th>
                                    <th><?= $this->Paginator->sort('tiposoportunidade_id') ?></th>
                                    <th><?= $this->Paginator->sort('origemvenda_id') ?></th>
                                    <th><?= $this->Paginator->sort('clientes_id') ?></th>
                                    <th class="actions"><?= __('Menu') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($oportunidades as $oportunidade): ?>
                                    <tr>
                                        <td><?= h($oportunidade->created) ?></td>
                                        <td><?= h($oportunidade->modified) ?></td>
                                        <td><?php echo $oportunidade->descri ?></td>
                                        <td>
                                            <?= $oportunidade->has('tiposoportunidade') ? $this->Html->link($oportunidade->tiposoportunidade->tipos, ['controller' => 'Tiposoportunidade', 'action' => 'view', $oportunidade->tiposoportunidade->id]) : '' ?>
                                        </td>
                                        <td>
                                            <?= $oportunidade->has('origemvenda') ? $this->Html->link($oportunidade->origemvenda->origens, ['controller' => 'Origemvenda', 'action' => 'view', $oportunidade->origemvenda->id]) : '' ?>
                                        </td>
                                        <td>
                                            <?= $oportunidade->has('cliente') ? $this->Html->link($oportunidade->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $oportunidade->cliente->id]) : '' ?>
                                        </td>
                                        <td class="actions">
                                            <?php
                                            echo $this->Html->link('<span class="glyphicon btn-glyphicon glyphicon-search  img-circle text-muted"></span>Ver'
                                                    , ['controller' => 'Oportunidades', 'action' => 'view', $oportunidade->id], array(
                                                'class' => 'btn icon-btn btn-default',
                                                'escape' => false)
                                            );
                                            ?>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->

        <div class="col-md-4">

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Visitas ao site</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="chart-1-container"></div>
                </div><!-- /.box-body -->

            </div><!-- /.box -->

        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Company Site Analytics -->
<script>
    (function (w, d, s, g, js, fs) {
        g = w.gapi || (w.gapi = {});
        g.analytics = {q: [], ready: function (f) {
                this.q.push(f);
            }};
        js = d.createElement(s);
        fs = d.getElementsByTagName(s)[0];
        js.src = 'https://apis.google.com/js/platform.js';
        fs.parentNode.insertBefore(js, fs);
        js.onload = function () {
            g.load('analytics');
        };
    }(window, document, 'script'));
</script>
<script>

    gapi.analytics.ready(function () {

        /**
         * Authorize the user immediately if the user has already granted access.
         * If no access has been created, render an authorize button inside the
         * element with the ID "embed-api-auth-container".
         */
        gapi.analytics.auth.authorize({
            container: 'embed-api-auth-container',
            clientid: '540608952534-uu2dmf9gq2ftv3ctir7k8gvjltfm42va.apps.googleusercontent.com',
        });


        /**
         * Create a new ViewSelector instance to be rendered inside of an
         * element with the id "view-selector-container".
         */
        var viewSelector = new gapi.analytics.ViewSelector({
            container: 'view-selector-container'
        });

        // Render the view selector to the page.
        viewSelector.execute();



        /**
         * Create the first DataChart for top countries over the past 30 days.
         * It will be rendered inside an element with the id "chart-1-container".
         */
        var dataChart1 = new gapi.analytics.googleCharts.DataChart({
            query: {
                metrics: 'ga:sessions',
                dimensions: 'ga:country',
                'start-date': '30daysAgo',
                'end-date': 'yesterday',
                'max-results': 6,
                sort: '-ga:sessions'
            },
            chart: {
                container: 'chart-1-container',
                type: 'PIE',
                options: {
                    width: '100%',
                    pieHole: 4 / 9
                }
            }
        });
        /**
         * Create a new DataChart instance with the given query parameters
         * and Google chart options. It will be rendered inside an element
         * with the id "chart-container".
         */
        var dataChart = new gapi.analytics.googleCharts.DataChart({
            query: {
                metrics: 'ga:sessions',
                dimensions: 'ga:date',
                'start-date': '30daysAgo',
                'end-date': 'yesterday'
            },
            chart: {
                container: 'chart-container',
                type: 'LINE',
                options: {
                    width: '100%'
                }
            }
        });

        /**
         * Update the first dataChart when the first view selecter is changed.
         */
        viewSelector.on('change', function (ids) {
            dataChart1.set({query: {ids: ids}}).execute();
        });

        /**
         * Render the dataChart on the page whenever a new view is selected.
         */
        viewSelector.on('change', function (ids) {
            dataChart.set({query: {ids: ids}}).execute();
        });

    });
</script>
