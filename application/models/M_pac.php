<?php
class M_pac extends CI_Model {
    public function getpac() 
    {
        return $this->db->query("SELECT * FROM tb_pac a LEFT JOIN tb_ruangan b ON a.id_ruangan=b.id_ruangan LEFT JOIN tb_lokasi c ON a.id_lokasi=c.id_lokasi")->result();
    }

    public function getruangan()
    {
        return $this->db->get('tb_ruangan')->result();
    }

    public function getlokasi()
    {
        return $this->db->get('tb_lokasi')->result();
    }

    public function simpanpac($data)
    {
        return $this->db->insert('tb_pac',$data);
    }

    public function editpac($id)
    {
        return $this->db->get_where('tb_pac',['id_pac' => $id])->row_array();
    }

    public function updatepac($data, $id_pac)
    {
        return $this->db->where('id_pac',$id_pac)->update('tb_pac',$data);
    }

    public function hapus($id)
    {
        return $this->db->where('id_pac',$id)->delete('tb_pac');
    }
}