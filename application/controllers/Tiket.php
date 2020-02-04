<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_tiket');
    }
    public function index(){

        $data = array(
            'title' => 'TIKET PESAWAT',
            'title2' => 'Tiket',
            'tiket' => $this->m_tiket->list(),
            'isi'   => 'admin/v_tiket'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add(){

        $data = array(
            'title' => 'TIKET PESAWAT',
            'title2' => 'Tiket',
            'isi'   => 'admin/v_tiketadd',
            'action' => base_url('tiket/processadd'),
            'no_identitas' => set_value('no_identitas'),
            'kode_tiket' => set_value('kode_tiket'),
            'tgl_berangkat' => set_value('tgl_berangkat'),
            'waktu_berangkat' => set_value('waktu_berangkat'),
            'kode_tujuan' => set_value('kode_tujuan'),
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function processadd()
    {
        // $kode_tiket = $this->input->post('kode_tiket', TRUE);
        // if(empty($kode)) {
        //     $kode_tiket = $this->db->query("select concat('D',lpad(no_identitas+1,4,'0')) as kode from tbl_tiket;")->row()->kode;
        // }
        $data = array(
            'no_identitas' => NULL,
            'kode_tiket' => $this->input->post('kode_tiket', TRUE),
            'tgl_berangkat' => $this->input->post('tgl_berangkat', TRUE),
            'waktu_berangkat' => $this->input->post('waktu_berangkat', TRUE),
            'kode_tujuan' => $this->input->post('kode_tujuan', TRUE),


        );
        $this->m_tiket->add($data);
        $this->session->set_flashdata('Pesan','Data Berhasil Ditambahkan');
        redirect(base_url('tiket/add'));

    }

    public function edit($id){
        $row = $this->m_tiket->getbyid($id);
        if($row){

            $data = array(
                'title' => 'EDIT DATA',
                'title2' => 'Tiket',
                'isi'   => 'admin/v_tiketadd',
                'action' => base_url('tiket/processedit'),
                'no_identitas' => $row->no_identitas,
                'kode_tiket' => $row->kode_tiket,
                'tgl_berangkat' => $row->tgl_berangkat,
                'waktu_berangkat' => $row->waktu_berangkat,
                'kode_tujuan' => $row->kode_tujuan,

            );
        $this->load->view('admin/layout/v_wrapper',$data);
        }
    }

    public function delete($id)
    {
        $this->m_tiket->delete($id);
        $this->session->set_flashdata('Pesan', 'Berhasil Menghapus Data');
        redirect(base_url('tiket'));
    }

    public function processedit()
    {

        $data = array(
            'kode_tiket' => $this->input->post('kode_tiket', TRUE),
            'tgl_berangkat' => $this->input->post('tgl_berangkat', TRUE),
            'waktu_berangkat' => $this->input->post('waktu_berangkat', TRUE),
            'kode_tujuan' => $this->input->post('kode_tujuan', TRUE),


        );
        $this->m_tiket->update($this->input->post('no_identitas'), $data);
        $this->session->set_flashdata('Pesan','Data Berhasil Diupdate');
        redirect(base_url('tiket'));

    }
}