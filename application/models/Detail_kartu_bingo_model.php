<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Detail_kartu_bingo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get detail_kartu_bingo by ID_DETAIL_KARTU_BINGO
     */
    function get_detail_kartu_bingo($ID_DETAIL_KARTU_BINGO)
    {
        return $this->db->get_where('TBL_DETAIL_KARTU_BINGO',array('ID_DETAIL_KARTU_BINGO'=>$ID_DETAIL_KARTU_BINGO))->row_array();
    }
        
    /*
     * Get all detail_kartu_bingos
     */
    function get_all_detail_kartu_bingos()
    {
        $this->db->order_by('ID_DETAIL_KARTU_BINGO', 'desc');
        return $this->db->get('TBL_DETAIL_KARTU_BINGO')->result_array();
    }
        
    /*
     * function to add new detail_kartu_bingo
     */
    function add_detail_kartu_bingo($params)
    {
        $this->db->insert('TBL_DETAIL_KARTU_BINGO',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update detail_kartu_bingo
     */
    function update_detail_kartu_bingo($ID_DETAIL_KARTU_BINGO,$params)
    {
        $this->db->where('ID_DETAIL_KARTU_BINGO',$ID_DETAIL_KARTU_BINGO);
        return $this->db->update('TBL_DETAIL_KARTU_BINGO',$params);
    }
    
    /*
     * function to delete detail_kartu_bingo
     */
    function delete_detail_kartu_bingo($ID_DETAIL_KARTU_BINGO)
    {
        return $this->db->delete('TBL_DETAIL_KARTU_BINGO',array('ID_DETAIL_KARTU_BINGO'=>$ID_DETAIL_KARTU_BINGO));
    }
}
