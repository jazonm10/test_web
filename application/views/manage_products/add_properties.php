<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>
								<?php
					 
									foreach ($properties_list as $item) {
										
										echo $item['properties_name'];
									}	
								?>

</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
								<?php
					 
									foreach ($properties_list as $item) {
					 
								?>	
								
				 <p><span>Need help?</span> call us <span class="number"><?php echo $item['properties_contact']; ?></span></span></p>
				 
		  						<?php  
										}
								?>	
			</div>
			<div class="account_desc">
				<ul>

					<li><a href="<?php echo site_url('product_form'); ?>">SETTING</a></li>

				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
								<?php
					 
									foreach ($properties_list as $item) {
					 
								?>	
		
			<div class="logo">
											
			
									<a href="index.html">
									<?php echo '<img height="110" width="600" src="data:image;base64,'.$item['properties_pic'].' "> '; ?>
									</a>
									 
									
									
			
		
			</div>
			<div class="slider-text">
									 
									 
									 
			</div>
			
			
			
								
		  						<?php  
										}
								?>	

			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li><a href="<?php echo site_url(''); ?>">Home</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>

	     	<div class="clear"></div>
	     </div>	     	
   </div>
 <div class="main">
    <div class="content">
    	<div class="section group">
		
		
		
		
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>Menu</h3>
					
					
					
				      <li><a href="<?php echo site_url('banner_form'); ?>">EDIT BANNER</a></li>
					  <li><a href="<?php echo site_url('product_form'); ?>">ADD PRODUCTS</a></li>
					  <li><a href="<?php echo site_url('properties_form'); ?>">EDIT PROPERTIES</a></li>
					  <li><a href="<?php echo site_url('activity_form'); ?>">ADD ACTIVITY</a></li>
					  <li><a href="#"></a></li>
					  
					
					  
					  
					  
				  </ul>
				</div>					
	  	     </div>
		
		
		
		
		
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Edit Properties</h2>
					    
		<?php 
		$attribute = array('method'=>'post','class'=>'form-horizontal','id'=>'myform','enctype'=>'multipart/form-data');
		
		echo form_open('properties/edit_properties',  $attribute); 
		
		?>
						
						
								<?php
					 
									foreach ($properties_list as $item) {
					 
								?>
					   
							
						    <div>
						     	<span><label>Name</label></span>
						    	<span>
								
								
								<?php echo form_input(array('id'=>'properties_name', 'name'=>'properties_name', 'class'=>'textbox', 'value'=>$item['properties_name'])); ?>
								
								</span>
						    </div>
							
							<div>
						     	<span><label>Contact</label></span>
						    	<span>
								
								
								<?php echo form_input(array('id'=>'properties_contact', 'name'=>'properties_contact', 'class'=>'textbox', 'value'=>$item['properties_contact'])); ?>
								
								</span>
						    </div>
							
							
							<div>
						     	<span><label>Address</label></span>
						    	<span>
								
								
								<?php echo form_input(array('id'=>'properties_address', 'name'=>'properties_address', 'class'=>'textbox', 'value'=>$item['properties_address'])); ?>
								
								</span>
						    </div>
							
						
							
							<div>
						    	<span>
								<?php echo form_upload(array('id'=>'image', 'name'=>'image', 'class'=>'input-file')); ?> 
								
								
								</span>
						    </div>
							
						   <div>
						   		<span>
								
								<?php echo form_submit(array('id'=>'image', 'name'=>'image', 'class'=>'myButton', 'value'=>'submit')); ?>
								</span>
						  </div>
						  
								<?php
					 
									}
					 
								?>

								
					    </form>
				  </div>
  				</div>
				
			  </div>		
         </div> 
    </div>
 </div>
   <div class="footer">
   	
        <div class="copy_right">
				<p>				<?php
					 
									foreach ($properties_list as $item) {
										
										echo $item['properties_name'];
									}	
								?>

				© All rights Reserved  | Design by  <a href="https://www.facebook.com/groups/924045437728682/">Team Yokaii</a> </p>
				
				<div class="social-icons">
						
					   		  <ul>
							      <li><a href="https://www.facebook.com/jazonm10" target="_blank"><img src="<?php echo base_url(); ?>assets/images/facebook.png" alt="" /></a></li>
							      <li><a href="https://twitter.com/jazonm10" target="_blank"><img src="<?php echo base_url(); ?>assets/images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="<?php echo base_url(); ?>assets/images/dribbble.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"> <img src="<?php echo base_url(); ?>assets/images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 			</div>
		   </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

