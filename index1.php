<?php
session_start();
?>
<html>
<head>
<link type='text/css' rel='stylesheet' href='style.css'/>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<title>Farmers Helper</title>
<link rel="icon" href="favicon.ico"/>
<style>

body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td { 
	margin:0;
	padding:0;
}
html,body {
	margin:0;
	padding:0;
}
table {
	border-collapse:collapse;
	border-spacing:0;
}
fieldset,img { 
	border:0;
}
input{
	border:1px solid #b0b0b0;
	padding:3px 5px 4px;
	color:#979797;
	width:190px;
}
address,caption,cite,code,dfn,th,var {
	font-style:normal;
	font-weight:normal;
}
ol,ul {
	list-style:none;
}
caption,th {
	text-align:left;
}
h1,h2,h3,h4,h5,h6 {
	font-size:100%;
	font-weight:normal;
}
q:before,q:after {
	content:'';
}
abbr,acronym { border:0;
}


/* General Demo Style */
body{
  font-family: "helvetica neue", helvetica;
	background: #000;
	font-weight: 400;
	font-size: 15px;
	color: #aa3e03;
	overflow-y: hidden;
	overflow-x: hidden;
}
.ie7 body{
	overflow:hidden;
}
a{
	color: #333;
	text-decoration: none;
}
.container{
	position: relative;
	text-align: left;
}
.clr{
	clear: both;
}
.container > header{
	padding: 0px 0px 0px 0px;
	margin: 0px 0px 0px 0px;
	position: relative;
	display: block;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
    text-align: left;
}
.container > header h1{
  font-family: "helvetica neue", helvetica;
	font-size: 35px;
	line-height: 35px;
	position: relative;
	font-weight: 400;
	color: black;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    padding: 0px 0px 5px 0px;
}
.container > header h1 span{

}
.container > header h2, p.info{
	font-size: 16px;
	font-style: italic;
	color: #f8f8f8;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.6);
}

.slideshow,
.slideshow:after {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    z-index: 0;
}
.slideshow:after {
    content: '';
	opacity :0.1;
    background: transparent  repeat center;
}
.slideshow li span {
    width: 100%;
    height: 90%;
    position: absolute;
    top: 0px;
    left: 0px;
    color: transparent;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: none;
    opacity: 0;
    z-index: 0;
	-webkit-backface-visibility: hidden;
    -webkit-animation: imageAnimation 36s linear infinite;
    -moz-animation: imageAnimation 36s linear infinite ;
    -o-animation: imageAnimation 36s linear infinite ;
    -ms-animation: imageAnimation 36s linear infinite ;
    animation: imageAnimation 36s linear infinite ;
}
.slideshow li div {
    z-index: 1000;
    position: absolute;
    bottom: 300px;
    left: 0px;
	color : black
    width: 100%;
	opacity: 0;
    text-align: center;
    -webkit-animation: titleAnimation 36s linear infinite 0s;
    -moz-animation: titleAnimation 36s linear infinite 0s;
    -o-animation: titleAnimation 36s linear infinite 0s;
    -ms-animation: titleAnimation 36s linear infinite 0s;
    animation: titleAnimation 36s linear infinite 0s;
}



.slideshow li div h3 {
  font-family: "helvetica neue", helvetica;
  text-transform: uppercase;
  font-size: 70px;
  padding: 0;
  line-height: 200px;
  
color: rgba(255,255,255, 0.8);
}
.slideshow li:nth-child(1) span {
 background-image: url(farming1.jpg) 
 
 }
.slideshow li:nth-child(2) span {
    background-image: url(farming2.jpg);
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s;
}
.slideshow li:nth-child(3) span {
    background-image: url('farming3.jpeg');
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s;
}




/* Animation for the slideshow images */
@-webkit-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    -webkit-animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    -webkit-transform: scale(1.05);
	    -webkit-animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    -webkit-transform: scale(1.1);
	}
	25% {
	    opacity: 0;
	    -webkit-transform: scale(1.1);
	}
	100% { opacity: 0 }
}
@-moz-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    -moz-animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    -moz-transform: scale(1.05);
	    -moz-animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    -moz-transform: scale(1.1);
	}
	25% {
	    opacity: 0;
	    -moz-transform: scale(1.1);
	}
	100% { opacity: 0 }
}
@-o-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    -o-animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    -o-transform: scale(1.05);
	    -o-animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    -o-transform: scale(1.1);
	}
	25% {
	    opacity: 0;
	    -o-transform: scale(1.1);
	}
	100% { opacity: 0 }
}
@-ms-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    -ms-animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    -ms-transform: scale(1.05);
	    -ms-animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    -ms-transform: scale(1.1);
	}
	25% {
	    opacity: 0;
	    -ms-transform: scale(1.1);
	}
	100% { opacity: 0 }
}
@keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1);
	}
	25% {
	    opacity: 0;
	    transform: scale(1.1);
	}
	100% { opacity: 0 }
}


