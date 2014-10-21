<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $data["body"] = $this->load->view('contact', '', true);
        $this->load->view("main/template", $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */