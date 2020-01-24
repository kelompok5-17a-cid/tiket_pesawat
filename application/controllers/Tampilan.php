<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilan extends CI_Controller{
    public function index(){
        
        $data = array(
            'title' => 'Tampilan',
            'isi'   => 'v_home'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
        // $this->load->view('admin/layout/v_home',$data,FALSE);
        // $this->load->view('layout/v_footer',$data,FALSE);
        // $this->load->view('admin/layout/v_header',$data,FALSE);
    }
}