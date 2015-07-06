<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
/*
		$message = [
		    'email' => 'email',
		    'byte_array' => 'byte_array',
		    'file_extension' => '.txt'
		];

		//Save to file log as a text file
		$this->load->helper('file');
		$this->load->helper('url');
		$data = 'Some file data'.$message['byte_array'];
		$email = $message['email'];
		$username = preg_replace('/@.*?$/', '', $email);
		$fileextension = $message['file_extension'];
		$filename = 'trialtextfile'.$username.$fileextension ;

		if (! write_file(base_url()."customerfiles/".$filename, $data))
		{
		     echo('Unable to write the file'); // 403 being the HTTP response code
		}
		else
		{
		     $this->load->view('welcome_message');
		}*/
		 $this->load->view('welcome_message');

	}
}
