<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->theme
			->title('Welcome')
			->add_css('style')
			->load('welcome');
	}

	/**
	 * Example to use Semantic UI
	 *
	 * @return 	void
	 */
	public function semantic()
	{
		$this->theme
				->theme('semantic')
				->add_css('style')
				->add_js('scripts')
				->load('welcome');
	}
	

}
