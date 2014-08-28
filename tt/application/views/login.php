<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/css_repu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/css_form.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/prettyPhoto.css"> 
	
<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/css_form.css" />


<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Sistema Mi Negocio <?php echo $this->lang->line('login_login'); ?></title>
<script src="<?php echo base_url();?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#login_form input:first").focus();
});
</script>

    
</head>
<body>
<div class="cont-repu">

<?php echo form_open('login') ?>

<div id="container">
<?php echo validation_errors(); ?>
	
		<?php echo $this->lang->line('login_welcome_message'); ?>
		</div>
		<br>
		<div class="register">
		<div class="cell2">
			  		                 
                <label>Sistema Mi Negocio</label>
								
        </div>
		<div class="register">	   
		
		       
			  <div class="cell1">
			  		                 
                <label><?php echo $this->lang->line('login_login'); ?></label>
								
               </div>
	
              <div class="cell">
			  			  
                <label><?php echo $this->lang->line('login_username'); ?>:</label>
                
				<?php echo form_input(array(
							'name'=>'username', 
							
							'size'=>'40')); ?>
				
              </div>
              <div class="cell">
                <label><?php echo $this->lang->line('login_password'); ?>:</label>
                <?php echo form_password(array(
				'name'=>'password', 
				'size'=>'40')); ?>
				
						<div id="submit_button">
							<?php echo form_submit('loginButton','Iniciar' ); ?>
						</div>
				</div>
			  
			</div>
	
			
	</div>
</div>
<?php echo form_close(); ?>
</div>
</body>
</html>
