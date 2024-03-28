<?php   
    if (isset($_SESSION['usuario_logado'])){
        $usuario_logado = $_SESSION['usuario_logado'];
    }else{
        redirect(base_url());
    }
    $carrinho = $this->usuarios_model->retornaProdutosCarrinho($usuario_logado['user_id']);
    $produtosArray = json_decode($carrinho['carrinho'], true);
    $produtosPedidos = array();
    $valorPedido = 0;
            
?>



<br><br><br>

<main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2>Carrinho</h2>
	</div>


	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Tamanho</th>
                    <th>Valor</th>
                    <th>Descricao</th>
				</tr>
			</thead>
			<tbody>
                <?php 
                    if(!(is_array($produtosArray))):?>
                        <p>Você não tem nenhum produto no carrinho</p>
                    <?php else:
                        foreach ($produtosArray as $produtos): //captando os dados que vinheram do banco
                            if (is_array($produtos)): 

                                foreach ($produtos as $produto) : //interando o array
                                    $resultadoProdutos = $this->produtos_model->selecionarProdutosId($produto['id_produto']);
                                        foreach($resultadoProdutos as $produto):
                                            array_push($produtosPedidos, $produto['id']);
                                            $valorPedido+=$produto['valor']
                                            
                                        
                                        ?>
                                            <tr>
                                                <td><img class="card-img-top" src="<?= base_url()?>assets/img/<?php echo $produto['foto']?>" alt="Imagem roupa"></td>
                                                <td><?php echo $produto['nome'];?></td>
                                                <td><?php echo $produto['tamanho'];?></td>
                                                <td><?php echo $produto['valor'];?></td>
                                                <td><?php echo $produto['descricao'];?></td>
                                                
                                                <td>
                                                    <a href="javascript:goDelete(<?= $usuario_logado['user_id']?>,<?= $produto['id']?> )" class='btn btn-sm btn-danger '>
                                                    <i class="bi bi-trash3"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach?>
                                <?php endforeach?>
                            <?php endif?>     

                        <?php endforeach?>
                        
                    <?php endif;
                        $produtosPedidosJson  = json_encode($produtosPedidos);
                    ?>

			</tbody>
		</table>
        <h4>Valor Final: <?php echo  $valorPedido;?> </h4>

        <a   href="<?= base_url()?>carrinhoController/finalizar/<?= urlencode($produtosPedidosJson) ?>/<?= $usuario_logado['user_id'];?>/<?=$valorPedido?>" class="btn btn btn-sm"  id="botaoCard" id="botao">Finalizar pedido</a>
	</div>

</main>

<script>
    function goDelete(idUsuario, idProduto){
        var myUrl = 'carrinhoController/deletarProdutoCarrinho/'+idUsuario+'/'+idProduto
        if(confirm('Deseja realmente apagar esse registro?')){
            window.location.href =myUrl
        }else{
            alert("Registro não alterado")
            return false
        }
    }
</script>