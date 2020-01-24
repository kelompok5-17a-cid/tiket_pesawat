<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function index(){
        $data = array(
            'title' => 'Admin',
            'title2' => 'Beranda',
            'isi'   => 'admin/v_home'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        // $this->load->view('admin/layout/v_home',$data,FALSE);
        // $this->load->view('admin/layout/v_footer',$data,FALSE);
        // $this->load->view('admin/layout/v_header',$data,FALSE);
        // $this->load->view('admin/layout/v_navigation',$data,FALSE);
        // $this->load->view('v_home',$data,FALSE);
    }
}