<br><br><br>
<?php
    
    if (isset($_SESSION['usuario_logado'])){
        $usuario_logado = $_SESSION['usuario_logado'];
    }else{
        redirect(base_url());
    }
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Pedidos</h1>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
                    <th>Codigo Pedido</th>
                    <th>Status</th>
                    <th>Data Entrega</th>
                    <th>Valor</th>

				</tr>
			</thead>
			<tbody>
                <?php foreach($pedidos as $pedido):?>
                    <tr>
                            <td><?= $pedido["id"] ?></td>
                            <td><?= $pedido["status"] ?></td>
                            <td><?= $pedido["data_entrega"] ?></td>
                            <td><?= $pedido["valor"] ?></td>


                            <td>
                            <!-- <a  class="btn btn " id="botaoCard" data-toggle="modal" data-target="#modalAttUsuario<?= $usuario['user_id']?>">
                            <i class="bi bi-pencil"> 
                            </i>-->
                                <a href="<?= base_url()?>pedidosController/visualizarProdutosPedidos/<?=$pedido["id"]?>/<?=$usuario_logado['user_id']?>" class='btn btn-sm' id='botaoCard'>
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="javascript:goDelete(<?= $pedido['id']?>,<?=$usuario_logado['user_id']?>)" class='btn btn-sm btn-danger '>
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
    function goDelete(idPedido,idUsuario){
        var myUrl = 'deletar/'+idPedido+'/'+idUsuario
        if(confirm('Deseja realmente apagar esse registro?')){
            window.location.href =myUrl
        }else{
            alert("Registro não alterado")
            return false
        }
    }
</script>