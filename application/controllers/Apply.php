<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apply extends CI_Controller
{

    function __construct($idLoker)
    {
        parent::__construct();
        if ($this->session->email === NULL) {
            return redirect('auth/login/' . $idLoker);
        }
    }

    public function index($idLoker)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/applicant/apply.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/applicant/apply-form.js',
                'type' => 'module'
            ],
        ];
        $this->load->view('template/header');
        $this->load->view('careers/apply', ['id_loker' => $idLoker]);
        $this->load->view('template/footer', $data);
    }
}
