<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: thaotruong
 * Date: 31.10.14
 * Time: 19:53
 */

class Admin extends CI_Controller {

	public function index(){

        if($this->input->post("product_name")){
            $input = array_merge($this->input->post(), $_FILES);
            $this->load->model('Product');
            if($errors = $this->Product->validate($input) and $this->Product->save()){
                $data['body'] = 'Added<b/>'. $this->getAdminPanel();
            }else{
                $data["errors"] = $errors;
                $data['body'] = $this->getAdminPanel($data);
            }
        }else if($this->input->post("username")) {
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $this->load->model("User");
            $isUser = $this->User->validate($username, $password);
            if ($isUser) {
                $this->session->set_userdata(array("username" => $username));
                $data['body'] = $this->getAdminPanel();
            } else {
                $data['body'] = "Sorry, wrong login and password";
            }
        }else if($this->session->userdata("username")){
			$data['body'] = $this->getAdminPanel();
		}else {
			$data['body'] = $this->parser->parse("authForm", array(), true);
		}

		$this->parser->parse("main/template", $data);
	}

	private function getAdminPanel($data = array()){
		$data["producttypes"] = $this->db->get("producttype")->result();
		return $this->parser->parse("adminPanel", $data, true);
	}



} 