<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_pembayaran');
    }
    public function index(){

        $data = array(
            'title' => 'TIKET PESAWAT',
            'title2' => 'Pembayaran',
            'pembayaran' => $this->m_pembayaran->list(),
            'isi'   => 'admin/v_pembayaran'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add(){

        $data = array(
            'title' => 'TIKET PESAWAT',
            'title2' => 'Pembayaran',
            'isi'   => 'admin/v_pembayaranadd',
            'action' => base_url('pembayaran/processadd'),
            'id_pembayaran' => set_value('id_pembayaran'),
            'kode_pembayaran' => set_value('kode_pembayaran'),
            'kode_tiket' => set_value('kode_tiket'),
            'tgl_boking' => set_value('tgl_boking'),
            'jumlah_tiket' => set_value('jumlah_tiket'),
            'harga_tiket' => set_value('harga_tiket'),
            'total_pembayaran' => set_value('total_pembayaran'),
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function processadd()
    {
        $kode_pembayaran = $this->input->post('kode_pembayaran', TRUE);
        if(empty($kode)) {
            $kode_pembayaran = $this->db->query("select concat('D',lpad(id_pembayaran+1,4,'0')) as kode from tbl_pembayaran;")->row()->kode;
        }
        $data = array(
            'id_pembayaran' => NULL,
            'kode_pembayaran' => $this->input->post('kode_pembayaran', TRUE),
            'kode_tiket' => $this->input->post('kode_tiket', TRUE),
            'tgl_boking' => $this->input->post('tgl_boking', TRUE),
            'jumlah_tiket' => $this->input->post('jumlah_tiket', TRUE),
            'harga_tiket' => $this->input->post('harga_tiket', TRUE),
            'total_pembayaran' => $this->input->post('total_pembayaran', TRUE),
        );
        $this->m_pembayaran->add($data);
        $this->session->set_flashdata('Pesan','Data Berhasil Ditambahkan');
        redirect(base_url('pembayaran/add'));

    }

    public function edit($id){
        $row = $this->m_pembayaran->getbyid($id);
        if($row){

            $data = array(
                'title' => 'EDIT DATA',
                'title2' => 'Pembayaran',
                'isi'   => 'admin/v_pembayaranadd',
                'action' => base_url('pembayaran/processedit'),
                'id_pembayaran' => $row->id_pembayaran,
                'kode_pembayaran' => $row->kode_pembayaran,
                'kode_tiket' => $row->kode_tiket,
                'tgl_boking' => $row->tgl_boking,
                'jumlah_tiket' => $row->jumlah_tiket,
                'harga_tiket' => $row->harga_tiket,
                'total_pembayaran' => $row->total_pembayaran,
            );
        $this->load->view('admin/layout/v_wrapper',$data);
        }
    }

    public function delete($id)
    {
        $this->m_pembayaran->delete($id);
        $this->session->set_flashdata('Pesan', 'Berhasil Menghapus Data');
        redirect(base_url('pembayaran'));
    }

    public function processedit()
    {

        $data = array(
            'kode_pembayaran' => $this->input->post('kode_pembayaran', TRUE),
            'kode_tiket' => $this->input->post('kode_tiket', TRUE),
            'tgl_boking' => $this->input->post('tgl_boking', TRUE),
            'jumlah_tiket' => $this->input->post('jumlah_tiket', TRUE),
            'harga_tiket' => $this->input->post('harga_tiket', TRUE),
            'total_pembayaran' => $this->input->post('total_pembayaran', TRUE),
        );
        $this->m_pembayaran->update($this->input->post('id_pembayaran'), $data);
        $this->session->set_flashdata('Pesan','Data Berhasil Diupdate');
        redirect(base_url('pembayaran'));

    }
}