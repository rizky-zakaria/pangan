<?php
class BulanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['bulan'] = $this->db->get('tb_bulan')->result_array();
        $this->load->view('templates/header');
        $this->load->view('bulan/index', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {
        $this->load->view('templates/header');
        $this->load->view('bulan/tambah');
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $post = $this->input->post();
        $array = array(
            'bulan' => $post['bulan']
        );
        $this->db->insert('tb_bulan', $array);
        redirect(base_url("BulanController"));
    }

    public function hapus($id)
    {
        $this->db->delete('tb_bulan', array('id' => $id));
        redirect(base_url("BulanController"));
    }

    public function formEdit($id)
    {
        $data['bulan'] = $this->db->get_where('tb_bulan', array('id' => $id))->row_array();
        $this->load->view('templates/header');
        $this->load->view('bulan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function updateData()
    {
        $id = $this->input->post('id');
        var_dump($id);
        $bulan = $this->input->post('bulan');

        $this->db->query("UPDATE `tb_bulan` SET `bulan` = '$bulan' WHERE `tb_bulan`.`id` = $id");
        redirect(base_url("BulanController"));
    }
}
