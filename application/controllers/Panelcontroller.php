<?php
class Panelcontroller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_panel');
    }

    public function index()
    {
        $data['panel'] = $this->M_panel->getpanel();
        $this->template->backend('page/panel/index',$data);
    }

    public function tambah()
    {
        $data['ruangan'] = $this->M_panel->getruangan();
        $data['lokasi'] = $this->M_panel->getlokasi();
        $this->template->backend('page/panel/tambahpanel',$data);
    }

    public function save()
    {
        $nama_panel = $_POST['nama_panel'];
        $jumlah_inputan = $_POST['jumlah_inputan'];
        $id_ruangan = $_POST['nama_ruangan'];
        $id_lokasi = $_POST['nama_lokasi'];

        $data = array(
            'nama_panel' => $nama_panel,
            'id_lokasi' => $id_lokasi,
            'id_ruangan' => $id_ruangan,
            'jumlah_inputan' => $jumlah_inputan,
        );

        $save = $this->M_panel->simpanpanel($data);
        if($save == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('panel');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-panel');
        }
    }

    public function edit($id)
    {
        $data['ruangan'] = $this->M_panel->getruangan();
        $data['lokasi'] = $this->M_panel->getlokasi();
        $data['panel'] = $this->M_panel->editpanel($id);
        $this->template->backend('page/panel/editpanel',$data);
    }

    public function update()
    {
        $nama_panel = $_POST['nama_panel'];
        $jumlah_inputan = $_POST['jumlah_inputan'];
        $id_ruangan = $_POST['id_ruangan'];
        $id_lokasi = $_POST['id_lokasi'];
        $id_panel = $_POST['id_panel'];

        $data = array(
            'nama_panel' => $nama_panel,
            'id_lokasi' => $id_lokasi,
            'id_ruangan' => $id_ruangan,
            'jumlah_inputan' => $jumlah_inputan,
        );

        $save = $this->M_panel->updatepanel($data,$id_panel);
        if($save == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('panel');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-panel');
        }
    }

    public function delete($id)
    {
        $delete = $this->M_panel->hapus($id);
        if($delete == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('panel');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('panel');
        }
    }
}