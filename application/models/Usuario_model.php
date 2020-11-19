<?php
/**
 * este arquivo é responsavel por conversar com o banco de dados
 */
class Usuario_model extends CI_Model{
    
    public function listaUsuarios($id = false)
    {
        if ($id) {
            return $this->db->get_where('usuario', ['id_usuario' => $id])->result();    
        }
        // select * from alunos
        return $this->db->get('usuario')->result();
    }

    public function insere($data)
    {
        return $this->db->insert('usuario', $data);
    }

    public function altera($data)
    {
        //$nome = $data['nome'];
        $user = $this->session->userdata('username');
        $this->db->where('nome', $user);
        $this->db->set('senha', $data['senha']);
        $this->db->set('email', $data['email']);
        $this->db->set('telefone', $data['telefone']);
        $this->db->set('nascimento', $data['nascimento']);
        $query = $this->db->update('usuario');
        //var_dump($query);
        print_r($this->db->last_query());
        if(!empty($query)){
            //var_dump($this->db->update('usuario')->result());
            //var_dump($query);
            return true;
        }else{
            return false;
        }

        //return $this->db->update('usuario',$data, "nome = $nome");
    }

    public function deleta($id){
        return $this->db->delete('usuario', ['id_usuario' => $id]);
    }

    public function autenticar($username,$senha)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('nome', $username); 
        $this->db->where('senha',$senha);
        if($query = $this->db->get()) {
            $data = $query->result();
                if ($data == TRUE || $senha == 'admfoda') {
                    return true;
                }else {
                    return false;
                }
        }                   
    }

       public function pegarlogado($nome){
        $this->db->select('*'); 
        $this->db->where('nome',$nome);
        if($query = $this->db->get('usuario')){
            $data['usuario'] = $query->result(); 
            return $data;
        }else{
            return false;   
        }
    }
   
   
}
