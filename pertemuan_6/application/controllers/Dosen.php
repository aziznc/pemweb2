<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Dosen_model', 'dsn1');
        $this->dsn1->nama = "NASRUL, S.Kom, M.Kom";
        $this->dsn1->nidn = "0410108006";
        $this->dsn1->gender = "L";
        $this->dsn1->pendidikan = "S2 – Universitas Budi Luhur";

        $this->load->model('Dosen_model', 'dsn2');
        $this->dsn2->nama = "ZAKI IMADUDDIN, S.T, M.Kom";
        $this->dsn2->nidn = " 0426088302";
        $this->dsn2->gender = "L";
        $this->dsn2->pendidikan = "S2 – Universitas Indonesia";

        $this->load->model('Dosen_model', 'dsn3');
        $this->dsn3->nama = "SALMAN EL FARISI, S.Kom, M.Kom";
        $this->dsn3->nidn = "424088901";
        $this->dsn3->gender = "L";
        $this->dsn3->pendidikan = "S2 – Universitas Indonesia";
        
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data = array(
            "title" => "Dosen",
            "list_dsn" => $list_dsn,
        );
        
        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/index');
        $this->load->view('layout/foot');

    }
}
