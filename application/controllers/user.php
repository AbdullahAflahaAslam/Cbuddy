<?php

	class user extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->model('model_user');
			$this->load->model('model_auth');
		}

		function index(){

		
		$id=$_SESSION['sesId'];
		$data['user']= $this->model_user->getID($id);
		$data['abstract'] = $this->model_user->getAbs($id);
		$this->template->load('templateUsr','ShowPerson',$data);
		}

		function input(){
			if (isset($_POST['add'])) {
				$this->model_user->save();
				$this->model_user->updateStatus();
				redirect(base_url()."index.php/user");
			} else {
			$data['now'] = date('Y-m-d');
			$this->template->load('templateUsr','abstract/input_attend',$data);
			}
		}
/*		function uploadFile(){
		    $data = array();
    
    		if($this->input->post('upload')){ // Jika user menekan tombol Submit (Simpan) pada form
      		// lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
		      $upload = $this->model_user->upload();
		      
			    if($upload['result'] == "success"){ // Jika proses upload sukses
			    // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
			    //$this->GambarModel->save($upload);  
			    redirect('user'); // Redirect kembali ke halaman awal / halaman view data
			    }else{ // Jika proses upload gagal
			      $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			      }
		    }
		    $this->template->load('templateUsr','ShowPerson',$data);
 		}
		*/

	}

?>