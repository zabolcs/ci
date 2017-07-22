<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Social_ion_auth
{
	
	function __construct() {
                // get Codeigniter instance
                $this->CI =& get_instance();
		$this->identity_column =  $this->CI->config->item('identity', 'ion_auth');
		$this->tables  = $this->CI->config->item('tables', 'ion_auth');
	}
	
	
	public function login($identity)
	{
		$remember=FALSE;
		$password='';
		
		$this->CI->ion_auth->trigger_events('pre_login');

		if (empty($identity))
		{
			$this->CI->ion_auth->set_error('login_unsuccessful');
			return FALSE;
		}

		$this->CI->ion_auth->trigger_events('extra_where');

		$query = $this->CI->db->select($this->identity_column . ', email, id, password, active, last_login, activation_code')
		                  ->where($this->identity_column, $identity)
		                  ->limit(1)
		    			  ->order_by('id', 'desc')
		                  ->get($this->tables['users']);

		if($this->CI->ion_auth->is_max_login_attempts_exceeded($identity))
		{
			// Hash something anyway, just to take up time
			//$this->CI->ion_auth->hash_password($password);

			$this->CI->ion_auth->trigger_events('post_login_unsuccessful');
			$this->CI->ion_auth->set_error('login_timeout');

			return FALSE;
		}

		if ($query->num_rows() === 1)
		{
		
			$user = $query->row();

			//var_dump($user); die();
			//$password = $this->CI->ion_auth->hash_password_db($user->id, $password);

			
				if ($user->active == 0)
				{
					$this->CI->ion_auth->activate($user->id, $user->activation_code);
					//$this->CI->ion_auth->trigger_events('post_login_unsuccessful');
					//$this->CI->ion_auth->set_error('login_unsuccessful_not_active');

					//return FALSE;
				}

				$this->CI->ion_auth->set_session($user);

				$this->CI->ion_auth->update_last_login($user->id);

				$this->CI->ion_auth->clear_login_attempts($identity);

				if ($remember && $this->CI->config->item('remember_users', 'ion_auth'))
				{
					$this->CI->ion_auth->remember_user($user->id);
				}

				$this->CI->ion_auth->trigger_events(array('post_login', 'post_login_successful'));
				$this->CI->ion_auth->set_message('login_successful');

				return TRUE;
			
		}

		// Hash something anyway, just to take up time
		//$this->CI->ion_auth->hash_password($password);

		$this->CI->ion_auth->increase_login_attempts($identity);

		$this->CI->ion_auth->trigger_events('post_login_unsuccessful');
		$this->CI->ion_auth->set_error('login_unsuccessful');

		return FALSE;
	}

}