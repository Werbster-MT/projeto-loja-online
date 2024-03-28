<?php
  if (isset($_SESSION['usuario_logado'])){
    $usuario_logado = $_SESSION['usuario_logado'];

  }
?>

<header>
    <div class="container" id="nav-container ">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <a href="<?= base_url() ?>HomeController" class="navbar-brand">
                Loja Online 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
            aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigator">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <?php 

                    if (isset($usuario_logado['tipo'])):  
                        echo '<a class="nav-item nav-link">Olá,'.$usuario_logado["nome"].'</a>';
                        if ($usuario_logado['tipo'] == 'adm'):  ?>
                            <a class="nav-item nav-link" id="Home" href="<?= base_url() ?>HomeController">Home</a>
                            <a class="nav-item nav-link" id="Carrinho" href="<?= base_url() ?>carrinhoController">Carrinho</a>
                            <a class="nav-item nav-link" id="Home" href="<?= base_url() ?>usuarioController/?idUsuario=<?=$usuario_logado['user_id']?>">Usuarios</a>
                            <a class="nav-item nav-link" id="Home" href="<?= base_url() ?>pedidosController/?idUsuario=<?=$usuario_logado['user_id']?>">Meus pedidos</a>
                            <a class="nav-item nav-link" id="Cadastrar" href="<?= base_url() ?>usuarioController/cadastrarUsuario">Cadastrar Usuarios</a>
                            <a class="nav-item nav-link" id="CadastraProdutos" href="<?= base_url() ?>ProdutoController">Cadastrar Produtos</a>
                            <a class="nav-item nav-link" id="Entrar" href="<?= base_url() ?>usuarioController/sair">Sair</a>



                        <?php else:?>
                            <a class="nav-item nav-link" id="Home" href="<?= base_url() ?>HomeController">Home</a>
                            <a class="nav-item nav-link" id="Carrinho" href="<?= base_url() ?>carrinhoController">Carrinho</a>
                            <a class="nav-item nav-link" id="Home" href="<?= base_url() ?>pedidosController/?idUsuario=<?=$usuario_logado['user_id']?>">Meus pedidos</a>
                            <a class="nav-item nav-link" id="Entrar" href="<?= base_url() ?>usuarioController/sair">Sair</a>
                        <?php endif?>
                    <?php else:?>
                            <a class="nav-item nav-link" id="Home" href="<?= base_url() ?>HomeController">Home</a>
                            <a class="nav-item nav-link" id="Entrar" href="<?= base_url() ?>usuarioController/login">Entrar</a>
                            <a class="nav-item nav-link" id="Cadastrar" href="<?= base_url() ?>usuarioController/cadastrarUsuario">Cadastrar-se</a>
                    <?php endif?>
                </div>
            </div>
        </nav>
    </div>
</header>


