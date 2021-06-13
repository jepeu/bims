<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}
	public function about()
	{
		$this->load->view('about_view');
	}
	public function services()
	{
		$this->load->view('services_view');
	}
	public function contact()
	{
		$this->load->view('contact_view');
	}
	public function invitation_to_bid()
	{
		$this->load->view('invitation-to-bid_view');
	}
}
