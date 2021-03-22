<?php
class IndexController14 extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('kabupatenboalemo/index14');
        $this->load->view('templates/footer');
    }
}
