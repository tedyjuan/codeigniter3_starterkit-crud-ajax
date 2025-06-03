<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['role'] = 'Administrator';
		$this->load->view('template/v_dashboard_metronik', $data);
	}
}
