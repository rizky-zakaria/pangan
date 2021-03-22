<?php
class IndexController15 extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('kabupatenbonebolango/index15');
        $this->load->view('templates/footer');
    }
}
