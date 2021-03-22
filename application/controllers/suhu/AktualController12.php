<?php
class AktualController12 extends CI_Controller
{
    public function index()
    {
    	 $data['data'] = $this->db->query("SELECT tb_input.suhu, tb_bulan.bulan FROM tb_input JOIN tb_tahun JOIN tb_bulan ON tb_input.id_tahun= tb_tahun.id AND tb_bulan.id = tb_input.id_bulan WHERE tb_tahun.tahun = '2012' ORDER BY tb_tahun.tahun LIMIT 4")->result_array();
        $this->load->view('templates/header');
        $this->load->view('suhu/index12', $data);
        $this->load->view('templates/footer');
    }
}



