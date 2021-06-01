<?php
class Pkgcontroller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_pkg');
    }

    public function index()
    {
        $data['pkg'] = $this->M_pkg->getpkg();
        $this->template->backend('page/pkg/index',$data);
    }

    public function tambah()
    {
        $data['lokasi'] = $this->M_pkg->getlokasi();
        $this->template->backend('page/pkg/tambahpkg',$data);
    }

    public function save()
    {
        $nama_pkg = $_POST['nama_pkg'];
        $id_lokasi = $_POST['nama_lokasi'];

        $data = array(
            'nama_pkg' => $nama_pkg,
            'id_lokasi' => $id_lokasi,
        );

        $save = $this->M_pkg->simpanpkg($data);
        if($save == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('pkg');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-pkg');
        }
    }

    public function edit($id)
    {
        $data['pkg'] = $this->M_pkg->editpkg($id);
        $data['lokasi'] = $this->M_pkg->getlokasi();
        $this->template->backend('page/pkg/editpkg',$data);
    }

    public function update()
    {
        $id_pkg = $_POST['id_pkg'];
        $nama_pkg = $_POST['nama_pkg'];
        $id_lokasi = $_POST['id_lokasi'];

        $data = array(
            'nama_pkg' => $nama_pkg,
            'id_lokasi' => $id_lokasi,
        );

        $save = $this->M_pkg->updatepkg($data,$id_pkg);
        if($save == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('pkg');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('tambah-pkg');
        }
    }

    public function delete($id)
    {
        $delete = $this->M_pkg->hapus($id);
        if($delete == true)
        {
            $this->session->set_flashdata('pesan','Success');
            redirect('pkg');
        }else{
            $this->session->set_flashdata('pesan','Error');
            redirect('pkg');
        }
    }
}