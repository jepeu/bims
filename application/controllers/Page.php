<?php
class Page extends CI_Controller{
      function __construct()
      {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE)
        {
          redirect('login-register');
        }
      }
    
      function index(){
        //Allowing access to admin only
          if($this->session->userdata('user_type')==='admin')
          {
              $this->load->view('dashboard_view_admin');
          }
          else
          {
              echo "Access Denied";
          }
    
      }
    
      function staff(){
        //Allowing access to staff only
        if($this->session->userdata('type')==='BAC')
        {
          
          $this->load->view('BAC/dashboard_view');


        }
        else if($this->session->userdata('type')==='TWG')
        {
          $this->load->view('dashboard_view_twg');
        }
        else
        {
            echo "Access Denied";
        }
      }
      function bidder(){
        //Allowing access to staff only
        if($this->session->userdata('type')==='bidder')
        {
          $this->load->view('dashboard_view_bidder');
        }
        else
        {
            echo "Access Denied";
        }
      }
}