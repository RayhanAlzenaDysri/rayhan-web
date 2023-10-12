<?php
defined('BASEPATH') OR exit('no direct script acceess allowed');

class web extends CI_Controller
{
    function _construct()
    {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "halaman depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }
    public function blog()
    {
        $data['judul']="halaman depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }
    public function about()
    {
        $data['judul']="halaman depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }
}
