<?php


function permicao(){

    $ci = get_instance();
    $usuarioLogado = $ci->session->userdata("usuario_logado");

    if(!$usuarioLogado){
        $ci->session->set_flashdata("danger", "Você precisa estar logado para acessar a página");
        redirect(base_url().'/usuarioController/login');
    }
    return $usuarioLogado;
}

