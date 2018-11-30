<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller
{
    public function form_inscription()
    {
        $this->load->view('utilisateur/form_inscription');
    }

    public function form_authentification()
    {
        $this->load->view('utilisateur/form_authentification');
    }

    public function nouvel_utilisateur()
    {
        $nomcomplet = $this->input->post('nomcomplet');
        $email = $this->input->post('email');
        $login = $this->input->post('login');
        $mdp = $this->input->post('mdp');
        $mdpconf = $this->input->post('mdpconf');

        $data = array(
            'nomcomplet' => $nomcomplet,
            'email' => $email,
            'login' => $login,
            'mdp' => $mdp,
            'etat' => FALSE
        );

        $this->load->model('UtilisateurModel');
        $this->UtilisateurModel->creer_utilisateur($data);
    
        $this->load->view('utilisateur/inscription_success');
    }
}