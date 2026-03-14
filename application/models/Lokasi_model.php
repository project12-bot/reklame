<?php

class Lokasi_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('lokasi')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('lokasi',[
            'id_lokasi' => $id
        ])->row();
    }

    public function insert($data)
    {
        $this->db->insert('lokasi',$data);
    }

    public function update($id,$data)
    {
        $this->db->where('id_lokasi',$id);
        $this->db->update('lokasi',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_lokasi',$id);
        $this->db->delete('lokasi');
    }
    public function get_map()
{
    return $this->db->get('lokasi')->result();
}

}