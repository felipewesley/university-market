<?php
/**
 * este arquivo é responsavel por conversar com o banco de dados
 */
class Usuario_model extends CI_Model
{
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

    public function logarUsuarios($username,$senha)
    {
        //return $this->db->get_where('usuario', array ('nome' => $username))->result();
            if($this->db->get_where('usuario', array ('nome' => $username))->result() == $username){
                if($this->db->get_where('usuario', array ('senha' => $senha))->result() == $senha){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        //$senha =$this->db->get_where('usuario', ['senha' => $senha]);
        //return $usuario()->result();
         
    }
}
