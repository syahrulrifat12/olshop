<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model 
{


    public function get_all_data()
        {
            // $this->db->select('*');
            // $this->db->from('tbl_supplier');
            // $this->db->join('tbl_barang','tbl_barang.id_barang = tbl_supplier.id_barang','left');
            // $this->db->order_by('tbl_supplier.id_supplier','desc');
            // return $this->db->get()->result();

            $this->db->select('*');
            $this->db->from('tbl_supplier');
            $this->db->join('tbl_barang','tbl_barang.id_barang = tbl_supplier.id_barang','left');
            $this->db->order_by('tbl_supplier.id_supplier','desc');
            return $this->db->get()->result();

        }

        public function get_all_data_barang()
        {
            $this->db->select('DISTINCT(nama_barang),id_barang,id_kategori,id_subkategori,id_class,
            id_supplier,harga,deskripsi,gambar,stok');
            $this->db->from('tbl_barang');
            $this->db->order_by('id_barang','desc');
            return $this->db->get()->result();

            // $this->db->select('DISTINCT(nama_barang)');
            // $this->db->from('tbl_barang');
            // $this->db->order_by('id_barang','desc');
            // return $this->db->get()->result();

        }

        public function add($data)
    {

        $this->db->insert('tbl_supplier', $data);

    }

    public function edit($data)
    {

        $this->db->where('tbl_supplier', $data['id_supplier']);
        $this->db->update('tbl_supplier', $data);

    }

    public function delete($data)
    {

        $this->db->where('id_supplier', $data['id_supplier']);
        $this->db->delete('tbl_supplier', $data);
        

    }

}
