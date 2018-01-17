<?php
	
	/**
	* 
	*/
	class Auth extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_auth');
			$this->load->model('model_user');
		}

		function index(){
			if($this->session->login_status == 'true'){
				redirect('user');
			}
			else{
				$this->load->view('template');
				
			}
		}

		function login(){
			if(isset($_POST['login'])){
				if($this->model_auth->login()==1){
					$this->session->login_status = 'true';
					$_SESSION['nama'] = $this->model_auth->namaUser();
					$_SESSION['status'] = $this->model_auth->status();
					$_SESSION['sesId'] = $this->model_auth->sesId();
					redirect('user');
				}
				else{
					echo '<script>alert ("User Anda Tidak Terdaftar")</script>';
		   			$this->load->view('form_login');
				}
			}
			else{
				$this->load->view('form_login');
				//$this->template->load('template','form_login');
			}
		}

		function logout(){
			$this->session->sess_destroy();
			//$this->load->view('form_login');
			$this->load->view('form_login');
		}


		function input(){  
			if (isset($_POST['add'])) {
				if(($_POST['pass']==$_POST['repass'])){
					$this->model_auth->save();
					echo '<script>alert ("Success Created")</script>';
					$this->load->view('form_login');
				}
				else{
					echo '<script>alert ("Make sure your password same ")</script>';
					$this->load->view('signup');
				}


				
			} else {
				
				$data['country']=$this->model_auth->getAll()->result();
				//$this->template->load('template','signup',$data);
				$this->load->view('signup',$data);

			}
		}

	}