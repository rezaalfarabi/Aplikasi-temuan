<?php
class Ruangancontroller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_ruangan');
    }

    public function index() 
    {
        $data['ruangan'] = $this->M_ruangan->getruangan();
        $this->template->backend('page/ruangan/index', $data);
    }

    public function tambahruangan() 
    {
        $this->template->backend('page/ruangan/tambahruangan');
    }

    public function simpan() 
    {
        $ruangan = $_POST['ruangan'];
        $simpan = $this->M_ruangan->save($ruangan);
        if($simpan == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('ruangan');
        } else {
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-ruangan');
        }
    }

    public function edit($id)
    {
        $data['ruangan'] = $this->M_ruangan->edit($id);
        $this->template->backend('page/ruangan/editruangan',$data);
    }

    public function simpanedit()
    {
        $id_ruangan = $_POST['id_ruangan'];
        $ruangan = $_POST['ruangan'];
        $update = $this->M_ruangan->update($id_ruangan,$ruangan);
        if($update == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('ruangan');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('ruangan');
        }
    }

    public function delete($id)
    {
        $delete = $this->M_ruangan->hapus($id);
        if($delete == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('ruangan');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('ruangan');
        }
    }
}