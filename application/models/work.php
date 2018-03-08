<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
 */


class work extends CI_Model{
    function __construct(){
	parent::__construct();
	ini_set('date.timezone', 'UTC');
    }
    
    function display_all($byuserid=NULL){
        if($byuserid==NULL){
            $byuserid=$this->session->id;
        }
        $re=$this->db->get_where('work',array('byuser_id'=>$byuserid));
        return $re->result();
    }
    function session_check($d){
        $re=$this->db->get_where('user_work',array('user'=>$d['user'],'password'=>$d['password']));
        return $re->result();
    }
	function update_endtasktime($id){
		$data['end_time']=date("y-m-d h:i:s");
		$data['complete']=1;
		$this->db->where('id', $id);
		$this->db->update('work',$data);	
	}
	
	function add($d){
		$data['date']=date("y-m-d");
		$data['start_time']=date("y-m-d h:i:s");
		//$data['end_time']='';
		$data['work']=$d['id'];
                $data['byuser_id']=$d['byuser_id'];
		$this->db->insert('work',$data);
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
	
        function allwork($ALL=NULL){
            
            if($ALL!=NULL){
                $this->db->select('id, `start_time` , `end_time` , TIMESTAMPDIFF(MINUTE,`start_time`,`end_time`) as TimeConsume,`work`,`complete`');
                $re=$this->db->get_where('work');
            }else{
                $this->db->select('id, `start_time` , `end_time` , TIMESTAMPDIFF(MINUTE,`start_time`,`end_time`) as TimeConsume,`work`,`complete`');
                $re=$this->db->get_where('work',array('byuser_id'=>$this->session->id));
            }
            return $re;
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