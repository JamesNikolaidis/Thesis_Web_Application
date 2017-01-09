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

<script>
				
	
	$(document).ready(function(){
		
			var counter1=0;
				var counter2=0;
		
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
				
				
				
					
				
				var firebasegetStockQuery = firebase.database().ref('Products').orderByChild('Manufacter').equalTo('<?php echo $_SESSION["email"] ; ?>').once('value')
					.then(function(snapshot) {
						var mycount=0;
						var email = "<?php echo $_SESSION["email"]; ?>";
					snapshot.forEach(function(childSnapshot) {
						
					 

					$('#first').after(
						'<tr id="row'+mycount+'"><td >'+childSnapshot.val().Name+'</td>' +
								'<td>'+childSnapshot.val().Price+'</td>' +
								'<td>'+childSnapshot.val().Manufacter+'</td>' +
								'<td>'+childSnapshot.val().ActiveSubstance+'</td>' +
								'<td>'+childSnapshot.val().DrugFor+'</td>'+
								'<td><button id="'+mycount+'">Delete</button></td></tr>'
								
								);	
								//
								
								  $('<script> $("#'+mycount+'").click(function(){  DeleteProductFromCompany("'+childSnapshot.val().Name+'","'+email+'");  });              </' + 'script>').appendTo(document.body);
								  
									mycount++;
												
									
				});
					
					
					
					
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
		
		
			function saveProductTodatabase(ProductName,ProductPrice,DrugFor1,Manufacter1,ActiveSub,Dist_Email){
			
					alert(ProductName);
						firebase.database().ref('Products').push().set(
						{
							Name : ProductName,
							Price : ProductPrice,
							Manufacter : Manufacter1,
							DrugFor : DrugFor1,
							ActiveSubstance : ActiveSub 
							
						});
						
					firebase.database().ref('Stocks').push().set(
								{
										DistributerEmail : Dist_Email,
										Product : ProductName,
										ProductManufacter : Manufacter1	
								});
			
			}
		
		
		
		
			function DeleteProductFromCompany(ProductName,Email){
					
					var firebasegetStockQuery = firebase.database().ref('Products').orderByChild('Name').equalTo(ProductName)
					.on('child_added', function(data) {
										if(Email ==data.val().Manufacter){
								 				
												firebase.database().ref('Products').child(data.key).remove();
												location.reload();
												}else {alert("Some error found");
												
												}

												
									});

					
					
				
						}
				
					
					
					
				
				
		
		
			
				$(document).keypress(function(event){
	
							if(event.which==13){
		
							if($("#delete_product").val()== ""){
					
								}
						}
	
	
					
			});	
		
		
			
			function DeleteProduct(ProductName){
				
				
			}
			
</script>

<style>
td, th{
	text-align:center;
	padding : 30px;
	font-family : verdana;
}


</style>
</head>
<body id="mybody" style="background-image : url('farming1_2.jpg'); " >
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
		<a href='products_view.html'><button class ='product'  style="vertical-align:middle">View Products</button></a>
	</div><br/>
	
<div style='margin-top : 100px; margin-left : 1200px;'>
<p style='color:white;'>Give Product Name to Delete.</p><br/>
<input type='text' id='delete_product' placeholder='Give Name'/>
</div>

<div style=' margin-top : 10px; float:left;'>
<table id='table1' border="1"  style ='  margin-left : 200px; background-color : white;  border-collapse: collapse; border-radius:5px; '>
<tr id='first' >
<th>Name</th>
<th>Price</th>
<th>Manufacter</th>
<th>Active Substance</th>
<th>Drug For</th>
</tr>
</table>

</div>


</body>
</html>