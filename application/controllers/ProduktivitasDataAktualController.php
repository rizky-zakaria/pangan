<?php
class ProduktivitasDataAktualController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $tahun = $this->db->query("SELECT * FROM tb_tahun ORDER BY tahun DESC LIMIT 4")->result_array();
        // var_dump($tahun);
        // die;
        $no = 1;
        // foreach ($tahun as $thn) {
        //     $data[$no++] = $this->db->query("SELECT SUM(tb_input.suhu) AS suhu, SUM(tb_input.kelembapan) AS kelembapan, SUM(tb_input.curah_hujan) AS curah, SUM(tb_input.penyinaran_matahari) AS matahari FROM tb_input JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id WHERE tb_tahun.tahun = '" . $thn['tahun'] . "'")->row_array();
        //     echo $thn[$no++];
        // echo $thn;
        //     die;
        // }
        // $data['dua'] = $this->db->query("SELECT SUM(tb_input.suhu) AS suhu, SUM(tb_input.kelembapan) AS kelembapan, SUM(tb_input.curah_hujan) AS curah, SUM(tb_input.penyinaran_matahari) AS matahari FROM tb_input JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id WHERE tb_tahun.tahun = '2012'")->row_array();
        // $data['tiga'] = $this->db->query("SELECT SUM(tb_input.suhu) AS suhu, SUM(tb_input.kelembapan) AS kelembapan, SUM(tb_input.curah_hujan) AS curah, SUM(tb_input.penyinaran_matahari) AS matahari FROM tb_input JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id WHERE tb_tahun.tahun = '2013'")->row_array();
        // $data['empat'] = $this->db->query("SELECT SUM(tb_input.suhu) AS suhu, SUM(tb_input.kelembapan) AS kelembapan, SUM(tb_input.curah_hujan) AS curah, SUM(tb_input.penyinaran_matahari) AS matahari FROM tb_input JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id WHERE tb_tahun.tahun = '2014'")->row_array();
        // $data['lima'] = $this->db->query("SELECT SUM(tb_input.suhu) AS suhu, SUM(tb_input.kelembapan) AS kelembapan, SUM(tb_input.curah_hujan) AS curah, SUM(tb_input.penyinaran_matahari) AS matahari FROM tb_input JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id WHERE tb_tahun.tahun = '2015'")->row_array();
        $data['diagram'] = $this->db->query("SELECT SUM(tb_input.suhu) AS suhu, SUM(tb_input.kelembapan) AS kelembapan, SUM(tb_input.curah_hujan) AS curah, SUM(tb_input.penyinaran_matahari) AS matahari FROM tb_input JOIN tb_tahun ON tb_input.id_tahun = tb_tahun.id GROUP BY tb_tahun.tahun ORDER BY tb_tahun.tahun DESC")->result_array();
        // var_dump($data);
        // die;
        $this->load->view('templates/header');
        $this->load->view('produktivitasdataaktual/index', $data);
        $this->load->view('templates/footer');
    }
}
