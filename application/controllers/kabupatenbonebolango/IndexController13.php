<?php
class IndexController13 extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('kabupatenbonebolango/index13');
        $this->load->view('templates/footer');
    }
}
