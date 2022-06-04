<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class sub_Kategori extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('m_subkategori');
        
    }
    
    public function index()
	{
        $data = array(
            'title' => 'Sub Kategori',
            'sub_kategori' => $this->m_subkategori->get_all_data(), 
            'isi'   => 'subkategori/v_subkategori',
    
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);
		
    }
    
    public function add()
	{

        $this->form_validation->set_rules('nama_subkategori','nama_subkategori','required',array('required' => 
        '%s Harus Diisi !!!'));
        
        if ($this->form_validation->run() == TRUE) {
            
               
                    $data = array(
                       
                        'id_subkategori'=> $this->input->post('id_subkategori'),
                        'nama_subkategori'=> $this->input->post('nama_subkategori'),
                        'id_kategori'=> $this->input->post('id_kategori'),
                        
                     
                    );

                    $this->m_subkategori->add($data);
                    $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan !!!!');
                    redirect('sub_kategori');
                
                
        }

        $data = array(
            'title' => 'Add subkategori',
            'sub_kategori' => $this->m_subkategori->get_all_data_kategori(),
            'isi'   => 'subkategori/v_add',
    
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);

                
    }
        
		
    
    public function edit($id_subkategori = NULL)
	{
        $data = array(
                       
            'id_subkategori'=> $this->input->post('id_subkategori'),
            'nama_subkategori'=> $this->input->post('nama_subkategori'),
            'id_kategori'=> $this->input->post('id_kategori'),
            
        );

        $this->m_subkategori->edit($data);
        $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan !!!!');
        redirect('sub_kategori');

        $data = array(
            'title' => 'edit subkategori',
            'sub_kategori' => $this->m_subkategori->get_all_data(),
            'isi'   => 'subkategori/v_add',
             );

        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
       
        
		
    }
    
    public function delete($id_subkategori = NULL)
	{
          
           $data = array('id_barang' => $id_subkategori );
           $this->m_subkategori->delete($data);
           $this->session->set_flashdata('pesan', 'Data Berhasil Dihapuss !!!!');
           redirect('sub_kategori');
        
        
	}
	
}