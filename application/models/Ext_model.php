<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ext_model extends CI_Model {

	public function getAksesMenu($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_menu');
		$this->db->join('tbl_detail_menu', 'tbl_menu.id_detail_menu = tbl_detail_menu.id_detail_menu');
		$this->db->join('tbl_status_user', 'tbl_status_user.id_status_user = tbl_menu.id_status_user');
		$this->db->where('tbl_menu.id_status_user', $id);
		$this->db->where('tbl_detail_menu.id_parent', 0);
		$this->db->order_by('tbl_detail_menu.TEKS_MENU', 'ASC');
		return $this->db->get()->result();
	}	

	public function getDetailUserAll()
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('tbl_user_details', 'tbl_user_details.id_user_details = tbl_user.id_user_details','left');
		$this->db->join('tbl_status_user', 'tbl_status_user.id_status_user = tbl_user.id_status_user','left');
		$this->db->join('tbl_instansi_pendidikan', 'tbl_instansi_pendidikan.ID_INSTANSI_PENDIDIKAN = tbl_user.ID_INSTANSI_PENDIDIKAN','left');
		$this->db->join('tbl_login', 'tbl_login.ID_TBL_LOGIN = tbl_user.ID_TBL_LOGIN','left');
		$this->db->order_by('NAMA_USER', 'ASC');
		return $this->db->get()->result_array();
	}	

	public function getDetailUserByID($ID_USER)
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('tbl_user_details', 'tbl_user_details.id_user_details = tbl_user.id_user_details','left');
		$this->db->join('tbl_status_user', 'tbl_status_user.id_status_user = tbl_user.id_status_user','left');
		$this->db->join('tbl_instansi_pendidikan', 'tbl_instansi_pendidikan.ID_INSTANSI_PENDIDIKAN = tbl_user.ID_INSTANSI_PENDIDIKAN','left');
		$this->db->join('tbl_login', 'tbl_login.ID_TBL_LOGIN = tbl_user.ID_TBL_LOGIN','left');
		$this->db->where('ID_USER', $ID_USER);
		return $this->db->get()->result_array();
	}	

	public function rIDAdd($tbl,$params){
		$this->db->insert($tbl,$params);
        return $this->db->insert_id();
	}

	function update_tbl($tbl,$col,$idcol,$params)
    {
        $this->db->where($col,$idcol);
        return $this->db->update($tbl,$params);
    }

}

/* End of file Ext_model.php */
/* Location: ./application/models/Ext_model.php */