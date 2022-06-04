<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kelas extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('m_class');
        
    }
    
    public function index()
	{
        $data = array(
            'title' => 'kelas',
            'kelas' => $this->m_class->get_all_data(), 
            'isi'   => 'kelas/v_class',
    
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);
		
    }
    
    public function add()
	{

        $this->form_validation->set_rules('nama_class','nama_class','required',array('required' => 
        '%s Harus Diisi !!!'));
        
        if ($this->form_validation->run() == TRUE) {
            
               
                    $data = array(
                       
                        'id_class'=> $this->input->post('id_class'),
                        'nama_class'=> $this->input->post('nama_class'),
                        'id_subkategori'=> $this->input->post('id_subkategori'),
                        
                     
                    );

                    $this->m_class->add($data);
                    $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan !!!!');
                    redirect('kelas');
                
                
        }

        $data = array(
            'title' => 'Add Class',
            'kelas' => $this->m_class->get_all_data_subkategori(),
            'isi'   => 'kelas/v_add',
    
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);

                
    }
        
		
    
    public function edit($id_class = NULL)
	{
        $data = array(
                       
            'id_class'=> $this->input->post('id_class'),
            'nama_class'=> $this->input->post('nama_class'),
            'id_subkategori'=> $this->input->post('id_subkategori'),
            
        );

        $this->m_class->edit($data);
        $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan !!!!');
        redirect('kelas');

        $data = array(
            'title' => 'edit Class',
            'kelas' => $this->m_class->get_all_data_subkategori(),
            'isi'   => 'kelas/v_edit',
             );

        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
       
        
		
    }
    
    public function delete($id_class = NULL)
	{
          
           $data = array('id_class' => $id_class );
           $this->m_class->delete($data);
           $this->session->set_flashdata('pesan', 'Data Berhasil Dihapuss !!!!');
           redirect('kelas');
        
        
	}
	
}