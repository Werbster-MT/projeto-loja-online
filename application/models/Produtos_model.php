<?php

class Produtos_model extends CI_Model {


    public function index(){ 
        return $this->db->get("produtos")->result_array();
    }



    public function novo($produto){
        $this->db->insert('produtos', $produto);
    }
        
    public function deletar($id){
        $this->db->where("id",$id);
        return $this->db->delete("produtos");  
    }

    public function atualizar($produto){

        $this->db->set($produto);
        $this->db->where('id', $produto['id']);
        $this->db->update('produtos');

    }

    public function atualizarEstoque($produto){
        $this->db->set('quantidade',$produto['quantidade']);
        $this->db->where('id', $produto['id']);
        $this->db->update('produtos');
    }
    public function selecionarProdutosId($idProduto){
        return $this->db->get_where('produtos', array('id'=> $idProduto))->result_array();

    }
    
}
?>
