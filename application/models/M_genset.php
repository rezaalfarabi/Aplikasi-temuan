<?php
class M_genset extends CI_Model {
    public function getgenset() 
    {
        return $this->db->query("SELECT * FROM tb_genset a LEFT JOIN tb_lokasi b ON a.id_lokasi=b.id_lokasi")->result();
    }

    public function getlokasi()
    {
        return $this->db->get('tb_lokasi')->result();
    }

    public function simpangenset($data)
    {
        return $this->db->insert('tb_genset',$data);
    }

    public function editgenset($id)
    {
        return $this->db->get_where('tb_genset',['id_genset' => $id])->row_array();
    }

    public function updategenset($data, $id_genset)
    {
        return $this->db->where('id_genset',$id_genset)->update('tb_genset',$data);
    }

    public function hapus($id)
    {
        return $this->db->where('id_genset',$id)->delete('tb_genset');
    }
}