<!DOCTYPE HTML>
<html>
	<head>
		<title>Portfolio_Rebutton.co</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/main.css" />
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<style>
header
#demo {
    width: 692px;
    height: 100px;
    background-color: #333;
    padding: 8px;
}
#easeWrapper {
    width: 700px;
    margin-right: auto;
    margin-left: auto;
    border-right: 1px dashed #CCC;
    border-left: 1px dashed #CCC;
}
#logo {
    position: relative;
    width: 600px;
    height: 100px;
    background: url(http://rebutton.co/wp-content/uploads/2016/01/VECTOR_FIle-3-e1452970966884.png) no-repeat;
}
</style>
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Portfolio</h1>
						<p>Just Rebutton And Get Your Job Done</p>
						<nav>
							<ul>
								<li><a href="#"><img src="images/img1.jpg" style="float:left;width:200px;height:200px;"></a></li>&nbsp;&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
								<li><a href="#"><img src="images/img2.jpg" style="float:left;width:200px;height:200px;"></a></li>&nbsp;&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
								<li><a href="#"><img src="images/img3.jpg" style="float:left;width:200px;height:200px;"></a></li>&nbsp;&nbsp;&nbsp;&ensp;&ensp;
							</ul>
						</nav>
					</header>

					<footer id="footer">
						<span class="copyright">&copy; All Rights Reserved. &nbsp;<a href="http://rebutton.co">Rebutton.Co</a></span>
					</footer>

			</div>
		</div>		
<div id="demo">
    <div id="easeWrapper">
        <div id="logo"></div>
    </div>
</div>
		<script>
			//we'll use a window.onload for simplicity, but typically it is best to use either jQuery's $(document).ready() or $(window).load() or cross-browser event listeners so that you're not limited to one.
	window.onload = function() {
    var logo = document.getElementById("logo");
    TweenLite.to(logo, 2, {left:"440px", ease:Bounce.easeOut});
     
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
	}
		</script>
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>