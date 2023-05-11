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
            // [
            //     'src' => 'assets/js/config.js',
            //     'type' => 'module'
            // ],
            // [
            //     'src' => 'assets/js/auth/cek-login-auth.js',
            //     'type' => 'module'
            // ],
            [
                'src' => 'assets/js/auth/button-action.js',
                'type' => 'module'
            ],
        ];

        $this->load->view('careers/auth/login', $data);
    }

    public function register()
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

        $this->load->view('careers/auth/register', $data);
    }
}
