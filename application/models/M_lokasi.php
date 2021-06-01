<?php
class M_lokasi extends CI_Model{

    public function getlokasi(){
        return $this->db->get('tb_lokasi')->result();
    }

    public function save($lokasi)
    {
        return $this->db->insert('tb_lokasi',['nama_lokasi' => $lokasi]);
    }
    
    public function edit($id)
    {
        return $this->db->get_where('tb_lokasi',['id_lokasi' => $id])->row_array();
    }

    public function update($id_lokasi,$lokasi)
    {
        return $this->db->where('id_lokasi',$id_lokasi)->update('tb_lokasi',['nama_lokasi' => $lokasi]);
    }

    public function hapus($id)
    {
        return $this->db->where('id_lokasi',$id)->delete('tb_lokasi');
    }
}