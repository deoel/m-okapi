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
        $this->form_validation->set_rules('nomcomplet', 'nomcomplet', 'required|min_length[8]',
            array('required' => 'Le nom complet est obligatoire',
                'min_length' => '8 caractères minimum'));
        $this->form_validation->set_rules('email', 'email', 'required|valid_email', 
            array('required' => 'Email obligatoire',
                'valid_email' => 'Email invalide'));
        $this->form_validation->set_rules('login', 'login','required|min_length[8]',
            array('required' => 'Login obligatoire',
                    'min_length' => '8 caractères minimum')
        );
        $this->form_validation->set_rules('mdp', 'mdp', 'required|min_length[8]',
        array('required' => 'Mot de passe obligatoire', 'min_length' => '8 caractères minimum'));
        $this->form_validation->set_rules('mdpconf', 'mdpconf', 'matches[mdp]',
        array('matches' => 'Mot de passe incohérent'));

        if($this->form_validation->run())
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
        else
        {
            $this->load->view('utilisateur/form_inscription');
        }
        
    }

    public function connexion()
    {
        $login = $this->input->post('login');
        $mdp = $this->input->post('mdp');
        $d = array(
            'login' => $login,
            'mdp' => $mdp
        );

        $this->load->model('UtilisateurModel');
        $r = $this->UtilisateurModel->check_authentification($d);

        if(count($r) > 0)
        {
            $user = $r[0];
            $d = array(
                'id' => $user->id,
                'nomcomplet' => $user->nomcomplet,
                'is_connected' => true
            );
            $this->session->set_userdata($d);
            redirect('utilisateur/accueil');
        }
        else
        {
            $d = array(
                'error_login' => 'Login ou mot de passe incorrect'
            );
            
            $this->session->set_flashdata($d);
            $form_auth = $this->load->view('utilisateur/form_authentification', [], true);
            $d = array('page' => $form_auth);
            $this->load->view('mokapi_home', $d);
        }
    }

    public function accueil()
    {
        if($this->session->is_connected)
        {
            $this->load->view('utilisateur/accueil');
        }
        else
        {
            redirect();
        }
    }

    public function deconnexion()
    {
        $this->session->unset_userdata('is_connected');
        redirect();
    }
}