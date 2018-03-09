<?php

class Republica extends CI_Model {

    public function validar($where) {
        $this->db->from('cargos');
        $this->db->where($where);

        if ($this->db->count_all_results() == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function cadastrar($dados) {        
        $this->db->trans_start(); // Começa a transação
        
        $this->db->insert('cargos', $dados);
        
        $this->db->trans_complete();// Completa a transação

        return ($this->db->trans_status() === TRUE) ? true : false;
    }
    
    public function atualizar($dados) {        
        $this->db->trans_start(); // Começa a transação
        
        $this->db->set($dados);
        $this->db->where('id', $dados['id']);
        $this->db->update('cargos');
        
        $this->db->trans_complete();// Completa a transação

        return ($this->db->trans_status() === TRUE) ? true : false;
    }
    
    public function excluir($id) {
        $this->db->where('id', $id);
        
        // Começa a transação
        $this->db->trans_start();
        
        $this->db->delete('cargos');
    
        // Completa a transação
        $this->db->trans_complete();
        
        $retorno = ($this->db->trans_status() === FALSE) ? false : true;
        return $retorno;
    }
    
    public function listar_ativos() {
        $this->db->from('cargos');
        $this->db->where('status', 1); 
        $this->db->order_by('nome', 'ASC');        
        
        return $this->db->get()->result_array();
    }
    
    public function listagem_segmentada($inicio, $total) {
        $this->db->from('cargos');
        $this->db->limit($total, $inicio);      
        $this->db->order_by('nome', 'ASC'); 
        
        return $this->db->get()->result_array();
    }
    
    public function contar_todos() {        
        $this->db->from('cargos');
        
        return $this->db->count_all_results();
    }
    
    public function selecionar($id) {        
        $this->db->from('cargos');
        $this->db->where('id', $id);       

        return $this->db->get()->row_array();
    }
    
}
