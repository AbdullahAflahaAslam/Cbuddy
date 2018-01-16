<?php

	class Model_auth extends CI_model
	{
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
		function getID($id){
			$this->db->where('id_user',$id);
			return $this->db->get('user');
		}


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
			    echo 'Success to send email';   
			}  
		}

	}

?>