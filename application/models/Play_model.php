<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Play_model extends CI_Model {


	/*
     * function to add new menu
     */
    function insert_play($params)
    {
        $this->db->insert('tbl_play',$params);
        return $this->db->insert_id();
    }

    /*
     * function get play data
     */
    function get_play_data()
    {
        $this->db->select('NAMA_PEMAIN');
        $this->db->from('tbl_play');
        $query = $this->db->get();

        return $query->result_array();
    }

    function update_play($ID_SESSION,$params)
    {
        $this->db->where('tbl_play',$ID_MENU);
        return $this->db->update('tbl_play',$params);
    }

    function get_random_soal($id_pelajaran){
        $this->db->select('*');
        $this->db->from('tbl_soal_pelajaran');
        $this->db->where('ID_PELAJARAN', $id_pelajaran);
        $query = $this->db->get();
        return $query->result_array();
    }

    function insert_play_detail($params){
        $this->db->insert('tbl_play_detail',$params);
        return $this->db->insert_id();
    }

    function update_play_detail($ID_SOAL_PELAJARAN,$params)
    {
        $this->db->where('ID_SOAL_PELAJARAN',$ID_SOAL_PELAJARAN);
        return $this->db->update('tbl_play_detail',$params);
    }

    function get_play_detail_join_soal($id_session){
        $this->db->select('*');
        $this->db->from('tbl_play_detail');
        $this->db->join('tbl_soal_pelajaran', 'tbl_soal_pelajaran.ID_SOAL_PELAJARAN = tbl_play_detail.ID_SOAL_PELAJARAN', 'left');
        $this->db->where('tbl_play_detail.ID_SESSION', $id_session);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_play_detail($id_session){
        $this->db->select('isAnswer');
        $this->db->from('tbl_play_detail');
        $this->db->where('ID_SESSION', $id_session);
        $query = $this->db->get();

        return $query->result_array();
    }

    function delete_play($ID_SESSION)
    {
        return $this->db->delete('TBL_play',array('ID_SESSION'=>$ID_SESSION));
    }

}

/* End of file Play_model.php */
/* Location: ./application/models/Play_model.php */