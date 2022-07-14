<?php

class Authentication extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->library('session');
        // if($this->session->userdata('username') != NULL){
        //     return redirect('Admin');
        // }
    }

    public function index()
    {
        // var_dump($_POST);
        // die();

        $username = html_escape($this->input->post('username'));
        $password = $this->input->post('password');

        $cek = $this->M_careers->edit_data(['username' => $username], 'wp_career_user')->num_rows();

        if ($cek < 1) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">User tidak ditemukan!</div>');
            return redirect('Careers/npiAdminCareer');
        } else {
            $data = [
                'username' => $username,
                'password' => md5($password)
            ];

            $cekLogin = $this->M_careers->edit_data(['password' => md5($password)], 'wp_career_user')->num_rows();

            if ($cekLogin < 1) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah</div>');
                return redirect('Careers/npiAdminCareer');
            } else {
                $user = $this->M_careers->get_data('wp_career_user')->result_array();
                $this->session->set_userdata($user[0]);
                return redirect('Admin');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        return redirect('Authentication');
    }
}
