<?php
class Upscontroller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_ups');
    }

    public function index() 
    {
        $data['ups'] = $this->M_ups->getups();
        $this->template->backend('page/ups/index', $data);
    }

    public function tambah()
    {
        $data['ruangan'] = $this->M_ups->getruangan();
        $data['lokasi'] = $this->M_ups->getlokasi();
        $this->template->backend('page/ups/tambahups', $data);
    }

    public function save()
    {
        $nama_ups = $_POST['nama_ups'];
        $id_ruangan = $_POST['nama_ruangan'];
        $id_lokasi = $_POST['nama_lokasi'];

        $data = array(
            'nama_ups' => $nama_ups,
            'id_lokasi' => $id_lokasi,
            'id_ruangan' => $id_ruangan,
        );

        $save = $this->M_ups->simpanups($data);
        if($save == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('ups');
        } else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-ups');
        }
    }

    public function edit($id)
    {
        $data['ups'] = $this->M_ups->editups($id);
        $data['ruangan'] = $this->M_ups->getruangan();
        $data['lokasi'] = $this->M_ups->getlokasi();
        $this->template->backend('page/ups/editups',$data);
    }

    public function update()
    {
        $nama_ups = $_POST['nama_ups'];
        $id_ruangan = $_POST['id_ruangan'];
        $id_lokasi = $_POST['id_lokasi'];
        $id_ups = $_POST['id_ups'];

        $data = array(
            'nama_ups' => $nama_ups,
            'id_lokasi' => $id_lokasi,
            'id_ruangan' => $id_ruangan,
        );

        $save = $this->M_ups->updateups($data,$id_ups);
        if($save == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('ups');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-ups');
        }
    }

    public function delete($id)
    {
        $delete = $this->M_ups->hapus($id);
        if($delete == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('ups');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('ups');
        }
    }
}