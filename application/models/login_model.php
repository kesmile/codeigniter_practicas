<?php

class login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsers()
    {
        $this->db->select('usuarios.username, usuarios.password , perfil.name as perfil')
             ->from('usuarios')
             ->join('perfil','usuarios.id_perfil=perfil.id');
        $query = $this->db->get();
        
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }
}
