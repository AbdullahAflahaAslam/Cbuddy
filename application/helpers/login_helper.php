<?php 

	function ceklogin(){
		$ci = & get_instance();
		if ($ci->session->login_status != 'true') {
			redirect('auth/login');
		}
	} 
?>