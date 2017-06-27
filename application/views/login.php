<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Log In</title>

	</head>
	<br><br><br><br><br>

	<body>
			<section id="login">
				
			    <div class="container">
			    	<div class="row">			    	    
			        	    <div class="form-wrap">
			                <h1>Log in</h1>
			                    <form method="POST" action="">
			                        <div class="form-group">			                            
			                            <input type="text" name="email"  class="form-control" placeholder="Username">
			                        </div>
			                        <div class="form-group">			                            
			                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
			                        </div>	
			                        <div class="checkbox">
			                            <span class="character-checkbox" onclick="showPassword()"></span>
			                            <span class="label">Show password</span>
			                        </div>		                        
			                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
			                    </form>
			                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>			                    
			                    <hr>
			        	    </div>
			    		 <!-- /.col-xs-12 -->
			    	</div> <!-- /.row -->
			    </div> <!-- /.container -->
			</section>

			<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">×</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Recovery password</h4>
						</div>
						<div class="modal-body">
							<p>Type your email account</p>
							<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-custom">Recovery</button>
						</div>
					</div> <!-- /.modal-content -->
				</div> <!-- /.modal-dialog -->
			</div> <!-- /.modal -->
				

	<script>
		
		function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}
	</script>		
	</body>

</html>