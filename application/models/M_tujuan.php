<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tujuan extends CI_Model{
    public function list(){
        
        $this->db->select('*');
        $this->db->from('tbl_tujuan');
        $this->db->order_by('no_identitas','desc');
        return $this->db->get()->result();
    }

    public function getbyid($id)
    {
    	$this->db->select('*');
        $this->db->where('no_identitas', $id);
        $query = $this->db->get('tbl_tujuan')->row();
        return $query;
    }

    public function update($id, $data)
    {
    	$this->db->where('no_identitas', $id);
    	return $this->db->update('tbl_tujuan', $data);
    }

    public function delete($id)
    {
    	$this->db->where('no_identitas', $id);
    	return $this->db->delete('tbl_tujuan');
    }

    public function add($data1){
        $this->db->insert('tbl_tujuan',$data1);
    }
}