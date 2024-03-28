<?php

class Usuarios_model extends CI_Model {


    public function index(){ 
        return $this->db->get("usuarios")->result_array();
    }



    public function novo($usuarios){
        $this->db->insert('usuarios', $usuarios);
    }
        
    public function deletar($id){
        $this->db->where("user_id",$id);
        return $this->db->delete("usuarios");  
    }

    public function atualizar($usuario){

        $this->db->set($usuario);
        $this->db->where('user_id', $usuario['user_id']);
        $this->db->update('usuarios');

    }
    public function login($email, $senha){
        $this->db->where('email', $email);
        $this->db->where('senha',$senha);
        $user = $this->db->get('usuarios')->row_array();
        $this->db->set('logado', 1);
        return $user;
    }

    public function retornaProdutosCarrinho($idUser){
        $this->db->select('carrinho');
        $this->db->where('user_id', $idUser); 
        return $this->db->get('usuarios')->row_array();
        
    }

}
?>