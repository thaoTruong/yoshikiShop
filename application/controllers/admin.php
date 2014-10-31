<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: thaotruong
 * Date: 31.10.14
 * Time: 19:53
 */

class Admin extends CI_Controller {

	public function index(){

		if($this->session->userdata("username")){
			$data['body'] = $this->getAdminPanel();
		}else if($this->input->post()){
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			unset ($_POST);
			$this->load->model("user");
			$isUser = $this->user->validate($username,$password);

			if($isUser){
				$this->session->set_userdata(array("username"=>$username));
				$data['body'] = $this->getAdminPanel();
			}
		}else {
			$data['body'] = $this->parser->parse("authForm", array(), true);
		}

		$this->load->view("main/template", $data);
	}

	private function getAdminPanel(){
		$data["producttypes"] = $this->db->get("producttype")->result();
		return $this->parser->parse("adminPanel", $data, true);
	}



} 