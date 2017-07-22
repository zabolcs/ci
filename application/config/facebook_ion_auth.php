<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Settings.
| -------------------------------------------------------------------------
*/
$config['app_id'] 		= '189184237906335'; 		// Your app id
$config['app_secret'] 	= '610a4a25cee2687b4343de362fbc9e11'; 		// Your app secret key
$config['scope'] 		= 'public_profile'; 	// custom permissions check - http://developers.facebook.com/docs/reference/login/#permissions
$config['redirect_uri'] = base_url() . 'auth/facebook'; 		// url to redirect back from facebook. If set to '', site_url('') will be used