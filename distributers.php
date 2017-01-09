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
								
								var  key1 ;
								var name;
							 var commentsRef = firebase.database().ref('Companies').orderByChild('Email').equalTo('".$_SESSION["email"]."')
							 .on('child_added', function(data) {
								key1 = data.key;
							    name = data.val().Name;
								saveCoorp(name);
										
									
									
									
									});

								







								
							};
						";
						?>
						
						
						function  saveCoorp(name){
							if($("#dist_name_input").val()==""){}else{
							firebase.database().ref('Coorporation').push().set({
								CompanyName : name,
								Dist_Name : $("#dist_name_input").val()
								
								
							});
							
								$("#dist_name_input").val('');
								$("#dist_email_input").val('');
								$("#dis_country_input").val('');
								$("#state_input").val('');
								$("#telephone_input").val('');
								$("#Address_input").val('');
								$("#Postal_input").val('');
							}
						};
						
						
						
						
						function writeDistData(DistName,Dist_Country,Dist_Email,State,Telephone,Address,Postal) 
						 {		
						 
								
		                      
						     	firebase.database().ref('Distributers').push().set({
								Name : DistName,
								Email :Dist_Email,  
								Country : Dist_Country,
								State : State,
								Address : Address,
								Postal : Postal
						});
						   
						   
								alert("Distributer "+DistName+" has successfully inserted to the database.");
								displayData();
								
						   
						};
						
						
						
					$(document).scroll(function(event) {
				
					 if(document.body.scrollTop > 40){
							//$("body").css({"background-size": "120% "});
							$("#menuDiv").fadeOut(400);
					 }else if(document.body.scrollTop < 30){
					 $("#menuDiv").fadeIn(1500);
					 }
						//if(event.) { //alternative options for wheelData: wheelDeltaX & wheelDeltaY
						//scroll down
						//$("body").css({"background-image": "url('farming1_3.jpg')"});
						//$("#menuDiv").fadeOut(3000);
						//} else {
							//scroll up
						//$("body").css({"background-image": "url('farming1_2.jpg')"});
						//$("#menuDiv").fadeIn(2000);
						//}
						////prevent page fom scrolling
						//return false;
					});	 
 
		</script>
	
	<style>
	#FirstMessage ,#SecondMessage , #ThirdMessage{
opacity :1; 
position : relative;
border-style:solid;
border-width : 10px;
border-color : black;
padding : 30px;
color : black;
font-size  :17px;
width: 30%;
font-family : Sans-serif;
text-align  :center;
margin-left : 35%;
margin-top : 2%;
background : white;

}
	</style>
		
	</head>

	<body style="background-image : url('farming1_2.jpg');">
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
												window.location = 'arxiki.php';
												});
								
								});
		</script>
	
	</div>
	
	
	<div id='product_list'>
		<a href='products_new.php'><button class ='product'  style="vertical-align:middle">Add Product</button></a>
		<a href='view_products.php'><button class ='product'  style="vertical-align:middle">View Products</button></a>
	</div><br/><br/><br/>
	<div id='SecondMessage'>
			<fieldset id='field1'>
    <legend>Distributer info</legend>
    <div><span>Name<span style='color:red'>*</span></span></div><br/>
     <div class='second_div'><input id='dist_name_input'class='second2' type="text" placeholder='Name' /> </div><br/>
	<div><span class='second1'>Email<span style='color:red'>*</span></span></div><br/>
	 <div><input id='dist_email_input' type="text"  class='second' placeholder='Email'/></div><br/>
    <div><span>Country</span></div><br/>
     <div class='second_div'><input class='second2' id='dis_country_input' type="text" placeholder='Country' /> </div><br/>
	 <div><span class='second1' >State<span style='color:red'>*</span></span></div><br/>
	 <div class='second_div'><input id='state_input'class='second' type="text" placeholder='Web site'/><br/></div><br/>
	 <div><span class='second1' >Telephone<span style='color:red'>*</span></span></div><br/>
	 <div class='second_div' ><input id='telephone_input'class='second' type="text" /><br/></div><br/>
	<div><span class='second1'>Address<span style='color:red'>*</span></span></div><br/>
	 <div class='second_div'><input id='Address_input'class='second' type="text" /><br/></div><br/>
	 <div><span class='second1'>Postal Code<span style='color:red'>*</span></span></div><br/>
	 <div class='second_div'><input id='Postal_input'class='second' type="text" /><br/></div><br/>
	

</fieldset>
			    <button id='saveDist_btn1'>Create Distributer</button>
		
	
		<script>
			
			
			$("#saveDist_btn1").click(function(){
						
							
							//if($("#conf_pass_input").val()==$("#password_input").val()){
							
						
							writeDistData($("#dist_name_input").val(),$("#dis_country_input").val(),$("#dist_email_input").val(),$("#state_input").val(),$("#telephone_input").val(),$("#Address_input").val(),$("#Postal_input").val()) ;
						 	//}else{
							//alert("You gave wrong password on one of the two fields . Please try again");
		                   //    $("#conf_pass_input").css({'border-color': 'red','border-width':'5px'});
							//    $("#password_input").css({'border-color': 'blue','border-width':'5px'});
							//    
						
							}
							
							
							);
							
								
			</script>
	
			
	</div>
		
  
	  

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>

</html>

