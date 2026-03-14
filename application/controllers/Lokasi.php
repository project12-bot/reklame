<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }

        $this->load->model('Lokasi_model');
    }

    public function index()
    {
        $data['lokasi'] = $this->Lokasi_model->get_all();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('lokasi/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if($this->session->userdata('role') != 'admin'){
            redirect('lokasi');
        }

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('lokasi/tambah');
        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $data = [
            'nama_lokasi' => $this->input->post('nama_lokasi'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'koordinat' => $this->input->post('koordinat')
        ];

        $this->Lokasi_model->insert($data);

        redirect('lokasi');
    }

    public function edit($id)
    {
        if($this->session->userdata('role') != 'admin'){
            redirect('lokasi');
        }

        $data['lokasi'] = $this->Lokasi_model->get_by_id($id);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('lokasi/edit',$data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_lokasi');

        $data = [
            'nama_lokasi' => $this->input->post('nama_lokasi'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'koordinat' => $this->input->post('koordinat')
        ];

        $this->Lokasi_model->update($id,$data);

        redirect('lokasi');
    }

    public function delete($id)
    {
        if($this->session->userdata('role') != 'admin'){
            redirect('lokasi');
        }

        $this->Lokasi_model->delete($id);

        redirect('lokasi');
    }
    public function map()
{
    $data['lokasi'] = $this->Lokasi_model->get_map();

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('lokasi/map',$data);
    $this->load->view('template/footer');
}

}