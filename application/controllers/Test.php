<?php

class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // chek_role();
        // $this->load->model('Model_barang');
        // $this->load->model('Model_kategori');
    }
    
    function index() {
        echo 'test';
    }
    
}