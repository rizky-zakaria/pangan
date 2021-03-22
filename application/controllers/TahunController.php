<?php
class TahunController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['tahun'] = $this->db->get('tb_tahun')->result_array();
        $this->load->view('templates/header');
        $this->load->view('tahun/index', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {
        $this->load->view('templates/header');
        $this->load->view('tahun/tambah');
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $post = $this->input->post();
        $array = array(
            'tahun' => $post['tahun']
        );
        $this->db->insert('tb_tahun', $array);
        redirect(base_url("TahunController"));
    }

    public function hapus($id)
    {
        $this->db->delete('tb_tahun', array('id' => $id));
        redirect(base_url("TahunController"));
    }

    public function formEdit($id)
    {
        $data['tahun'] = $this->db->get_where('tb_tahun', array('id' => $id))->row_array();
        $this->load->view('templates/header');
        $this->load->view('tahun/edit', $data);
        $this->load->view('templates/footer');
    }

    public function updateData()
    {
        $id = $this->input->post('id');
        var_dump($id);
        $tahun = $this->input->post('tahun');

        $this->db->query("UPDATE `tb_tahun` SET `tahun` = '$tahun' WHERE `tb_tahun`.`id` = $id");
        redirect(base_url("TahunController"));
    }
}
