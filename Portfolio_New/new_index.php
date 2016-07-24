<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Portfolio</title>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
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
            background: url("images/img1.jpg") 100% / 150% no-repeat;
        }
        #image2
        {
            background: url("images/img2.jpg") 100% / 150% no-repeat;
        }
        #image3
        {
            background: url("images/img3.jpg") 100% / 150% no-repeat;
        }
        .portfolioImg{
            display:inline-block;
            position: relative;
            border-radius:10%;
            width: 250px;
            height: 200px;
        }
    </style>
    </head>

    <body>
        <div id="logo"></div>
            <a href="#"><div class="portfolioImg" id="image1"></div></a>
            <a href="#"><div class="portfolioImg" id="image2"></div></a>
            <a href="#"><div class="portfolioImg" id="image3"></div></a>

    </body>
    <script>
//we'll use a window.onload for simplicity, but typically it is best to use either jQuery's $(document).ready() or $(window).load() or cross-browser event listeners so that you're not limited to one.
window.onload = function() {
    var logo = document.getElementById("logo");
    TweenLite.to(logo, 2, {left:"80%", ease:Bounce.easeOut});
    TweenMax.to(image1,2,{left:"20%", ease:Bounce.easeOut});

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
</html>