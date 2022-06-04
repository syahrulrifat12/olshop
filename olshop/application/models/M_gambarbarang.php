<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gambarbarang extends CI_Model 
{


    public function get_all_data()
        {
            $this->db->select('tbl_barang.*,COUNT(tbl_gambar.id_barang) as total_gambar');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori','tbl_kategori.id_kategori = tbl_barang.id_kategori','left');
            $this->db->join('tbl_subkategori','tbl_subkategori.id_subkategori = tbl_barang.id_subkategori','left');
            $this->db->join('tbl_class','tbl_class.id_class = tbl_barang.id_class','left');
            $this->db->join('tbl_supplier','tbl_supplier.id_supplier = tbl_barang.id_supplier','left');
            $this->db->join('tbl_gambar','tbl_gambar.id_barang = tbl_barang.id_barang','left');
            $this->db->group_by('tbl_barang.id_barang');
            $this->db->order_by('tbl_barang.id_barang','desc');
            return $this->db->get()->result();

        }
}