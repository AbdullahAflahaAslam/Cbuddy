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
				if($this->model_auth->login()==2){
					$this->session->login_status = 'true';
					$_SESSION['nama'] = $this->model_auth->namaUser();
					$_SESSION['status'] = $this->model_auth->status();
					$_SESSION['sesId'] = $this->model_auth->sesId();
					redirect('user');
				}
				elseif ($this->model_auth->login()==1) {
					echo '<script>alert ("User Anda Tidak Terdaftar")</script>';
		   			$this->load->view('form_login');
				}
				else{
					echo '<script>alert ("Password yang anda masukan salah")</script>';
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
					if($this->model_auth->CekEmail()==2){
						echo '<script>alert ("Your Email has been Registered ")</script>';
						$data['country']=$this->model_auth->getAll()->result();
						//$this->template->load('template','signup',$data);
						$this->load->view('signup',$data);
					}
					elseif ($this->model_auth->CekEmail()==1) {
						echo '<script>alert ("Username already Exist ")</script>';
						$data['country']=$this->model_auth->getAll()->result();
						//$this->template->load('template','signup',$data);
						$this->load->view('signup',$data);
					}
					else{
						$this->model_auth->save();
						echo '<script>alert ("Success Created")</script>';
						$user =  $this->input->post('form_username');
						$pass = $this->input->post('pass');
						$data['user']= $this->model_user->getUser($user);
						$email = $this->input->post('email');
						$pesan =  $this->load->view('Email_Registration',$data,true);
						$this->model_auth->sendMail($email,$pesan);
						echo '<script>alert ("Success Created")</script>';
						$this->load->view('form_login');

					}

				}
				else{
					echo '<script>alert ("Make sure your password same ")</script>';
					$data['country']=$this->model_auth->getAll()->result();
					//$this->template->load('template','signup',$data);
					$this->load->view('signup',$data);
				}


				
			} else {
				
				$data['country']=$this->model_auth->getAll()->result();
				//$this->template->load('template','signup',$data);
				$this->load->view('signup',$data);

			}
		}

	}