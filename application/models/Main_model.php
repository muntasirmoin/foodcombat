<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

    

    //start contact

    public function contact_us(){
       // cnt_name  cnt_email   cnt_number  cnt_msg
       $data = array();

       $data['contact_name'] = $this->input->post('contact_name',true);
       $data['contact_email'] = $this->input->post('contact_email',true);
       $data['contact_number'] = $this->input->post('contact_number',true);
       $data['contact_message'] = $this->input->post('contact_message',true);
       $this->db->insert('contact_us',$data);

    }

    //end contact

    //start order
    
    public function order_us(){
        // order_id	order_selectfood	order_selectquantity	order_totalprice	order_yourname	order_yournumber	order_youraddress
        $data = array();
 
        $data['order_yourname'] = $this->input->post('order_yourname',true);
        $data['order_yournumber'] = $this->input->post('order_yournumber',true);
        $data['order_youraddress'] = $this->input->post('order_youraddress',true);
        $data['order_quantity'] = $this->input->post('order_quantity',true);
        $data['order_foodname'] = $this->input->post('order_foodname',true);
        $data['order_date'] = $this->input->post('order_date',true);
        $data['order_time'] = $this->input->post('order_time',true);
        
        
        $this->db->insert('order_food',$data);
 
     }

     //end order


     //start reservation
     
     public function reservation_us(){
      
      $data = array();

      $data['reservation_name'] = $this->input->post('reservation_name',true);
      $data['reservation_email'] = $this->input->post('reservation_email',true);
      $data['reservation_number'] = $this->input->post('reservation_number',true);
      $data['reservation_time'] = $this->input->post('reservation_time',true);
      $data['reservation_date'] = $this->input->post('reservation_date',true);
      $data['reservation_person'] = $this->input->post('reservation_person',true);
      $this->db->insert('reservation_us',$data);

   }

   public function all_food_list(){
      $this->db->select('*');
      $this->db->from('food_item');
      $q_res=$this->db->get();
      $res = $q_res->result();
      return $res;
   }
     //end reservation
}