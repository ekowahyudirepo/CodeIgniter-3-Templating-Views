<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

	public function login()
	{
		$this->load->view('pages/auth/login');
	}
}
