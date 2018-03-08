<div class="col-md-6">
							<form role="form">
								<div class="form-group">
									<label>Style 1</label>
									<input class="form-control" placeholder="Order Style">
                                                                        <input class="form-control" placeholder="Add Quentity">
								</div>
                                                            <div class="form-group">
									<label>order Id</label>
									<input class="form-control" placeholder="Order Style">
								</div>
                                                            <button type="button" name="add_order" class="btn btn-lg btn-primary">ADD Order</button>
                                                            
                                                            
								<!--<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control">
								</div>
								<div class="form-group checkbox">
									<label>
										<input type="checkbox">Remember me
									</label>
								</div>
								<div class="form-group">
									<label>File input</label>
									<input type="file">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Text area</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
								<label>Validation</label>
								<div class="form-group has-success">
									<input class="form-control" placeholder="Success">
								</div>
								<div class="form-group has-warning">
									<input class="form-control" placeholder="Warning">
								</div>
								<div class="form-group has-error">
									<input class="form-control" placeholder="Error">
								</div> -->
</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#add_order").click(function(){
        $("#mid").load("<?php echo site_url('orders/add_orders'); ?>");
    });
});

</script>