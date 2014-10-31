<?php
/**
 * Created by PhpStorm.
 * User: thaotruong
 * Date: 31.10.14
 * Time: 21:41
 */

class User extends CI_Model{

	public function validate($username, $password){
		if(!$username or !$password){
			return false;
		}
		return (bool)$this->db->get("user")->where("user_username",$username)->where("user_password",$password)->num_rows();
	}

} 