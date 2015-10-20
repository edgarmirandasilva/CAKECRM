<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            CakePHP: the rapid development php framework:
            Projectos        </title>
        <link href="/crm/favicon.ico" type="image/x-icon" rel="icon"/><link href="/crm/favicon.ico" type="image/x-icon" rel="shortcut icon"/>

        <link rel="stylesheet" href="/crm/css/bootstrap.min.css"/>        <link rel="stylesheet" href="/crm/css/bootstrap-theme.min.css"/>        <link rel="stylesheet" href="/crm/css/theme.css"/>        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/crm/js/bootstrap.min.js"></script>        


    </head>
    <body role="document">
        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="/crm/img/logo2.png" alt="COW"/>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="/">Home</a></li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/crm/clientes">Ver Todos</a></li>
                                <li><a href="/crm/clientes/add">Novo cliente</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/crm/clientes/clientessim">Existentes</a></li>
                                <li><a href="/crm/clientes/possiveis">Possiveis</a></li>
                            </ul>
                        </li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Oportunidades <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/crm/oportunidades">Ver Todas</a></li>
                                <li><a href="/crm/oportunidades/add">Nova Oportunidade</a></li>
                            </ul>
                        </li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projectos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/crm/projectos">Ver projectos</a></li>
                                <li><a href="/crm/projectos/add">Novo projecto</a></li>
                            </ul>
                        </li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tarefas <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/crm/tarefas">Ver Tarefas</a></li>
                                <li><a href="/crm/tarefas/add">Nova tarefa</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://cloud.cow.pt" target="_blank"> <img src="/crm/img/claudia.png" alt="Cloud"/> Cloud</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/crm/users">Ver users</a></li>
                                <li><a href="/crm/admin">Administração</a></li>
                                <li><a href="/crm/credencias">Credências</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/crm/users/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div id="container">
            <div class="container" id="content">

                <div class="row">

                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="content">

                                <div class="col-md-3 col-sm-3 col-xs-12">

                                    <section>

                                        <div class="x_title">
                                            <h2>Descrição do projecto</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="panel-body">
                                            <h4 class="green"> <i class="glyphicon glyphicon-king"></i> Loja online Extincêndios (Extstore)</h4>
                                            <p><p>Desenvolvimento de loja online da Extinc&ecirc;ndios com sincronismo no PHC</p></p>
                                            <br />

                                            <div class="project_detail">

                                                <p class="title">Cliente</p>
                                                <p><a href="/crm/clientes/view/48"> Extincendios, Equipamentos de Protecção e Segurança, S.a</a></p>
                                                <p class="title">Leader de projecto</p>
                                                <p><a href="/crm/users/view/1">Edgar Miranda Silva</a></p>
                                                <p class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i><a href="/crm/projectos/edit/4">Editar Projecto</a> </p>
                                            </div>

                                            <br />
                                            <!--<h5>Ficheiros do projecto</h5>
                                            <ul class="list-unstyled project_files">
                                                <li><a href=""><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                                                </li>
                                                <li><a href=""><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                                                </li>
                                                <li><a href=""><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                                                </li>
                                                <li><a href=""><i class="fa fa-picture-o"></i> Logo.png</a>
                                                </li>
                                                <li><a href=""><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                                                </li>
                                            </ul>
                                            <br />
                    
                                            <div class="mtop20">
                                                <a href="#" class="btn btn-sm btn-primary">Adicionar ficheiros</a>
                                            </div>-->
                                        </div>

                                    </section>

                                </div>
                                <!-- end project-detail sidebar -->

                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <hr>
                                    <ul class="stats-overview">
                                        <li>
                                            <span class="name">Inicio do projecto </span>
                                            <span class="value text-success"><p>10/7/15 4:21 PM</p></span>
                                        </li>
                                        <li>
                                            <span class="name"> Total horas gastas no projecto </span>
                                            <span class="value text-success"> 2000 </span>
                                        </li>
                                        <li class="hidden-phone">
                                            <span class="name"> Estimativa de fim do projecto </span>
                                            <span class="value text-success">10/7/15 4:19 PM</span>
                                        </li>
                                    </ul>
                                    <br />

                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#timeline" data-toggle="tab">Tarefas de projecto</a></li>
                                            <li><a href="#activity" data-toggle="tab">Actividade recente</a></li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="timeline">
                                                <table cellpadding="0" cellspacing="0" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th><a href="/crm/projectos/view/4?sort=descri&amp;direction=asc">Descrição</a></th>
                                                            <th><a href="/crm/projectos/view/4?sort=users_id&amp;direction=asc">Responsavel</a></th>
                                                            <th><a href="/crm/projectos/view/4?sort=created&amp;direction=asc">Creada</a></th>
                                                            <th><a href="/crm/projectos/view/4?sort=taskend&amp;direction=asc">Fim</a></th>
                                                            <th><a href="/crm/projectos/view/4?sort=progresso_id&amp;direction=asc">Estado</a></th>
                                                            <th class="actions">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><p style="margin: 0px;">&nbsp;Configurar transportes Fedex</p></td>
                                                            <td>
                                                                <a href="/crm/users/view/1">Edgar Miranda Silva</a>                                            </td>
                                                            <td>10/7/15 4:36 PM</td>
                                                            <td>10/9/15 11:20 AM</td>
                                                            <td>
                                                            </td>
                                                            <td class="actions">
                                                                <a href="/crm/tarefas/view/10">View</a>                                                <a href="/crm/tarefas/edit/10">Edit</a>                                                <form name="post_561640ac87bc9845920222" style="display:none;" method="post" action="/crm/tarefas/delete/10"><input type="hidden" name="_method" class="form-control "  value="POST" /></form><a href="#" onclick="if (confirm( & quot; Are you sure you want to delete # 10? & quot; )) {
                                                                            document.post_561640ac87bc9845920222.submit();
                                                                        }
                                                                        event.returnValue = false;
                                                                        return false;">Delete</a>                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="tab-pane" id="activity">
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="panel panel-default">

                                                        <div class="panel-body msg_container_base">
                                                            <div class="row msg_container base_sent">                                            <div class="col-md-10 col-xs-10">
                                                                    <div class="messages msg_sent">
                                                                        <p>ssdsd</p>
                                                                        <time><a href="/crm/users/view/1">Edgar Miranda Silva</a> • 10/8/15 9:59 AM</time>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body msg_container_base">
                                                            <div class="row msg_container base_receive"><div class="col-md-2 col-xs-2 avatar">
                                                                    <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                                                </div>                                            <div class="col-md-10 col-xs-10">
                                                                    <div class="messages msg_sent">
                                                                        <p>sadasdasdasd</p>
                                                                        <time><a href="/crm/users/view/2">Rita Leonardo</a> • 10/8/15 10:00 AM</time>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-xs-2 avatar">
                                                                    <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                                                </div>                                        </div>
                                                        </div>

                                                        <div class="panel-footer">
                                                            <form method="post" accept-charset="utf-8" role="form" action="/crm/mensagens/add"><div style="display:none;"><input type="hidden" name="_method" class="form-control "  value="POST" /></div>                                    <div class="input-group">
                                                                    <input type="hidden" name="projectos_id" class="form-control "  value="4" />                                        <input type="hidden" name="users_id" class="form-control "  value="1" />                                        <div class="form-group text"><label class=" control-label "  for="mensagem">Mensagem</label><input type="text" name="mensagem" class="form-control "  id="mensagem" /></div>                                        <span class="input-group-btn">
                                                                        <button class="btn btn-default" type="submit">M</button>                                        </span>
                                                            </form>  

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <span class="glyphicon glyphicon-cog"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
                                                        <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
                                                        <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- start project-detail sidebar -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Nova mensagem</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" accept-charset="utf-8" role="form" action="/crm/mensagens/add"><div style="display:none;"><input type="hidden" name="_method" class="form-control "  value="POST" /></div>                <fieldset>
                                        <input type="hidden" name="users_id" class="form-control "  value="1" /><textarea name="mensagem" class="form-control "  rows="5"></textarea><input type="hidden" name="projectos_id" class="form-control "  value="4" />                </fieldset>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default col-md-12 btn btn-default" type="submit">Enviar</button>                </form>  
                            </div>
                        </div>

                    </div>
                </div>                </div>
        </div>
        <footer>
        </footer>
        <script src="/crm/js/jquery.js"></script><script src="/crm/js/jquery.dataTables.min.js"></script><script src="/crm/js/dataTables.bootstrap.min.js"></script>            <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>
    </div>
    <script>var __debug_kit_id = 'd0f90e19-99cd-4acc-89aa-daac980b0e3f', __debug_kit_base_url = 'http://cow.pt/crm/';</script><script src="/crm/debug_kit/js/toolbar.js"></script></body>
</html>
