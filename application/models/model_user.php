<?php

	class Model_user extends CI_model
	{
		function getAll(){
			return $this->db->get('user');
		}
		
		function getID($id){
			$this->db->where('id_user',$id);
			return $this->db->get('user');
		}
		function getAbs($id){
			$this->db->select('*');
			$this->db->from('abstract');
			$this->db->where('id_user',$id);
			$this->db->order_by('id_judul', 'asc');
			$query = $this->db->get();
			return $query->result();
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
		function save(){
			$data = array(
				'judul' => $this->input->post('judul'),
				'keyword' => $this->input->post('keyword'),
				'abstract' => $this->input->post('abstract'),
				'topic' => $this->input->post('topic'),
				'tanggal' => $this->input->post('tanggal'),
				'status_recv' => $this->input->post('status_recv'),
				'id_user' => $this->input->post('id_user'));
			$this->db->insert('abstract', $data);
		}
		function updateStatus(){
			$data = array(
				'status' => $this->input->post('status'));
			$this->db->where('id_user', $this->input->post('id_user'));
			$this->db->update('user', $data);
		}

/*		function upload(){
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['max_size']  = '6096';
			$config['remove_space'] = TRUE;
			$this->load->library('upload', $config);
			if($this->upload->do_upload('upload_file')){ // Lakukan upload dan Cek jika proses upload berhasil
      		// Jika berhasil :
      			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
     		return $return;
    		}else{
      		// Jika gagal :
      		$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
    		  return $return;
	    	}

		}
*/
	


	}

?>