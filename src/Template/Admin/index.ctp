<div class="col-md-12">
    <h3 class="page-header"><?php echo $this->Html->image('admin.png', ['alt' => 'CakePHP']); ?> Administração</h3>
    <div class="row">
        <div class="col-md-4">
            <p>Opções comerciais</p>
            <p><?php
                echo $this->Html->link(
                        'Nova origem da venda', '/origemvenda/add', ['class' => 'btn btn-primary']
                );
                ?></p>
             <p><?php
                echo $this->Html->link(
                        'Lista de origens', '/origemvenda/index', ['class' => 'btn btn-primary']
                );
                ?></p>
            <hr>        
            <p>Produtos & Serviços</p>
            <p><?php
                echo $this->Html->link(
                        'Novo produto ou serviço', '/produtos/add', ['class' => 'btn btn-primary']
                );
                ?></p>
            <p><?php
                echo $this->Html->link(
                        'Lista de produtos', '/produtos/index', ['class' => 'btn btn-primary']
                );
                ?></p>
            <p><?php
                echo $this->Html->link(
                        'Categorias', '/tiposoportunidade/index', ['class' => 'btn btn-primary']
                );
                ?></p>
        </div>
        
        <div class="col-md-4">
            <p>Gestão de utilizadores</p> 
            <p><?php
                echo $this->Html->link(
                        'Adcionar utilizador', '/users/add', ['class' => 'btn btn-primary']
                );
                ?></p>
                <p><?php
                echo $this->Html->link(
                        'Lista de utilizadores', '/users/index', ['class' => 'btn btn-primary']
                );
                ?></p>
        </div>
        
        <div class="col-md-4">
            <p>Gestão de credênciais</p> 
            <p><?php
                echo $this->Html->link(
                        'Ver credenciais', '/credencias', ['class' => 'btn btn-primary']
                );
                ?></p>
                <p><?php
                echo $this->Html->link(
                        'Adicionar nova', '/credencias/add', ['class' => 'btn btn-primary']
                );
                ?></p>
        </div>
    </div>
</div>

