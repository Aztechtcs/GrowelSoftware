<?php $this->load->view('workshedule/header'); ?>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
            
            <div class='panel-tools'>
              <div class='btn-group'>
                <a class='btn' href='#'>
                  <i class='icon-refresh'></i>
                  Refresh statics
                </a>
                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Toggle'>
                  <i class='icon-chevron-down'></i>
                </a>
              </div>
            </div>
          </div>
          <div class='panel-body'>
              <form id="sd" >
   <?php $ses=array(
       //'byuser_id'  => $this->session->id,
       'byuser_id'  => 55,
       
       );
       ?>         
 <?php /*
    <input TYPE="hidden" id="byuser_id" value="<?php echo $this->session->id; ?>" />
<td><input class='form-control' type="button" id="addword"  value=" Click for add work"></td>
<td>
    <textarea class='form-control' id="word2" rows='4' required></textarea>
   <input type="text" id="word2" placeholder="Your Working Discription here" required>*/ ?> </td>
</form>
</tr>
</table>

<div id="tbl"></div>
<div id="success"></div>
           <?php /* <div class='page-header'>
              <h4>System usage</h4>
            </div>
            <div class='progress'>
              <div class='progress-bar progress-bar-success' style='width: 35%'></div>
              <div class='progress-bar progress-bar-warning' style='width: 20%'></div>
              <div class='progress-bar progress-bar-danger' style='width: 10%'></div>
            </div>
            <div class='page-header'>
              <h4>User statics</h4>
            </div>
            <div class='row text-center'>
                
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#d4ecfd' data-fgcolor='#30a1ec' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='50'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#c4e9aa' data-fgcolor='#8ac368' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='75'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#cef3f5' data-fgcolor='#5ba0a3' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='35'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#f8d2e0' data-fgcolor='#b85e80' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='85'>
              </div>
            </div> */ ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script><script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script><script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
    <!-- Google Analytics -->
    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>

 





<?php  //var_dump($this->Extra_work->get_name()); ?>

_______________________________________________________

<table>
<tr>
<form id="sd" >
   <?php $ses=array(
       //'byuser_id'  => $this->session->id,
       'byuser_id'  => 55,
       
       );
       ?>         

     <input TYPE="hidden" id="byuser_id" value="<?php echo $this->session->id; ?>" />
<td><input type="button" id="addword" value="add work"></td>
<td><input type="text" id="word2" placeholder="Your Working Discription here" required> </td>
</form>
</tr>
</table>

<div id="tbl"></div>
<div id="success"></div>
<script src="<?php echo site_url(); ?>/js/jquery-3.3.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>

function adjx(){
	$.ajax({
		type:"get",
		url:"<?php echo site_url(); ?>wordshedule/add/",
                data:{id:$("#word2").val() , byuser_id:$("#byuser_id").val()},
		//data:{id:$("#word2").val(),byuser_id:$("#byuser_id").val()}
		}).done(function(data){
			$("#success").append( 'Thankyou we will contact with you soon <br>' + data);
		}).fail(function(data){
			$("#success").append('faillll'+ data);
		}); 
}
/*FOR SHOW ALL UNCOMPLETE DATA*/
function s_hall(){
	$.ajax({
		type:"get",
		url:"<?php echo site_url(); ?>wordshedule/show/uncomplete/",
		data:{id:'suc'},
		//success:$("#tbl").load({"<?php echo site_url(); ?>wordshedule/show/uncomplete/"})
	}).done(function(data2){
		$("#tbl").html(data2)
	}).fail(function(){
		$("#tbl").html('not data')
	});
	
}

function s_alldetail(){
	$.ajax({
		type:"get",
		url:"<?php echo site_url(); ?>wordshedule/show_all/",
		data:{id:'suc'},
		//success:$("#tbl").load({"<?php echo site_url(); ?>wordshedule/show/uncomplete/"})
	}).done(function(data2){
		$("#tbl").html(data2)
	}).fail(function(){
		$("#tbl").html('not data')
	});
	
}

$("document").ready(function(){
s_alldetail()
	//s_hall()
	$("#addword").click(function(){
		$("#success").append('success click <br>');
		if($("#word2").val()==''){
			$("#success").append('value is empty  <br>');
			
		} else {
			adjx()
			s_hall()
			$("#word2").val('');
			
		}
	});
});



</script>