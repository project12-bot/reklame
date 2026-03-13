<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){

        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }

    }

    public function index(){

        $role = $this->session->userdata('role');

        if($role == 'admin'){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('dashboard/admin');
            $this->load->view('templates/footer');
        }
        elseif($role == 'produksi'){
            $this->load->view('dashboard/produksi');
        }
        elseif($role == 'pemasangan'){
            $this->load->view('dashboard/pemasangan');
        }
        elseif($role == 'keuangan'){
            $this->load->view('dashboard/keuangan');
        }

    }

}