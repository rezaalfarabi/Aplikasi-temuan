<?php
class M_pkg extends CI_Model {
    public function getpkg() 
    {
        return $this->db->query("SELECT * FROM tb_pkg a LEFT JOIN tb_lokasi b ON a.id_lokasi=b.id_lokasi")->result();
    }

    public function getlokasi()
    {
        return $this->db->get('tb_lokasi')->result();
    }

    public function simpanpkg($data)
    {
        return $this->db->insert('tb_pkg',$data);
    }

    public function editpkg($id)
    {
        return $this->db->get_where('tb_pkg',['id_pkg' => $id])->row_array();
    }

    public function updatepkg($data, $id_pkg)
    {
        return $this->db->where('id_pkg',$id_pkg)->update('tb_pkg',$data);
    }

    public function hapus($id)
    {
        return $this->db->where('id_pkg',$id)->delete('tb_pkg');
    }
}