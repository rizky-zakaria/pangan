<?php
class DataAktualController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // $data['dataaktual'] = $this->db->get('tb_input')->result_array();
        $data['dataaktual'] = $this->db->query("SELECT tb_output.*, tb_input.suhu, tb_input.kelembapan, tb_input.curah_hujan, tb_input.penyinaran_matahari, tb_input.luas_panen, tb_tahun.tahun, tb_bulan.bulan, tb_kabupaten.kabupaten FROM `tb_output` JOIN tb_input JOIN tb_tahun JOIN tb_kabupaten JOIN tb_bulan ON tb_output.id_input = tb_input.id AND tb_input.id_bulan = tb_bulan.id AND tb_input.id_tahun = tb_tahun.id AND tb_input.id_kabupaten = tb_kabupaten.id")->result_array();

        $this->load->view('templates/header');
        $this->load->view('dataaktual/index', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {
        $data['bulan'] = $this->db->get('tb_bulan')->result_array();
        $data['tahun'] = $this->db->get('tb_tahun')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $this->load->view('templates/header');
        $this->load->view('dataaktual/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $array1 = array(
            'suhu' => $this->input->post('suhu'),
            'kelembapan' => $this->input->post('kelembapan'),
            'curah_hujan' => $this->input->post('curah_hujan'),
            'penyinaran_matahari' => $this->input->post('penyinaran_matahari'),
            'luas_panen' => $this->input->post('luas_panen'),
            'id_bulan' => $this->input->post('bulan'),
            'id_tahun' => $this->input->post('tahun'),
            'id_kabupaten' => $this->input->post('kabupaten')
        );

        $this->db->insert('tb_input', $array1);
        $get = $this->db->query("SELECT * FROM tb_input ORDER BY id DESC LIMIT 1")->row_array();
        // $get = $this->db->get("SELECT * FROM tb_input WHERE 'suhu' = '  .  $this->input->post('suhu') . ' AND 'kelembapan' = '  .  $this->input->post('kelembapan') . ' AND 'curah_hujan' = '  .  $this->input->post('curah_hujan') . ' AND 'penyinaran_matahari' = '  .  $this->input->post('penyinaran_matahari') . ' AND 'luas_panen' = '  .  $this->input->post('luas_panen') . '")->row_array();
        // var_dump($get);
        // die;
        $array2 = array(
            'id_input' => $get['id'],
            'produksi' => $this->input->post('produksi'),
            'produktivitas' => $this->input->post('produktivitas'),
        );


        $this->db->insert('tb_output', $array2);
        redirect(base_url("DataAktualController"));
    }

    public function hapus($id)
    {
        $this->db->delete('tb_output', array('id_input' => $id));
        $this->db->delete('tb_input', array('id' => $id));
        redirect(base_url("DataAktualController"));
    }

    public function formEdit($id)
    {
        $data['dataaktual'] = $this->db->get_where('tb_input', array('id' => $id))->row_array();
        $data['output'] = $this->db->get_where('tb_output', array('id' => $id))->row_array();
        $output = $data['output'];
        // var_dump($output);
        // die;
        $data['input'] = $this->db->get_where('tb_input', array('id' => $output['id_input']))->row_array();
        $data['bulan'] = $this->db->get('tb_bulan')->result_array();
        $data['tahun'] = $this->db->get('tb_tahun')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        // var_dump($data['input']);
        // die;
        $this->load->view('templates/header');
        $this->load->view('dataaktual/edit', $data);
        $this->load->view('templates/footer');
    }

    public function updateData()
    {
        $id = $this->input->post('id_input');
        $id_output = $this->input->post('id_output');
        $array1 = array(
            'suhu' => $this->input->post('suhu'),
            'kelembapan' => $this->input->post('kelembapan'),
            'curah_hujan' => $this->input->post('curah_hujan'),
            'penyinaran_matahari' => $this->input->post('penyinaran_matahari'),
            'luas_panen' => $this->input->post('luas_panen'),
            'id_bulan' => $this->input->post('bulan'),
            'id_tahun' => $this->input->post('tahun'),
            'id_kabupaten' => $this->input->post('kabupaten')
        );
        $this->db->where('id', $id);
        $this->db->update('tb_input', $array1);
        // $get = $this->db->query("SELECT * FROM tb_input ORDER BY id DESC LIMIT 1")->row_array();

        // $this->db->query("UPDATE `tb_input` SET `dataaktual` = '$dataaktual' WHERE `tb_input`.`id` = $id");

        $array2 = array(
            'id_input' => $id,
            'produksi' => $this->input->post('produksi'),
            'produktivitas' => $this->input->post('produktivitas'),
        );

        $this->db->where('id', $id_output);
        $this->db->update('tb_output', $array2);
        redirect(base_url("DataAktualController"));
    }
}
