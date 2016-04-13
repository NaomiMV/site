<!DOCTYPE html>
<html>
<head>
    <title>Oh Sugar</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Naomi">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <br>
   <div class="welcome"><img src="http://rs1169.pbsrc.com/albums/r515/KawaiiKiyomiChan/63b29a8f.gif~c200" alt="logo" width="55px"; height="55px"; id="logo"> <h1>OhSugar The sweetest place on the internet</h1></div>
</head>


<body>
    <label for="hideMenu" id="hideMenuLabel"><i class="fa fa-bars"></i></label>
    <input type="checkbox" id="hideMenu">


     <nav>
     <ul>
      <li>
      <a href="index.php"></a>Home</li>
            <li class="submenu"><a href="#">De Winkel</a><i class="fa fa-caret-down"></i>
                <ul>
                    <li><a href="machines.php">De machines</a></li>
                    <li><a href="stokken.php">Stokken</a></li>
                </ul>
            </li>
            <li class="submenu small"><a href="service.html">Service</a><i class="fa fa-caret-down"></i>
         <ul>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
         </ul>
         </li>
         
         
         <li class="submenu small"><a href="#">Account</a><i class="fa fa-caret-down"></i>
             <ul>
         <li><a href="login.php">Log In </a></li>
         </ul>
         <li><a href="cart.php"><img src ="Images/shopping-cart-349544_640.png" style="width:1.5em; height:1.3em;" alt="cart"></a> </li>
        </ul>

    </nav>
    <br>
    <form>
    <h2>FAQ</h2>
            <li><b>Q: Wat is OhSugar?</b></li>
     A: OhSugar is een site voor mensen die graag een eigen suikerspin machine willen hebben<br>
            <li><b>Q: wie heeft OhSugar Gecrëerd?</b></li>
     A: Ik, Naomi.<br>
            <li><b>Q: wat zijn de leveringsvoorwaarden?</b></li>
    A: jij betaald en ik stuur het product binnen 48 uur op<br>
    <br>
    <b>Heeft u nog meer vragen stuur ons gerust een mailtje : qwerty@mail.com
        of bel op ons nummer :09000102</b>
    </form>

</body>

</html>
<script type="text/javascript">
// <![CDATA[
var colour="#EECDA3 ";
var sparkles=120;

/****************************
*  Tinkerbell Magic Sparkle *
* (c) 2005 mf2fm web-design *
*  http://www.mf2fm.com/rv  *
* DON'T EDIT BELOW THIS BOX *
****************************/
var x=ox=400;
var y=oy=300;
var swide=800;
var shigh=600;
var sleft=sdown=0;
var tiny=new Array();
var star=new Array();
var starv=new Array();
var starx=new Array();
var stary=new Array();
var tinyx=new Array();
var tinyy=new Array();
var tinyv=new Array();

window.onload=function() { if (document.getElementById) {
  var i, rats, rlef, rdow;
  for (var i=0; i<sparkles; i++) {
    var rats=createDiv(3, 3);
    rats.style.visibility="hidden";
    document.body.appendChild(tiny[i]=rats);
    starv[i]=0;
    tinyv[i]=0;
    var rats=createDiv(5, 5);
    rats.style.backgroundColor="transparent";
    rats.style.visibility="hidden";
    var rlef=createDiv(1, 5);
    var rdow=createDiv(5, 1);
    rats.appendChild(rlef);
    rats.appendChild(rdow);
    rlef.style.top="2px";
    rlef.style.left="0px";
    rdow.style.top="0px";
    rdow.style.left="2px";
    document.body.appendChild(star[i]=rats);
  }
  set_width();
  sparkle();
}}

function sparkle() {
  var c;
  if (x!=ox || y!=oy) {
    ox=x;
    oy=y;
    for (c=0; c<sparkles; c++) if (!starv[c]) {
      star[c].style.left=(starx[c]=x)+"px";
      star[c].style.top=(stary[c]=y)+"px";
      star[c].style.clip="rect(0px, 5px, 5px, 0px)";
      star[c].style.visibility="visible";
      starv[c]=50;
      break;
    }
  }
  for (c=0; c<sparkles; c++) {
    if (starv[c]) update_star(c);
    if (tinyv[c]) update_tiny(c);
  }
  setTimeout("sparkle()", 40);
}

