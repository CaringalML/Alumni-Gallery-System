<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome Alumni!</title>
  
    <link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>"/>
     <link rel="stylesheet" href="<?php echo base_url('assets/css/btn.css'); ?>"/>
  </head>
  <style type="text/css">
    body{
      background-image: url("<?php echo base_url();?>assets/img/ap.jpeg") !important;
    }
    h1{
      font-family: Microsoft Yi Baiti !important;
      font-size:50px;
      text-align:center;
      color:white;
    }
    h3{
      font-family: Microsoft Yi Baiti !important;
       font-size:30px;
         text-align:center;
         color:white;
    }

  </style>
  <body>
    <div class="container">
      <div class="row">
        <div class="small-12 mwedium-6 large-6 columns">
          <h1>Welcome Alumni!<h1>
          <div class="row">
             <div class="small-12 mwedium-9 large-6 columns">
        <h3>Sign In</h3>
        <?php echo form_open('welcome/signin');?>
         <div class="row">
           <div class="small-12 mwedium-12 large-12 columns">
            <?php echo form_input(['name' =>'email','placeholder' =>'Email','class' =>'textbox']);?>
             <?php echo form_password(['name' =>'password','placeholder' =>'Password','class' =>'textbox']);?>

             <?php echo form_submit(['name' =>'submit','value'=>'SIGN IN','class' =>'btn']);?>
              <?php echo form_reset(['name' =>'reset','value'=>'RESET','class' =>'bts']);?>
           </div>
         </div>
        <?php echo form_close();?>
        </div>
      </div>
    </div>
       
      <div class="small-12 mwedium-6 large-6 columns">

      <h3>REGISTER</h3>
       <?php echo form_open('welcome/signup');?>
       <?php if($msg = $this->session->flashdata('response')):?>
       <div class="response">
        <?php echo $msg;?>
      </div>

       <?php endif;?>
       <?php $data = array(
        'user_role_id' => '2'
        );?>

       <?php echo form_hidden($data);?>
      <div class="row">
         <div class="small-12 mwedium-12 large-12 columns">
         <?php echo form_input(['name' =>'username','placeholder' =>'Username','class' =>'textbox']);?>
          <?php echo form_error('username','<div class="text-danger">','</div>');?>

          <?php echo form_input(['name' =>'email','placeholder' =>'Email','class' =>'textbox']);?>
          <?php echo form_error('email','<div class="text-danger">','</div>');?>

           <?php echo form_password(['name' =>'password','placeholder' =>'Password','class' =>'textbox']);?>
          <?php echo form_error('password','<div class="text-danger">','</div>');?>

          <?php echo form_input(['name' =>'mobile','placeholder' =>'Mobile','class' =>'textbox']);?>
          <?php echo form_error('mobile','<div class="text-danger">','</div>');?>
          
          <?php echo form_submit(['name' =>'submit','value'=>'SIGN UP','class' =>'bty']);?>
              <?php echo form_reset(['name' =>'reset','value'=>'RESET','class' =>'btm']);?>
            
          </div>
        </div>
        <?php echo form_close();?>
      </div>

      </div>
    </div>

    <script src="<?php echo base_url('assets/js/vendor/jquery.js'); ?>"></script>
     <script src="<?php echo base_url('assets/js/vendor/what-input.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/vendor/foundation.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
  </body>
</html>
