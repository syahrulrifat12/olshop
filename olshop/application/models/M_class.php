<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_class extends CI_Model 
{


    public function get_all_data()
        {
            // $this->db->select('*');
            // $this->db->from('tbl_supplier');
            // $this->db->join('tbl_barang','tbl_barang.id_barang = tbl_supplier.id_barang','left');
            // $this->db->order_by('tbl_supplier.id_supplier','desc');
            // return $this->db->get()->result();

            $this->db->select('*');
            $this->db->from('tbl_class');
            $this->db->join('tbl_subkategori','tbl_subkategori.id_subkategori = tbl_class.id_subkategori','left');
            $this->db->order_by('tbl_class.id_class','desc');
            return $this->db->get()->result();

        }

        public function get_all_data_subkategori()
        {
            $this->db->select('*');
            $this->db->from('tbl_subkategori');
            $this->db->order_by('id_subkategori','desc');
            return $this->db->get()->result();

        }

        public function add($data)
        {

            $this->db->insert('tbl_class', $data);

        }

        public function edit($data)
        {

            $this->db->where('tbl_class', $data['id_class']);
            $this->db->update('tbl_class', $data);

        }

        public function delete($data)
        {

            $this->db->where('id_class', $data['id_class']);
            $this->db->delete('tbl_class', $data);
            

        }

}
