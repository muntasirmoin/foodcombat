<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_controller extends CI_Controller{

    public function index(){
        $this->load->view('admin_login');
    }

    public function admin_login_control(){
        $admin_email=$this->input->post('admin_email',true);
        $admin_password= $this->input->post('admin_password',true);
        $this->load->model('admin_model');
        $result = $this->admin_model->admin_login_info($admin_email,$admin_password);

       $sdata = array();
       if($result){
            $sdata['admin_id']=$result->admin_id;
            $sdata['admin_name']=$result->admin_name;
            $this->session->set_userdata($sdata);
            redirect('dashboard');
        }
        else{
            // echo "Your or Password Invalid";
            $sdata['logout_message']="Your Email or Password Invalid";
            $this->session->set_userdata($sdata);
            redirect('admin_controller');
        }
    }
    public function logout(){
        $this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');
		$sdata['logout_message'] = "Logout Successfully!";
		$this->session->set_userdata($sdata);
		redirect('admin_controller');
    }
    public function admin_register_form(){
        $this->load->view('home/admin_signup');
    }


    public function admin_signup_control(){
        $data=array();
        $this->load->model('admin_model');
        $data['admin_signup_info'] = $this->admin_model->admin_signup_info();
        $sdata['logout_message'] = "New Admin Added";
        $this->session->set_userdata($sdata);
        redirect('admin_controller');
    }

    //Start dashboard

    public function dashboard(){
        $data = array();
        $this->load->model('admin_model');
        $data['all_admin'] = $this->admin_model->all_admin();
        $data['c_food'] = $this->admin_model->c_food();
		$data['c_order'] = $this->admin_model->c_order();
		$data['c_reservation'] = $this->admin_model->c_reservation();
        $data['admin_content'] =  $this->load->view('admin_pages/admin',$data,true);
        $this->load->view('dashboard',$data);
    }
    public function food(){
        $data = array();
        $this->load->model('admin_model');
        $data['all_food']= $this->admin_model->fetch_food_data();
        $data['admin_content'] =  $this->load->view('admin_pages/food',$data,true);
        $this->load->view('dashboard',$data);
    }
    public function edit_food($food_id){
        $data = array();
        $this->load->model('admin_model');
        $sdata['all_food_by_id']= $this->admin_model->all_food_by_id($food_id);
        $data['admin_content'] =  $this->load->view('admin_pages/edit_food_form',$sdata,true);
        $this->load->view('dashboard',$data);
    }

    public function update_food(){
        $this->load->model('admin_model');
        $this->admin_model->update_food();
        redirect('food');
    }

    public function delete_food($food_id){
        $this->load->model('admin_model');
        $this->admin_model->delete_food($food_id);
        redirect('food');
    }

    public function add_food(){
        $data = array();  
        $data['admin_content'] =  $this->load->view('admin_pages/add_food','',true);
        $this->load->view('dashboard',$data);
    }

    public function save_food(){
        $this->load->model('admin_model');
        $this->admin_model->save_food();

        redirect('food');

    }

    public function order(){
        $data = array();
        $this->load->model('admin_model');
        $data['all_order']= $this->admin_model->all_order();
        $data['admin_content'] =  $this->load->view('admin_pages/order',$data,true);
        $this->load->view('dashboard',$data);
    }

    public function contact(){
        $data = array();
        $this->load->model('admin_model');
        $data['all_contact']= $this->admin_model->all_contact();
        $data['admin_content'] =  $this->load->view('admin_pages/contact',$data,true);
        $this->load->view('dashboard',$data);
    }



    public function reservation(){
        $data = array();
        $this->load->model('admin_model');
        $data['all_reservation']= $this->admin_model->all_reservation();
        $data['admin_content'] =  $this->load->view('admin_pages/reservation',$data,true);
        $this->load->view('dashboard',$data);
    }
    public function update_status(){
		if(isset($_REQUEST['sval'])){
			$this->load->model('admin_model');
			$this->admin_model->update_status();
			redirect('order');
			
		}
    }
    
    public function update_status_contact(){
		if(isset($_REQUEST['sval'])){
			$this->load->model('admin_model');
			$this->admin_model->update_status_contact();
			redirect('contact');
			
		}
	}

    public function update_status_reserve(){
		if(isset($_REQUEST['sval'])){
			$this->load->model('admin_model');
			$this->admin_model->update_status_reserve();
			redirect('reservation');
			
		}
	}

}