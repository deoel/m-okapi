<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MOkapi extends CI_Controller
{
    public function index()
    {
        if($this->session->is_connected)
        {
            redirect('utilisateur/accueil');
        }
        $this->load->view('mokapi_home.php');
    }
}