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
            $error['product_name'] = "Please enter your product's name";
        }

        if(!sizeof($data['product_img'])){
            $error['product_img'] = "Please make sure you upload an image, it's very important for the customers";
        }

        if(!count($error)){
            foreach($data as $k=>$v){
                $this->data[$k] = $v;
            }
            return true;
        }

        return false;
    }

    function save(){

        unset($this->data['product_img']);
        $res = parent::save();

        if($res){
            $this->do_upload_file();
        }
    }

    function do_upload_file()
    {
        $config['upload_path'] = BASEPATH . 'styles/product/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }
} 