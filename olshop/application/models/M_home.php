<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model 
{


    public function get_all_data()
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori','tbl_kategori.id_kategori = tbl_barang.id_kategori','left');
            $this->db->join('tbl_subkategori','tbl_subkategori.id_subkategori = tbl_barang.id_subkategori','left');
            $this->db->join('tbl_class','tbl_class.id_class = tbl_barang.id_class','left');
            $this->db->join('tbl_supplier','tbl_supplier.id_supplier = tbl_barang.id_supplier','left');
            $this->db->order_by('tbl_barang.id_barang','desc');
            return $this->db->get()->result();

        }

        public function get_all_data_kategori()
        {
            $this->db->select('*');
            $this->db->from('tbl_kategori');
            $this->db->order_by('tbl_kategori.id_kategori','desc');
            return $this->db->get()->result();

        }

        public function get_detail_barang($id_barang)
        {
            $this->db->select('tbl_barang.id_barang,tbl_barang.id_kategori,
            tbl_barang.id_subkategori,tbl_barang.id_class,tbl_barang.id_supplier,tbl_barang.nama_barang,tbl_barang.harga,
            tbl_barang.deskripsi,tbl_barang.gambar,tbl_barang.stok,tbl_kategori.nama_kategori');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori','tbl_kategori.id_kategori = tbl_barang.id_kategori','left');
            $this->db->join('tbl_subkategori','tbl_subkategori.id_subkategori = tbl_barang.id_subkategori','left');
            $this->db->join('tbl_class','tbl_class.id_class = tbl_barang.id_class','left');
            $this->db->join('tbl_supplier','tbl_supplier.id_supplier = tbl_barang.id_supplier','left');
            $this->db->where('tbl_barang.id_barang', $id_barang);
            return $this->db->get()->row();
        }

        public function kategori($id_kategori)
        {
            $this->db->select('*');
            $this->db->from('tbl_kategori');
            $this->db->where('id_kategori',$id_kategori);
            return $this->db->get()->row();

        }


        public function get_all_data_barang($id_kategori)
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori','tbl_kategori.id_kategori = tbl_barang.id_kategori','left');
            $this->db->join('tbl_subkategori','tbl_subkategori.id_subkategori = tbl_barang.id_subkategori','left');
            $this->db->join('tbl_class','tbl_class.id_class = tbl_barang.id_class','left');
            $this->db->join('tbl_supplier','tbl_supplier.id_supplier = tbl_barang.id_supplier','left');
            $this->db->where('tbl_barang.id_kategori',$id_kategori);
            return $this->db->get()->result();

        }
}