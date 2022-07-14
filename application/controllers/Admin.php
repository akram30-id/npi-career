<?php


class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') != 'administrator') {
            // echo "<h1><b>ACCESS DENIED</b></h1>";
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-center" role="alert">ACCESS DENIED</div>');
            return redirect('Careers/npiAdminCareer');
        }
    }

    public function index()
    {
        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/index');
        $this->load->view('templateAdmin/footer');
    }

    public function pelamar()
    {
        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/pelamar');
        $this->load->view('templateAdmin/footer');
    }

    // public function vacancies()
    // {
    //     $this->load->view('templateAdmin/header');
    //     $this->load->view('careers/admin/vacancy');
    //     $this->load->view('templateAdmin/footer');
    // }

    public function detail()
    {
        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/detail');
        $this->load->view('templateAdmin/footer');
    }

    public function listLowonganDepartemen()
    {
        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/lowongan_departemen');
        $this->load->view('templateAdmin/footer');
    }

    public function tambah_divisi()
    {
        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/tambah_divisi');
        $this->load->view('templateAdmin/footer');
    }

    public function tambah_kandidat()
    {
        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/tambah_pelamar');
        $this->load->view('templateAdmin/footer');
    }
}
