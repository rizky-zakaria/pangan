<?php
class DashboardController extends CI_Controller
{
    public function index()
    {
    	 $data['dua'] = $this->db->query("SELECT SUM(tb_output.produktivitas) AS sum FROM tb_input JOIN tb_output JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id AND tb_output.id_input = tb_input.id WHERE tb_tahun.tahun = '2012'")->row_array();
        $data['tiga'] = $this->db->query("SELECT SUM(tb_output.produktivitas) AS sum FROM tb_input JOIN tb_output JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id AND tb_output.id_input = tb_input.id WHERE tb_tahun.tahun = '2013'")->row_array();
        $data['empat'] = $this->db->query("SELECT SUM(tb_output.produktivitas) AS sum FROM tb_input JOIN tb_output JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id AND tb_output.id_input = tb_input.id WHERE tb_tahun.tahun = '2014'")->row_array();
        $data['lima'] = $this->db->query("SELECT SUM(tb_output.produktivitas) AS sum FROM tb_input JOIN tb_output JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id AND tb_output.id_input = tb_input.id WHERE tb_tahun.tahun = '2015'")->row_array();
        $this->load->view('templates/header');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
