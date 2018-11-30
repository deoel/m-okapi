<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UtilisateurModel extends CI_Model
{
    public $table = 'utilisateur';

    public function creer_utilisateur($infos)
    {
        $this->db->insert($this->table, $infos);
    }
}