function update_star(i) {
  if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
  if (starv[i]) {
    stary[i]+=1+Math.random()*3;
    if (stary[i]<shigh+sdown) {
      star[i].style.top=stary[i]+"px";
      starx[i]+=(i%5-2)/5;
      star[i].style.left=starx[i]+"px";
    }
    else {
      star[i].style.visibility="hidden";
      starv[i]=0;
      return;
    }
  }
  else {
    tinyv[i]=50;
    tiny[i].style.top=(tinyy[i]=stary[i])+"px";
    tiny[i].style.left=(tinyx[i]=starx[i])+"px";
    tiny[i].style.width="2px";
    tiny[i].style.height="2px";
    star[i].style.visibility="hidden";
    tiny[i].style.visibility="visible"
  }
}

function update_tiny(i) {
  if (--tinyv[i]==25) {
    tiny[i].style.width="1px";
    tiny[i].style.height="1px";
  }
  if (tinyv[i]) {
    tinyy[i]+=1+Math.random()*3;
    if (tinyy[i]<shigh+sdown) {
      tiny[i].style.top=tinyy[i]+"px";
      tinyx[i]+=(i%5-2)/5;
      tiny[i].style.left=tinyx[i]+"px";
    }
    else {
      tiny[i].style.visibility="hidden";
      tinyv[i]=0;
      return;
    }
  }
  else tiny[i].style.visibility="hidden";
}

document.onmousemove=mouse;
function mouse(e) {
  set_scroll();
  y=(e)?e.pageY:event.y+sdown;
  x=(e)?e.pageX:event.x+sleft;
}

function set_scroll() {
  if (typeof(self.pageYOffset)=="number") {
    sdown=self.pageYOffset;
    sleft=self.pageXOffset;
  }
  else if (document.body.scrollTop || document.body.scrollLeft) {
    sdown=document.body.scrollTop;
    sleft=document.body.scrollLeft;
  }
  else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
    sleft=document.documentElement.scrollLeft;
	sdown=document.documentElement.scrollTop;
  }
  else {
    sdown=0;
    sleft=0;
  }
}

window.onresize=set_width;
function set_width() {
  if (typeof(self.innerWidth)=="number") {
    swide=self.innerWidth;
    shigh=self.innerHeight;
  }
  else if (document.documentElement && document.documentElement.clientWidth) {
    swide=document.documentElement.clientWidth;
    shigh=document.documentElement.clientHeight;
  }
  else if (document.body.clientWidth) {
    swide=document.body.clientWidth;
    shigh=document.body.clientHeight;
  }
}

function createDiv(height, width) {
  var div=document.createElement("div");
  div.style.position="absolute";
  div.style.height=height+"px";
  div.style.width=width+"px";
  div.style.overflow="hidden";
  div.style.backgroundColor=colour;
  return (div);
}
// ]]>
</script>
<style>
/*   css van het responsive menu  */
html, body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
   
}
body{
     background-image: url("Images/stripes.png");
}
h1{
  text-decoration: inherit;
}

#hideMenu {
    display: none;
}


#hideMenu:checked ~ nav {
    left: -100vh;
}


#hideMenuLabel {
    background-color: #6495ED;
    color: #6495ED;
    display: block;
    text-align: right;
    font-size: 1.4em;
    line-height: 1.5em;
    cursor: pointer;
    padding-right: 1em;
}


nav {
    background-color: lightpink;
    color: #F0FFFF;
    position: absolute;
    width: 10vw;
    left: 0;
    transition: left .5s ease-out;
}


nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}


nav ul li {
    padding: .3em 1em;
    /*border-bottom: 1px solid #6495ED;*/
}


nav ul li:hover:not(.submenu) {
    cursor: pointer;
    background-color: #6495ED;
}


nav ul li a {
    font-size: 1.2em;
    color: #F0FFFF;
    text-decoration: none;
}




nav .submenu {
    padding-bottom: 0;
}


nav .submenu ul {
    padding-top: .5em;
}


.fa-caret-down {
    float: right;
    padding-right: .4em;
}




nav .submenu li {
    height: 0;
    line-height: 0;
    font-size: 0;
    opacity: 0;
    transition: all .5s ease-out;
}


nav .submenu:hover li {
    height: 1.2em;
    line-height: 1.2em;
    font-size: 1em;
    opacity: 1;
}




