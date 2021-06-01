<?php
class Lokasicontroller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_lokasi');
    }

    public function index()
    {
        $data['lokasi'] = $this->M_lokasi->getlokasi();
        $this->template->backend('page/lokasi/index',$data);
    }

    public function tambahdata()
    {
        $this->template->backend('page/lokasi/tambahdata');
    }

    public function simpan()
    {
        $lokasi = $_POST['lokasi'];
        $simpan = $this->M_lokasi->save($lokasi);
        if($simpan == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('lokasi');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-lokasi');
        }
    }

    public function edit($id)
    {
        $data['lokasi'] = $this->M_lokasi->edit($id);
        $this->template->backend('page/lokasi/editdata',$data);
    }

    public function simpanedit()
    {
        $id_lokasi = $_POST['id_lokasi'];
        $lokasi = $_POST['lokasi'];
        $update = $this->M_lokasi->update($id_lokasi,$lokasi);
        if($update == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('lokasi');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('lokasi');
        }
    }

    public function delete($id)
    {
        $delete = $this->M_lokasi->hapus($id);
        if($delete == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('lokasi');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('lokasi');
        }
    }
}