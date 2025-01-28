<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class carrinhoController extends CI_Controller{
    public function index()
	{   
        $this->load->model("usuarios_model");
        $this->load->model("produtos_model");
        
        $data['title'] = "Carrinho";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/carrinho', $data);


	}

    public function adicionarCarrinho($idProduto, $idUser){
        $this->load->model("carrinho_model");
        $this->carrinho_model->adicionarCarrinho($idProduto, $idUser);
        redirect(base_url());
    }

    public function deletarProdutoCarrinho($idProduto, $idUser){
        $this->load->model("carrinho_model");
        $this->carrinho_model->deletarProdutoCarrinho($idProduto, $idUser);
        redirect(base_url().'/CarrinhoController');
    }
    
    public function finalizar($idsProdutos, $idUsuario, $valor){
        $this->load->model("carrinho_model");
        $this->carrinho_model->finalizar($idsProdutos, $idUsuario, $valor);
        redirect(base_url().'/CarrinhoController');  
    }
} 

?>