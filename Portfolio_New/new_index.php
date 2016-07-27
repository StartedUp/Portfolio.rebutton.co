<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Portfolio</title>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<style>
		body {
			margin:0;padding:0;
			overflow-x: hidden;
			overflow-y: scroll;
		}
		#logo {
			margin-top: 1.2%;
			position: fixed;
			width: 100%;
			height: 100px;
			background: url("images/vector_file_3.png") no-repeat;
			background-size: 236px 75px;
		}
		#image1 {
			background: url("images/bg5.gif") 100% / 150% no-repeat;
		}
		#image2
		{
			background: url("images/bg4.gif") 100% / 150% no-repeat;
		}
		#image3
		{
			background: url("images/i1.gif") 100% / 150% no-repeat;
		}
		#image4 {
			background: url("images/img4.jpg") 100% / 150% no-repeat;
		}
		.portfolioImg{
			display:inline-block;
			position: relative;
			border-radius:10%;
			width: 250px;
			height: 200px;
			margin-top: 10%;
		}
		.fullDiv{

			width: 100%;
			height: 100%;
			text-align: center;
		}
		#h1
		{ 
			position: fixed;
			top:0;
			left: 0;
			right: 0;
			margin: 0 auto;
			color: #d54d7b; font-family: "Great Vibes", cursive; font-size: 20px; 
			line-height: 16px; font-weight: normal; 
			margin-bottom: 0px; margin-top: 0; text-align: center; 
			text-shadow: 0 1px 1px #fff;
		}
		ul {
			list-style-type: none;
			margin-top: 0;
			margin-left: 5%;
			padding: 0;
			overflow: hidden;
			position: fixed;
			background-color: none; 
		}
		li {
			float: left;
			display: block;
			color: blue;
			text-align: center;
			padding: 8px 10px;
			text-transform: none;
		}
		html {
			background: url(images/bg.jpg) fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			width: 100%;
			height: 100%;
		}
		.mySlides {
			display:inline-block;
			position: relative;
			border-radius:10%;
			width: 160px;
			height: 250px;
			margin-top: 10%;
		}
		textarea{
			float: left;
			margin-top: 15%;
			margin-left: 5%;
			height: 50%;
			width: 50%;
		}


		</style>
	</head>
	<body>
		<div id="logo"></div><br>
		<div id="h1"><h1>Portfolio</h1>
			<p>Just Rebutton And Get Your Job Done</p></div>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#web">Web Design</a></li>
				<li><a href="#form">Digital Form</a></li>
				<li><a href="#translation">Transulation</a></li>
			</ul>
			
			<div class="fullDiv">
				<a href="#web"><div style="max-width:25%" class="portfolioImg" id="image1">
					<img class="mySlides" src="images/1.png" style="width:100%">
					<img class="mySlides" src="images/2.png" style="width:100%">
					<img class="mySlides" src="images/3.png" style="width:100%">
				</div></a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
				<a href="#form"><div style="max-width:25%" class="portfolioImg" id="image2">
					<img class="mySlides" src="images/1.png" style="width:100%">
					<img class="mySlides" src="images/2.png" style="width:100%">
					<img class="mySlides" src="images/3.png" style="width:100%">
				</div></a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
				<a href="#translation"><div style="max-width:25%" class="portfolioImg" id="image3">
					<img class="mySlides" src="images/1.png" style="width:100%">
					<img class="mySlides" src="images/2.png" style="width:100%">
					<img class="mySlides" src="images/3.png" style="width:100%">
				</div></a>
			</div>


			<div id="web" class="fullDiv">
				<div class="portfolioImg" id="image4">
				</div>
				<textarea id="Description">Description</textarea>
			</div>
			<div id="form" class="fullDiv">
				<div class="portfolioImg" id="image4"></div>
			</div>
			<div id="translation" class="fullDiv">
				<div class="portfolioImg" id="image4"></div>
			</div>
		</body>
		<script>
//we'll use a window.onload for simplicity, but typically it is best to use either jQuery's $(document).ready() or $(window).load() or cross-browser event listeners so that you're not limited to one.
$(document).ready(function() {
	var logo = document.getElementById("logo");
    // var image1 = document.getElementById("image1");
    // var image2 = document.getElementById("image2");
    // var image3 = document.getElementById("image3");
    TweenLite.to(logo, 2, {left:"80%", ease:Bounce.easeOut});
    //TweenMax.from(image1,2,{opacity:0, y:200,rotation:360,scale:2,delay:0.5});
    // TweenMax.staggerFrom(".portfolioImg",1,{opacity:0, y:200,rotation:-360,delay:0.5});
    TweenMax.staggerFrom("#image1",1,{opacity:0, left:500,rotation:-360,delay:1.50});
    TweenMax.staggerFrom("#image2",1.25,{opacity:0, y:-600,rotation:-360,delay:1.5});
    TweenMax.staggerFrom("#image3",0.75,{opacity:0, right:-500,rotation:-360,delay:1.75});
    // TweenMax.staggerFrom("#image3",0.5,{right:"80%", ease:Bounce.easeOut});
   // TweenMax.staggerFrom(image3,5,{opacity:0, y:200,rotation:360,scale:2, delay:0.5});

    /* Tip: Try substituting the following eases:
    Elastic.easeIn
    Elastic.easeInout
    Back.easeOut
    Power1.easeOut
    Power2.easeOut
    Power3.easeOut
    Power4.easeOut
    SlowMo.ease
    */   
    var myIndex = 0;
    carousel();

    function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides");
    	for (i = 0; i < x.length; i++) {
    		x[i].style.display = "none";      }
    		myIndex++;
    		if (myIndex > x.length) {myIndex = 1}    
    			x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}


$('a[href^="#"]').on('click', function(event) {
	var target = $(this.getAttribute('href'));
	if( target.length ) {
		event.preventDefault();
		$('html, body').stop().animate({
			scrollTop: target.offset().top
		}, 1500);
	}
});
});
</script>
</body>
</html>