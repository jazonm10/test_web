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
			    	<li class="active"><a href="<?php echo site_url('about'); ?>">About</a></li>
			    	<li><a href="<?php echo site_url('delivery'); ?>">Activity</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	 
	     	<div class="clear"></div>
	     </div>	     	
   </div>
 <div class="main">
    <div class="content">
    	<div class="section group">
		
<div class="col_1_of_3 span_1_of_3">
					<img src="<?php echo base_url(); ?>assets/images/logos.jpg" alt="" />
					<br><br><br><br>
					<h3>KOOPERATIBA</h3>
					<p>
					
					1.) Nagkahiusa ug boluntaryo nga panaghugpong  sa mga tawo alang sa susamang tumong. </br></br>
					2.) Magbutang ug pundo para sa usa ka kinaugalingong negosyo nga kontrolado sa mga miyembro/tag-iya. </br></br>
					3.) Demokratikanhong pamaagi aron  matubag ang panginahanglanong personal ug pinansyal. </br></br>
					4.) Pagtinabangay sa usag usa aron mulambo ang atong pagkatawo ug komunidad. </br>
					
					
					
					
					</p>
					
				
				
				
				
				</div>
				
				
				
				
				<div class="col_1_of_3 span_1_of_3">
					<h3>ANG SINUGDANAN SA KOOPERATIBA </h3>
				 <div class="history-desc">
					<div class="year"><p>1943 -</p></div>
					<p class="history">
					
					Ang Cooperative Movement nagsugod sa usa ka lugar sa nasod sa England sa Europa kaniadtong tuig 1843.




					</p>
					
					<div class="year"><p> -</p></div>
					<p class="history">
					
					Ang mga prinsipyo nga gisubay mao ang gisunod sa Pilipinas nga gipatuman sa Cooperative Development Authority (CDA)

					
					</p>
					
					
				 <div class="year"><p>1984 -</p></div>
					<p class="history">
						Gimugna isip Consolacion Credit Cooperative (CCCI) kaniadtong Setyembre 18, 1984

					
					</p>
					
					
				 <div class="year"><p> -</p></div>
					<p class="history">
					Nag PMES pinaagi sa kakugi ni Sister Agustina Geolaga, RVM, Cebu Caritas ug sa VICTO (Visayas Cooperative Training Office)  

					
					</p>
				
				<div class="year"><p> -</p></div>
					<p class="history">
					
					Ang 86 nga nitambong, kasagaran nila mga Baranggay Health Workers ug Samarians (Birhen sa Baranggay )

					</p>

				<div class="year"><p> -</p></div>
					<p class="history">
					35 ra ang nagpamiyembro ug mibutang sa pondo nga P10.00 pasiuna nga (membership fee) bayad sa pagpamiyembro ug P5.00 para sa (Fixed Deposit) pondo sa usa ka miyembro

					
					</p>
					
				<div class="year"><p> -</p></div>
					<p class="history">
					P6,803.86 ang unang kapital para makanegosyo ang Kooperatiba pinasikad sa mando sa Bureau of Cooperative Development ug gideposito kini sa Philippine Banking Corporation

					
					</p>
						
					

				 
			</div>
			
			</div>	

			<div class="col_1_of_3 span_1_of_3">
			
					<h3>Pledge</h3>
					<p>
					
					As a filipino I am believe in the Cooperative. <br>
					Alone I am weak but with others I am strong <br>
					So I commit myself to work to cooperate <br>
					For all to be prosperous. Harmony, <br>
					Industry I will value. <br>
					Cooperative affairs I will attend. <br>
					Responsibility I will assume.<br>
					The Cooperative philophy I will live. <br>
					<br><br>
					One vision, One beleive, One feeling. <br>
					In Cooperativism, my life I pledge. <br>
					So help me GOD. <br>
					
					
					
					</p>
			
					<br>
			
					<h3>Mission (BULUHATON)</h3>
					
					<p>
					To provide quality products and customer convenience that 
					would generate sufficient profits and improve the lives of its stakeholders
					</p>
					<br>
					<h3>Vision (PANLANTAW)</h3>
					
					<p>
					A world class presence and market leadership as a financial 
					provider servicing major Municipalities Cities in the Visayas Region
					</p>
					<br>
					<h3>Goals and Objectives (TUMONG)</h3>
					
					<p>
					1. Establish a strong market presence in the visayas <br>
					2. Earn good financial returns for it's owners. <br>
					3. Delight customer with high quality product services <br>
					4. Make CPMC a happy and rewarding place to work in. <br>
					</p>
					<br>
					<h3>Core Values</h3>
					
					<p>
					Honesty <br>
					Excellence <br>
					Accountability <br>
					Respect <br>
					Transparency <br>
					</p>
					
					
			
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

				© All rights Reseverd | Design by  <a href="https://www.facebook.com/groups/924045437728682/">Team Yokaii</a> </p>
				
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

