<?php 

	class Model_abstract extends CI_MODEL {

		function getID(){
			$this->db->where('id_user',$id);
			$query = $this->db->get();
			return $query->result();
		}

	}

 ?>