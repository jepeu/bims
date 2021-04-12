<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserManagementController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $sql="select * from users where user_type='BIDDER'"; 
        $query = $this->db->query($sql);

        if($query){
            $data = array(
                'users_data' => $query->result(),
                'session_user_id'=>   $this->session->userdata('user_id')
            );
        }
       
        $this->load->view('BAC/user-management/list_of_bidder_view', $data);
        return $data;

        
    }
    public function ajax_table_show_users()
    {
        $sql="select * from users where user_type='BIDDER'"; 
        $query = $this->db->query($sql);
        $table_data ="";

        if($query){
            
            $start = 1;
                foreach ($query->result() as $users)
                {
                    $table_data .= '<tr class="gradeX odd" role="row" id="'.$users->user_id.'">
                                    
                    <td class="sorting_1">'.$start++.'</td>
                    <td>'.$users->firstname.' '.$users->lastname.'</td>
                    <td>'.$users->companyname.'</td>
                    <td>'. $users->address.'</td>
                </tr>';
                }
        }
       
        echo $table_data;
        die;
    }
    public function create()
    {

        // ajax insert data
        $data = array(				
            'projects_description' 		=> $this->input->post('projects_description'), 
            'projects_type' 	=> $this->input->post('projects_type'), 
            'opening_date' 	=> $this->input->post('opening_date'), 
            'approve_budget_cost' 	=> $this->input->post('approve_budget_cost'), 
            'projects_status' 	=> $this->input->post('projects_status'), 
        );

        $this->db->insert('projects',$data);
    }

    public function update()
    {
        		
        $projects_id		= $this->input->post('projects_id');
        $projects_description 		= $this->input->post('projects_description');
        $projects_type	= $this->input->post('projects_type'); 
        $opening_date 	= $this->input->post('opening_date');
        $approve_budget_cost 	= $this->input->post('approve_budget_cost');
        $projects_status 	= $this->input->post('projects_status');


        $this->db->set('projects_description', $projects_description);
        $this->db->set('projects_type', $projects_type);
        $this->db->set('opening_date', $opening_date);
        $this->db->set('approve_budget_cost', $approve_budget_cost);
        $this->db->set('projects_status', $projects_status);
        $this->db->where('projects_id', $projects_id);

        $this->db->update('projects');
    }

    public function delete()
    {
        $projects_id =$this->input->post('projects_id');
        $this->db->where('projects_id', $projects_id);
        $this->db->delete('projects');
    }
}