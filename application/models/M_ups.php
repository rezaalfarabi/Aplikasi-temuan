<?php
class M_ups extends CI_Model {
    public function getups() 
    {
        return $this->db->query("SELECT * FROM tb_ups a LEFT JOIN tb_ruangan b ON a.id_ruangan=b.id_ruangan LEFT JOIN tb_lokasi c ON a.id_lokasi=c.id_lokasi")->result();
    }

    public function getruangan()
    {
        return $this->db->get('tb_ruangan')->result();
    }

    public function getlokasi()
    {
        return $this->db->get('tb_lokasi')->result();
    }

    public function simpanups($data)
    {
        return $this->db->insert('tb_ups',$data);
    }

    public function editups($id)
    {
        return $this->db->get_where('tb_ups',['id_ups' => $id])->row_array();
    }

    public function updateups($data, $id_ups)
    {
        return $this->db->where('id_ups',$id_ups)->update('tb_ups',$data);
    }

    public function hapus($id)
    {
        return $this->db->where('id_ups',$id)->delete('tb_ups');
    }
}