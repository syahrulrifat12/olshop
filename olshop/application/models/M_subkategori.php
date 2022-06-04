<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subkategori extends CI_Model 
{


    public function get_all_data()
        {
            $this->db->select('*');
            $this->db->from('tbl_subkategori');
            $this->db->join('tbl_kategori','tbl_kategori.id_kategori = tbl_subkategori.id_kategori','left');
            $this->db->order_by('tbl_subkategori.id_subkategori','desc');
            return $this->db->get()->result();

        }


        public function get_all_data_kategori()
        {
            $this->db->select('*');
            $this->db->from('tbl_kategori');
            $this->db->order_by('id_kategori','desc');
            return $this->db->get()->result();

        }

        public function add($data)
        {
    
            $this->db->insert('tbl_subkategori', $data);
    
        }

    public function edit($data)
    {

        $this->db->where('id_subkategori', $data['id_subkategori']);
        $this->db->update('tbl_subkategori', $data);

    }

    public function delete($data)
    {

        $this->db->where('id_subkategori', $data['id_subkategori']);
        $this->db->delete('tbl_subkategori', $data);
        

    }

}
