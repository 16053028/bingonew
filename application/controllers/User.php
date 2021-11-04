<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of users
     */
    function index()
    {
        $data['users'] = $this->User_model->get_all_users();
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'ID_USER_DETAILS' => $this->input->post('ID_USER_DETAILS'),
				'ID_TBL_LOGIN' => $this->input->post('ID_TBL_LOGIN'),
				'ID_STATUS_USER' => $this->input->post('ID_STATUS_USER'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {
			$this->load->model('User_detail_model');
			$data['all_user_details'] = $this->User_detail_model->get_all_user_details();

			$this->load->model('Login_model');
			$data['all_logins'] = $this->Login_model->get_all_logins();

			$this->load->model('Status_user_model');
			$data['all_status_users'] = $this->Status_user_model->get_all_status_users();
            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($ID_USER)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($ID_USER);
        
        if(isset($data['user']['ID_USER']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ID_USER_DETAILS' => $this->input->post('ID_USER_DETAILS'),
					'ID_TBL_LOGIN' => $this->input->post('ID_TBL_LOGIN'),
					'ID_STATUS_USER' => $this->input->post('ID_STATUS_USER'),
                );

                $this->User_model->update_user($ID_USER,$params);            
                redirect('user/index');
            }
            else
            {
				$this->load->model('User_detail_model');
				$data['all_user_details'] = $this->User_detail_model->get_all_user_details();

				$this->load->model('Login_model');
				$data['all_logins'] = $this->Login_model->get_all_logins();

				$this->load->model('Status_user_model');
				$data['all_status_users'] = $this->Status_user_model->get_all_status_users();

                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($ID_USER)
    {
        $user = $this->User_model->get_user($ID_USER);

        // check if the user exists before trying to delete it
        if(isset($user['ID_USER']))
        {
            $this->User_model->delete_user($ID_USER);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
