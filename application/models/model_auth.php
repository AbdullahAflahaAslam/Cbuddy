<?php

	class Model_auth extends CI_model
	{
		////untuk mengambil semua data negara dan phone code
		function getAll(){
			return $this->db->get('country');
		}
		
		function login(){
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$this->db->select('pass');
			$this->db->where('user', $user);
			$data = $this->db->get('user')->row();

			if (!empty($data->pass)){
				if($pass == $data->pass){
					
					return 2;
				}
				else {
					return 0;
				}
			}
			else {
				return 1;
			}
		}

		function CekEmail(){
			$user = $this->input->post('form_username');
			$email = $this->input->post('email');
			$this->db->select('email');
			$this->db->where('user', $user);
			$data = $this->db->get('user')->row();

			if (!empty($data->email)){
				if($email == $data->email){
					return 2;
				}
				else {
					return 1;
				}
			}
			else {
				return 0;
			}
		}



		/// untuk mengecek apakah email ada di database atau tidak
		function forgetpass(){
			$user = $this->input->post('user');
			$email = $this->input->post('email');
			$this->db->select('email');
			$this->db->where('user', $user);
			$data = $this->db->get('user')->row();

			if (!empty($data->email)){
				if($email == $data->email){
					return 1;
				}
				else {
					return 0;
				}
			}
			else {
				return 0;
			}
		}


		////untuk mengambil nama user
		function namaUser(){
			$pass = $this->input->post('pass');
			$user = strtoupper($this->input->post('user'));
			$this->db->select('*');
			$this->db->where('user', $user);
			$query = $this->db->get('user')->row();
			if (!empty($query->pass)) {
				if ($pass == $query->pass) {
					return $query->FName;
				} else {
					return 0;
				}
			} else {
				return 0;
			}
		}

		///untuk mengambil status user
		function status(){
			$pass = $this->input->post('pass');
			$user = strtoupper($this->input->post('user'));
			$this->db->select('*');
			$this->db->where('user', $user);
			$query = $this->db->get('user')->row();
			if (!empty($query->pass)) {
				if ($pass == $query->pass) {
					return $query->status;
				} else {
					return 0;
				}
			} else {
				return 0;
			}
		}



		///untuk mengambil id dan dijadikan session
		function sesId(){
			$pass = $this->input->post('pass');
			$user = strtoupper($this->input->post('user'));
			$this->db->select('*');
			$this->db->where('user', $user);
			$query = $this->db->get('user')->row();
			if (!empty($query->pass)) {
				if ($pass == $query->pass) {
					return $query->id_user;
				} else {
					return 0;
				}
			} else {
				return 0;
			}
		}


		///untuk mendapat pass dan dikirim email
		function getPass(){
			$email = $this->input->post('email');
			$user = strtoupper($this->input->post('user'));
			$this->db->select('*');
			$this->db->where('user', $user);
			$query = $this->db->get('user')->row();
			if (!empty($query->email)) {
				if ($email == $query->email) {
					return $query->pass;
				} else {
					return 0;
				}
			} else {
				return 0;
			}
		}

		////save data register account
		function save(){
			$data = array(
				'FName' => $this->input->post('form_firstname'),
				'MName' => $this->input->post('form_midname'),
				'LName' => $this->input->post('form_name'),
				'email' => $this->input->post('email'),
				'company' => $this->input->post('form_organisation'),
				'departement' => $this->input->post('form_department'),
				'title' => $this->input->post('form_gender'),
				'FullTitle' => $this->input->post('form_title'),
				'AddLine1' => $this->input->post('form_addr1'),
				'AddLine2' => $this->input->post('form_addr2'),
				'postcode' => $this->input->post('postcode'),
				'city' => $this->input->post('form_city'),
				'province' => $this->input->post('form_province'),
				'country' => $this->input->post('form_country'),
				'phonecode' => $this->input->post('phone_code'),
				'phone' => $this->input->post('form_phone'),
				'Fax' => $this->input->post('form_fax'),
				'homepage' => $this->input->post('form_url'),
				'comment' => $this->input->post('Comments'),
				'user' => $this->input->post('form_username'),
				'pass' => $this->input->post('pass'),
				'rule' => $this->input->post('rule'),
				'status_pay' => $this->input->post('status_pay'),
				'status' => $this->input->post('status'));
			$this->db->insert('user', $data);
		}

		////mendapat data dari id 
		function getID($id){
			$this->db->where('id_user',$id);
			return $this->db->get('user');
		}

		/////mengirim email
		function sendMail($email,$pesan){
			$config = Array(
				'protocol' => 'smtp',  
			    'smtp_host' => 'ssl://smtp.googlemail.com',  
			    'smtp_port' => 465,  
			    'smtp_user' => 'ictte@fkip.uns.ac.id',   
			    'smtp_pass' => 'ictte2017',   
			    'mailtype' => 'html',   
			    'charset' => 'iso-8859-1'
			);
			$this->load->library('email', $config);  
			$this->email->set_newline("\r\n");  
			$this->email->from('ictte@fkip.uns.ac.id', 'Admin ICTTE FKIP UNS 2018');   
			$this->email->to($email);   
			$this->email->subject('THE 4th ICTTE FKIP UNS');   
			$this->email->message($pesan);  
			if (!$this->email->send()) {  
		    	show_error($this->email->print_debugger());   
			}else{  
			    echo '<script>alert ("Data Account has been sent email")</script>';
			}  
		}

	}

?>