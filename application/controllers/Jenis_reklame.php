<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_reklame extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }

        if($this->session->userdata('role') != 'admin'){
            redirect('dashboard');
        }

        $this->load->model('Jenis_model');
    }

    public function index()
    {
        $data['jenis'] = $this->Jenis_model->get_all();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jenis_reklame/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jenis_reklame/tambah');
        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'ukuran' => $this->input->post('ukuran'),
            'harga' => $this->input->post('harga'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->Jenis_model->insert($data);

        redirect('jenis_reklame');
    }

    public function edit($id)
    {
        $data['jenis'] = $this->Jenis_model->get_by_id($id);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jenis_reklame/edit',$data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_jenis');

        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'ukuran' => $this->input->post('ukuran'),
            'harga' => $this->input->post('harga'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->Jenis_model->update($id,$data);

        redirect('jenis_reklame');
    }

    public function delete($id)
    {
        $this->Jenis_model->delete($id);

        redirect('jenis_reklame');
    }

}