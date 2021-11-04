<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by ID_USER
     */
    function get_user($ID_USER)
    {
        return $this->db->get_where('TBL_USER',array('ID_USER'=>$ID_USER))->row_array();
    }
        
    /*
     * Get all users
     */
    function get_all_users()
    {
        $this->db->order_by('ID_USER', 'desc');
        return $this->db->get('TBL_USER')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('TBL_USER',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($ID_USER,$params)
    {
        $this->db->where('ID_USER',$ID_USER);
        return $this->db->update('TBL_USER',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($ID_USER)
    {
        return $this->db->delete('TBL_USER',array('ID_USER'=>$ID_USER));
    }
}
