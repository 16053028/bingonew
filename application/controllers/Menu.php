<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Menu extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
    } 

    /*
     * Listing of menus
     */
    function index()
    {
        $data['menus'] = $this->Menu_model->get_all_menus();
        
        $data['_view'] = 'menu/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new menu
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'ID_DETAIL_MENU' => $this->input->post('ID_DETAIL_MENU'),
				'ID_STATUS_USER' => $this->input->post('ID_STATUS_USER'),
            );
            
            $menu_id = $this->Menu_model->add_menu($params);
            redirect('menu/index');
        }
        else
        {
			$this->load->model('Detail_menu_model');
			$data['all_detail_menus'] = $this->Detail_menu_model->get_all_detail_menus();

			$this->load->model('Status_user_model');
			$data['all_status_users'] = $this->Status_user_model->get_all_status_users();
            
            $data['_view'] = 'menu/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a menu
     */
    function edit($ID_MENU)
    {   
        // check if the menu exists before trying to edit it
        $data['menu'] = $this->Menu_model->get_menu($ID_MENU);
        
        if(isset($data['menu']['ID_MENU']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ID_DETAIL_MENU' => $this->input->post('ID_DETAIL_MENU'),
					'ID_STATUS_USER' => $this->input->post('ID_STATUS_USER'),
                );

                $this->Menu_model->update_menu($ID_MENU,$params);            
                redirect('menu/index');
            }
            else
            {
				$this->load->model('Detail_menu_model');
				$data['all_detail_menus'] = $this->Detail_menu_model->get_all_detail_menus();

				$this->load->model('Status_user_model');
				$data['all_status_users'] = $this->Status_user_model->get_all_status_users();

                $data['_view'] = 'menu/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The menu you are trying to edit does not exist.');
    } 

    /*
     * Deleting menu
     */
    function remove($ID_MENU)
    {
        $menu = $this->Menu_model->get_menu($ID_MENU);

        // check if the menu exists before trying to delete it
        if(isset($menu['ID_MENU']))
        {
            $this->Menu_model->delete_menu($ID_MENU);
            redirect('menu/index');
        }
        else
            show_error('The menu you are trying to delete does not exist.');
    }
    
}
