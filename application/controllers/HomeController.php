<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("produtos_model");
    }

    public function index()
    {
        $data['produtos'] = $this->produtos_model->index();
        $data['title'] = "Home";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('pages/atualizarProdutos', $data);
    }
}
