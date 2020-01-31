<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran extends CI_Model{
    public function list(){
        
        $this->db->select('*');
        $this->db->from('tbl_pembayaran');
        $this->db->order_by('id_pembayaran','desc');
        return $this->db->get()->result();
    }

    public function getbyid($id)
    {
    	$this->db->select('*');
        $this->db->where('id_pembayaran', $id);
        $query = $this->db->get('tbl_pembayaran')->row();
        return $query;
    }

    public function update($id, $data)
    {
    	$this->db->where('id_pembayaran', $id);
    	return $this->db->update('tbl_pembayaran', $data);
    }

    public function delete($id)
    {
    	$this->db->where('id_pembayaran', $id);
    	return $this->db->delete('tbl_pembayaran');
    }

    public function add($data1){
        $this->db->insert('tbl_pembayaran',$data1);
    }
}