/* Animation for the title */
@-webkit-keyframes titleAnimation { 
	0% {
	    opacity: 0;
	    -webkit-transform: translateY(200px);
	}
	8% {
	    opacity: 1;
	    -webkit-transform: translateY(0px);
	}
	17% {
	    opacity: 1;
	    -webkit-transform: scale(1);
	}
	19% { opacity: 0 }
	25% {
	    opacity: 0;
	    -webkit-transform: scale(10);
	}
	100% { opacity: 0 }
}
@-moz-keyframes titleAnimation { 
	0% {
	    opacity: 0;
	    -moz-transform: translateY(200px);
	}
	8% {
	    opacity: 1;
	    -moz-transform: translateY(0px);
	}
	17% {
	    opacity: 1;
	    -moz-transform: scale(1);
	}
	19% { opacity: 0 }
	25% {
	    opacity: 0;
	    -moz-transform: scale(10);
	}
	100% { opacity: 0 }
}
@-o-keyframes titleAnimation { 
	0% {
	    opacity: 0;
	    -o-transform: translateY(200px);
	}
	8% {
	    opacity: 1;
	    -o-transform: translateY(0px);
	}
	17% {
	    opacity: 1;
	    -o-transform: scale(1);
	}
	19% { opacity: 0 }
	25% {
	    opacity: 0;
	    -o-transform: scale(10);
	}
	100% { opacity: 0 }
}
@-ms-keyframes titleAnimation { 
	0% {
	    opacity: 0;
	    -ms-transform: translateY(200px);
	}
	8% {
	    opacity: 1;
	    -ms-transform: translateY(0px);
	}
	17% {
	    opacity: 1;
	    -ms-transform: scale(1);
	}
	19% { opacity: 0 }
	25% {
	    opacity: 0;
	    -webkit-transform: scale(10);
	}
	100% { opacity: 0 }
}
@keyframes titleAnimation { 
	0% {
	    opacity: 0;
	    transform: translateY(700px);
	}
	8% {
	    opacity: 1;
	    transform: translateY(0px);
	}
	17% {
	    opacity: 1;
	    transform: scale(1);
	}
	19% { opacity: 0 }
	25% {
	    opacity: 0;
	    transform: scale(10);
	}
	100% { opacity: 0 }
}
/* Show at least something when animations not supported */
.no-cssanimations .slideshow li span{
	opacity: 1;
}
@media screen and (max-width: 1140px) { 
	.slideshow li div h3 { font-size: 100px }
}
@media screen and (max-width: 600px) { 
	.slideshow li div h3 { font-size: 50px }
}
#div1{

	margin-top : 50%;
	position : absolute;
	opacity :0.5;
	color:white;
}
.mya:hover{

color:red;

}
#product_list1{

	opacity :1;
	float:left;
	margin-top :5.3%;
	margin-left : 13%;
	visibility : hidden;
	background-color: rgba(255,255,255,0.0);
}


</style>
<script>
 $( document ).ready(function() {
 
							$("#profile_button").mouseover(function(){	
								$("#product_list1").animate({opacity: 0.0}, 200, function(){
								$("#product_list1").css("visibility","hidden");
							})
										
																			
							});		
		
							
							$("#product_button").mouseover(function(){
								$("#product_list1").css({visibility:"visible", opacity: 0.0}).animate({opacity: 1.0},500);		
							
							});		
							
							
						
							$("#dist_button").mouseover(function(){
								$("#product_list1").animate({opacity: 0.0}, 200, function(){
								$("#product_list1").css("visibility","hidden");
										})
										
							});
					
					
							$("#help_button").mouseover(function(){										
								$("#product_list1").animate({opacity: 0.0}, 200, function(){
								$("#product_list1").css("visibility","hidden");
										})
										
							});		
						
						
						
							
							$("#product_list1").mouseleave(function(){						
							$("#product_list1").animate({opacity: 0.0}, 200, function(){
								$("#product_list1").css("visibility","hidden");
										})
										
							});
							
							
						
							
							
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
							
							
							
							
 });
 
 
						
</script>
</head>

<body>

<ul class="slideshow">
	
  <li><span>Image 01</span>
  <div>
<?php echo "<h3>Welcome to Farmers Helper Web Application ".$_SESSION['name']."</h3>"; ?></div></li>
  <li><span>Image 02</span>
  <li><span>Image 03</span></li>
</ul>


  <div class="container">
    <header>
   <div id='menuDiv' >
	
	
	<a href='index1.php'><button id='main_page_photo' class="button" style="vertical-align:middle"> <span><img src='home.png'/></span></button></a>
	<a href='profile.php'><button id='profile_button' class="button" style="vertical-align:middle"><span><img src='profile1.jpg'/></span></button></a>
	<button id='product_button' class="button" style="vertical-align:middle"><span id="product"><img src='product1.png'/></span></button>
	<a href='distributers.php'><button id='dist_button' class="button" style="vertical-align:middle"><span id="product"><img src='dist.png'/></span></button></a>
	<a href='help.html'><button id='help_button' class="button" style="vertical-align:middle"><span id="product"><img  id='help'src='help1.png'/></span></button></a>
	<a href='contact.php'><button id='contact_photo' class="button" style="vertical-align:middle"><span id="product"><img  id='help'src='contact_png.png'/></span></button></a>
	 <button id='logout' class="button" style="vertical-align:middle"><span id="product" class='logoutspan' ><img  id='logoutim' src="logout.png"/></span></button>
	
	</div>

	<div id='product_list1'>
	<a href='products_new.php'><button class ='product'  style="vertical-align:middle">Add Product</button></a>
	<a href='view_products.php'><button class ='product'  style="vertical-align:middle">View Products</button></a>
</div>
	

  </header>
</div class="container" >

 
<div id='div1'>
<h1>Powerd By<a style='color:white;' class='mya' href="mailto:dimitriosnikolaidis@hotmail.com?"> James Nikolaidis </a></h1> 
<?php
// Set session variables

echo "<p id='hidde'style='color : white; font-style  :italic; text-decoration : underline; visibility:hidden;'>".$_SESSION["name"]."</p>";
echo "<p id='session'style='color : white; font-style  :italic; text-decoration : underline; visibility:hidden;'>".$_SESSION['id']."</p>";

?>

 </div>



</body>
</html>