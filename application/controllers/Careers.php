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
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/applicant/latest-vacancies.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/applicant/vacancy-sort-by-divisi.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/applicant/search-vacancy.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ],
        ];
        $this->load->view('template/header');
        $this->load->view('careers/vacancy');
        $this->load->view('template/footer', $data);
    }

    public function divisi($idDivisi)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/vacancy/divisi/main.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/vacancy/divisi/search-vacancy-divisi.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/vacancy/divisi/filter-vacancy-divisi.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ]
        ];

        $this->load->view('template/header');
        $this->load->view('careers/vacancy_divisi', ['id_divisi' => $idDivisi]);
        $this->load->view('template/footer', $data);
    }

    public function detail($idDivisi, $idVacancy)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/vacancy/detail/vacancy-detail.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/skeleton-loader/jquery.skeleton.js',
                'type' => ''
            ]
        ];

        $this->load->view('template/header');
        $this->load->view('careers/admin/detail', ['id_vacancy' => $idVacancy, 'id_divisi' => $idDivisi]);
        $this->load->view('template/footer', $data);
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
