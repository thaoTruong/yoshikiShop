<?php
/**
 * Created by PhpStorm.
 * User: thaotruong
 * Date: 31.10.14
 * Time: 21:41
 */

class User extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

	function validate($username, $password){
		if(!$username or !$password){
			return false;
		}
        return (bool)$this->db->get_where("user", array("user_username"=> $username, "user_password" => $password))->num_rows();
	}

} 