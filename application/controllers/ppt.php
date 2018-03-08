<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ppt extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

public function index(){
	define('PPTFILES',"css");
	$path=PPTFILES;
	$sd=scandir($path);
	foreach ($sd as $value) {
		if(is_file("PPTFILES"."/$value")){
			echo PPTFILES."/$value <br>";
		}
		else{
			echo PPTFILES."/$value <br>";
		}
	}
	var_dump($sd);
}
}