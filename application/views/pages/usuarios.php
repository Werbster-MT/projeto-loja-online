<?php   
    
    if (isset($_SESSION['usuario_logado'])){
        $usuario_logado = $_SESSION['usuario_logado'];
    }else{
        redirect(base_url());
    }

?>
<br><br><br>
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Usuarios</h1>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Tipo</th>
                    <th>Carrinhos</th>
                    <th>Pedidos</th>
                    <th>Acao</th>

				</tr>
			</thead>
			<tbody>
                <?php foreach($usuarios as $usuario):?>
                    <tr>
                        <td><?= $usuario["user_id"] ?></td>
                        <td><?= $usuario["nome"] ?></td>
                        <td><?= $usuario["email"] ?></td>
                        <td><?= $usuario["telefone"] ?></td>
                        <td><?= $usuario["tipo"] ?></td>
                        <td><?= $usuario["carrinho"] ?></td>
                        
                        <?php 
                        $resultadoPedidos = array();
                        foreach($pedidos as $pedido){
                            if($pedido['id_usuario'] == $usuario["user_id"]){
                                array_push($resultadoPedidos, $pedido['id']);
                            }else{

                            }
                        }
                        ?>
                            
                        <td><?php
                            $idPedidos = implode(',', $resultadoPedidos);
                            $idPedidos = rtrim($idPedidos, ",");
                            echo $idPedidos;
                        
                            ?></td>
                            
                        
                        <td>
                        <a  class="btn btn " id="botaoCard" data-toggle="modal" data-target="#modalAttUsuario<?= $usuario['user_id']?>">
                        <i class="bi bi-pencil">
                        </i>
                            <a href="javascript:goDelete(<?= $usuario['user_id']?>,<?= $usuario_logado['user_id']?>)" class='btn btn-sm btn-danger '>
                            <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
        <?php endforeach?>
			</tbody>
		</table>
	</div>
</main>

<script>
    function goDelete(id,idUsuarioLogado){
        var myUrl = 'deletarUsuario/'+id+'/'+idUsuarioLogado
        if(confirm('Deseja realmente apagar esse registro?')){
            window.location.href =myUrl
        }else{
            alert("Registro não alterado")
            return false
        }
    }
</script>