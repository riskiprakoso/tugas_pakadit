<?php
    class Tokobuku extends CI_Controller {

        public function __construct()
        {
            parent ::__construct();
            $this->load->model('bukukita_model');
            $this->load->library('form_validation');
        }

        public function index()
        {

            $data['judul'] = "Tokobuku";
            $data['buku'] = $this->bukukita_model->getAllbuku();
            if( $this->input->post('keyword') ) {
                $data['buku'] = $this->bukukita_model->cariDataBuku();
            }
            $this->load->view('templates/header',$data);
            $this->load->view('Tokobuku/index',$data);
            $this->load->view('templates/footer');
        }

        public function tambah()
        {
            $data['judul'] = 'Form Tambah Data Daftar Buku';
            $this->form_validation->set_rules('judulbuku', 'Judul Buku', 'required');
            $this->form_validation->set_rules('penerbitbuku', 'Penerbit Buku', 'required');
            $this->form_validation->set_rules('hargabuku', 'Harga Buku', 'required');

            if( $this->form_validation->run() == FALSE ) {
                $this->load->view('templates/header', $data);
                $this->load->view('tokobuku/tambah');
                $this->load->view('templates/footer');
            } else {
                $this->bukukita_model->tambahDataBuku();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('tokobuku');
            }
        }

        public function hapus($Judul_Buku)
        {
            $this->bukukita_model->hapusDataBuku($Judul_Buku);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('tokobuku');
        }

        public function detail($No)
        {
            $data['judul'] = 'Detail Data Buku';
            $data['detailbuku'] = $this->bukukita_model->gettokobukuById($No);
            $this->load->view('templates/header', $data);
            $this->load->view('tokobuku/detail', $data);
            $this->load->view('templates/footer');
        }

        public function ubah($No)
        {
            $data['judul'] = 'Form Ubah Data Daftar Buku';
            $data['tokobuku'] = $this->bukukita_model->gettokobukuById($No);
            $data['genrebuku'] = ['Novel', 'Cerpen', 'Komik', 'Pendidikan', 'Misteri'];

            $this->form_validation->set_rules('judulbuku', 'Judul Buku', 'required');
            $this->form_validation->set_rules('penerbitbuku', 'Penerbit Buku', 'required');
            $this->form_validation->set_rules('hargabuku', 'Harga Buku', 'required');

            if( $this->form_validation->run() == FALSE ) {
                $this->load->view('templates/header', $data);
                $this->load->view('tokobuku/ubah', $data);
                $this->load->view('templates/footer');
            } else {
                $this->bukukita_model->ubahDataBuku();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('tokobuku');
            }
        }

    }