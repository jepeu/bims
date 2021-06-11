<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function services()
	{
		$this->load->view('services');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
}
