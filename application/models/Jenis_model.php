<?php

class Jenis_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('jenis_reklame')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('jenis_reklame',[
            'id_jenis' => $id
        ])->row();
    }

    public function insert($data)
    {
        $this->db->insert('jenis_reklame',$data);
    }

    public function update($id,$data)
    {
        $this->db->where('id_jenis',$id);
        $this->db->update('jenis_reklame',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_jenis',$id);
        $this->db->delete('jenis_reklame');
    }

}