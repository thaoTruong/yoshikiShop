<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $this->smartyci->caching = false;
        $this->smartyci->assign("body", $this->smartyci->fetch('contact.tpl'));

        $this->smartyci->display("main/template.tpl");
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */