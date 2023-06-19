<?php 

class Notification extends CI_Controller
{
    public function detail($idNotif, $idLoker)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/notification/show-all.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/notification/show-detail.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/notification/send-reply.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/auth/logout.js',
                'type' => 'module'
            ],
        ];

        $data['id_notif'] = $idNotif;
        $data['id_loker'] = $idLoker;

        $this->load->view('template/header');
        $this->load->view('notification/index', $data);
        $this->load->view('template/footer', $data);
    }
}
