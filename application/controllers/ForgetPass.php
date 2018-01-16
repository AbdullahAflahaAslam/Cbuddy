<?php
	class ForgetPass extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_user');
			$this->load->model('model_auth');
		}
		function index(){
			if(isset($_POST['submit'])){
				if($this->model_auth->forgetpass()==1){
					$user =  $this->input->post('user');
					$data['user']= $this->model_user->getUser($user);
					$pass = $this->model_auth->getPass();
					$email = $this->input->post('email');
					$pesan =  $this->load->view('Forget_Password',$data,true);
					$this->model_auth->sendMail($email,$pesan);
				}
				else{
					echo '<script>alert ("User Anda Tidak Terdaftar")</script>';
		   			$this->load->view('form_forgetpass');
				}
			}
			else{
				$this->load->view('form_forgetpass');
				//$this->template->load('template','form_login');
			}
		}



	}
?>