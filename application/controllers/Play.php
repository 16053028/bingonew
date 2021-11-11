<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Play extends CI_Controller {

	public function index()
	{
		if (isset($_SESSION['id_session'])) {
			$data['id_session'] = $_SESSION['id_session'];
		}else{
			$data['id_session'] = uniqid();
			$array = array(
				'id_session' => $data['id_session']
			);
				$this->session->set_userdata( $array );
		}

		$data['_view'] = 'play/index';
		$this->load->view('play/layouts/main', $data);
	}

	public function pilih_pelajaran()	
	{

		$this->load->model('Ruang_model');

		$data['all_ruangs'] = $this->Ruang_model->get_all_ruangs();

		if (isset($_SESSION['id_session'])) {
			$array = array(
				'id_ruang' => $data['all_ruangs']['ID_RUANG']
			);
				$this->session->set_userdata( $array );
		}

		$data['_view'] = 'play/layouts/_pelajaran';
		$this->load->view('play/layouts/main', $data);
	}

	public function pilih_materi($id_pelajaran)	
	{

		$this->load->model('Pelajaran_model');		

		$data['materi_pelajarans'] = $this->Pelajaran_model->get_pelajaran_by_ruang($id_pelajaran);

		if (isset($_SESSION['id_ruang'])) {
			$array = array(
				'id_pelajaran' =>$data['materi_pelajarans']['ID_PELAJARAN']
			);
			
				$this->session->set_userdata( $array );
		}

		$data['_view'] = 'play/layouts/_materi';
		$this->load->view('play/layouts/main', $data);
	}

	function create_game($id_session, $id_ruang, $id_pelajaran){
		session_destroy();
	}


}

/* End of file Play.php */
/* Location: ./application/controllers/Play.php */