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
        overflow-x: hidden;
        overflow-y: scroll;
    }
    #logo {
        position: relative;
        width: 100%;
        height: 100px;
        background: url("images/vector_file_3.png") no-repeat;
        background-size: 236px 75px;
    }
    #image1 {
        background: url("images/1.png") 100% / 150% no-repeat;
    }
    #image2
    {
        background: url("images/2.png") 100% / 150% no-repeat;
    }
    #image3
    {
        background: url("images/3.png") 100% / 150% no-repeat;
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
    }
    .fullDiv{
        width: 100%;
        height: 100%;
        text-align: center;
    }
    h1
     { color: #d54d7b; font-family: "Great Vibes", cursive; font-size: 50px; 
     line-height: 16px; font-weight: normal; 
     margin-bottom: 0px; margin-top: 5px; text-align: center; 
     text-shadow: 0 1px 1px #fff;
 }
 body {
    background:url('images/bg2.gif');
    height:100%;
    width:100%;
}
    </style>
</head>
<body>
    <div id="logo"></div>
    <h1> Our Portfolio </h1> <br><br>
    <div class="fullDiv">
        <a href="#web"><div class="portfolioImg" id="image1"></div></a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <a href="#form"><div class="portfolioImg" id="image2"></div></a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <a href="#translation"><div class="portfolioImg" id="image3"></div></a>
    </div>
    <div id="web" class="fullDiv">
        <div class="portfolioImg" id="image4"></div>
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
    TweenMax.staggerFrom("#image1",1,{opacity:0, left:500,rotation:-360,delay:0.1});
    TweenMax.staggerFrom("#image2",1.25,{opacity:0, y:-600,rotation:-360,delay:1.5});
    TweenMax.staggerFrom("#image3",0.75,{opacity:0, right:-500,rotation:-360,delay:0.75});
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