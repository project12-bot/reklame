<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('auth/login');
        $this->load->view('template/footer');
    }

    public function login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Auth_model->login($username);

        if($user){

            if(password_verify($password,$user->password)){

                $data_session = [
                    'id_user' => $user->id_user,
                    'nama_user' => $user->nama_user,
                    'username' => $user->username,
                    'role' => $user->role,
                    'login' => TRUE
                ];

                $this->session->set_userdata($data_session);

                redirect('dashboard');

            }else{
                $this->session->set_flashdata('error','Password salah');
                redirect('auth');
            }

        }else{
            $this->session->set_flashdata('error','Username tidak ditemukan');
            redirect('auth');
        }

    }

    public function logout(){

        $this->session->sess_destroy();
        redirect('auth');

    }

}