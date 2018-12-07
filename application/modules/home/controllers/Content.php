<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('content_model');
		$this->load->helper('content');
		$this->load->library('esg');
	}
	public function index()
	{
		$this->home_model->home();
		$this->load->view('index');
	}

	public function list()
	{
		$this->load->view('index');
	}

	public function detail()
	{
		$this->home_model->home();
		$this->content_model->detail();
		$this->load->view('index');
	}

	public function e()
	{
		$this->load->view('error');
	}
}