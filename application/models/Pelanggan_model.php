<?php

class Pelanggan_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('pelanggan')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('pelanggan',[
            'id_pelanggan' => $id
        ])->row();
    }

    public function insert($data)
    {
        $this->db->insert('pelanggan',$data);
    }

    public function update($id,$data)
    {
        $this->db->where('id_pelanggan',$id);
        $this->db->update('pelanggan',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_pelanggan',$id);
        $this->db->delete('pelanggan');
    }

}