<?php
class Homecontroller extends CI_Controller{

    public function __construct(){
        parent::__construct();
        // cara load library template
        // $this->load->library('template');
    }

    public function index()
    {
        $this->template->backend('home');
    }

    public function datamaster()
    {
        $this->template->backend('home1');
    }

}