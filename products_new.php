<?php
session_start();
?>
<html>
<head>
<title>Farmers Helper : New Product</title>
<link type='text/css' rel='stylesheet' href='style.css'/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="icon" href="favicon.ico">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		 <script src="https://www.gstatic.com/firebasejs/3.6.0/firebase.js"></script>
	<script src='initialize_firebase.js'  type='text/javascript'></script>
<style>

#field1{
position : absolute;
font-size : 17px;
font-family :verdana;
text-align : left;
color:white;

 border: 4px solid transparent;
    padding: 15px;
   box-shadow: 20px 20px 10px #888888;
  border-image: url(farming1.jpg) 30 round;
}


#field2{
position : absolute;
float:left;
font-size : 17px;
font-family :verdana;
color:white;
text-align : left;
 border: 4px solid transparent;
padding: 15px;
   box-shadow: 20px 20px 10px #888888;
  border-image: url(farming1.jpg) 30 round;
}

span{
color : #D0D0D0 ;


}
div > .second{
margin-left : 100px;
border  :none;
border-bottom-style : solid;
border-bottom-widht :3px;
border-bottom-color :white;
text-align:center;
}

div > .second2{

border  :none;
border-bottom-style : solid;
border-bottom-widht :3px;
border-bottom-color :white;
} 


div > .second3{

border  :none;
border-bottom-style : solid;
border-bottom-widht :3px;
border-bottom-color :white;
margin-left : -50px;
} 


div > input{
font-size : 20px;
font-family :verdana;
font-style : italic;
color : white;
background : transparent ; 

}
legend{
border-style:solid;
border-bottom-width : 3px;
border-bottom-color  :red;
color:white;
}
option, optgroup ,select{

font-size : 17px;
font-family :verdana;
font-style : italic;
color : red;

}

#save_button_product{
	border-radius : 4px;
	width : 200px;
	height : 50px;
	text-align : center;
	border : 5px solid rgb(255,255,255);
	color : white;
	font-family : verdana;
	font-size  :18px;
	background : transparent;
}


