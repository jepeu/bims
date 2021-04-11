<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class BidOpeningController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('logged_in')==false){
            redirect('login');
        }
    }

    public function index()
    {

        $sql="select * from projects where delete_status != 1"; 
        $query = $this->db->query($sql);

        if($query){
            $data = array(
                'projects_data' => $query->result(),
                'session_user_id'=>   $this->session->userdata('user_id')
            );
        }
        
        $this->load->view('BAC/bid-opening/tenders_view', $data);
        
    }
    

    public function bid_openers($id) 
    {
        $row = $this->db->query('select * from projects where projects_id = "'.$id.'"  ')->row();
        
        // $sql="Select * from users where user_type='BAC' or user_type='TWG' "; 

        // $sql2="Select * from project_openers where decrypt_status= '1'"; 
        $sql='Select * from project_openers
                left join users on project_openers.users_user_id = users.user_id
                and projects_projects_id = "'.$id.'" ';

        
        $query = $this->db->query($sql);
        // $query2 = $this->db->query($sql2);
      
        if ($row) {
            $data = array(
                'users_bid_opener' => $query->result(),

                // 'users_decrypt_status' => $query2->result(),

                'projects_id' => $row->projects_id,
                'projects_description' => $row->projects_description,
                'projects_type' => $row->projects_type,
                'opening_date' => $row->opening_date,
                'approve_budget_cost' => $row->approve_budget_cost,
                'projects_status' => $row->projects_status,
                
                'session_user_id'=>   $this->session->userdata('user_id')
        );

            $this->load->view('BAC/bid-opening/bid_openers_view', $data);
     
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bidopening'));
        }
    }

    public function decrypt_project() 
    {
			
        $decrypt_status = $this->input->post('decrypt_status');
        $project_openers_id  = $this->input->post('project_openers_id');

        $this->db->where('project_openers_id ', $project_openers_id );

        $this->db->set('decrypt_status', $decrypt_status);

        $this->db->update('project_openers');

    }

    public function check_opener_decrypt_project_status() 
    {

        $sql="Select * from project_openers where users_users_id='1' ";    
        $query = $this->db->query($sql);

    }

  
}