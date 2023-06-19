<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function login($idLoker)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/auth/login.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/auth/button-action.js',
                'type' => 'module'
            ],
        ];

        $data['idLoker'] = $idLoker;

        $this->load->view('careers/auth/login', $data);
    }

    public function register($idLoker)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/auth/button-action.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/auth/register.js',
                'type' => 'module'
            ],
        ];

        $data['idLoker'] = $idLoker;

        $this->load->view('careers/auth/register', $data);
    }

    public function profile($idLoker, $idAccount, $email)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/applicant/profile-submit.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/applicant/profile-form.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/auth/logout.js',
                'type' => 'module'
            ],
        ];
        $this->load->view('template/header');
        $this->load->view('careers/auth/profile', ['id_loker' => $idLoker, 'id_account' => $idAccount, 'email' => str_replace('_', '@', $email)]);
        $this->load->view('template/footer', $data);
    }
}