</style>
<script>
				var DistributersNameList = [];
				var DistributersEmailList=[];
	
	$(document).ready(function(){
		
				var counter1=0;
				var counter2=0;
				var clickFlagBugs=0;
				var clickFlagDisease=0;
				var clickFlagEnemies=0;
				
		
		 $("#address_input").focus(function(){
						 $("#address_input").css({
							'border-bottom-color':'blue'
						 
						 });
		 });
		  $("#city_input").focus(function(){
						 $("#city_input").css({
							'border-bottom-color':'blue'
						 
						 });
		 });
		  $("#prov_input").focus(function(){
						 $("#prov_input").css({
							'border-bottom-color':'blue'
						 
						 });
		 });  
		 $("#postal_input").focus(function(){
						 $("#postal_input").css({
							'border-bottom-color':'blue'
						 
						 });
		 });
		 
		 
		 
		 
		 
		$("#address_input").blur(function(){
				$("#address_input").css({
							'border-bottom-color':'black'
						 
						 });
		});
		$("#city_input").blur(function(){
				$("#city_input").css({
							'border-bottom-color':'black'
						 
						 });
		});
		$("#prov_input").blur(function(){
				$("#prov_input").css({
							'border-bottom-color':'black'
						 
						 });
		});
		$("#postal_input").blur(function(){
				$("#postal_input").css({
							'border-bottom-color':'black'
						 
						 });
		});
		
		
		
		
		
		
		
		
		
		
		
		
		/*
		
		$("#field1").focusin(function(){
				if(counter1==0){
				
				$("input").attr('disabled','disabled');
				$("#field1").animate(
					{left:"+=300px"},{
					duration:1000,
					//easing input below
					easing: "linear",
					//step function starts here 
					step : function(leftposition){
							
							if( Math.round(leftposition * 100 / $("#field1").width()+300 )<220)
						    {$("#field1").css({'box-shadow':'-10px 20px 10px #888888'},"slow");}
							else if( Math.round(leftposition * 100 / $("#field1").width()+300 )<270){						
							$("#field1").css({'box-shadow':'-20px 20px 10px #888888'},"slow");}
							else{$("#field1").css({'box-shadow':'-30px 20px 10px #888888'},"slow");}					
							}//Ends of step function
							
				/*end of the field1 animation for moving right
					}).animate(
						{left:"-=300px"},{
							 duration:1000,
							//easing input below
							easing: "linear",
							//step function starts here
							step : function(leftposition){
								if( Math.round(leftposition * 100 / $("#field1").width()+300 )<340)
								{$("#field1").css({'box-shadow':'20px 20px 10px #888888'},"slow");}
							    else if( Math.round(leftposition * 100 / $("#field1").width()+300 )<370){$("#field1").css({'box-shadow':'-10px 20px 10px #888888'},"slow");}
							    else{$("#field1").css({'box-shadow':'-20px 20px 10px #888888'},"slow");}		
							},//Ends of step function
						done:function(){
					$("input").removeAttr('disabled');
				}
						}// End of available animation options		
				);/*end of the field1 animation for moving left
				
				
				counter1=1;
				}//End of if
		
		
		
		});
		*/
		
		
	$(document).keypress(function(event){
	
			if(event.which==13){
		
				if($("#product_name_input").val()== "" || $("#product_price_input").val()== "" ){
					
				}else{
				
				$("#add_photo_button").fadeIn(2000);
				$("#field2").fadeIn(2000);
					
				
				
				
				}
			}
	
	
					
	});	
	
	
	
	$(document).keypress(function(event){
			
			
		if(event.which==13 && $("#product_name_input").val()!="" && $("#product_price_input").val()!="" ){
					
						
						$("#save_button_product").show();
						}
					
		});	
		
		
		
		
		$("#field2").hide();
		$("#add_photo_button").hide();
		$("#save_button_product").hide();
		
			
			
			
			
			
			
				
			
						
			function triggerfunction(){
				if(counter2==0){
				
				$("input").attr('disabled','disabled');
				$("#field2").animate({left:"+=300px"},1500).animate({left:"-=300px"},1500,function(){
					$("input").removeAttr('disabled');
				
				});
				counter2=1;
				alert(counter);
				}
		}
		
		
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
				
				
				
						$("#select1").focusout(function(){
							
							
								if($("#select1").val()=="Bugs"){
									
									
								if(!$("#select3").is(":visible")){
										$("#try").append("<select  id='select3' style='widht : 100px; margin-left: 20px;'>");
									
									
									var BugsList= ["Burr","Lollium","Sorghum halepense","Convolvulus arvensis","Bromus"];
									$(".lol").hide();
										for(var i=0; i!=BugsList.length ; i++)
											{	
												
												$("#select3").append("<option class='lol' id='testing"+[i]+"' value='"+BugsList[i]+"'>"+BugsList[i]+"</option>");
												
													
												}
												
												
												
												
									$("#try").append("</select>");
										clickFlagBugs=1;
										clickFlagDisease=0;
										clickFlagEnemies=0;
										
									
								}else{
									
									document.getElementById("select3").remove();
									
									
										$("#try").append("<select  id='select3' style='widht : 100px; margin-left: 20px;'>");
									var BugsList= ["Burr","Lollium","Sorghum halepense","Convolvulus arvensis","Bromus"];
									$(".lol").hide();
										for(var i=0; i!=BugsList.length ; i++)
											{	
												
												$("#select3").append("<option class='lol' id='testing"+[i]+"' value='"+BugsList[i]+"'>"+BugsList[i]+"</option>");
												
													
												}
												
												
												
												
									$("#try").append("</select>");
										clickFlagBugs=1;
										clickFlagDisease=0;
										clickFlagEnemies=0;
									
									
								}
									
							
										
										
										
								}else if ($("#select1").val()=="Disease" ){
									
									
									if(!$("#select3").is(":visible")){
										$("#try").append("<select  id='select3' style='widht : 100px; margin-left: 20px;'>");
									var BugsList= ["Verticillium dahliae(Cotton)","Verticillium dahliae(Walnuts-Olive)","Alternaria(Herbs)","Potatoe-Tomatoe Alternaria","Alternaria tenuis","Colletotrichum cucurbits","Carbonation citrus","Glomerella gossypii","Bacterial necrosis","Bacterial rot of maize strain"];
										for(var i=0; i!=BugsList.length ; i++)
											{	
												$("#select3").append("<option  class='lol' id='Bugs"+[i]+"' value='"+BugsList[i]+"'>"+BugsList[i]+"</option>");
												
													
												}
												
										$("#try").append("</select>");
										clickFlagBugs=0;
										clickFlagDisease=1;
										clickFlagEnemies=0;
										
										
										
								}else{
									
									document.getElementById("select3").remove();
										$("#try").append("<select  id='select3' style='widht : 100px; margin-left: 20px;'>");
									var BugsList= ["Verticillium dahliae(Cotton)","Verticillium dahliae(Walnuts-Olive)","Alternaria(Herbs)","Potatoe-Tomatoe Alternaria","Alternaria tenuis","Colletotrichum cucurbits","Carbonation citrus","Glomerella gossypii","Bacterial necrosis","Bacterial rot of maize strain"];
										for(var i=0; i!=BugsList.length ; i++)
											{	
												$("#select3").append("<option  class='lol' id='Disease"+[i]+"' value='"+BugsList[i]+"'>"+BugsList[i]+"</option>");
												
													
												}
												
										$("#try").append("</select>");
										clickFlagBugs=0;
										clickFlagDisease=1;
										clickFlagEnemies=0;
								}
								
								
								
								}else  if ($("#select1").val()=="Enemies" ){
									
									
									if(!$("#select3").is(":visible")){
										
										$("#try").append("<select  id='select3' style='widht : 100px; margin-left: 20px;'>");
										var BugsList= ["Potato Aphid","Mealy-Trialeurodes vaporariorum","Cotton Aphid","Whiteflies citrus","Flea","Vegetables Aphids","Whiteflies tobacco","Beans and bean Weevil","Dacos","Olive Citrus thrips"];
										for(var i=0; i!=BugsList.length ; i++)
											{	
												$("#select3").append("<option  class='lol' id='Enemies"+[i]+"' value='"+BugsList[i]+"'>"+BugsList[i]+"</option>");
												
													
												}
												
										$("#try").append("</select>");
										clickFlagBugs=0;
										clickFlagDisease=1;
										clickFlagEnemies=0;
										
										
											
									}else{
									
										document.getElementById("select3").remove();
										$("#try").append("<select  id='select3' style='widht : 100px; margin-left: 20px;'>");
										var BugsList=["Potato Aphid","Mealy-Trialeurodes vaporariorum","Cotton Aphid","Whiteflies citrus","Flea","Vegetables Aphids","Whiteflies tobacco","Beans and bean Weevil","Dacos","Olive Citrus thrips"];
										for(var i=0; i!=BugsList.length ; i++)
											{	
												$("#select3").append("<option  class='lol' id='testing"+[i]+"' value='"+BugsList[i]+"'>"+BugsList[i]+"</option>");
												
													
												}
												
										$("#try").append("</select>");
										clickFlagBugs=0;
										clickFlagDisease=1;
										clickFlagEnemies=0;
									}
									
									
									
								}
							
			
							
							
							
							
						});
				
				
				
				
				
				$("#add_photo_button").click(function(){
					
					DistributersNameList.push($('#dist_name_input').val());
					DistributersEmailList.push($('#dis_email_input').val());
					alert(DistributersEmailList);
					$('#dist_name_input').val('');
					$('#dis_email_input').val('');
					
				});
				
				
				
		
		
		});

		$(document).scroll(function(event) {
							
					 if(document.body.scrollTop > 50){
							$("body").css({"background-size": "120% "});
							$("#menuDiv").fadeOut(1000);
					 }else if(document.body.scrollTop > 20){
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
		
		
			function saveProductTodatabase(ProductName,ProductPrice,DrugFor1,Manufacter1,ActiveSub,Dist_Email,ProblemSolving){
								DistributersEmailList.push(Dist_Email);
								alert(DistributersEmailList);
					
						firebase.database().ref('Products').push().set(
						{
							Name : ProductName,
							Price : ProductPrice,
							Manufacter : Manufacter1,
							DrugFor : DrugFor1,
							ActiveSubstance : ActiveSub, 
							Problem_Solving : ProblemSolving
							
						});
						
					firebase.database().ref('Stocks').push().set(
								{
										DistributerEmail : DistributersEmailList,
										Product : ProductName,
										ProductManufacter : Manufacter1,
										Problem_Solving : ProblemSolving
								});
			
							DistributersEmailList = [];
							 $('#product_name_input').val('');
							 $('#product_price_input').val('');
							 $('#dist_name_input').val('');
							 $('#dis_email_input').val('');
			}
		
		

</script>

</head>
<body style="background-image : url('farming1_2.jpg'); " >
<script src="https://www.gstatic.com/firebasejs/3.6.0/firebase.js"></script>
<script src='initialize_firebase.js'  type='text/javascript'></script>

	  
	  
	<div id='menuDiv'  style='margin-top:0%;'>
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
	</div><br/>
	



<div style='display : relative; margin-left : 35%; margin-top : 8%;'>


<fieldset id='field1'>
    <legend>Product info</legend>
    <div><span style=" margin-left : -10px; font-size :20px;">Name</span>&nbsp;&nbsp; &nbsp; &nbsp;  <span  style='margin-left : 250px; font-size :20px;'>Price</span></div><br/>
    <div class='second_div'><input id='product_name_input'class='second2' type="text" placeholder='Product Name' /><input id='product_price_input' type="text"  class='second' placeholder='Product Price'/><br/><br/></div>
    <div><span style='margin-left : 50px; font-size :20px;'>Drug For</span><span style='margin-left : 250px; font-size :20px;' >Active Substance</span><br/></div><br/>
    <div class='second_div'><select id='select1'style='widht : 100px; margin-left: 30px;'>
		<optgroup label="Drug For">
		<option>Bugs</option>
			<option>Disease</option>
		<option>Enemies</option>
		</optgroup>
		
		</select>
		
</select><select  id='select2' style='widht : 100px; margin-left: 250px;'>
			<optgroup label="Substance">
			<option>Chlorium</option>
			<option>Arseniko</option>
			<option>fsdfdfds</option>
			</optgroup>
</select><br/>

</div><br/>
	<div id="Andr">
	 <div id ="try" ><span  style='margin-left : 50px; font-size :20px;'>Specify Problem Solving</span></div><br/>

			
</select><br/>
</div>



</fieldset>
</div>

<div style='margin-left : 35%; margin-top :12%; '>
<button   style='margin-top:400px;' id='add_photo_button' ><img src='plus_plus.png'/></button>
<fieldset id='field2'>
    <legend>Distributes Info</legend>
    <div><span style=" margin-left : -10px; font-size :20px;">Name</span>&nbsp;&nbsp; &nbsp; &nbsp;  <span  style='margin-left : 250px; font-size :20px;'>Email</span></div><br/>
    <div class='second_div'><input id='dist_name_input' class='second2' type="text" placeholder='Distributer Name' /><input id='dis_email_input' type="text"  class='second' placeholder='Distributer Email'/><br/><br/></div>
    <br/></div><br/>
	

</fieldset>
</div>

<div style= 'margin-left : 40%; margin-top : 32%;'>
<button id='save_button_product'>Save Product</button>
<?php
echo "
<script>

		$('#save_button_product').click(function(){
			
			
		saveProductTodatabase($('#product_name_input').val(),$('#product_price_input').val(),$('#select1').val(),'".$_SESSION["email"]."',$('#select2').val(),$('#dis_email_input').val(),$('#select3').val());
			
		
		});


</script>
";
?>
</div>

</body>
</html>