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
width: 50%;
font-family : Sans-serif;
text-align  :center;
margin-left : 25%;
margin-top : 2%;
background : white;

}

#Message_input{
	width : 700px;
	background : transparent;
	margin-top : 5px;
	height : 50px;
	border:none;
	border-bottom-width : 4px;
	border-bottom-style : solid;
	
	
	
	
}

#email_input, #subject_input {
	width : 200px;
	border-bottom-style : solid;
	border:none;
	border-bottom-width : 4px;
	
	
	
	
	
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
	
	
	
	
  	<div id='SecondMessage' style="background-image : url('papernew.jpg');">
	
			<fieldset id='field1'>
    <legend style='border:none;'>Contact info</legend>
	<div><span class='second1'>Email<span style='color:red'>*</span></span></div><br/>
	 <div><input id='email_input' type="text"  class='second' placeholder='Email'/></div>
     <div style="margin-top : 10px;"><span>Subject<span style='color:red'>*</span></span></div><br/>
     <div class='second_div'><input id='subject_input'class='second2' type="text" placeholder='Subject' /> </div>
      <div><span>Message<span style='color:red'>*</span></span></div>
     <div class='second_div'><input id='Message_input'class='second2' type="text" placeholder='Message' /> </div><br/>
	

</fieldset>
			    <button id='send_btn'>Send</button>
				
	</div>
	  

	
	</body>

</html>

