<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model 
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

        // public function get_data($id_barang)
        // {
        //     $this->db->select('tbl_barang.id_barang,tbl_subkategori.id_kategori,tbl_subkategori.id_subkategori,tbl_class.id_class,
        //     tbl_supplier.id_supplier,tbl_barang.nama_barang,tbl_barang.harga,tbl_barang.deskripsi,tbl_barang.stok,tbl_barang.gambar ');
        //     $this->db->from('tbl_barang');
        //     $this->db->join('tbl_kategori','tbl_kategori.id_kategori = tbl_barang.id_kategori','left');
        //     $this->db->join('tbl_subkategori','tbl_subkategori.id_subkategori = tbl_barang.id_subkategori','left');
        //     $this->db->join('tbl_class','tbl_class.id_class = tbl_barang.id_class','left');
        //     $this->db->join('tbl_supplier','tbl_supplier.id_supplier = tbl_barang.id_supplier','left');
        //     $this->db->where('tbl_barang.id_barang',$id_barang);
        //     return $this->db->get()->row();

        // }

        public function get_data($id_barang)
        {
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->join('tbl_kategori','tbl_kategori.id_kategori = tbl_barang.id_kategori','left');
            $this->db->join('tbl_subkategori','tbl_subkategori.id_subkategori = tbl_barang.id_subkategori','left');
            $this->db->join('tbl_class','tbl_class.id_class = tbl_barang.id_class','left');
            $this->db->join('tbl_supplier','tbl_supplier.id_supplier = tbl_barang.id_supplier','left');
            $this->db->where('id_barang',$id_barang);
            return $this->db->get()->row();

        }


        public function add($data)
    {

        $this->db->insert('tbl_barang', $data);

    }

    public function edit($data)
    {

        $this->db->where('id_barang', $data['id_barang']);
        $this->db->update('tbl_barang', $data);

    }

    public function delete($data)
    {

        $this->db->where('id_barang', $data['id_barang']);
        $this->db->delete('tbl_barang', $data);
        

    }

}
