<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Play extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Play_model');
    } 

	public function index()
	{
		if (isset($_SESSION['id_session'])) {
			redirect(base_url('play/pilih_pelajaran/'.$_SESSION['id_session']));

			// $data['_view'] = 'play/index';
			// $this->load->view('play/layouts/main', $data);
		}else{
			// $this->_createSessionData();
			$data['_view'] = 'play/index';
			$this->load->view('play/layouts/main', $data);
		}
		
	}

	public function pilih_pelajaran($id_session)	
	{
		if (isset($_SESSION['id_ruang'])) {
			redirect(base_url('play/pilih_materi/'.$_SESSION['id_ruang']));
		}else{
		$this->load->model('Ruang_model');

		$data['all_ruangs'] = $this->Ruang_model->get_all_ruangs();

		$data['_view'] = 'play/_pelajaran';
		$this->load->view('play/layouts/main', $data);
		}

		
	}

	public function pilih_materi($id_ruang)	
	{
		if (isset($_SESSION['id_ruang'])) {
			redirect(base_url('play/play_game'));
		}else{
			$array = array(
			'id_ruang' => $id_ruang
			);
			$this->session->set_userdata( $array );

			$this->load->model('Pelajaran_model');		

			$data['materi_pelajarans'] = $this->Pelajaran_model->get_pelajaran_by_ruang($id_ruang);

			$data['_view'] = 'play/_materi';
			$this->load->view('play/layouts/main', $data);
		}
		
	}

	function create_game($id_session, $id_ruang, $id_pelajaran){
		
		$array = array(
			'id_pelajaran' => $id_pelajaran
		);
		$this->session->set_userdata( $array );

		$dataInsert = array(
			'ID_SESSION' => $_SESSION['id_session'],
			'ID_RUANG' => $_SESSION['id_ruang'],
			'ID_PELAJARAN' => $_SESSION['id_pelajaran']
		);
		$this->Play_model->insert_play($dataInsert);


		redirect(base_url('play/play_game'));
	}

	public function play_game(){
		if (isset($_SESSION['alreadyGenerated'])) {
			$data['soal_random'] = $this->Play_model->get_play_detail_join_soal($_SESSION['id_session']);
			$data['_view'] = 'play/_game';
			$this->load->view('play/layouts/main', $data);
		}else{
			$this->_array_random_soal();
			redirect(base_url('play/play_game'));
		}
		
	}

	public function lihat_soal($id_soal){
		$this->load->model('Soal_pelajaran_model');
		$this->load->model('Jawaban_soal_model');

		$data['soal_pelajaran'] = $this->Soal_pelajaran_model->get_soal_pelajaran($id_soal);
		$data['jawaban_soals'] = $this->Jawaban_soal_model->get_jawaban_soal_by_id_soal($id_soal);

		$shuf_jawaban = shuffle($data['jawaban_soals']);

		$data['_view'] = 'play/_soal';
		$this->load->view('play/layouts/main', $data);
	}

	public function cek_jawaban(){
		$this->load->model('Jawaban_soal_model');
		$jawaban_user = $this->input->post('jawaban_user');

		$jawaban_db = $this->Jawaban_soal_model->get_jawaban_soal($jawaban_user);

		if($jawaban_db['IS_KEY'] == 1){
			$params = array(
				'isAnswer' => '1'
			);
			// $this->session->set_flashdata('msg_benar', 'Jawaban anda benar');
		}else{
			$params = array(
				'isAnswer' => '2'
			);
			// $this->session->set_flashdata('msg_salah', 'Jawaban anda salah');
		}
		$this->Play_model->update_play_detail($jawaban_db['ID_SOAL_PELAJARAN'],$params);
		redirect(base_url('play/play_game'));

	}

	public function akhiri_permainan(){
		$this->Play_model->delete_play($_SESSION['id_session']);
		session_destroy();
		redirect(base_url('play'));
	}

	 function createSessionData(){
		$data['id_session'] = uniqid();
		$array = array(
			'id_session' => $data['id_session']
		);
		$this->session->set_userdata( $array );
		redirect('','refresh');
	}

	function _array_random_soal(){
        $numb = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25);
        $shuf_numb = shuffle($numb);

		$dataSoal = $this->Play_model->get_random_soal($_SESSION['id_pelajaran']);
		$random_soal = shuffle($dataSoal);
		$x=0;
		foreach ($dataSoal as $soal) {
			
		    $params = array(
		    	"ID_SESSION"		=> $_SESSION['id_session'],
		    	"ID_SOAL_PELAJARAN"	=> $soal['ID_SOAL_PELAJARAN'],
		    	"NUMB_BOARD"		=> $numb[$x]
		    );
		
		    $this->Play_model->insert_play_detail($params);

		    $x++;
		}

		$array = array(
			'alreadyGenerated' => 1
		);
		return $this->session->set_userdata( $array );
	}


}

/* End of file Play.php */
/* Location: ./application/controllers/Play.php */