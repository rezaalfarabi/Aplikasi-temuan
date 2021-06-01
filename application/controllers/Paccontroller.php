<?php
class Paccontroller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_pac');
    }

    public function index() 
    {
        $data['pac'] = $this->M_pac->getpac();
        $this->template->backend('page/pac/index', $data);
    }

    public function tambah()
    {
        $data['ruangan'] = $this->M_pac->getruangan();
        $data['lokasi'] = $this->M_pac->getlokasi();
        $this->template->backend('page/pac/tambahpac', $data);
    }

    public function save()
    {
        $nama_pac = $_POST['nama_pac'];
        $id_ruangan = $_POST['nama_ruangan'];
        $id_lokasi = $_POST['nama_lokasi'];

        $data = array(
            'nama_pac' => $nama_pac,
            'id_lokasi' => $id_lokasi,
            'id_ruangan' => $id_ruangan,
        );

        $save = $this->M_pac->simpanpac($data);
        if($save == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('pac');
        } else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-pac');
        }
    }

    public function edit($id)
    {
        $data['pac'] = $this->M_pac->editpac($id);
        $data['ruangan'] = $this->M_pac->getruangan();
        $data['lokasi'] = $this->M_pac->getlokasi();
        $this->template->backend('page/pac/editpac',$data);
    }

    public function update()
    {
        $nama_pac = $_POST['nama_pac'];
        $id_ruangan = $_POST['id_ruangan'];
        $id_lokasi = $_POST['id_lokasi'];
        $id_pac = $_POST['id_pac'];

        $data = array(
            'nama_pac' => $nama_pac,
            'id_lokasi' => $id_lokasi,
            'id_ruangan' => $id_ruangan,
        );

        $save = $this->M_pac->updatepac($data,$id_pac);
        if($save == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('pac');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-pac');
        }
    }

    public function delete($id)
    {
        $delete = $this->M_pac->hapus($id);
        if($delete == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('pac');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('pac');
        }
    }
}