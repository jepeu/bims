<?php
class LoginRegister extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    
    function index()
    {
        $this->load->view('login-register/login_register_view');
    }
    
    function auth(){
        $email    = $this->input->post('email',TRUE);
        $password = md5($this->input->post('password',TRUE));
        $validate = $this->login_model->validate($email,$password);

        if($validate->num_rows() > 0)
        {
            $data  = $validate->row_array();
            $user_id  = $data['user_id'];
            $name  = $data['username'];
            $email = $data['email'];
            $type = $data['user_type'];
            $sesdata = array(
                'user_id'  => $user_id,
                'username'  => $name,
                'email'     => $email,
                'type'     => $type,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if($type === 'admin')
            {
                redirect('page/admin');
            }
             // access login for Bid and Awards Committe
            elseif($type === 'BAC' || $type === 'HEAD-BAC' )
            {
                redirect('page/staff');
            }
             // access login for Technical Working Group


            elseif($type === 'TWG' ||  $type === 'HEAD-TWG')
            {
                redirect('page/staff');
            }
             // access login for bidder
            elseif($type === 'bidder')
            {
                redirect('page/bidder');
            }

        }
        else
        {
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('login-register');
        }
    }
    public function registration(){ 
            $config['upload_path']="./assets/uploads";
            $config['allowed_types']='gif|jpg|png';
            $this->load->library('upload',$config);

            if($this->upload->do_upload("file")){
                $data = array('upload_data' => $this->upload->data());
                $userData = array( 
                    'user_type' => 'BIDDER', 
                    'firstname' => $this->input->post('firstname'), 
                    'lastname' => $this->input->post('lastname'), 
                    'companyname' => $this->input->post('companyname'),      
                    'address' => $this->input->post('address'), 
                    'username' => $this->input->post('username'), 
                    'email' => $this->input->post('email'), 
                    'password' => md5($this->input->post('password')), 
                    'status' => '0', 
                    'imgpath' => "/assets/uploads/".$data['upload_data']['file_name']
                ); 

                $result= $this->db->insert('users', $userData);
                
                if ($result == TRUE) {
                    echo "true";
                }
            }
    } 

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login-register');
    }
    
}