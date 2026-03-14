<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }

        if($this->session->userdata('role') != 'admin'){
            redirect('dashboard');
        }

        $this->load->model('Pelanggan_model');
    }

    public function index()
    {
        $data['pelanggan'] = $this->Pelanggan_model->get_all();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pelanggan/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pelanggan/tambah');
        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $data = [
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'perusahaan' => $this->input->post('perusahaan'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'email' => $this->input->post('email')
        ];

        $this->Pelanggan_model->insert($data);

        redirect('pelanggan');
    }

    public function edit($id)
    {
        $data['pelanggan'] = $this->Pelanggan_model->get_by_id($id);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pelanggan/edit',$data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_pelanggan');

        $data = [
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'perusahaan' => $this->input->post('perusahaan'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'email' => $this->input->post('email')
        ];

        $this->Pelanggan_model->update($id,$data);

        redirect('pelanggan');
    }

    public function delete($id)
    {
        $this->Pelanggan_model->delete($id);

        redirect('pelanggan');
    }

}