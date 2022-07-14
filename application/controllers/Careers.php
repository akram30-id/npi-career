<?php

class Careers extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('careers/index');
        $this->load->view('template/footer');
    }

    public function vacancies()
    {
        $this->load->view('template/header');
        $this->load->view('careers/vacancy');
        $this->load->view('template/footer');
    }

    public function detail()
    {
        $this->load->view('template/header');
        $this->load->view('careers/detail');
        $this->load->view('template/footer');
    }

    public function apply()
    {
        $this->load->view('template/header');
        $this->load->view('careers/apply');
        $this->load->view('template/footer');
    }

    public function applyLowongan()
    {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">Data Lamaran Berhasil Dikirim.</div>');
        return redirect('Careers/vacancies');
    }

    public function listLowonganDepartemen()
    {
        $this->load->view('template/header');
        $this->load->view('careers/lowongan_departemen');
        $this->load->view('template/footer');
    }

    public function npiAdminCareer()
    {
        $this->load->view('careers/admin/login');
    }
}
