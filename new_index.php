<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>GreenSock: Easing</title>
     
<style>
body{
    background-color:#000;
}
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
 
<body>
<div id="demo">
    <div id="easeWrapper">
        <div id="logo"></div>
    </div>
</div>
 
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
 
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
 
</body>
</html>