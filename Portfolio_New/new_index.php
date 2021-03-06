<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Portfolio</title>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<style>
		body {
			background-color: hsla(66, 86%, 44%, 0.39); 
			margin:0;padding:0;
			overflow-x: hidden;
			overflow-y: scroll;
		}
		#logo {
			margin-top: 0.2%;
			position: fixed;
			width: 100%;
			height: 100px;
			background: url("images/vector_file_3.png") no-repeat;
			background-size: 236px 75px;
		}
		#image1 {
			background: url("images/bg5.jpg") 100% / 150% no-repeat;
		}
		#image2{
			background: url("images/bg4.gif") 100% / 150% no-repeat;
		}
		#image3{
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
			margin-top: 15%;
		}
		.portfolioImg1{
			float: right;
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
		#h1{ 
			position: fixed;
			top:0;
			left: 0;
			right: 0;
			margin: 0 auto;
			color: #d54d7b; font-family: "Great Vibes", cursive; font-size: 20px; 
			line-height: 0px; font-weight: normal; 
			margin-bottom: 0px; margin-top: 0; text-align: center; 
			text-shadow: 0 1px 1px #fff;
		}
		#h2{ 
			margin-top: 10%;
			float: left;
			color: black; font-family: "Great Vibes", cursive; font-size: 20px; 
			line-height: 16px; font-weight: normal;  
			text-shadow: 0 1px 1px #fff;
			margin-left: 10%;
		}
		ul {
			list-style-type: none;
			margin-top: 0;
			margin-left: 5%;
			padding: 0;
			overflow: hidden;
			position: fixed; 
		}
		li {
			float: left;
			display: block;
			text-align: center;
			padding: 8px 10px;
			text-transform: none;
		}
		html {
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

		.wrapper{
			margin: 0 auto;
			width: 100%;
		}
		.static{
			width: 100%;
			z-index: 2;
			height: 100px;
			position: fixed;
		}
		.header{
			background-color: #8fd6d6;
			height: 80px;
		}
		#para{
			margin-top: 5%;
			float: left;
			margin-left: 5%;
			height: 50%;
			width: 50%;
		}
		.btn {
            display: inline-block;
            background-color: #f44336;
            color: #FFFFFF;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin-left: -5px;
            opacity: 0.9;
        }
        </style>
</head>
<body>
	<div class="wrapper">
		<div class="static">
			<div class="header">
				<div id="logo"></div><br>
				<div id="h1"><h1>Portfolio</h1>
					<p>Just Rebutton And Get Your Job Done</p>
                </div>
				<ul>
					<li><a class='btn' href="#web">Web Design</a></li>
					<li><a class='btn' href="#form">Digital Form</a></li>
					<li><a class='btn' href="#translation">Transulation</a></li>
				</ul>
			</div>
		</div>
		<div class="fullDiv">
			<a href="#web">
                <div style="max-width:25%" class="portfolioImg" id="image1">
                    <img class="mySlides" src="images/1.png" style="width:100%">
                    <img class="mySlides" src="images/2.png" style="width:100%">
                    <img class="mySlides" src="images/3.png" style="width:100%">
                </div>
            </a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			<a href="#form">
                <div style="max-width:25%" class="portfolioImg" id="image2">
    				<img class="mySlides" src="images/1.png" style="width:100%">
    				<img class="mySlides" src="images/2.png" style="width:100%">
    				<img class="mySlides" src="images/3.png" style="width:100%">
    			</div>
            </a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			<a href="#translation">
                <div style="max-width:25%" class="portfolioImg" id="image3">
    				<img class="mySlides" src="images/1.png" style="width:100%">
    				<img class="mySlides" src="images/2.png" style="width:100%">
    				<img class="mySlides" src="images/3.png" style="width:100%">
                </div>
            </a>
		</div>
		<div id="web" class="fullDiv">
            <div class="portfolioImg1" id="image4"></div>
            <h2 id="h2">Web Design & Development</h2>
            <div class="portfolioImg1"><img src="images/1.png"></div>
            <p id="para">Description</p>
        </div>
		<div id="form" class="fullDiv">
            <div class="portfolioImg" id="image4"></div>
		</div>
		<div id="translation" class="fullDiv">
            <div class="portfolioImg" id="image4"></div>
		</div>
	</div>
	<script type="text/javascript">
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
    	    		x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }    
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