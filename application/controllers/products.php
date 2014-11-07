<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/product
     *	- or -
     * 		http://example.com/index.php/product/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $productList = $this->db->query('Select p.*, concat("'.base_url() .'", "styles/product/", p.product_id,".jpg") as img_url from product as p where product_quantity > 0')->result();

        $this->smartyci->assign('products', $productList);

		$this->smartyci->display('products.tpl');
    }

    public function tea($type){
        echo $type;
    }
}
