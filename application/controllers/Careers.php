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
            [
                'src' => 'assets/js/auth/cek-auth.js',
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
}
