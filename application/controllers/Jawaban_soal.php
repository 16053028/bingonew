<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Jawaban_soal extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jawaban_soal_model');
    } 

    /*
     * Listing of jawaban_soals
     */
    function index()
    {
        $data['jawaban_soals'] = $this->Jawaban_soal_model->get_all_jawaban_soals();
        
        $data['_view'] = 'jawaban_soal/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new jawaban_soal
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'ID_SOAL_PELAJARAN' => $this->input->post('ID_SOAL_PELAJARAN'),
				'IS_KEY' => $this->input->post('IS_KEY'),
				'TEKS_JAWABAN_SOAL' => $this->input->post('TEKS_JAWABAN_SOAL'),
            );
            
            $jawaban_soal_id = $this->Jawaban_soal_model->add_jawaban_soal($params);
            redirect('jawaban_soal/index');
        }
        else
        {
			$this->load->model('Soal_pelajaran_model');
			$data['all_soal_pelajarans'] = $this->Soal_pelajaran_model->get_all_soal_pelajarans();
            
            $data['_view'] = 'jawaban_soal/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a jawaban_soal
     */
    function edit($ID_JAWABAN_SOAL)
    {   
        // check if the jawaban_soal exists before trying to edit it
        $data['jawaban_soal'] = $this->Jawaban_soal_model->get_jawaban_soal($ID_JAWABAN_SOAL);
        
        if(isset($data['jawaban_soal']['ID_JAWABAN_SOAL']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ID_SOAL_PELAJARAN' => $this->input->post('ID_SOAL_PELAJARAN'),
					'IS_KEY' => $this->input->post('IS_KEY'),
					'TEKS_JAWABAN_SOAL' => $this->input->post('TEKS_JAWABAN_SOAL'),
                );

                $this->Jawaban_soal_model->update_jawaban_soal($ID_JAWABAN_SOAL,$params);            
                redirect('jawaban_soal/index');
            }
            else
            {
				$this->load->model('Soal_pelajaran_model');
				$data['all_soal_pelajarans'] = $this->Soal_pelajaran_model->get_all_soal_pelajarans();

                $data['_view'] = 'jawaban_soal/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The jawaban_soal you are trying to edit does not exist.');
    } 

    /*
     * Deleting jawaban_soal
     */
    function remove($ID_JAWABAN_SOAL)
    {
        $jawaban_soal = $this->Jawaban_soal_model->get_jawaban_soal($ID_JAWABAN_SOAL);

        // check if the jawaban_soal exists before trying to delete it
        if(isset($jawaban_soal['ID_JAWABAN_SOAL']))
        {
            $this->Jawaban_soal_model->delete_jawaban_soal($ID_JAWABAN_SOAL);
            redirect('jawaban_soal/index');
        }
        else
            show_error('The jawaban_soal you are trying to delete does not exist.');
    }
    
}
