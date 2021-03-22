<?php
class ProduktivitasDataKabupatenController extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // $data['data'] = $this->db->query("SELECT tb_output.produksi, tb_tahun.tahun FROM tb_output JOIN tb_input JOIN tb_tahun JOIN tb_bulan ON tb_output.id_input = tb_input.id AND tb_input.id_tahun = tb_tahun.id AND tb_bulan.id = tb_input.id_bulan WHERE tb_bulan.bulan = 'Januari-April' ORDER BY tb_tahun.tahun LIMIT 4")->result_array();
        // $data['mei'] = $this->db->query("SELECT tb_output.produksi, tb_tahun.tahun FROM tb_output JOIN tb_input JOIN tb_tahun JOIN tb_bulan ON tb_output.id_input = tb_input.id AND tb_input.id_tahun = tb_tahun.id AND tb_bulan.id = tb_input.id_bulan WHERE tb_bulan.bulan = 'Mei-Agustus' ORDER BY tb_tahun.tahun LIMIT 4")->result_array();
        $data['dua'] = $this->db->query("SELECT SUM(tb_output.produktivitas) AS sum FROM tb_input JOIN tb_output JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id AND tb_output.id_input = tb_input.id WHERE tb_tahun.tahun = '2012'")->row_array();
        $data['tiga'] = $this->db->query("SELECT SUM(tb_output.produktivitas) AS sum FROM tb_input JOIN tb_output JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id AND tb_output.id_input = tb_input.id WHERE tb_tahun.tahun = '2013'")->row_array();
        $data['empat'] = $this->db->query("SELECT SUM(tb_output.produktivitas) AS sum FROM tb_input JOIN tb_output JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id AND tb_output.id_input = tb_input.id WHERE tb_tahun.tahun = '2014'")->row_array();
        $data['lima'] = $this->db->query("SELECT SUM(tb_output.produktivitas) AS sum FROM tb_input JOIN tb_output JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id AND tb_output.id_input = tb_input.id WHERE tb_tahun.tahun = '2015'")->row_array();
        // var_dump($data);
        // die;
        $this->load->view('templates/header');
        $this->load->view('produktivitaskabupaten/index', $data);
        $this->load->view('templates/footer');
    }
}
