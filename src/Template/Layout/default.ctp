<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'CRM | COW - Comunicação e Design';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('skins/_all-skins.min.css') ?>
        <?= $this->Html->css('AdminLTE.css') ?>
        <?= $this->Html->css('AdminLTE.min.css') ?>
        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('bootstrap-theme.min.css') ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <?= $this->Html->script('bootstrap.min.js'); ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="/crm" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>COW</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b><?php echo $this->Html->image('logo2.png', ['alt' => 'COW']); ?> </b></span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <?php echo $this->Html->image('uploads/' . $photuser, ['class' => 'img-circle']); ?>

                                        <p>
                                            <?php echo $username; ?>
                                            <small>Membro desde:<?php echo $creadouser; ?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <?php
                                            echo $this->Html->link('Perfil'
                                                    , ['controller' => 'users', 'action' => 'view', $iduser], array(
                                                'class' => 'btn icon-btn btn-default',
                                                'escape' => false)
                                            );
                                            ?>
                                        </div>
                                        <div class="pull-right">
                                            <a href="./users/logout" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <?= $this->Html->link(__('Administração'), ['controller' => 'admin', 'action' => 'index']) ?>
                            </li>
                        </ul>
                    </div>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar ">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <?php echo $this->Html->image('uploads/' . $photuser, ['class' => 'img-circle']); ?>
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $username; ?></p>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">Menu</li>
                        <li class="<?php echo (($this->request['controller'] === 'Pages') ) ? 'active' : '' ?>"><a href="/crm"><i class="fa fa-home"></i><span>Home</span></a></li>
                        <li class="treeview <?php echo (($this->request['controller'] === 'Clientes') && ($this->request['action'] == 'index') ) ? 'active' : '' ?>">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Clientes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><?= $this->Html->link(__('Ver Todos'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
                                <li><?= $this->Html->link(__('Novo cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
                                <li role="separator" class="divider"></li>
                                <li><?= $this->Html->link(__('Existentes'), ['controller' => 'Clientes', 'action' => 'clientessim']) ?></li>
                                <li><?= $this->Html->link(__('Possiveis'), ['controller' => 'Clientes', 'action' => 'possiveis']) ?></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Oportunidades</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><?= $this->Html->link(__('Ver Todas'), ['controller' => 'Oportunidades', 'action' => 'index']) ?></li>
                                <li><?= $this->Html->link(__('Nova Oportunidade'), ['controller' => 'Oportunidades', 'action' => 'add']) ?></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span>Projectos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><?= $this->Html->link(__('Ver projectos'), ['controller' => 'Projectos', 'action' => 'index']) ?></li>
                                <li><?= $this->Html->link(__('Novo projecto'), ['controller' => 'Projectos', 'action' => 'add']) ?></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>Tarefas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><?= $this->Html->link(__('Ver Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
                                <li><?= $this->Html->link(__('Nova tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <div id="container">

                <div class="content-wrapper">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>

                </div>

                <footer>
                </footer>
                <?php
                echo $this->Html->script('jquery.js');
                echo $this->Html->script('jquery.dataTables.min.js');
                echo $this->Html->script('dataTables.bootstrap.min.js');
                echo $this->Html->script('jquery.js');
                echo $this->Html->script('demo.js');
                echo $this->Html->script('app.min.js');
                ?>
                <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
                <script>tinymce.init({selector: 'textarea'});</script>

            </div>
    </body>
</html>
