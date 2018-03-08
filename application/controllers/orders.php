<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class orders extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function __construct() {
        parent::__construct();
      /*  $sb['sb']=array('Dashboard'=>"",
                    'Orders Process'=>"welcome/order",
                    'Cutting Process'=>'welcome/cutting',
                    'EMBRIODRY'=>"",
                    'Alerts Panels'=>"",
                    "Logout"=>""
                    );
        $this->load->view('header',$sb);*/
    }
    
    public function add_orders(){
        $this->load->view('orders/add_suborders');
    }
    
    public function add_styles(){
        $this->load->view('orders/add_styles');
    }
    
    
    
	/*public function index()
	{
            $sb['piechart']=array("red"=>array("Cutting"=>"99"),
                    "green"=>array('EMBRIODRY START'=>"80"),
                    "blue"=>array('PRINTING'=>"70"),
                    "teal"=>array('STITCH START'=>"55"),
                    "orange"=>array("FINISHING START"=>"40"),
                    "black"=>array("DISPATCH"=>"1")
                    );
	    $this->load->view('charts',$sb);      
	}
        
        public function cutting(){
            echo "cuttting";
        }
        
        public function order(){
            $this->load->view('order');
        }*/
}
