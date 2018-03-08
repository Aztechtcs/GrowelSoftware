<?php

/* 
 * 
 * SELECT work.`id`, work.`start_time`, work.`end_time`, work.`work`, work.`complete`, timestampdiff(minute,work.`start_time`,work.`end_time`) as TotalconsumeTime ,user_work.user FROM `work` join user_work on work.byuser_id=user_work.id where work.complete=0
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
 */


class Extra_work extends CI_Model{
    function __construct(){
	parent::__construct();
	ini_set('date.timezone', 'UTC');
    }
    
    function get_name(){
        $this->db->select('user');
        $nm=$this->db->get_where('user_work',array('id'=>$this->session->id));
        $re =$nm->result();
        return $re[0]->user;
    }
   
	
	
	
	
	function completework($ALL=NULL){
            if($ALL!=NULL){
                $re=$this->db->get_where('work',array("complete" => 0));
            }
            else{
                $re=$this->db->get_where('work',array("complete" => 0,'byuser_id'=>$this->session->id));
            }
		//$where = "complete = 1";
		return $re->result();
	}
	
	function update($id){
		//$this->db->update();
	}
	
	
	
	
/* /*    function sms(){
        //$this->db->select('title, content, date');
         $query = $this->db->get('am1');
         return $query->result();
    }
    
    am1 (id, name , salry, eid[AI])
    public function insert($data){
            $str = $this->db->insert('am1', $data);
            echo $str;
        }
        
     public function delete($eid){
         $this->db->where('eid',$eid);
         $this->db->delete('am1');
         //$this->db->delete('am1',array('eid'=>$eid));
     } */
	 
	 
}