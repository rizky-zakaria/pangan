<?php
class IndexController14 extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('kabupatenbonebolango/index14');
        $this->load->view('templates/footer');
    }
}
