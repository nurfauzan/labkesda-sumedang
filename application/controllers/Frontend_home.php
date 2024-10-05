<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_home extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'UPT LABKESDA KABUPATEN SUMEDANG';
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/templates/navbar', $data);
		$this->load->view('frontend/home');
		$this->load->view('frontend/templates/footer');
	}
}
