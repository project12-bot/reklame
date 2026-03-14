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
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('dashboard/admin');
            $this->load->view('template/footer');
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