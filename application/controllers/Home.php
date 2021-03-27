<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        /*if ($this->session->userdata('nim')) {
            redirect('home/pemilihan');
        }*/

        $this->form_validation->set_rules('nim', 'Nim', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('home/index');
            $this->load->view('templates/footer');
        } else {
            // validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $nim = $this->input->post('nim');


        $user = $this->db->get_where('pemilih', ['nim' => $nim])->row_array();

        if ($user) {
            $cek = $this->db->query("select * from suara where nim='$nim'");
            $banyak = $cek->num_rows();
            if ($banyak >= 1) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Sudah Memberikan Suara!</div>');
                redirect('');
            } else {
                $data_session = array(
                    'nim' => $nim,
                    'status' => "login"
                );

                $this->session->set_userdata($data_session);

                redirect('home/tpilih');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIM is not registered </div>');
            redirect('');
        }
    }

    public function tpilih()
    {
        $data["query"] = $this->db->query("select * from kandidat")->result();
        $this->load->view('templates/header');
        $this->load->view("home/pemilihan", $data);
    }
    public function pemilihan($id)
    {


        $data['user'] = $this->db->get_where('pemilih', ['nim' => $this->session->userdata('nim')])->row_array();

        $data = [
            'nim' => htmlspecialchars($this->session->userdata('nim', true)),
            'id_kandidat' => $id,
            'tgl_suara' => time(),
            'status_pemilih' => 'mahasiswa'
        ];
        $this->db->insert('suara', $data);

        $this->session->unset_userdata('nim');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terimakasih Telah Memberikan Suara</div>');

        redirect('');
    }


    public function selesai()
    {

        $this->load->view('templates/header');
        $this->load->view('home/selesai');
    }



    public function logout()
    {
        $this->session->unset_userdata('nim');



        redirect('');
    }
}
