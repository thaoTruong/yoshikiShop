<?php
/**
 * Created by PhpStorm.
 * User: thao
 * Date: 01.11.14
 * Time: 02:15
 */

class Product extends CI_Model {

    public $table = "product";

    function validate($data){
        $error = array();

        if(!trim($data['product_name'])){
            $error[] = array("name"=>"product_name", "text"=> "Please enter your product's name");
        }

        if(isset($data['product_img']) and !sizeof($data['product_img'])){
            $error[] = array("name"=>'product_img', "text"=>"Please make sure you upload an image, it's very important for the customers");
        }

        if(!count($error)){
            foreach($data as $k=>$v){
                $this->data[$k] = $v;
            }
            return true;
        }

        return $error;
    }

    function save(){

        unset($this->data['product_img']);
        $res = parent::save();

        if($res){
            $uploadRes = $this->do_upload_file();
            return $uploadRes;

        }else{
            return array("name" => "Saving product failed", "text"=>"Saving product failed");
        }
    }

    function do_upload_file()
    {
        $config['upload_path'] = $this->config->item("product_upload_url");
        $config['file_name'] = $this->db->insert_id().'.jpg';
        $config['allowed_types'] = 'jpg';
        $config['max_size']	= '2048';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('product_img')){
			echo $this->upload->display_errors();
            return false;
        }else{
            $res = true;
        }
        return $res;
    }
} 