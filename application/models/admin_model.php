<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model{

    // public function index(){
    //     $this->load->view('admin_login');
    // }

    // public function admin_login_control(){
    //    $email_address=$this->load->post('admin_email',true);
    //    $passwor= $this->load->post('admin_password',true);

    // }

    public function admin_login_info($admin_email,$admin_password){
        $this->db->select('*');
        $this->db->from('admin_info');
        $this->db->where('admin_email',$admin_email);
        $this->db->where('admin_password',$admin_password);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

    }

    public function admin_signup_info(){

        
        $data = array();


        $data['admin_name'] = $this->input->post('admin_name',true);
        $data['admin_phone'] = $this->input->post('admin_phone',true);
        $data['admin_email'] = $this->input->post('admin_email',true);
        $data['admin_password'] = $this->input->post('admin_password',true);
        // $data['admin_img'] = $this->input->post('admin_img',true);
        
        $sdata = array();
        $error ="";
        $config['upload_path'] = 'images/userimg/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '1000000';
        $config['width'] = '3000';
        $config['height'] = '3000';
        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('admin_img')) {
            $error = $this->upload->display_errors();

        } 
        else {
            $sdata =  $this->upload->data();
            $data['admin_img'] = $config['upload_path'].$sdata['file_name'];
        }


        $this->db->insert('admin_info',$data);

    }

    // public function contact_us(){
    //     // cnt_name  cnt_email   cnt_number  cnt_msg
    //     $data = array();
 
    //     $data['contact_name'] = $this->input->post('contact_name',true);
    //     $data['contact_email'] = $this->input->post('contact_email',true);
    //     $data['contact_number'] = $this->input->post('contact_number',true);
    //     $data['contact_message'] = $this->input->post('contact_message',true);
    //     $this->db->insert('contact_us',$data);
 
    //  }
    public function fetch_food_data(){
        $this->db->select('*');
        $this->db->from('food_item');
        $query = $this->db->get();
        $food = $query->result();
        return $food;

    }
    public function all_food_by_id($food_id){
        $this->db->select('*');
        $this->db->from('food_item');
        $this->db->where('food_id',$food_id);
        $query_r = $this->db->get();
        $food_res= $query_r->result();
        return $food_res;
    }
    public function update_food(){
        $data = array();
        $food_id = $this->input->post('food_id',true);
        $data['food_name']=$this->input->post('food_name',true);
        $data['food_price']=$this->input->post('food_price',true);

        $this->db->where('food_id',$food_id);
        $this->db->update('food_item',$data);
    }

    public function delete_food($food_id){
        $this->db->where('food_id', $food_id);
        $this->db->delete('food_item');
    }
 
    public function save_food(){
        
        $data['food_name'] = $this->input->post('food_name',true);
        $data['food_price'] = $this->input->post('food_price',true);
        $this->db->insert('food_item',$data);
    }

    public function all_order(){
        $this->db->select('*');
        $this->db->from('order_food');
        $query = $this->db->get();
        $order = $query->result();
        return $order;
    }

    public function all_contact(){
        $this->db->select('*');
        $this->db->from('contact_us');
        $query = $this->db->get();
        $order = $query->result();
        return $order;
    }



    public function all_reservation(){
        $this->db->select('*');
        $this->db->from('reservation_us');
        $query = $this->db->get();
        $order = $query->result();
        return $order;
    }

    public function update_status()
    {
            $id = $_REQUEST['sid'];
            $saval = $_REQUEST['sval'];
            if($saval == 0){
                    $status = 1;
            }
            $data = array('status' => $status);
            $this->db->where('order_id',$id);
            return $this->db->update('order_food',$data);

    }

    public function update_status_contact(){

            $id = $_REQUEST['sid'];
            $saval = $_REQUEST['sval'];
            if($saval == 0){
                    $status = 1;
            }
            $data = array('status' => $status);
            $this->db->where('contact_id',$id);
            return $this->db->update('contact_us',$data);

    }

    public function update_status_reserve()
    {
            $id = $_REQUEST['sid'];
            $saval = $_REQUEST['sval'];
            if($saval == 0){
                    $status = 1;
            }
            $data = array('status' => $status);
            $this->db->where('reservation_id',$id);
            return $this->db->update('reservation_us',$data);

    }

    public function c_food(){
        $this->db->SELECT('*');
        $this->db->FROM('food_item');
        $query_result = $this->db->get();
        $food =$query_result->num_rows();
        return $food;
    }
    public function c_order(){
            $this->db->SELECT('*');
            $this->db->FROM('order_food');
            $query_result = $this->db->get();
            $order =$query_result->num_rows();
            return $order;
    }
    public function c_reservation(){
            $this->db->SELECT('*');
            $this->db->FROM('reservation_us');
            $query_result = $this->db->get();
            $reserve =$query_result->num_rows();
            return $reserve;
    }
    public function all_admin(){
            $this->db->SELECT('*');
            $this->db->FROM('admin_info');
            $query_result = $this->db->get();
            $admin =$query_result->result();
            return $admin;
    }




}