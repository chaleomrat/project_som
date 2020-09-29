<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{	
		$this->load->view('bootstrap');
		$this->load->view('Navbar');
        $this->load->view('view');
	}
}
