<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tujuan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_tujuan');
    }
    public function index(){

        $data = array(
            'title' => 'TIKET PESAWAT',
            'title2' => 'Tujuan',
            'tujuan' => $this->m_tujuan->list(),
            'isi'   => 'admin/v_tujuan'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add(){

        $data = array(
            'title' => 'TIKET PESAWAT',
            'title2' => 'Tujuan',
            'isi'   => 'admin/v_tujuanadd',
            'action' => base_url('tujuan/processadd'),
            'no_identitas' => set_value('no_identitas'),
            'kode_tujuan' => set_value('kode_tujuan'),
            'kota_tujuan' => set_value('kota_tujuan'),
            // 'telp' => set_value('telp'),
            // 'umur' => set_value('umur'),
            // 'jenis_kelamin' => set_value('jenis_kelamin'),
            // 'tmpt_lahir' => set_value('tmpt_lahir'),
            // 'tanggal' => set_value('tanggal'),
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function processadd()
    {

        $data = array(
            'no_identitas' => NULL,
            'kode_tujuan' => $this->input->post('kode_tujuan', TRUE),
            'kota_tujuan' => $this->input->post('kota_tujuan', TRUE),
            // 'telp' => $this->input->post('telp', TRUE),
            // 'umur' => $this->input->post('umur', TRUE),
            // 'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
            // 'tmpt_lahir' => $this->input->post('tmpt_lahir', TRUE),
            // 'tanggal' => $this->input->post('tanggal', TRUE),


        );
        $this->m_tujuan->add($data);
        $this->session->set_flashdata('Pesan','Data Berhasil Ditambahkan');
        redirect(base_url('tujuan/add'));

    }

    public function edit($id){
        $row = $this->m_tujuan->getbyid($id);
        if($row){

            $data = array(
                'title' => 'EDIT DATA',
                'title2' => 'Tujuan',
                'isi'   => 'admin/v_tujuanadd',
                'action' => base_url('tujuan/processedit'),
                'no_identitas' => $row->no_identitas,
                'kode_tujuan' => $row->kode_tujuan,
                'kota_tujuan' => $row->kota_tujuan,
                // 'telp' => $row->telp,
                // 'umur' => $row->umur,
                // 'jenis_kelamin' => $row->jenis_kelamin,
                // 'tmpt_lahir' => $row->tmpt_lahir,
                // 'tanggal' => $row->tanggal,
            );
        $this->load->view('admin/layout/v_wrapper',$data);
        }
    }

    public function delete($id)
    {
        $this->m_tujuan->delete($id);
        $this->session->set_flashdata('Pesan', 'Berhasil Menghapus Data');
        redirect(base_url('tujuan'));
    }

    public function processedit()
    {

        $data = array(
            'kode_tujuan' => $this->input->post('kode_tujuan', TRUE),
            'kota_tujuan' => $this->input->post('kota_tujuan', TRUE),
            // 'telp' => $this->input->post('telp', TRUE),
            // 'umur' => $this->input->post('umur', TRUE),
            // 'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
            // 'tmpt_lahir' => $this->input->post('tmpt_lahir', TRUE),
            // 'tanggal' => $this->input->post('tanggal', TRUE),


        );
        $this->m_tujuan->update($this->input->post('no_identitas'), $data);
        $this->session->set_flashdata('Pesan','Data Berhasil Diupdate');
        redirect(base_url('tujuan'));

    }
}