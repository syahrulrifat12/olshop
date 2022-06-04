<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('m_supplier');
     
        
    }
    
    public function index()
	{
        $data = array(
            'title' => 'Supplier',
            'supplier' => $this->m_supplier->get_all_data(), 
            'isi'   => 'supplier/v_supplier',
    
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);
		
    }
    
    public function add()
	{
        $this->form_validation->set_rules('nama_supplier','nama_supplier','required',array('required' => 
        '%s Harus Diisi !!!'));
        
        if ($this->form_validation->run() == TRUE) {
            
               
                    $data = array(
                       
                        'id_supplier'=> $this->input->post('id_supplier'),
                        'nama_supplier'=> $this->input->post('nama_supplier'),
                        'id_barang'=> $this->input->post('id_barang'),
                        'nomor_telepon'=> $this->input->post('nomor_telepon'),
                        'alamat'=> $this->input->post('alamat'),
                        
                     
                    );

                    $this->m_supplier->add($data);
                    $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan !!!!');
                    redirect('supplier');
                
                
        }

        $data = array(
            'title' => 'Add supplier',
            'supplier' => $this->m_supplier->get_all_data_barang(),
            'isi'   => 'supplier/v_add',
    
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);
       
		
    }
    
    public function edit($id_supplier = NULL)
	{
        $data = array(
            
            'id_supplier'=> $this->input->post('id_supplier'),
            'nama_supplier'=> $this->input->post('nama_supplier'),
            'id_barang'=> $this->input->post('id_barang'),
            'nomor_telepon'=> $this->input->post('nomor_telepon'),
            'alamat'=> $this->input->post('alamat'),
            
        );

        $this->m_supplier->edit($data);
        $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan !!!!');
        redirect('supplier');

        $data = array(
            'title' => 'edit subkategori',
            'supplier' => $this->m_supplier->get_all_data_barang(),
            'isi'   => 'supplier/v_add',
             );

        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
       
        
		
    }
    
    public function delete($id_supplier = NULL)
	{
          
           $data = array('id_supplier' => $id_supplier );
           $this->m_subkategori->delete($data);
           $this->session->set_flashdata('pesan', 'Data Berhasil Dihapuss !!!!');
           redirect('supplier');
        
        
	}
	
}