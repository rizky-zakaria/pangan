<?php
class KabupatenController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $this->load->view('templates/header');
        $this->load->view('kabupaten/index', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {
        $this->load->view('templates/header');
        $this->load->view('kabupaten/tambah');
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $post = $this->input->post();
        $array = array('kabupaten' => $post['kabupaten'] );
        $this->db->insert('tb_kabupaten', $array);
        redirect(base_url("KabupatenController"));
    }

    public function hapus($id)
    {
        $this->db->delete('tb_kabupaten', array('id' => $id));
        redirect(base_url("KabupatenController"));
    }

     public function formEdit($id)
    {
        $data['kabupaten'] = $this->db->get_where('tb_kabupaten', array('id' => $id))->row_array();
        $this->load->view('templates/header');
        $this->load->view('kabupaten/edit', $data);
        $this->load->view('templates/footer');
    }

    public function updateData()
    {
        $id = $this->input->post('id');
        var_dump($id);
        $kabupaten = $this->input->post('kabupaten');

        $this->db->query("UPDATE `tb_kabupaten` SET `kabupaten` = '$kabupaten' WHERE `tb_kabupaten`.`id` = $id");
        redirect(base_url("KabupatenController"));
    }
}
