<?php

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        // load view admin/overview.php
        $this->load->view("login");
    }

    public function login_aksi(){
        $user = $this->input->post('username',true);
        $pass = md5($this->input->post('password', true));

        //rule validasi
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if($this->form_validation->run() != FALSE){
            $where = array(
                'username' => $user,
                'password' => $pass
            );

            $cekLogin = $this->Login_model->cek_login($where)->row_array();
            // var_dump($cekLogin);
            // die;
            if($cekLogin > 0){
                $sess_data = array(
                    'username' => $user,
                    'role' => $cekLogin['role'],
                    'login' => 'OK'
                );

                $this->session->set_userdata($sess_data);

                redirect(base_url('DashboardController'));

            }else{
                redirect(base_url('Login'));

                }

            }else{
                $this->load->view('Login');

            // public  function process()
            // {
            //  $post = $this->input->post(null, TRUE);
            //  if(isset($post['login'])){
            //      $this->load->model('login_model');
            //      $query = $this->login_model->login($post);
            //  }
            // }


            // public function logout();
            // {
            //  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');
            // }
            }
            }
        }