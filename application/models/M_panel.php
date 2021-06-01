<?php
class M_panel extends CI_Model{
    public function getpanel()
    {
        return $this->db->query("SELECT * FROM tb_panel a LEFT JOIN tb_ruangan b ON a.id_ruangan=b.id_ruangan LEFT JOIN tb_lokasi c ON a.id_lokasi=c.id_lokasi")->result();
    }

    public function getruangan()
    {
        return $this->db->get('tb_ruangan')->result();
    }

    public function getlokasi()
    {
        return $this->db->get('tb_lokasi')->result();
    }

    public function simpanpanel($data)
    {
        return $this->db->insert('tb_panel',$data);
    }

    public function editpanel($id)
    {
        return $this->db->get_where('tb_panel',['id_panel' => $id])->row_array();
    }

    public function updatepanel($data, $id_panel)
    {
        return $this->db->where('id_panel',$id_panel)->update('tb_panel',$data);
    }

    // public function hapus($id)
    // {
    //     return $this->db->delete('tb_panel',['id_panel',$id]);
    // }

    public function hapus($id)
    {
        return $this->db->where('id_panel',$id)->delete('tb_panel');
    }
}