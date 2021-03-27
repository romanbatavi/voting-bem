<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('status') != "Login") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Belum Login!</div>');
            redirect('auth');
        } else {

            $data['pilih'] = $this->db->count_all('pemilih');
            $data['kandidat'] = $this->db->count_all('kandidat');
            $data['petugas'] = $this->db->count_all('petugas');

            $data['selisih'] = $this->db->count_all('suara');
            $data['suara'] = $data['selisih'] /  $this->db->count_all('pemilih') * 100;
            $data['nosuara'] = 100 - $data['suara'];


            $data['title'] = 'Home';
            $this->load->view('templates/headeradmin', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footeradmin');
        }
    }
    public function pemilih()
    {
        if ($this->session->userdata('status') != "Login") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Belum Login!</div>');
            redirect('auth');
        } else {

            $data['pilih'] = $this->db->get('pemilih')->result_array();

            $this->form_validation->set_rules('nim', 'Nim', 'trim|required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');

            if ($this->form_validation->run() ==  false) {
                $data['title'] = 'Pemilih';
                $this->load->view('templates/headeradmin', $data);
                $this->load->view('templates/sidebar');
                $this->load->view('templates/topbar');
                $this->load->view('admin/pemilih', $data);
                $this->load->view('templates/footeradmin');
            } else {
                $data = [
                    'nim' => $this->input->post('nim'),
                    'nama' => $this->input->post('nama'),
                    'jenkel_pil' => $this->input->post('jenkel_pil'),
                    'prodi' => $this->input->post('prodi')

                ];
                $this->db->insert('pemilih', $data);


                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ditambahkan</div>');
                redirect('admin/pemilih');
            }
        }
    }

    public function kandidat()
    {
        if ($this->session->userdata('status') != "Login") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Belum Login!</div>');
            redirect('auth');
        } else {

            $data['pilih'] = $this->db->get('kandidat')->result_array();

            $this->form_validation->set_rules('nama_ketua', 'Nama_ketua', 'required');
            $this->form_validation->set_rules('nama_wakil', 'Nama_wakil', 'required');

            if ($this->form_validation->run() ==  false) {
                $data['title'] = 'Kandidat';
                $this->load->view('templates/headeradmin', $data);
                $this->load->view('templates/sidebar');
                $this->load->view('templates/topbar');
                $this->load->view('admin/kandidat', $data);
                $this->load->view('templates/footeradmin');
            } else {
                $data = [
                    'id_kandidat' => $this->input->post('id_kandidat'),
                    'nama_ketua' => $this->input->post('nama_ketua'),
                    'jenkel_ketua' => $this->input->post('jenkel_ketua'),
                    'nama_wakil' => $this->input->post('nama_wakil'),
                    'jenkel_wakil' => $this->input->post('jenkel_wakil'),
                    'visi' => $this->input->post('visi'),
                    'misi' => $this->input->post('misi')

                ];
                $this->db->insert('kandidat', $data);


                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ditambahkan</div>');
                redirect('admin/kandidat');
            }
        }
    }


    public function suara()
    {
        if ($this->session->userdata('status') != "Login") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Belum Login!</div>');
            redirect('auth');
        } else {



            $data['pilih'] = $this->db->count_all('pemilih');

            $data['petugas'] = $this->db->count_all('petugas');

            $data['selisih'] = $this->db->count_all('suara');


            $data['suara'] = $data['selisih'] /  $this->db->count_all('pemilih') * 100;

            $data['nosuara'] = 100 - $data['suara'];

            $data['title'] = 'Suara';
            $this->load->view('templates/headeradmin', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/suara', $data);
            $this->load->view('templates/footeradmin', $data);
        }
    }


    public function perolehan()
    {
        $cek = $this->db->count_all("suara");
        $data['banyak'] = $cek;
        $data['kandidat'] = $this->db->get("kandidat")->result();
        $data['title'] = 'Perolehan Suara';
        $this->load->view('templates/headeradmin', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/perolehan', $data);
        $this->load->view('templates/footeradmin');
    }

    public function logout()
    {
        $this->session->unset_userdata('status') != "Login";


        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
}
