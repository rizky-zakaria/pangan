<?php
class IndexController12 extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('kabupatenpohuwato/index12');
        $this->load->view('templates/footer');
    }
}
