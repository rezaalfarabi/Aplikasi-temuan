<?php
class M_ruangan extends CI_Model {

    public function getruangan() 
    {
        return $this->db->get('tb_ruangan')->result();
    }

    public function save($ruangan) 
    {
        return $this->db->insert('tb_ruangan', ['nama_ruangan' => $ruangan]);
    }

    public function edit($id)
    {
        return $this->db->get_where('tb_ruangan', ['id_ruangan' => $id])->row_array();
    }

    public function update($id_ruangan,$ruangan)
    {
        return $this->db->where('id_ruangan',$id_ruangan)->update('tb_ruangan',['nama_ruangan' => $ruangan]);
    }

    public function hapus($id)
    {
        return $this->db->where('id_ruangan',$id)->delete('tb_ruangan');
    }
}