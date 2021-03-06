<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Artu_bingo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kartu_bingo by ID_KARTU_BINGO
     */
    function get_kartu_bingo($ID_KARTU_BINGO)
    {
        return $this->db->get_where('TBL_KARTU_BINGO',array('ID_KARTU_BINGO'=>$ID_KARTU_BINGO))->row_array();
    }
        
    /*
     * Get all kartu_bingos
     */
    function get_all_kartu_bingos()
    {
        $this->db->order_by('ID_KARTU_BINGO', 'desc');
        return $this->db->get('TBL_KARTU_BINGO')->result_array();
    }
        
    /*
     * function to add new kartu_bingo
     */
    function add_kartu_bingo($params)
    {
        $this->db->insert('TBL_KARTU_BINGO',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kartu_bingo
     */
    function update_kartu_bingo($ID_KARTU_BINGO,$params)
    {
        $this->db->where('ID_KARTU_BINGO',$ID_KARTU_BINGO);
        return $this->db->update('TBL_KARTU_BINGO',$params);
    }
    
    /*
     * function to delete kartu_bingo
     */
    function delete_kartu_bingo($ID_KARTU_BINGO)
    {
        return $this->db->delete('TBL_KARTU_BINGO',array('ID_KARTU_BINGO'=>$ID_KARTU_BINGO));
    }
}
