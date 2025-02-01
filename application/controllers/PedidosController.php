<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pedidosController extends CI_Controller{
    public function index()
	{  
        $id_usuario = $_GET['idUsuario'];
        $this->load->model("pedidos_model");
        $data['pedidos'] = $this->pedidos_model->index($id_usuario);
        $data['title'] = "Pedidos";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/pedidos', $data);

	}
    public function deletar($idPedido, $id_usuario){
        $this->load->model("pedidos_model");
        $this->pedidos_model->deletar($idPedido);
        redirect(base_url().'/PedidosController/?idUsuario='.$id_usuario);

    }

    public function visualizarProdutosPedidos($id_pedido, $id_usuario){
        $this->load->model("pedidos_model");
        $this->load->model("produtos_model");

        $data['pedidos'] = $this->pedidos_model->selecionarPedido($id_pedido);
        $data['produtos'] = $this->produtos_model->index();
        $data['title'] = "Vizualizar Produtos";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/visualizarProdutos', $data, $id_pedido);
    }
}
?>
