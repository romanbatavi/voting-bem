<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');


        $cek = $this->db->query("select * from petugas where email='$email' and password='$password'");
        $banyak = $cek->num_rows();
        if ($banyak >= 1) {
            $isi = $this->db->query("select * from petugas where email='$email' and password='$password'")->result();
            $data = array(
                'email' => $email,
                'nama_petugas' => $isi[0]->nama_petugas,
                'level' =>  $isi[0]->level,
                'status' => "Login"
            );
            $this->session->set_userdata($data);
            redirect('admin');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
            redirect('auth');
        }
    }

    public function petugas()
    {
        if ($this->session->userdata('status') != "Login") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Belum Login!</div>');
            redirect('auth');
        } else {
            if ($this->session->userdata('level') == "ADMIN") {

                $data['pilih'] = $this->db->get('petugas')->result_array();

                $this->form_validation->set_rules('nama_petugas', 'Nama_petugas', 'required|trim');
                $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
                $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
                    'matches' => 'Password dont match!',
                    'min_length' => 'Password too short!'
                ]);
                $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

                if ($this->form_validation->run() ==  false) {
                    $data['title'] = 'Petugas';
                    $this->load->view('templates/headeradmin', $data);
                    $this->load->view('templates/sidebar');
                    $this->load->view('templates/topbar');
                    $this->load->view('admin/petugas', $data);
                    $this->load->view('templates/footeradmin');
                } else {

                    $data = [
                        'nama_petugas' => $this->input->post('nama_petugas'),
                        'email' => $this->input->post('email'),
                        'password' => $this->input->post('password1'),
                        'level' => $this->input->post('level'),

                    ];
                    $this->db->insert('petugas', $data);


                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ditambahkan</div>');
                    redirect('auth/petugas');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Access Ditolak</div>');
                redirect('admin');
            }
        }
    }
}
