<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wordshedule extends CI_Controller {

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
		 $this->load->helper(array('form','text'));
    }
    
	public function index()
	{
		$this->load->view('workshedule/deshboard');
	}
	function add(){
		if($this->input->get()){
			var_dump($this->input->get());
			$this->work->add($this->input->get());
		}
		else{
			echo "sorry no post";
			//$this->work->add();
		}
	}
	
	function endtask($taskid){
		if($this->input->post()){
			$this->work->update_endtasktime($taskid);
		}
		else{
			$this->work->update_endtasktime($taskid);
		}
                
	}
        function show_all($filt=NULL){
            $this->load->library('table');
            $template = array(
        'table_open'            => '<table class=table>',
        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',
        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',
        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',
        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',
        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',
        'table_close'           => '</table>'
);
            
            $this->table->set_template($template);
            if($filt==NULL){
                 $r=$this->work->allwork();
            echo $this->table->generate($r);
            }else{
                //
            }
           
        }
	
	function show($unc){
		if($unc=='uncomplete'){
			$r=$this->work->completework();
			echo "<table class='table'><thead> <tr>
                            <th>Work Number</th>
                <th>Work Detail</th>
                <th>Work Start Time</th>
                <th class='actions'>Submition Link</th></tr></thead>";
				if($r){
					foreach($r as $v){
						echo "<tr><td>$v->id</td><td>".character_limiter($v->work,40)."</td><td>$v->start_time</td>
						<td><a href='".site_url()."wordshedule/endtask/".$v->id."' target=new>Done this work</a></td></tr>";
						//var_dump($v);
					}
				}
			echo "</table>";
		}
		elseif($unc=='complete'){
			echo "all complete";
		}
		else{
			echo 'fail';
		}
		
	}
	
	
	
	public function end(){
		if($this->input->post()){
			//echo json_encode(array("error"=>"no post"));
		}
		else{
			echo json_encode(array("error"=>"no post"));
		}
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
}

?>