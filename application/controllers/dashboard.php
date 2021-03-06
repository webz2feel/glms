<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
 public function __construct()
  {
    parent::__construct();
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");  

 	if(!$this->mdl_sessions->is_login())
	 {
	   redirect('sessions/login');
	 }
  }
 
	public function index()
	{ 
	   $this->load->library("OnlineUsers");
	   $data['online_users'] = $this->onlineusers->total_users(); 
	   $data['main'] = "dashboard/home"; 
       $this->load->view("dashboard/template",$data);
	}

}

