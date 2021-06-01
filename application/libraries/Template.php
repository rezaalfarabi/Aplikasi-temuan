<?php
class Template{
    protected $_ci;
    
    public function __construct(){
        $this->_ci = &get_instance();
    }
     
    public function backend($content, $data = NULL){

        $data['header'] = $this->_ci->load->view('template/header', $data, TRUE);
        $data['navbar'] = $this->_ci->load->view('template/navbar', $data, TRUE);
        $data['menu'] = $this->_ci->load->view('template/menu', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
        $data['script'] = $this->_ci->load->view('template/script', $data, TRUE);
        
        $this->_ci->load->view('template/index', $data);
    }
}