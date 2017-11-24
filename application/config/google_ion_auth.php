<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Settings.
| -------------------------------------------------------------------------
*/
$config['client_id'] 		= '109145391514-lsdqpg92ocbjtt7uvu3059ogfpv2p5le.apps.googleusercontent.com'; 		// Your app id
$config['client_secret'] 	= 'myiQCTyNiWabIl1A73JZC-o0'; 		// Your app secret key
$config['scope'] 		= 'public_profile'; 
$ci=& get_instance();
$config['redirect_uri'] = $ci->config->item('base_url').'/auth/google'; // url to redirect back from google