<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->load->database('test');
		$this->load->model('work');
                $this->load->model('Extra_work');
		 $this->load->helper('text');
                 $this->load->helper('form');
                 $this->load->library('form_validation');
                 $this->session;
                 
                
    }
    
    
    
    function dis(){
        session_destroy();
    }
    function index(){
        redirect('Auth/pg');
        
    }
	public function pg()
	{
            if($this->sessionpass()){
                $this->load->view('workshedule/deshboard');
                 }else{
                      redirect('Auth/login');             
                 }
	}
        
        function viwe_all(){
            if($this->sessionpass()){
                $this->load->view('workshedule/deshboard_Viewall');
                 }else{
                      redirect('Auth/login');             
                 }
        }
        
        function display(){
            if($this->sessionpass()){
                $data['data']=$this->work->display_all();
                $this->load->view('workshedule/all_work',$data);
                 }else{
                      redirect('Auth/login');             
                 }
        }
        
        function tt(){ //TEMperory file  delete this function after
            //var_dump($_SESSION);
            //echo $this->session->id;
            
            $d=array('user'=>$this->session->ID,'password'=>$this->session->pass);
           $da= $this->work->session_check($d);
           //echo $this->db->last_query();
           if(sizeof($da)>0){
               var_dump($_SESSION);
           }
          // $this->session->set_userdata($da[1]);
           
           //var_dump($da);
        }
        private function sessionpass(){
            if(isset($_SESSION['ID'])){
                if(isset($_SESSION['pass'])){
                    $d=array('user'=>$this->session->ID,'password'=>$this->session->pass);
                   $da= $this->work->session_check($d);
                   //var_dump(res);
                    if(sizeof($da)>0){
                        $newdata = array(
                        'id'  => $da[0]->id,
                        'email'=> $da[0]->email,
                        'logged_in' => TRUE
                        );
                        //var_dump($da);
                        $this->session->set_userdata($newdata);
                        return true;
                    }
                    else{
                        return false;
                    }   
                }
                else{
                        return false;
                    }
            }
            else{
                        return false;
                    }
        }
        
        function login(){
            $this->load->view('workshedule/login');
            if($this->input->post('id')){
                if($this->input->post('pass')){
                    $id=$this->input->post('id');
                    $pass=$this->input->post('pass');
                    
                        $_SESSION['ID']='';
                        $_SESSION['pass']='';
                        $_SESSION['id']='';
                        $_SESSION['email']='';
                        $_SESSION['logged_in']='';
                        $usr=array('ID'=>$id,'pass'=>$pass);
                        $this->session->set_userdata($usr);
                        
                            redirect('Auth/pg');    
                    
                }
            }
        }
	
}

?>