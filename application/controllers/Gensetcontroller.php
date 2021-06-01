<?php
class Gensetcontroller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_genset');
    }

    public function index()
    {
        $data['genset'] = $this->M_genset->getgenset();
        $this->template->backend('page/genset/index',$data);
    }

    public function tambah()
    {
        $data['lokasi'] = $this->M_genset->getlokasi();
        $this->template->backend('page/genset/tambahgenset',$data);
    }

    public function save()
    {
        $nama_genset = $_POST['nama_genset'];
        $id_lokasi = $_POST['nama_lokasi'];

        $data = array(
            'nama_genset' => $nama_genset,
            'id_lokasi' => $id_lokasi,
        );

        $save = $this->M_genset->simpangenset($data);
        if($save == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('genset');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-genset');
        }
    }

    public function edit($id)
    {
        $data['genset'] = $this->M_genset->editgenset($id);
        $data['lokasi'] = $this->M_genset->getlokasi();
        $this->template->backend('page/genset/editgenset',$data);
    }

    public function update()
    {
        $id_genset = $_POST['id_genset'];
        $nama_genset = $_POST['nama_genset'];
        $id_lokasi = $_POST['id_lokasi'];

        $data = array(
            'nama_genset' => $nama_genset,
            'id_lokasi' => $id_lokasi,
        );

        $save = $this->M_genset->updategenset($data,$id_genset);
        if($save == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('genset');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-genset');
        }
    }

    public function delete($id)
    {
        $delete = $this->M_genset->hapus($id);
        if($delete == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('genset');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('genset');
        }
    }
}