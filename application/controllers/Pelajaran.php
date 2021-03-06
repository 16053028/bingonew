<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pelajaran extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelajaran_model');
    } 

    /*
     * Listing of pelajarans
     */
    function index()
    {
        $data['pelajarans'] = $this->Pelajaran_model->get_all_pelajarans_join();
        
        $data['_view'] = 'pelajaran/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pelajaran
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'ID_RUANG' => $this->input->post('ID_RUANG'),
				'NAMA_PELAJARAN' => $this->input->post('NAMA_PELAJARAN'),
				'KETERANGAN_PELAJARAN' => $this->input->post('KETERANGAN_PELAJARAN'),
            );
            
            $pelajaran_id = $this->Pelajaran_model->add_pelajaran($params);
            redirect('pelajaran/index');
        }
        else
        {
			$this->load->model('Ruang_model');
			$data['all_ruangs'] = $this->Ruang_model->get_all_ruangs();
            
            $data['_view'] = 'pelajaran/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pelajaran
     */
    function edit($ID_PELAJARAN)
    {   
        // check if the pelajaran exists before trying to edit it
        $data['pelajaran'] = $this->Pelajaran_model->get_pelajaran($ID_PELAJARAN);
        
        if(isset($data['pelajaran']['ID_PELAJARAN']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ID_RUANG' => $this->input->post('ID_RUANG'),
					'NAMA_PELAJARAN' => $this->input->post('NAMA_PELAJARAN'),
					'KETERANGAN_PELAJARAN' => $this->input->post('KETERANGAN_PELAJARAN'),
                );

                $this->Pelajaran_model->update_pelajaran($ID_PELAJARAN,$params);            
                redirect('pelajaran/index');
            }
            else
            {
				$this->load->model('Ruang_model');
				$data['all_ruangs'] = $this->Ruang_model->get_all_ruangs();

                $data['_view'] = 'pelajaran/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pelajaran you are trying to edit does not exist.');
    } 

    /*
     * Deleting pelajaran
     */
    function remove($ID_PELAJARAN)
    {
        $pelajaran = $this->Pelajaran_model->get_pelajaran($ID_PELAJARAN);

        // check if the pelajaran exists before trying to delete it
        if(isset($pelajaran['ID_PELAJARAN']))
        {
            $this->Pelajaran_model->delete_pelajaran($ID_PELAJARAN);
            redirect('pelajaran/index');
        }
        else
            show_error('The pelajaran you are trying to delete does not exist.');
    }
    
}
