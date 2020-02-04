    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Konsumen extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('m_konsumen');
        }
        public function index(){

            $data = array(
                'title' => 'TIKET PESAWAT',
                'title2' => 'Konsumen',
                'konsumen' => $this->m_konsumen->list(),
                'isi'   => 'admin/v_konsumen'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }

        public function add(){

            $data = array(
                'title' => 'TIKET PESAWAT',
                'title2' => 'Konsumen',
                'isi'   => 'admin/v_konsumenadd',
                'action' => base_url('konsumen/processadd'),
                'no_identitas' => set_value('no_identitas'),
                'nama_konsumen' => set_value('nama_konsumen'),
                'alamat_konsumen' => set_value('alamat_konsumen'),
                'telp' => set_value('telp'),
                'umur' => set_value('umur'),
                'jenis_kelamin' => set_value('jenis_kelamin'),
                'tmpt_lahir' => set_value('tmpt_lahir'),
                'tanggal' => set_value('tanggal'),
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }

        public function processadd()
        {

            $data = array(
                'no_identitas' => NULL,
                'nama_konsumen' => $this->input->post('nama_konsumen', TRUE),
                'alamat_konsumen' => $this->input->post('alamat_konsumen', TRUE),
                'telp' => $this->input->post('telp', TRUE),
                'umur' => $this->input->post('umur', TRUE),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
                'tmpt_lahir' => $this->input->post('tmpt_lahir', TRUE),
                'tanggal' => $this->input->post('tanggal', TRUE),


            );
            $this->m_konsumen->add($data);
            $this->session->set_flashdata('Pesan','Data Berhasil Ditambahkan');
            redirect(base_url('konsumen/add'));

        }

        public function edit($id){
            $row = $this->m_konsumen->getbyid($id);
            if($row){

                $data = array(
                    'title' => 'EDIT DATA',
                    'title2' => 'Konsumen',
                    'isi'   => 'admin/v_konsumenadd',
                    'action' => base_url('konsumen/processedit'),
                    'no_identitas' => $row->no_identitas,
                    'nama_konsumen' => $row->nama_konsumen,
                    'alamat_konsumen' => $row->alamat_konsumen,
                    'telp' => $row->telp,
                    'umur' => $row->umur,
                    'jenis_kelamin' => $row->jenis_kelamin,
                    'tmpt_lahir' => $row->tmpt_lahir,
                    'tanggal' => $row->tanggal,
                );
            $this->load->view('admin/layout/v_wrapper',$data);
            }
        }

        public function delete($id)
        {
            $this->m_konsumen->delete($id);
            $this->session->set_flashdata('Pesan', 'Berhasil Menghapus Data');
            redirect(base_url('konsumen'));
        }

        public function processedit()
        {

            $data = array(
                'nama_konsumen' => $this->input->post('nama_konsumen', TRUE),
                'alamat_konsumen' => $this->input->post('alamat_konsumen', TRUE),
                'telp' => $this->input->post('telp', TRUE),
                'umur' => $this->input->post('umur', TRUE),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
                'tmpt_lahir' => $this->input->post('tmpt_lahir', TRUE),
                'tanggal' => $this->input->post('tanggal', TRUE),


            );
            $this->m_konsumen->update($this->input->post('no_identitas'), $data);
            $this->session->set_flashdata('Pesan','Data Berhasil Diupdate');
            redirect(base_url('konsumen'));

        }
    }