<?php

class Pedidos_model extends CI_Model {

    public function index($idUsuario){ 
        return $this->db->get_where('pedidos', array('id_usuario'=> $idUsuario))->result_array();
    }
    public function deletar($id){
        $this->db->where("id",$id);
        return $this->db->delete("pedidos");  
    }
    public function selecionarPedido($id){
        return $this->db->get_where('pedidos', array('id'=> $id))->result_array();

    }
    public function todosPedidos(){
        return $this->db->get('pedidos')->result_array();

    }
}
?>
