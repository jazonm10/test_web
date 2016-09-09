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
<link href="<?php echo base_url(); ?>assets/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/startstop-slider.js"></script>
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
			    	<li class="active"><a href="<?php echo site_url(''); ?>">Home</a></li>
			    	<li><a href="<?php echo site_url('about'); ?>">About</a></li>
			    	<li><a href="<?php echo site_url('delivery'); ?>">Activity</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>

	     	<div class="clear"></div>
	     </div>	     
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>Category</h3>
					<?php
						foreach ($category as $item) {
					 
					?>
					
					
				      <li><a href="<?php echo site_url('products/get_product_id/'.$item['category_id']);?>"><?php echo $item['category_name']; ?></a></li>

					  
					  
					<?php
					   }
					?>  
					  
					  
					  
					  
				  </ul>
				</div>					
	  	     </div>
					 <div class="header_bottom_right">					 
					 	 <div class="slider">					     
							 <div id="slider">
			                    <div id="mover">
								
								
								
								
								
								
								<?php
					 
									foreach ($banner_list as $item) {
					 
								?>	
								
								
								<div id="slide-1" class="slide">			                    
									 <div class="slider-img">
									     <a href="preview.html">
										 
										 <?php echo '<img src="data:image;base64,'.$item['banner_pic'].' "> '; ?>

										 </a>									    
									  </div>
						             	<div class="slider-text">
		                                 <h1><?php echo $item['banner_name']; ?><br><span></span></h1>
		                                 <h2></h2>
									   <div class="features_list">
									   	<h4><?php echo $item['banner_desc']; ?></h4>							               
							            </div>
							             <a href="#" class="button">Avail Now</a>
					                   </div>			               
									  <div class="clear"></div>				
				                  </div>	
								
								
								
		  						<?php  
										}
								?>			
								
			     

					
								  
						         
				                 



								 
			                 </div>		
		                </div>
					 <div class="clear"></div>					       
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Featured Products</h3>
    		</div>

    		<div class="clear"></div>
    	</div>

		
			<div class="section group">
		  
		  			<?php
					 
						foreach ($new_products as $item) {
					 
					?>
		  
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.html"><?php echo '<img src="data:image;base64,'.$item['product_pic'].' "> '; ?></a>
					 <h2><?php echo $item['product_name']; ?></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo $item['product_interest']; ?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="<?php echo site_url('products/select_product/'.$item['product_id']);?>">View</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
			
					<?php  
						}
					?>
			</div>
		
		
		
			<div class="content_bottom">
    		
			
			
			
			
			
			
			
			
    		
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

				© All rights Reserved | Design by  <a href="https://www.facebook.com/groups/924045437728682/">Team Yokaii</a> </p>
				
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

