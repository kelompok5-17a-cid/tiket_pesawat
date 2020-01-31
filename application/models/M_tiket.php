<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tiket extends CI_Model{
    public function list(){
        
        $this->db->select('*');
        $this->db->from('tbl_tiket');
        $this->db->order_by('no_identitas','desc');
        return $this->db->get()->result();
    }

    public function getbyid($id)
    {
    	$this->db->select('*');
        $this->db->where('no_identitas', $id);
        $query = $this->db->get('tbl_tiket')->row();
        return $query;
    }

    public function update($id, $data)
    {
    	$this->db->where('no_identitas', $id);
    	return $this->db->update('tbl_tiket', $data);
    }

    public function delete($id)
    {
    	$this->db->where('no_identitas', $id);
    	return $this->db->delete('tbl_tiket');
    }

    public function add($data1){
        $this->db->insert('tbl_tiket',$data1);
    }
}