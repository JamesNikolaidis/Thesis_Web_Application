<?php
session_start();
?>
<html>
	<head>
		<title>Farmers Helper : Profile</title>
		<meta charset="UTF-8">
		<link type='text/css' rel='stylesheet' href='style.css'/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="icon" href="favicon.ico">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		 <script src="https://www.gstatic.com/firebasejs/3.6.0/firebase.js"></script>
	    <script src='initialize_firebase.js'  type='text/javascript'></script>
	   
		<script> 
		
		
					    $(document).ready(function() {
							
							displayData();
							
							$("#profile_button").mouseover(function(){	
								$("#product_list").animate({opacity: 0.0}, 200, function(){
								$("#product_list").css("visibility","hidden");
							})
										
																			
							});		
		
							
							$("#product_button").mouseover(function(){
								$("#product_list").css({visibility:"visible", opacity: 0.0}).animate({opacity: 1.0},500);		
							
							});		
							
							
						
							$("#dist_button").mouseover(function(){
								$("#product_list").animate({opacity: 0.0}, 200, function(){
								$("#product_list").css("visibility","hidden");
										})
										
							});
					
					
							$("#help_button").mouseover(function(){										
								$("#product_list").animate({opacity: 0.0}, 200, function(){
								$("#product_list").css("visibility","hidden");
										})
										
							});		
						
						
						
							
							$("#product_list").mouseleave(function(){						
							$("#product_list").animate({opacity: 0.0}, 200, function(){
								$("#product_list").css("visibility","hidden");
										})
										
							});
										
										
										
							$("#product_list").click( function(){
												
										
							});
						
										
							$("#add_photo_button").click( function(){
											$("input").removeAttr('disabled');
											
												
										
							});
						
						
						  
							$('[data-toggle="tooltip"]').tooltip(); 
						 
						 
						 
						
							
						
								
						 
						});
						
							<?php
							
							echo "
							function displayData(){
							 var commentsRef = firebase.database().ref('Companies').orderByChild('Email').equalTo('".$_SESSION["email"]."')
							 .on('child_added', function(data) {
								 $('#name').val(data.val().Name);
								 $('#country').val(data.val().Country);
								 $('#email').val(data.val().Email);
								 $('#pass').val(data.val().Password);
								 $('#url').val(data.val().CompanyUrl);								
									});

							 
							 
							 
							 
										

								 
								 
								 
								

									
							};
						";
						?>
						
						
						
						
						
						
						function writeUserData(CompanyName,Company_Country,Company_Email,Url,Password_Country) 
						 {		
		                       
						     	firebase.database().ref('Companies').push().set({
								Country : Company_Country,
								Name : CompanyName,
								Email :Company_Email,  
								CompanyUrl : Url,
								Password : Password_Country
						});
						    
						};
						 
 
		</script>
	
		
	</head>

	<body style="background-image : url('farming21.jpg');">
	<script src="https://www.gstatic.com/firebasejs/3.6.0/firebase.js"></script>
	<script src='initialize_firebase.js'  type='text/javascript'></script>
	  
	  
	  
	  
	
	<div id='menuDiv' >
	<a href='index1.php'><button id='main_page_photo' class="button" style="vertical-align:middle"> <span><img src='home.png'/></span></button></a>
	<a href='profile.php'><button id='profile_button' class="button" style="vertical-align:middle"><span><img src='profile1.jpg'/></span></button></a>
	<button id='product_button' class="button" style="vertical-align:middle"><span id="product"><img src='product1.png'/></span></button>
	<a href='distributers.php'><button id='dist_button' class="button" style="vertical-align:middle"><span id="product"><img src='dist.png'/></span></button></a>
	<a href='help.html'><button id='help_button' class="button" style="vertical-align:middle"><span id="product"><img  id='help'src='help1.png'/></span></button></a>
	<a href='contact.php'><button id='contact_photo' class="button" style="vertical-align:middle"><span id="product"><img  id='help'src='contact_png.png'/></span></button></a>
	  <button id='logout' class="button" style="vertical-align:middle"><span id="product" class='logoutspan' ><img  id='logoutim' src="logout.png"/></span></button>
		<script>
		 $("#logout").mouseover(function(){
								$("#logoutim").attr("src","logout2.png");
								
								
							});
					
							$("#logout").mouseleave(function(){
								$("#logoutim").attr("src","logout.png");
								
								
							});
							
							$("#logout").click(function(){
																
										$.get('closesession.php', function(data) {
												window.location = 'arxiki.html';
												});
								
								});
		</script>
	
	</div>
	
	
	<div id='product_list'>
		<a href='products_new.php'><button class ='product'  style="vertical-align:middle">Add Product</button></a>
		<a href='view_products.php'><button class ='product'  style="vertical-align:middle">View Products</button></a>
	</div><br/><br/><br/>
	
<div>
	<button  data-toggle="tooltip" title="Change Details!"  id='add_photo_button' ><img src='plus_plus.png'/></button>
	<div id='profile_form' style='text-align:center;' >
	<br/>
	<div id='details' >
	<p class='pp'>Name:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class='form_input' id ='name'type='text' placeholder='Company name' disabled /></p><br/> 
	<p class='pp'>Country : &nbsp;&nbsp;&nbsp;&nbsp; <input class='form_input'id='country'type='text' placeholder='Company Country' disabled /></p><br/>
	<p class='pp'>Email :  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input class='form_input'  id='email' type='email' placeholder='Company Email' disabled /></p><br/>
	<p class='pp'>Password:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input class='form_input' id='pass'type='text' placeholder='Password'  disabled /></p><br/>
	<p class='pp'>Company Url:&nbsp; <input class='form_input'  id='url'type='text' placeholder='Url.com'   disabled /></p><br/><br/>
	
		
						
		<button id='savedata1' >Save Data</button>
		<script>
		  
						 $("#savedata1").click(function(){
							var CompanyName = $("#name").val();
							var Company_Email = $("#email").val();
							var Company_Country = $("#country").val();
							var CompanyUrl = $("#url").val();
							var Password_Country = $("#pass").val();
								writeUserData(CompanyName,Company_Country,Company_Email,CompanyUrl,Password_Country);
								$("input").attr('disabled','disabled');
						});

		</script>
	</div>
	
	
</div>	
	</div>
	
  
	  

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>

</html>

