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

					<li><a href="#">Login</a></li>

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
			    	<li><a href="<?php echo site_url('about'); ?>">About</a></li>
			    	<li><a href="<?php echo site_url('delivery'); ?>">Activity</a></li>
			    	<li><a href="<?php echo site_url('news'); ?>">News</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	  
	     	<div class="clear"></div>
	     </div>	     	
   </div>
 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="userName" type="text" class="textbox" ></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Company Name</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Subject</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"  class="myButton"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h3>Find Us Here</h3>
					    	  <div class="map">
							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
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

