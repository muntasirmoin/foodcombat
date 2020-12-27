<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['content']=$this->load->view('home/home_content','',true);
		$this->load->view('index',$data);
	}

	//menu start
	public function menu()
	{
		$data = array();
		$this->load->model('admin_model');
        $data['all_food']= $this->admin_model->fetch_food_data();
		$data['content']=$this->load->view('home/menu_form',$data,true);
		$this->load->view('index',$data);
	}

		
	//menu end

	//about start
    public function about()
	{
		$data = array();
		$data['content']=$this->load->view('home/about_form','',true);
		$this->load->view('index',$data);
	}
	//about end


	//contact start
	public function contact()
	{
		$data = array();
		$data['content']=$this->load->view('home/contact_form','',true);
		$this->load->view('index',$data);
	}

	public function contact_us(){
		$data = array();
        $this->load->model("Main_model");
        $data['contact_us'] = $this->Main_model->contact_us();

        $savedata["msg"] = "Thank you to contact us!";
        $this->session->set_userdata($savedata);
        redirect(base_url());
	}

	//contact end

	//order start

	public function order()
	{
		$data = array();
		$this->load->model("Main_model");
		$data['all_food_list'] = $this->Main_model->all_food_list();
		$data['content']=$this->load->view('home/order_form',$data,true);
		$this->load->view('index',$data);
	}

	public function order_us(){
		$data = array();
        $this->load->model("Main_model");
		$data['order_us'] = $this->Main_model->order_us();
		

        $savedata["msg"] = "Thanks for your order!";
        $this->session->set_userdata($savedata);
        redirect(base_url());
	}


	//order end



	// start reservation

	public function reservation()
	{
		$data = array();
		$data['content']=$this->load->view('home/reservation_form','',true);
		$this->load->view('index',$data);
	}

	public function reservation_us(){
		$data = array();
        $this->load->model("Main_model");
        $data['reservation_us'] = $this->Main_model->reservation_us();

         $savedata["msg"] = "We receive your reservation request!";
         $this->session->set_userdata($savedata);
         redirect(base_url());
	}

	//end reservation



}
