<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Portfolio</title>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
    <style>
        body {overflow-x: hidden;
            overflow-y: scroll;}
            #logo {
                position: relative;
                width: 100%;
                height: 100px;
                background: url("images/vector_file_3.png") no-repeat;
                background-size: 236px 75px;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            li {
                display: inline;
            }
        </style>
    </head>

    <body>
        <div id="logo"></div>
        <nav>
            <ul>
                <li><a href="#"><img src="images/img1.jpg" style="float:left;width:200px;height:200px;"></a></li>&nbsp;&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                <li><a href="#"><img id="photo" src="images/img4.jpg" style="float:left;width:200px;height:200px;"></a></li>&nbsp;&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                <li><a href="#"><img src="images/img5.jpg" style="float:left;width:200px;height:200px;"></a></li>&nbsp;&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                <li><a href="#"><img src="images/img2.jpg" style="float:left;width:200px;height:200px;"></a></li>&nbsp;&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            </ul>
        </nav>
    </body>
    <script>
//we'll use a window.onload for simplicity, but typically it is best to use either jQuery's $(document).ready() or $(window).load() or cross-browser event listeners so that you're not limited to one.
window.onload = function() {
    var logo = document.getElementById("logo");
    TweenLite.to(logo, 2, {left:"80%", ease:Bounce.easeOut});

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