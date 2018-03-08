<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Sign in</title>
    <meta content='Nasir' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="<?php echo site_url('assets/stylesheets/application-a07755f5.css'); ?>" rel="stylesheet" type="text/css" /><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url('assets/images/favicon.ico'); ?>" rel="icon" type="image/ico" />
    
  </head>
  <body class='login'>
    <div class='wrapper'>
      <div class='row'>
        <div class='col-lg-12'>
          <div class='brand text-center'>
            <h1>
              <div class='logo-icon'>
                <i class='icon-beer'></i>
              </div>
              Growel
            </h1>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-lg-12'>
         
              <?php echo form_open('Auth/login','id="myform"'); ?>
            <fieldset class='text-center'>
              <legend>Login to your account</legend>
              <div class='form-group'>
                <input class='form-control' placeholder='user' name="id" type='text'>
              </div>
              <div class='form-group'>
                <input class='form-control' placeholder='Password' name="pass" type='password'>
              </div>
              <div class='text-center'>
                <div class='checkbox'>
                  <label>
                    <input type='checkbox'>
                    Remember me on this computer
                  </label>
                </div>
                   <input type="submit" name="login" >
               
                <br>
                <a href="#">Forgot password?</a>
              </div>
            </fieldset>
          <?php echo form_close(); ?>
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


<?php /*

<html>
    <table>
        <?php echo validation_errors(); ?>
       <?php echo form_open('Auth/login','id="myform"'); ?>
        <th><td>USER Login Detail</td></th>
    <tr>
        <td>ID</td>
        <td><input type="text" name="id"></td>
    </tr>
    <tr>
        <td>Pass</td>
        <td><input type="text" name="pass"></td>
    </tr>
    <tr>
        <td rowspan="2"> <input type="submit" name="login" ></td>
    </tr>
    <?php echo form_close(); ?>
    </table>
    
    
    
</html>
 * */ ?>
 