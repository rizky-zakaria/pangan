<?php
class ProduksiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['produksi'] = $this->db->query("SELECT tb_output.id, tb_bulan.bulan, tb_kabupaten.kabupaten, tb_tahun.tahun, tb_output.produksi FROM `tb_output` JOIN tb_input JOIN tb_tahun JOIN tb_kabupaten JOIN tb_bulan ON tb_output.id_input = tb_input.id AND tb_input.id_bulan = tb_bulan.id AND tb_input.id_tahun = tb_tahun.id AND tb_input.id_kabupaten = tb_kabupaten.id")->result_array();
        $this->load->view('templates/header');
        $this->load->view('produksi/index', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {
        $data['input'] = $this->db->get('tb_input')->result_array();
        $this->load->view('templates/header');
        $this->load->view('produksi/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        
        $array = array(
            'id_input' => $this->input->post('data'),
            'produksi' => $this->input->post('produksi') );
        
        $this->db->insert('tb_output', $array);
        redirect(base_url("ProduksiController"));
    }

    public function hapus($id)
    {
        $this->db->delete('tb_output', array('id' => $id));
        redirect(base_url("ProduksiController"));
    }

    public function formEdit($id)
    {
        $data['produksi'] = $this->db->get_where('tb_output', array('id' => $id))->row_array();
        $data['input'] = $this->db->get('tb_input')->result_array();
        $this->load->view('templates/header');
        $this->load->view('produksi/edit', $data);
        $this->load->view('templates/footer');
    }

    public function updateData()
    {
        $id = $this->input->post('id');
        var_dump($id);
        $produksi = $this->input->post('produksi');

        $this->db->query("UPDATE `tb_output` SET `produksi` = '$produksi' WHERE `tb_output`.`id` = $id");
        redirect(base_url("ProduksiController"));
    }
}