main {
    padding: 1em;
}


main img {
    max-width: 100%;
}


@media screen and (min-width: 767px) {
    #hideMenuLabel {
        display: none;
    }


    nav ul {
        overflow: hidden;
    }


    nav>ul>li {
        float: left;
        border-right: 1px solid pink;
        width: 5%;
        box-sizing: border-box;
        text-align: center;
    }


    nav>ul>li:last-child {
        border: 0;
    }


    nav .submenu {
        padding-top: .4em;
        padding-bottom: .2em;
    }


    .submenu ul {
        position: absolute;
        background-color: pink;
        width: 25vw;
        margin-left: -1em;
        margin-top: -.4em;
        background-color: transparent;
    }


    .submenu ul li {
        background-color: #6495ED;
    }
}


@media screen and (min-width: 1000px) {
    nav>ul>li {
        width: 13em;
        padding: .3em 1.2em;
        box-sizing: content-box;
    }


    nav>ul>li:last-child {
        border-right: 1px solid #6495ED;
    }


    .submenu ul {
        margin-left: -1.2em;
    }


    .submenu ul li {
        width: 13em;
        padding-left: 1.2em;
        padding-right: 1.2em;
    }
}


js:


html, body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
}


#hideMenu {
    display: none;
}


#hideMenu:checked ~ nav {
    left: -100vh;
}


#hideMenuLabel {
    background-color: pink;
    color: #ffffff;
    display: block;
    text-align: right;
    font-size: 1.4em;
    line-height: 1.5em;
    cursor: pointer;
    padding-right: 1em;
}


nav {
    background-color: pink;
    color: #ffffff;
    position: absolute;
    width: 100vw;
    left: 0;
    transition: left .5s ease-out;
}


nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}


nav ul li {
    padding: .3em 1em;
}


nav ul li:hover:not(.submenu) {
    cursor: pointer;
    background-color: lightpink;
}


nav ul li a {
    font-size: 1.2em;
    color: #ffffff;
    text-decoration: none;
}


/*---------------Opmaak-submenu-----------------------*/
nav .submenu {
    padding-bottom: 0;
}


nav .submenu ul {
    padding-top: .5em;
}


.fa-caret-down {
    float: right;
    padding-right: .4em;
}


/*---------------Verbergen----------------------------*/
nav .submenu li {
    height: 0;
    line-height: 0;
    font-size: 0;
    opacity: 0;
    transition: all .5s ease-out;
}


nav .submenu:hover li {
    height: 1.2em;
    line-height: 1.2em;
    font-size: 1em;
    opacity: 1;
}


/*---------------Opmaak-Rest-Van-De-Pagina------------*/
main {
    padding: 1em;
}


main img {
    max-width: 100%;
}


@media screen and (min-width: 767px) {
    #hideMenuLabel {
        display: none;
    }


    nav ul {
        overflow: hidden;
    }


    nav>ul>li {
        float: left;
        border-right: 1px solid pink;
        width: 25%;
        box-sizing: border-box;
        text-align: center;
    }


    nav>ul>li:last-child {
        border: 0;
    }


    nav .submenu {
        padding-top: .4em;
        padding-bottom: .2em;
    }


    .submenu ul {
        position: absolute;
        background-color: pink;
        width: 25vw;
        margin-left: -1em;
        margin-top: -.4em;
        background-color: transparent;
    }


    .submenu ul li {
        background-color: floralwhite;
    }
}


@media screen and (min-width: 1000px) {
    nav>ul>li {
        width: 13em;
        padding: .3em 1.2em;
        box-sizing: content-box;
    }


    nav>ul>li:last-child {
        border-right: 1px solid #999999;
    }


    .submenu ul {
        margin-left: -1.2em;
    }


    .submenu ul li {
        width: 13em;
        padding-left: 1.2em;
        padding-right: 1.2em;
    }
} 
 

@font-face{
    font-family: Disney;
   src:url(Waltograph/waltograph42.otf);
}

div.welcome{
    font-family: Disney;
    text-align: center;
}
    form{
    background-color:white;
    border: 2px solid pink;
    height: 450px;
    width:290px;
    margin-left:500px;
    text-align: center;
    margin-top: 50px;
    
}
 
</style>
