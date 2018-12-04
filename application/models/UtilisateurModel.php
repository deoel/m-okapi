<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UtilisateurModel extends CI_Model
{
    public $table = 'utilisateur';

    public function creer_utilisateur($infos)
    {
        $this->db->insert($this->table, $infos);
    }

    public function check_authentification($data)
    {
        $this->db->where($data);
        $q = $this->db->get($this->table);
        $res = $q->result();
        return  $res;
    }
}