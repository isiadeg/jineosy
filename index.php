<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read and Watch News and Entertainment on jineosy </title>
	<meta name="description" content="<?php
	require 'init.php';
	$lookfor="SELECT `title` from `posts` ORDER BY `post_id` DESC LIMIT 4 "	;
	$runquery= mysqli_query($connection, $lookfor);
	while($row = mysqli_fetch_assoc($runquery)){
		$tit = $row['title'];
		echo $tit." ";
	}
	?> - Read Local News, Foreign News, Sports News, Politics, Entertainment News, Events, - in text, videos and pictures ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 " >
   <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=PT Sans">		  <link href="https://fonts.googleapis.com/css?family=Stardos+Stencil:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Stardos+Stencil:400,700" rel="stylesheet">
  <link href="johni.css" rel="stylesheet" type="text/css">
  <link href="footer.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Manuale:700" rel="stylesheet">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link href="https://fonts.googleapis.com/css?family=Neuton" rel="stylesheet">

<meta property="og:url"           content="http://jineosy.com/index.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Get The Latest News" />
  <meta property="og:description"   content=" Read Latest News on Entertainment, Politics, Sports, Events and Fashion" />
  <meta property="og:image"         content="http://jineosy.com/johnnn.jpg
  "
  />
 <style>
 html{
	 width: 100%;
	 overflow-x: hidden;
 }
 body{
	 width:100%;
	 overflow-x: hidden;
 }

.postisss .fa, .fas {

    font-size: 30px;
}
.postside2{
	width: 100%;
}
details{

	float: right;
	background-color: #052962;
	color: white;
	overflow-y:scroll;
	max-height: 146px;
	    padding-left: 3px;
}
details::-webkit-scrollbar {
   background-color: #506991;
    width: 4px;
}
details ul{
	background-color: #052962;
	color: white;
}

details ul{
	list-style-type: none;

}
details ul li a:link, details ul li a:hover, details ul li a:active{
	text-decoration: none;
	color: white;
	   font-family: 'Manuale', serif;

		font-size: 16px;
}
details ul li{
	margin-top: 10px;
	margin-bottom: 10px;

}

footer{
	clear:both;

}

#sitemap, #contacting{
	width: 100%;
	CLEAR:BOTH;
}
#sitemaphead, #contactinghead{
	color: white;
	margin-top: 10px;
	margin-bottom: 15px;
	font-weight: bold;
	padding-top: 15px;
	font-size: 18px;
	font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
}
#sitemaphead, #contactinghead{
	padding-inline-start: 40%;

}


.photo {   padding: 10px;
    background-color: black;
    opacity: 0.8;
    color: white;
    position: absolute;
    margin-top: 69px;
    margin-left: 40%;
}
.mySlides img:hover{
max-width: 100%;
}
body{
	margin:0;

}
.stayaside{
	width:54%;
	float:right;
}
.dontshow{
	display:block;
}
.headlineright{
	float: none;
	width: 100%;

    font-family: 'Manuale', serif;
    font-size: 25px;
    FONT-WEIGHT: 600;
    letter-spacing: -1px;
    margin-top: 10px;


}
.wordbyside{
	float: left;
	width: 100%;
	background-color:#f6f6f6;
	overflow: hidden;
	height: 109px;
	padding: 4px;
	padding-bottom: 0px;
	margin-top:277px;
	margin-bottom:15px;
}
.wordbyside a:link, .wordside a:hover, .wordside a:visited{
	text-decoration: none;
	font-size: 18px;
	font-family: PT Serif;
letter-spacing: -0.2px;
word-spacing: 0px;
font-weight:bold;
}
.dontshowinsmall{
	display: none;;
}
.headeradvert{
	background-color: #ffffff;
}
.mySlides{
	margin: 20px 5%;



}
header #dropdowncontent2 ul li.dontshow{
	display:none;
}
.dropbtn{

    width: 30px;
    height: 30px;
    background-color: #ffe500;
    padding: 5px;
    float: right;
    position: relative;
    margin-top: -106px;
    margin-right: -1px;

    border-radius: 50%;
}
#dropdowncontent2 {
    /* width: 10000px; */
    clear: both;
    overflow-x: scroll;
    /* height: 200px; */
    background-color: #052962;
	margin-top: 20px;
	scrollbar-width: thin;


	   /* box-shadow: 0px 4.5px 5px 3px rgb(200, 200, 200);*/
}
.asignin{
	margin-left: 2px;
    margin-top: -69px;
    float: left;
	color: white;
text-decoration:none;
font-family: Guardian Text Sans Web, Helvetica Neue, Helvetica,Arial,Lucida Grande,sans-serif;
font-size: 1rem;
color: #fff;
line-height: 1;

padding-left: 10px;
}
.asignin{
		display: none;
	}
.subscribe{
	display: none;
}
@media only screen and (min-width: 1px) and (max-width: 346px){

	header #dropdowncontent2 ul li.dontshows{
	display: none;
}

}
@media only screen and (min-width: 320px) and (max-width: 387px){
	header #dropdowncontent2 ul li.dontshow{
	display: none;
}

	.subscribe{
	display: block;
}
	.asignin{
		display: block;
	}
}
/* @media only screen and (min-width: 743px) and (max-width: 1279px){
	.photo {   padding: 10px;
    background-color: black;
    opacity: 0.8;
    color: white;
    position: absolute;
    margin-top: 93px;
    margin-left: 10%;
}
	.asignin{
	margin-right: 15px;
    margin-top: 10px;
    float: right;
	color: white;
text-decoration:none;
font-family: Guardian Text Sans Web, Helvetica Neue, Helvetica,Arial,Lucida Grande,sans-serif;
font-size: 1rem;
color: #fff;
line-height: 1;  border-left: 1px solid white;

padding-left: 10px;
}
.dontshow{
	display:block;
	float:none;
}
.asignin{
		display: block;
	}
} */
@media only screen and (max-width: 850px) and (min-width: 700px){
.headerjagba {
    display: none;
}}
@media only screen and (min-width: 1240px) {

.mySlides{
	margin: 20px 15%;
	margin-bottom: 50px;
}

.photo {   padding: 10px;
    background-color: black;
    opacity: 0.8;
    color: white;
    position: absolute;
    margin-top: 93px;
    margin-left: 10%;
}
#sitemap, #contacting{
	width: 49%;
	CLEAR:NONE;
	float: left;
}
.dontshow{
	display:block;
}
.asignin{
		display: block;
	}
.asignin{
	margin-right: 15px;
    margin-top: 10px;
    float: right;
	color: white;
text-decoration:none;
font-family: Guardian Text Sans Web, Helvetica Neue, Helvetica,Arial,Lucida Grande,sans-serif;
font-size: 1rem;
color: #fff;
line-height: 1;  border-left: 1px solid white;

padding-left: 10px;
}
.socialmedia {
    margin-left: 64%;
    float: left;
}

.showornot{
	display: block;
}
.searchinputs {
        margin: 10px;
    padding: 08px;
    border-radius: 4px;
    color: #c4c6c6;
    font-size: 1em;
    border: 1px solid #444647;
    /* border-color: #606263; */
    background-color: #f3f4f4;
    margin-right: 0px;
    width: 80px;
    float: left;
    margin-top: 60px;
    margin-left: 20px;
	    border: 1px solid #d0d1d1;
}
.fa-twitter, .fa-twitter:link {
    margin-top: 60px;
}
.vertical{
	height:285px;;
	padding: 10px;
	border-right: 1px solid #eeeeee;
	margin-right: 10px;
	width: 75%;
	float: left;
}
.posts{
	width: 55%;
}
.postsside{
	width: 17%;
	margin-left:10px;
	height: 277px;
	margin-top: 10px;
	margin-bottom: 10px;
	border-bottom: none;
	background-color: #eeeeee;

}
.postssideimage{
	height:135px;
	width: 100%;
	float:none;
	margin:auto;
}
.postsside a:link, .postsside a:hover, .postsside a:visited {
    text-decoration: none;
    font-size: 17px;
    font-family: PT Serif;
    letter-spacing: -0.2px;
    word-spacing: -3px;
    font-weight: bold;
}
.wordbyside{
	width: 28.5%;
}
.headlineright{
	width: 14%;
}
.postscontainer{
	float:left;
	width:80%;
}
.headlinerright2{
	width: 20%;
}
.vertical2{
	width: 55%;
	height: 500px;
}
.thirty{
	width: 30%;
    border-top: 1px solid #dcdcdc;
    font-weight: bold;
    color: #6d6d6d;
	float:left;
	margin-right: 15px;
}
.postside2{
	display: block;
    height: auto;
    width: 100%;
    float: none;
	margin-left:0;

}
.postsside{
	border-top: 1px solid #c70000;
	height: 544px;
}
.spor .heit.postsside{
	border-top-color: #0084c6;

}
.lifes .heit.postsside{
	border-top-color: #bb3b80;

}

.headlineright{
	float: left;
	width: 14%;
	width: 14%;
    font-family: 'Manuale', serif;
    font-size: 28px;
    FONT-WEIGHT: 600;
    letter-spacing: -1px;
    margin-top: 10px;


}
.wordbyside{
	float: left;
	width: 28.5%;
	background-color:#f6f6f6;
	border-top:1px solid #c70000;
	height: 277px;
	padding: 4px;
	padding-bottom: 0px;
MARGIN-TOP:0;
margin-bottom: ;
	}
.wordbyside a:link, .wordside a:hover, .wordside a:visited{
	text-decoration: none;
	font-size: 23px;
	font-family: PT Serif;
letter-spacing: -0.2px;
word-spacing: -3px;
font-weight:bold;
}
.headlinerright2{
	width: 20%;
}
.dontshow{
	display: none;

}
.dontshowinsmall{
	display: block;
}
.heit{
	height: 277px;
}
.trendstyle {
    float: none;
    clear: unset;
    margin-top: -221px;
}
.stayaside {
    width: 100%;
    float: none;
}
header #dropdowncontent2 ul li.dontshow{
	display: block;
}
.spor .wordbyside{
	border-top-color: #0084c6;


}
.lifes .wordbyside{
	border-top-color: #bb3b80;
}
}
</style>
<script>
function showmore(){
	if(document.getElementById("more").style.display == "none"){
	document.getElementById("more").style.display ="block";
}
else{
	document.getElementById("more").style.display="none";
}
}


</script>


  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '344569333015691',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</head>
<body>
<div id="realunmovable" style="position: fixed; top:0px; left: 0px; padding-bottom:6px; height:14px;
box-shadow: 0px -6px 12px 3px rgb(144, 140, 140); width: 100%; z-index: 3000000000009;background-color: #eeeeee;">
<a class="fab fa-twitter"  STYLE="font-size: 12px;
      HEIGHT: 2PX;
    margin-top: 0px;
    padding-top: 4px;
    padding-bottom: 11px;
  margin-right: 10px;
z-index: 30000000000000;
background-color:blue;
color: white;"
href="https://twitter.com/intent/tweet?text=Read latest news on politics, entertainment and fashion on jineosy http://jineosy.com"
url="http://jineosy.com"
data-size="large">
Tweet</a>
<div class="fb-share-button" style="
  margin-right: 10px;
font-size: 12px;
    color: #ffffff;
  background-color: #3b5998;
  z-index: 30000000000000;"
  data-href="http://jineosy.com/index.php"
  data-layout="button_count">
</div><div  style="position: fixed;
  padding: 4px;
  margin-top: 112px;
  left: 20px;
font-size: 12px;
    color: #ffffff;
  background-color: #3b5998;
  z-index: 30000000;

  display: none;"
 >Share
</div>


<div id="details" style="display: inline-block;
    float: right;
    margin-right: 2px;">
<details>
<summary>
Navigation
</summary>
<ul style="padding-inline-start: 10px;">
<li>
<a href="#topnewsie">Top News</a>
</li>
<li>
<a href="#lateststoriesie">Latest Stories</a>
</li>
<li>
<a href="#otherlateststoriesie">Other Latest Stories</a>
</li>
<li>
<a href="#trendingnowie">Trending Now</a>
</li>
<li>
<a href="#opinionie">Opinion</a>
</li>
<li>
<a href="#sportsie">Sports</a>
</li>
 <li>
<a href="#aroundtheworldie">Around The World</a>
</li>
 <li>
<a href="#lifestyleie">LifeStyle</a>
</li>
<li>
<a href="#photonewsie">Photo News</a>
</li>
<li>
<a href="#videonewsie">Video News</a>
</li>
<li>
<a href="#olderstoriesie">Older Stories</a>
</li>
</ul>


</details>
</div>
</div>
  <div id="advert" class="headeradvert" style="overflow: hidden;"><a href="http://jineosy.com" class="mySlides" style="display: block;"><img src="ppm0000.jpg"></a><a href="http://jineosy.com" style="display: none;"class="mySlides"><img src="banner0000.jpg"></a></div>
<header>
<div class="searchinput" id="searchinput" style="display: none;">
<form action="search.php" method="GET">
<input type="text" name="text" style="padding: 10px; width: 50%; font-size: 1em;"><button type="submit" value="" style=" width: 20%; padding: 10px;"><i class="fa fa-search" style="position: relative"></i></button><span class="leftclose" onclick="closesearch();"  style=" position: absolute;width: 30%; padding: 1px; background-color:white; margin-bottom:0px;
margin-left:0px;">x</span>
</form>
</div>
<div class="contactadvert" id="contactadvert" style="display: none;">
<div class="close"><span class="leftclose" style="cursor: pointer;" id="leftclose">x</span>
<div class="contact"><div class="contact"> contact: assidiiq25@gmail.com</div><div class="contact">
phone number: 08109290534 08109290634</div></div>
</div>
</div>
<div class="unmovable"><nav>
<div class="dropdownwrapper">
<div class="searchbarclass" style="display:none;" id="searchbarclass">
<i class="fa fa-search" id="fa" ></i>

</div><div class="jagbajantis">
<a href="admin.php" style="" class="signin headerjagba">Nigerian News</a>


</div>
<div class="headerword">
  <a class="headerhomepage" style="font-weight: bold; font-size: 1.8em; color: white; font-family: GuardianTextEgyptianWeb,Georgia,serif;Georgia,serif;" href="#"><IMG src="http://jineosy.com/Untited-4-Recovered0000.jpg"></a>
</div>
<a href="#" style="" class="search headerjagba" onclick= "document.getElementsByClassName('searchinputs')[1].focus();"> Search</a>

<a href="admin.php" style="" class="asignin"> <img src="iconprofile.png" height="20px;" width="20px" ><span style="margin-left: 22px;
text-decoration: none;
margin-top: -22px;
color: white;
display: block; font-family:GuardianTextSansWeb, Helvetica Neue, Helvetica, Arial, Lucida Grande,sans-serif;
font-size: 1rem;
color: #fff;
line-height: 1;" class="headerjagba">Sign in</span></a>
<div class="headerjagba support" style="
  margin-left: 20px;">
<a href="#" style="text-decoration: none;"> <span style="font-weight: bold; font-size: 1.8em; font-family: GuardianTextEgyptianWeb,Georgia,serif;Georgia,serif; COLOR: #ffe500; margin-left: 20px; width:10%; font-family: PT Sans;
  font-size: 26px;
  line-height: 2.375rem; "> Support Jineosy</br><span style="font-size: 18px; color: white; margin-left: 20px; display: block; margin-top:-5px;"> Make News Available for everyone</span> </span><div style="border-radius: 35%; color: #052962;padding: 09px; padding-top: 8px;  background-color: #ffe500; width: 100px; font-family: PT Sans; font-size: 20px; height: 20px; text-align: center;margin-left: 20px; font-weight: bold; float: left; margin-right: 03px;
 ">Contribute</div> <div style="border-radius: 35%; color: #052962;padding: 09px; padding-top: 8px;  background-color: #ffe500; width: 100px; font-family: PT Sans; font-size: 20px; height: 20px; text-align: center;margin-left: 10px; font-weight: bold; float: left; margin-right: 10px;">Subscribe</div>
</a>
</div>
<div style="border-radius: 25%;
  color: black;
  padding: 8px;
  background-color: #ffe500;
  width: 86px;
  font-family: PT-Sans;
  font-size: 18px;
  height: 1rem;
  margin-left: 20px;
  font-weight: bold;
  float: left;
  margin-right: 10px;
  margin-top: -46px;
  margin-left: 5px;
  padding-top: 4px; " class="subscribe">Contribute</div>
<div class="dropdowncontent" id="dropdowncontent"  >
<div class="headerword" STYLE="display: block; float: none; text-align: left;

margin-left: 20px; margin-bottom: 30px;">
 <a class="headerhomepage" style="font-weight: bold; font-size: 1.8em; color: white; font-family: GuardianTextEgyptianWeb,Georgia,serif;Georgia,serif;" href="#"><img src="jb.jpg"></a>
</div>
<form action="search.php" method="GET">
<input type="text" name="text" placeholder="Search" class="searchinputs" style="  "><button type="submit" value="" style=" width: 40px;

padding: 8px;

background-color: #373839;

outline: none;

border: 2px solid #373839;

margin-left: -2px;

color: #c4c6c6;"><i class="fa fa-search" style="position: relative"></i></button></form>
     <ul style="margin-top:50px;">
<li style="padding-bottom: 13px;">
      <a onclick="showadvert();" style="color: rgb(226, 226, 227);font-family: effra,helvetica neue,Helvetica,Arial,sans-serif; font-weight: 600;    " > Advert Enquiry</a>
    </li>
  <li >
      <a href="index.php" style="color: #ff5306;" > Home</a>
    </li>
    <li>
      <a href="news.php"> News</a>
    </li>
    <li>
      <a href="events.php"> Events</a>
    </li>
    <li>
      <a href="entertainment.php"> Entertainment</a>
    </li>
    <li>
      <a href="lifestyle.php"> LifeStyle</a>
    </li>
    <li>
      <a href="fashion.php"> Fashion</a>
    </li>
<li>
      <a href="beauty.php"> Beauty</a>
    </li>
  <li>
      <a href="inspiration.php"> Inspiration</a>
    </li>
   <li>
      <a href="gossip.php"> Gossip</a>
    </li>
  <?php
  require'init.php';
 $query="SELECT `id`, `name` FROM `category` ORDER BY `id` DESC";
 $query_run=mysqli_query($connection, $query);
  if(mysqli_num_rows($query_run) == 0)
  {

  }
  else
  {
    while($row=mysqli_fetch_assoc($query_run))
    {
        $category=$row['name'];
        if($category != 'News' && $category != 'Events' && $category != 'Entertainment'
&& $category != 'LifeStyle'	&& $category != 'Fashion' && $category != 'Beauty' && $category != 'Inspiration'&& $category != 'Gossip'			  ){

    echo' <li>
      <a href="categorysearch.php?text='.$category.'"> '.$category.' </a>
    </li>';
}
    }
  }





  ?>
  </ul>
</div>
<div class="dropdowncontent2" id="dropdowncontent2"  >
  <ul>
<li style="border-right: 1px solid #506991;

border-top: 3px solid #ff4e36;;

color: #ffffff;
padding-bottom: 4px;
font-weight: bold; ">
      <a href="index.php" style="color: #ffffff;" > Home</a>
    </li>
    <li style="border-top: 1px solid #506991;">
      <a href="news.php"> News</a>
    </li>
    <li style="border-top: 1px solid #506991;">
 <a  href="opinion.php"> Opinion</a>
    </li>


  <li style="border-top: 1px solid #506991;">
 <a  href="sports.php"> Sport</a>
    </li>

    <li  class="dontshows"style="border-top: 1px solid #506991;">
 <a  href="categorysearch.php?text=music"> Music</a>
    </li>
    <li style="border-top: 1px solid #506991;" class="dontshow">
      <a href="#"  onclick="showmore();" > More ></a>
    </li>
    </ul>
<ul id="more" style="display:none;">
<li style="">
      <a onclick="showadvert();" style="font-weight: 600; font-size:20px;line-height: 0px; " > Advert Enquiry</a>
    </li>
<li>
      <a href="fashion.php"> Fashion</a>
    </li>
  <li style="">
      <a href="entertainment.php"> Entertainment</a>
    </li>
<li>
      <a href="beauty.php"> Beauty</a>
    </li>
  <li>
      <a href="inspiration.php"> Inspiration</a>
    </li>
   <li>
      <a href="gossip.php"> Gossip</a>
    </li>
  <?php
  require'init.php';
 $query="SELECT `id`, `name` FROM `category` ORDER BY `id` DESC";
 $query_run=mysqli_query($connection, $query);
  if(mysqli_num_rows($query_run) == 0)
  {

  }
  else
  {
    while($row=mysqli_fetch_assoc($query_run))
    {
        $category=$row['name'];
        if($category != 'News' && $category != 'Events' && $category != 'Entertainment' && $category != 'sports' && $category != 'opinion'
&& $category != 'LifeStyle'	&& $category != 'Fashion' && $category != 'Beauty' && $category != 'Inspiration'&& $category != 'Gossip'			  ){

    echo' <li>
      <a href="categorysearch.php?text='.$category.'"> '.$category.' </a>
    </li>';
}
    }
  }





  ?>

</ul>
</div>
</div>
</nav>

</div>
<h1 style="display: none;">Read and Watch News and Entertainment on Jineosy</h1>

</header>
<div class="wrapper" id="wrapper">
<div class="dropbtn" id="dropbtn"> <span class="bar"></span>
  <span class="bar"></span>
<span class="bar"></span></div>
<div class="socialmedia" id="socialmedia" style="clear: none;">
<a href="https://twitter.com/jineosy" class="fab fa-twitter"style="    color: white;
  background-color: #6eaee4;"></a>
<a href="https://www.facebook.com/jineosy" class="fab fa-facebook" style="background-color: #3b5998;"></a>
<a href="https://www.instagram.com/jinoesblog/" class="fab fa-instagram"style="color: wheat;
  background-color: #2f55a4"></a>
<a href="https://www.linkedin.com/in/sodiq-isiaka-24192b180?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BWG3IqXLuTI2DMbxzK7jiOg%3D%3D" class="fab fa-linkedin"style="color: white;
  background-color: #3b5998;"></a>
<a href="https://www.youtube.com/channel/UCdnvbmn2Rr2TTbkKFBlcf5g" class="fab fa-youtube" style="color: red;
  background-color: #ffffff;
  border: 1px solid white;
  box-shadow: 0.5px 0.5px 3px 1.5px #bbb;"></a>
</div>
<div class="advert"></div>
<div class="advert"></div>


<form class="showornot" action="search.php" method="GET">
<input type="text" name="text" placeholder="Search" class="searchinputs" style="  "><button type="submit" value="" style=" width: 40px;

padding: 9.5px;

background-color: #f3f4f4;

outline: none;

border: 2px solid #373839;

margin-left: -2px;

color: #c4c6c6;    border: 1px solid #d0d1d1; margin-top: 60px;"><i class="fa fa-search" style="position: relative"></i></button></form>



<div class="postss"><div class="vertical">
<div class="headlineright" id="topnewsie">
Top News
</div>

<?php



require_once('config.php');
Class blog{
private $mysqli;

function __construct(){
  $this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
}
function __destruct(){$this->mysqli->close();}
private function likenumber ($titled,$categoried){
$title=$this->mysqli->real_escape_string($titled);
$category=$this->mysqli->real_escape_string($categoried);
$query="SELECT `title`, `category` FROM `likes` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;




}
private function commentnumber ($title,$category){
$title=$this->mysqli->real_escape_string($title);
$category=$this->mysqli->real_escape_string($category);
$query="SELECT `title`, `category` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;
}

public function igg(){

if(1==1){
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$i=1;
$f=0;
while($f<1){
  $f++;

$boring = curl_init('https://eventregistry.org/api/v1/article/getArticles?resultType=articles&keyword=nigeria&includeArticleImage=true&lang=eng&dateStart=2019-01-09&forceMaxDataTimeWindow=31&apiKey=11d54620-b419-4a77-b68a-5afeed779851');
curl_septopt($boring, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($boring);

  if($result){

if($result){
  $e = 0;
$row = json_decode($result);
while($e<13){

$e++;
$date=$row->results->dateTimePub;
$name=strtoupper($row['name']);
$categoried=$row['category'];
  $imageurl=$row['imageurl'];
  $subtopic=$row['subtopic'];
$newcategory=$row['newcategory'];
$newssource=$row['newssource'];
$titled=$row['title'];
$contentd=$row['content'];
$a = new DateTime($date);
$excerpt=$row['excerpt'];
if($categoried == "lifestyle")
{$textcolor="#bb3b80"; $backgroundcolor = "#f6f6f6";}
elseif($categoried == "sports"){$textcolor="#2210b5"; $backgroundcolor = "#c9dcf5";}

elseif($categoried == "opinion"){$textcolor="#c70000"; $backgroundcolor ="#fdf3ec";}
else{
  $textcolor="#c70000"; $backgroundcolor = "#f6f6f6";
}
$b = new DateTime(date('y-m-d H:i:s', time()));
$interval = $a->diff($b);
$difff=$interval->days.'days';


$seconds  = strtotime('- 1 hour') - strtotime($date);

      $months = floor($seconds / (3600*24*30));
      $day = floor($seconds / (3600*24));
      $hours = floor($seconds / 3600);
      $mins = floor(($seconds - ($hours*3600)) / 60);
      $secs = floor($seconds % 60);

      if($seconds < 60){
  $diff = $secs." seconds ago";}
      else if($seconds > 60 && $seconds < 60*2)
  {$diff = $mins." minute ago";}
 else if($seconds > 60*2 && $seconds < 60*60)
  {$diff = $mins." mins ago";}
      else if($seconds >60*60 && $seconds < 60*60*2)
  {$diff = $hours." hour ago";}
else if($seconds > 60*60*2 && $seconds < 60*60*24)
  {$diff = $hours." hours ago";}

   else if($seconds > 24*60*60 && $seconds < 60*60*24*2)
          {$diff = $day." day ago";}
else if($seconds > 24*60*60*2 && $seconds < 60*60*24*30)
          {$diff = $day." days ago";}

   else if($seconds > (3600*24*30) && $seconds < 3600*24*30*2){
          $diff = $months." months ago";

      }
  else if($seconds > 3600*24*30*2){
          $diff = $months." months ago";

      }

$excerpt=htmlentities($excerpt);
$find=substr($excerpt, 97, 100);
$excerpt=str_replace( $find, '...', $excerpt);
  $exce=substr($excerpt, 0, 100);
  $excerpt=html_entity_decode($exce, ENT_COMPAT, "ISO8859-1");



$contentdbawo=htmlentities($contentd);
$find=substr($contentdbawo, 197, 200);
$contentdbawo1=str_replace( $find, '...', $contentdbawo);
  $contenttd=substr($contentdbawo1, 0, 200);
  $contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
  $contenttdt=substr($contentdbawo, 0, 200);
  $contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

  $contenttded=substr($contentdbawo, 200, strlen($contentdbawo));
  $contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
$contentedt.$contentededed.'</div>';
if(strlen($contentdbawo)>200){

$rmore=' <span class="readmore"><a href="'.$newssource.'.php">Readmore.....</a></span>';}
else{$rmore="";}



$input = $this->likenumber($titled,$categoried);
if($input>1){$like='likes';}else{$like='like';}
$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$inputs=$this->commentnumber($titled,$categoried);
if($inputs>1){$comment='comments';}else{$comment='comment';}
$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
 $editnews='<input type="button" style ="display:none" value="edit news" id="'.$titled.'4" onclick=
    "editei(\''.$titled.'\', \''.$categoried.'\');">';
 $backbutto='<input type="button" value="BACK" id="'.$titled.'5" onclick=
 "backbutto(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$backtolist='<input type="button" value="BACK TO HEADLINES" id="'.$titled.'6"
style="color:blue"
onclick="listtopics(\''.$categoried.'\');">';
$contentedt='';
 $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';

 if($i==1){
$response.='<div class="advert"></div>'.'<div class="wordbyside" style="background-color: '.$backgroundcolor.'"> <a  href="'.$newssource.'.php">
<div class="firstword"><span style="color: '.$textcolor.'">'.$newcategory.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a><div class="thirdword">';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `tag1`, `newssource`, `name`, `title`, `category`, `excerpt`, `subtopic`, `newcategory`, `content` FROM `posts`
  WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
  AND NOT`newcategory` = '')
  ORDER BY `post_id` DESC";
  $resulti= $this->mysqli->query($queryi);
  if ($resulti->num_rows == 0){
    $datei='';
$namei='';
$categoriedi='';
  $imageurli='';
$newssourcei='';
$titledi='';
$tag1='';
$contentdi='';
$subtopici='';
$ai = '';
$excerpti='';

  $lil=$titledi;
  }
  while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){

$datei=$rowi['posted_on'];


$namei=strtoupper($rowi['name']);
$categoriedi=$rowi['category'];
  $imageurli=$rowi['imageurl'];
$newssourcei=$rowi['newssource'];
$titledi=$rowi['title'];
$tag1=$rowi['tag1'];
$contentdi=$rowi['content'];
$subtopici=$rowi['subtopic'];
$ai = new DateTime($datei);
$excerpti=$row['excerpt'];

  $lil=$titledi;}
  if($titledi == $titled){$response .= '</div></div><div class="posts"style="background-image: url(\''.$imageurl.'\')">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: display:none; 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
 <div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div></div>';}else{

$response .='<a href="'.$newssourcei.'.php" style="    color: #6d6d6d;"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</a></div></div><div class="posts"style="background-image: url(\''.$imageurl.'\')">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: display:none; 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
 <div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div></div>'
 ;} }elseif($i==2 ){$response.='<div class="advert"></div>'.'<div class="heit postsside" style="background-color: '.$backgroundcolor.'"><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><div class="stayaside"><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: '.$textcolor.'">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword" style="display:none;">'.$excerpt.'</div></a></div></div>';}



elseif($i==3){
 $response.='<div class="advert"></div>'.'<div style="background-color: #eee; border-bottom: 10px;" class="dontshow"><div class="postsside dontshow"><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><div class="stayaside"><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword" style="display:none;">'.$excerpt.'</div></a></div></div>';

$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `subtopic`, `newcategory`, `content` FROM `posts`
  WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
  AND NOT`newcategory` = '')
  ORDER BY `post_id` DESC";
  $resulti= $this->mysqli->query($queryi);
  $tt=0;while($tt < 4){
  while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
    $datei=$rowi['posted_on'];
$namei=strtoupper($rowi['name']);
$categoriedi=$rowi['category'];
  $imageurli=$rowi['imageurl'];
$newssourcei=$rowi['newssource'];
$titledi=$rowi['title'];
$tag1=$rowi['tag1'];
$subtopici = $rowi['subtopic'];
$contentdi=$rowi['content'];
$ai = new DateTime($datei);
$excerpti=$row['excerpt'];
if($titledi != $titled){
$lil=$titledi;
$now = strtotime("now");

$postdate =strtotime($datei);
$iyato = $now - $postdate;



if ($iyato<259200){


$response .='</a><a href="'.$newssourcei.'.php" style="text-decoration: none;"><div  style="border-top: 1px solid #dcdcdc; padding: 3px;" class="firstword secondword thirty dontshow"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</div></a>';}}
}$tt++;}
   $response .='</div>';


$response.='<div class="vertical vertical2 dontshowinsmall">
<div class="headlineright headlinerright2">

</div><div class="advert"></div>'.'<div class="postscontainer"><div class="posts"  style="background-image: url(\''.$imageurl.'\'); width: 100%;">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div><div class="wordbyside" style="width: 98%; border-top: none; overflow: hidden; background-color: '.$backgroundcolor.'"> <a  href="'.$newssource.'.php">
<div class="firstword"><span style="color: '.$textcolor.'">'.$newcategory.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div>';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `content`,`newcategory`, `subtopic` FROM `posts`
  WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
  AND NOT`newcategory` = '')
  ORDER BY `post_id` DESC";
  $resulti= $this->mysqli->query($queryi);
  $tt=0;while($tt < 4){
  while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
    $datei=$rowi['posted_on'];
$namei=strtoupper($rowi['name']);
$categoriedi=$rowi['category'];
  $imageurli=$rowi['imageurl'];
$newssourcei=$rowi['newssource'];
$titledi=$rowi['title'];
$subtopici=$rowi['subtopic'];
$contentdi=$rowi['content'];
$ai = new DateTime($datei);
$excerpti=$row['excerpt'];
if($titledi != $titled){
$lil=$titledi;

$now=strtotime("now");
   $postdate =strtotime($datei);
   $iyato = $now - $postdate;



   if ($iyato<259200){


$response .='</a><a href="'.$newssourcei.'.php"><div class="firstword secondword thirty"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</div></a>';}}
}$tt++;}
   $response .='</div></div></div>';
   $response.='<div class="advert"></div>'.'<div class="postsside" style=" background-color:white; padding-right: 20px;
border-right: 1px solid #eee;">';
   }

 elseif($i==4 || $i==5 || $i==6   ){ $response.='<div class="advert"></div>'.'<div style="height:auto; background-color: '.$backgroundcolor.'" class="postsside postside2">';
 if($i == 4){$response.='<div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><div class="stayaside"><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: '.$textcolor.'">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a></div>';}
  elseif($i==5 || $i==6 ){$response.='<div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: '.$textcolor.'">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
$response .='</div>';
}



elseif($i==7 ){ $response.='</div><div class="advert"></div>'.'<div class="postsside" style="height:544px; background-color:white;">';

  $response.='<div class="advert"></div>'.'<div style="height:auto; background-color: '.$backgroundcolor.'" class="postsside postside2"><div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: '.$textcolor.'">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display:none;" class="secondword">'.$excerpt.'</div></a>';
$response .='</div>';

}
elseif($i==8|| $i==9 || $i==10 || $i==11 || $i==12 ){
  $response.='<div class="advert"></div>'.'<div style="height:auto; background-color: '.$backgroundcolor.'" class="postsside postside2"><div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: '.$textcolor.'">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;"class="secondword">'.$excerpt.'</div></a>';
$response .='</div>';

}

elseif($i==13 ){ $response.='</div>';}





 $i++; }



  } else{$response.='<response>No posts found here';}}

$response .= '</response>';

}}else{$response='<response>No top news found here</response>';}  return $response;}}
$blogg = new blog();
echo $blogg->igg();


?>







</div><div class="advertafter"><a href="http://jineosy.com" class="mySlide" style="display: block; margin:20px; max-width: 100%;margin-bottom: 10px;
  clear:both;
  padding-top: 20px;
"><img src="ppm0000.jpg"></a></div>
<div class="latestdes" style="margin-bottom: -6px;"id="lateststoriesie"> LATEST STORIES</div><hr class="hrlatest" style="color: white; ">
<div class="postess" style="margin-top: 40px; margin-bottom: 40px;">






<?php



require_once('config.php');
Class blogi{
private $mysqli;

function __construct(){
  $this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
}
function __destruct(){$this->mysqli->close();}
private function likenumber ($titled,$categoried){
$title=$this->mysqli->real_escape_string($titled);
$category=$this->mysqli->real_escape_string($categoried);
$query="SELECT `title`, `category` FROM `likes` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;




}
private function commentnumber ($title,$category){
$title=$this->mysqli->real_escape_string($title);
$category=$this->mysqli->real_escape_string($category);
$query="SELECT `title`, `category` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;
}

public function igg(){

$query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content` FROM `posts`
  ORDER BY `post_id` DESC LIMIT 10";

  $result=$this->mysqli->query($query);
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
if($result->num_rows){$i=1;

while($row=$result->fetch_array(MYSQLI_ASSOC)){

$date=$row['posted_on'];
$name=strtoupper($row['name']);
$categoried=$row['category'];
  $imageurl=$row['imageurl'];
$newssource=$row['newssource'];
$titled=$row['title'];
$contentd=$row['content'];
$a = new DateTime($date);

$b = new DateTime(date('y-m-d H:i:s', time()));
$interval = $a->diff($b);
$difff=$interval->days.'days';


$seconds  = strtotime('- 1 hour') - strtotime($date);

      $months = floor($seconds / (3600*24*30));
      $day = floor($seconds / (3600*24));
      $hours = floor($seconds / 3600);
      $mins = floor(($seconds - ($hours*3600)) / 60);
      $secs = floor($seconds % 60);

      if($seconds < 60){
  $diff = $secs." seconds ago";}
      else if($seconds > 60 && $seconds < 60*2)
  {$diff = $mins." minute ago";}
 else if($seconds > 60*2 && $seconds < 60*60)
  {$diff = $mins." mins ago";}
      else if($seconds >60*60 && $seconds < 60*60*2)
  {$diff = $hours." hour ago";}
else if($seconds > 60*60*2 && $seconds < 60*60*24)
  {$diff = $hours." hours ago";}

   else if($seconds > 24*60*60 && $seconds < 60*60*24*2)
          {$diff = $day." day ago";}
else if($seconds > 24*60*60*2 && $seconds < 60*60*24*30)
          {$diff = $day." days ago";}

   else if($seconds > (3600*24*30) && $seconds < 3600*24*30*2){
          $diff = $months." months ago";

      }
  else if($seconds > 3600*24*30*2){
          $diff = $months." months ago";

      }


$contentdbawo=htmlentities($contentd);
$find=substr($contentdbawo, 197, 200);
$contentdbawo1=str_replace( $find, '...', $contentdbawo);
  $contenttd=substr($contentdbawo1, 0, 200);
  $contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
  $contenttdt=substr($contentdbawo, 0, 200);
  $contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

  $contenttded=substr($contentdbawo, 200, strlen($contentdbawo));
  $contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
$contentedt.$contentededed.'</div>';
if(strlen($contentdbawo)>200){

$rmore=' <span class="readmore"><a href="'.$newssource.'.php">Readmore.....</a></span>';}
else{$rmore="";}



$input = $this->likenumber($titled,$categoried);
if($input>1){$like='likes';}else{$like='like';}
$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$inputs=$this->commentnumber($titled,$categoried);
if($inputs>1){$comment='comments';}else{$comment='comment';}
$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
 $editnews='<input type="button" style ="display:none" value="edit news" id="'.$titled.'4" onclick=
    "editei(\''.$titled.'\', \''.$categoried.'\');">';
 $backbutto='<input type="button" value="BACK" id="'.$titled.'5" onclick=
 "backbutto(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$backtolist='<input type="button" value="BACK TO HEADLINES" id="'.$titled.'6"
style="color:blue"
onclick="listtopics(\''.$categoried.'\');">';
$contentedt='';
 $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
$response.='<div class="advert"></div>'.'<div class="postis dontshowinsmall" style="border-bottom: none; height: 359px;"><i class="fa fa-share-alt" style="font-size: 17px; padding: 5px 10px;  background-color: #ff5300; color: white; margin-bottom: 6px; position: absolute; margin-top: 0px; margin-left: 0px; " onclick="sharedata(\''.$titled.'\');"></i>'.'

<div class="imagetitle" style="display:block; height: 200px; overflow: hidden;  padding-top: 0px; padding-bottom: 05px;">
<img alt="'.$titled.'" src="'.$imageurl.'" style="height: auto;
    width: 100%;
">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="category" style="display: block; margin-top: 10px; margin-bottom: 08px; color:
#ff5300;font-weight: bold; text-transform: uppercase; ">'.$categoried.'</div> '.'<div class="title">'.'<a href="'.$newssource.'.php" style="color: #222323; font-weight: bold; ">'.$titled.'</a></div><div class="postsbase">
<div class="share"><span class="iconshare">  <hr style="color: #dddddd;"></span> <span class="comments" style="display: block; margin-top: 8px; float: left; color: #898c8d;">'.$inputs.' comments  </span><span class="comments" style="display: block; margin-top: 8px; float: left; color: #898c8d;"> . '.$diff.'</span></div>'.'</div>'.'</div>'
;

if($i%2==0){
$response.='<div class="advert"></div>'.'<div class="heit postsside dontshow" ><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><div class="stayaside"><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$categoried.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword">'.$name.'</div></a></div></div>';
}else{

 $response.='<div class="advert"></div>'.'<div class="heit postsside dontshow" >'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><div class="stayaside" style="float:left;"><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px; float: left;"><span style="color: #c70000">'.$categoried.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword">'.$name.'</div></a></div><div class="postssideimage" style="overflow: hidden; float:right; margin-top:-15px;"><img src="'.$imageurl.'" style="height: 100%;"></div></div>';



}

$i++;
} }else{$response = '<response> No Post Here </response>';}

$response .= '</response>';

return $response;}}
$bloggi = new blogi();
echo $bloggi->igg();


?>






</div>


<div class="side" >

<div class="trendstyle" id="trendingnowie"> TRENDING NOW</div><hr  class="hrtrend" style="color: white; margin: 0;">

<div class="advert">


</div>
<div class="olderposts">

<?php

require_once('config.php');
Class bloog{
private $mysqli;

function __construct(){
  $this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
}
function __destruct(){$this->mysqli->close();}
private function likenumber ($titled,$categoried){
$title=$this->mysqli->real_escape_string($titled);
$category=$this->mysqli->real_escape_string($categoried);
$query="SELECT `title`, `category` FROM `likes` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;




}
private function commentnumber ($title,$category){
$title=$this->mysqli->real_escape_string($title);
$category=$this->mysqli->real_escape_string($category);
$query="SELECT `title`, `category` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;
}


public function igg(){


$query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content` FROM `posts`
  WHERE `visitcount` > 70  OR `category` = 'Trending Now' ORDER BY `visitcount` DESC LIMIT 100";

  $result=$this->mysqli->query($query);
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
if($result->num_rows){$i=0;

while($row=$result->fetch_array(MYSQLI_ASSOC)){

$date=$row['posted_on'];
$name=strtoupper($row['name']);
$categoried=$row['category'];
  $imageurl=$row['imageurl'];
$newssource=$row['newssource'];
$titled=$row['title'];
$contentd=$row['content'];
$a = new DateTime($date);

$b = new DateTime(date('y-m-d H:i:s', time()));
$interval = $a->diff($b);
$difff=$interval->days.'days';


$seconds  = strtotime('- 1 hour') - strtotime($date);

      $months = floor($seconds / (3600*24*30));
      $day = floor($seconds / (3600*24));
      $hours = floor($seconds / 3600);
      $mins = floor(($seconds - ($hours*3600)) / 60);
      $secs = floor($seconds % 60);

      if($seconds < 60){
  $diff = $secs." seconds ago";}
      else if($seconds > 60 && $seconds < 60*2)
  {$diff = $mins." minute ago";}
 else if($seconds > 60*2 && $seconds < 60*60)
  {$diff = $mins." mins ago";}
      else if($seconds >60*60 && $seconds < 60*60*2)
  {$diff = $hours." hour ago";}
else if($seconds > 60*60*2 && $seconds < 60*60*24)
  {$diff = $hours." hours ago";}

   else if($seconds > 24*60*60 && $seconds < 60*60*24*2)
          {$diff = $day." day ago";}
else if($seconds > 24*60*60*2 && $seconds < 60*60*24*30)
          {$diff = $day." days ago";}

   else if($seconds > (3600*24*30) && $seconds < 3600*24*30*2){
          $diff = $months." months ago";

      }
  else if($seconds > 3600*24*30*2){
          $diff = $months." months ago";

      }


$contentdbawo=htmlentities($titled);
$find=substr($contentdbawo, 57, 60);
$contentdbawo1=str_replace( $find, '...', $contentdbawo);
  $contenttd=substr($contentdbawo1, 0, 60);
  $contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
  $contenttdt=substr($contentdbawo, 0, 200);
  $contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

  $contenttded=substr($contentdbawo, 200, strlen($contentdbawo));
  $contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
$contentedt.$contentededed.'</div>';
if(strlen($contentdbawo)>200){

$rmore=' <span class="readmore"><a href="'.$newssource.'.php">Readmore.....</a></span>';}
else{$rmore="";}



$input = $this->likenumber($titled,$categoried);
if($input>1){$like='likes';}else{$like='like';}
$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$inputs=$this->commentnumber($titled,$categoried);
if($inputs>1){$comment='comments';}else{$comment='comment';}
$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
 $editnews='<input type="button" style ="display:none" value="edit news" id="'.$titled.'4" onclick=
    "editei(\''.$titled.'\', \''.$categoried.'\');">';
 $backbutto='<input type="button" value="BACK" id="'.$titled.'5" onclick=
 "backbutto(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$backtolist='<input type="button" value="BACK TO HEADLINES" id="'.$titled.'6"
style="color:blue"
onclick="listtopics(\''.$categoried.'\');">';

 $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $now = strtotime("now");

$postdate =strtotime($date);
$iyato = $now - $postdate;



if ($iyato<259200){

 $response.='<div class="postesss" style="" >'.
'<div class="imgside" style="float: right; margin-right: 2px;width: 30%;
  height: 50px;">
<img class="imggangan" src="'.$imageurl.'">
</div>'.'<div style="    float: left;
  /* height: 200px; */
  width: 65%;"><div class="sdeword" style="float: left;">'.'<a href="'.$newssource.'.php">'.$contented.'

</a></div>'.'<div class="postsbase">
<div class="share"><span class="iconshare">  <span class="comments" style="margin-top: 8px;">'.$inputs.' comments'.' .  '.$diff.' </span></div>'.'</div>'.'</div></div>'
;}else{$response.="";}}}else{
 $response ='<response> No posts Here';
}

$response .= '</response>';


return $response;}
}
$bloogg = new bloog();
echo $bloogg->igg();






?>
</div>
</div>



<div class="postss"><div class="vertical">
<div class="headlineright" id="opinionie">
Opinion
</div>

<?php



require_once('config.php');
Class blssog{
private $mysqli;

function __construct(){
  $this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
}
function __destruct(){$this->mysqli->close();}
private function likenumber ($titled,$categoried){
$title=$this->mysqli->real_escape_string($titled);
$category=$this->mysqli->real_escape_string($categoried);
$query="SELECT `title`, `category` FROM `likes` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;




}
private function commentnumber ($title,$category){
$title=$this->mysqli->real_escape_string($title);
$category=$this->mysqli->real_escape_string($category);
$query="SELECT `title`, `category` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;
}

public function igg(){

$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$i=1;


$query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
  WHERE `category` ='opinion' ORDER BY `post_id` DESC LIMIT 100";

  $result=$this->mysqli->query($query);

if($result->num_rows){

while($row=$result->fetch_array(MYSQLI_ASSOC)){

$date=$row['posted_on'];
$name=strtoupper($row['name']);
$categoried=$row['category'];
  $imageurl=$row['imageurl'];
$newssource=$row['newssource'];
$titled=$row['title'];
$newcategory =$row['newcategory'];
$subtopic=$row['subtopic'];
$contentd=$row['content'];
$a = new DateTime($date);
$excerpt=$row['excerpt'];
$b = new DateTime(date('y-m-d H:i:s', time()));
$interval = $a->diff($b);
$difff=$interval->days.'days';


$seconds  = strtotime('- 1 hour') - strtotime($date);

      $months = floor($seconds / (3600*24*30));
      $day = floor($seconds / (3600*24));
      $hours = floor($seconds / 3600);
      $mins = floor(($seconds - ($hours*3600)) / 60);
      $secs = floor($seconds % 60);

      if($seconds < 60){
  $diff = $secs." seconds ago";}
      else if($seconds > 60 && $seconds < 60*2)
  {$diff = $mins." minute ago";}
 else if($seconds > 60*2 && $seconds < 60*60)
  {$diff = $mins." mins ago";}
      else if($seconds >60*60 && $seconds < 60*60*2)
  {$diff = $hours." hour ago";}
else if($seconds > 60*60*2 && $seconds < 60*60*24)
  {$diff = $hours." hours ago";}

   else if($seconds > 24*60*60 && $seconds < 60*60*24*2)
          {$diff = $day." day ago";}
else if($seconds > 24*60*60*2 && $seconds < 60*60*24*30)
          {$diff = $day." days ago";}

   else if($seconds > (3600*24*30) && $seconds < 3600*24*30*2){
          $diff = $months." months ago";

      }
  else if($seconds > 3600*24*30*2){
          $diff = $months." months ago";

      }

$excerpt=htmlentities($excerpt);
$find=substr($excerpt, 97, 100);
$excerpt=str_replace( $find, '...', $excerpt);
  $exce=substr($excerpt, 0, 100);
  $excerpt=html_entity_decode($exce, ENT_COMPAT, "ISO8859-1");



$contentdbawo=htmlentities($contentd);
$find=substr($contentdbawo, 197, 200);
$contentdbawo1=str_replace( $find, '...', $contentdbawo);
  $contenttd=substr($contentdbawo1, 0, 200);
  $contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
  $contenttdt=substr($contentdbawo, 0, 200);
  $contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

  $contenttded=substr($contentdbawo, 200, strlen($contentdbawo));
  $contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
$contentedt.$contentededed.'</div>';
if(strlen($contentdbawo)>200){

$rmore=' <span class="readmore"><a href="'.$newssource.'.php">Readmore.....</a></span>';}
else{$rmore="";}



$input = $this->likenumber($titled,$categoried);
if($input>1){$like='likes';}else{$like='like';}
$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$inputs=$this->commentnumber($titled,$categoried);
if($inputs>1){$comment='comments';}else{$comment='comment';}
$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
 $editnews='<input type="button" style ="display:none" value="edit news" id="'.$titled.'4" onclick=
    "editei(\''.$titled.'\', \''.$categoried.'\');">';
 $backbutto='<input type="button" value="BACK" id="'.$titled.'5" onclick=
 "backbutto(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$backtolist='<input type="button" value="BACK TO HEADLINES" id="'.$titled.'6"
style="color:blue"
onclick="listtopics(\''.$categoried.'\');">';
$contentedt='';
 $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';

 if($i==1){
$response.='<div class="advert"></div>'.'<div class="wordbyside" style="background-color: #fdf3ec;"> <a  href="'.$newssource.'.php">
<div class="firstword"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a><div class="thirdword">';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `tag1`, `newssource`, `name`, `title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
  WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
  AND NOT`newcategory` = '')
  ORDER BY `post_id` DESC";
  $resulti= $this->mysqli->query($queryi);
  if ($resulti->num_rows == 0){
    $datei='';
$namei='';
$categoriedi='';
  $imageurli='';
$newssourcei='';
$titledi='';
$tag1='';
$contentdi='';
$subtopici='';
$ai = '';
$excerpti='';

  $lil=$titledi;
  }
  while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
    $datei=$rowi['posted_on'];
$namei=strtoupper($rowi['name']);
$categoriedi=$rowi['category'];
  $imageurli=$rowi['imageurl'];
$newssourcei=$rowi['newssource'];
$titledi=$rowi['title'];
$tag1=$rowi['tag1'];
$contentdi=$rowi['content'];
$subtopici=$rowi['subtopic'];
$ai = new DateTime($datei);
$excerpti=$row['excerpt'];

  $lil=$titledi;}

  if($titledi == $titled){$response .= '</div></div><div class="posts"style="background-image: url(\''.$imageurl.'\')">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: display:none; 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
 <div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div></div>';}else{

$response .='<a href="'.$newssourcei.'.php" style="    color: #6d6d6d;"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</a></div></div><div class="posts"style="background-image: url(\''.$imageurl.'\')">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: display:none; 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
 <div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div></div>'
;}}elseif($i==2 ){$response.='<div class="advert"></div>'.'<div class="heit postsside" style="background-color: #fdf3ec;" ><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a></div>';}



if($i==3){
 $response.='<div class="advert"></div>'.'<div style="background-color: #eee; border-bottom: 10px;" class="dontshow"><div class="postsside dontshow"><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword" style="display:none;">'.$excerpt.'</div></a></div>';

$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
  WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
  AND NOT`newcategory` = '')
  ORDER BY `post_id` DESC";
  $resulti= $this->mysqli->query($queryi);
  $tt=0;while($tt < 4){
  while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
    $datei=$rowi['posted_on'];
$namei=strtoupper($rowi['name']);
$categoriedi=$rowi['category'];
  $imageurli=$rowi['imageurl'];
$newssourcei=$rowi['newssource'];
$titledi=$rowi['title'];
$tag1=$rowi['tag1'];
$contentdi=$rowi['content'];
$ai = new DateTime($datei);
$subtopici = $rowi['subtopic'];
$excerpti=$row['excerpt'];
if($titledi != $titled){
$lil=$titledi;


$now=strtotime("now");
   $postdate =strtotime($datei);
   $iyato = $now - $postdate;



   if ($iyato<259200){

$response .='</a><a href="'.$newssourcei.'.php" style="text-decoration: none;"><div  style="border-top: 1px solid #dcdcdc; padding: 3px;" class="firstword secondword thirty dontshow"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</div></a>';}}
}$tt++;}
   $response .='</div>';


$response.='<div class="vertical vertical2 dontshowinsmall">
<div class="headlineright headlinerright2">

</div><div class="advert"></div>'.'<div class="postscontainer"><div class="posts"  style="background-image: url(\''.$imageurl.'\'); width: 100%;">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div><div class="wordbyside" style="width: 98%; background-color: #fdf3ec; border-top: none; overflow: hidden;"> <a  href="'.$newssource.'.php">
<div class="firstword"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div>';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
  WHERE `newcategory` ='".$newcategory."' ORDER BY `post_id` DESC";
  $resulti= $this->mysqli->query($queryi);
  $tt=0;while($tt < 4){
  while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
    $datei=$rowi['posted_on'];
$namei=strtoupper($rowi['name']);
$categoriedi=$rowi['category'];
  $imageurli=$rowi['imageurl'];
$newssourcei=$rowi['newssource'];
$titledi=$rowi['title'];
$tag1=$rowi['tag1'];
$subtopici = $rowi['subtopic'];
$contentdi=$rowi['content'];
$ai = new DateTime($datei);
$excerpti=$row['excerpt'];
$newcategory=$row['newcategory'];
if($titledi != $titled){

$lil=$titledi;

$now=strtotime("now");
   $postdate =strtotime($datei);
   $iyato = $now - $postdate;



   if ($iyato<259200){


$response .='</a><a href="'.$newssourcei.'.php"><div class="firstword secondword thirty"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</div></a>';
}} }$tt++;}
   $response .='</div></div></div>';
   $response.='<div class="advert"></div>'.'<div class="postsside" style=" background-color:white; padding-right: 20px;
border-right: 1px solid #eee;">';
   }

 elseif($i==4 || $i==5 || $i==6   ){ $response.='<div class="advert"></div>'.'<div style="height:auto;" class="postsside postside2">';
 if($i == 4){$response.='<div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
  elseif($i==5 || $i==6 ){$response.='<div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
$response .='</div>';
}



elseif($i==7 ){ $response.='</div><div class="advert"></div>'.'<div class="postsside" style="height:544px; background-color:white;">';

  $response.='<div class="advert"></div>'.'<div style="height:auto;" class="postsside postside2"><div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display:none;" class="secondword">'.$excerpt.'</div></a>';
$response .='</div>';

}
elseif($i==8|| $i==9 || $i==10 || $i==11 || $i==12 ){
  $response.='<div class="advert"></div>'.'<div style="height:auto;" class="postsside postside2"><div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
'.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
  "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
  font-size: 13px;
  font-weight: 600;
  font-style: normal;
  line-height: 13px;
  text-transform: uppercase;
  color: #ff5300;
  text-shadow: none;
  margin-bottom: 7.5px;
  height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
  margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
<div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;"class="secondword">'.$excerpt.'</div></a>';
$response .='</div>';

}

elseif($i==13 ){ $response.='</div>';}





 $i++; }



 }else{
   $response = '<response> No Post Here';
 }

$response .= '</response>';

return $response;}}
$blssogg = new blssog();
echo $blssogg->igg();


?>







</div>
<div class="postss spor"><div class="vertical">
<div class="headlineright" id="sportsie">
Sports
</div>

<?php



require_once('config.php');
 Class blsog{
 private $mysqli;

	function __construct(){
		$this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
	}
	function __destruct(){$this->mysqli->close();}
	private function likenumber ($titled,$categoried){
$title=$this->mysqli->real_escape_string($titled);
	$category=$this->mysqli->real_escape_string($categoried);
$query="SELECT `title`, `category` FROM `likes` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;




	}
	private function commentnumber ($title,$category){
$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="SELECT `title`, `category` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;
}

public function igg(){

$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$i=1;


 $query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `category` ='sports' ORDER BY `post_id` DESC LIMIT 100";

		$result=$this->mysqli->query($query);

 if($result->num_rows){

 while($row=$result->fetch_array(MYSQLI_ASSOC)){

	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$newcategory =$row['newcategory'];
	$subtopic=$row['subtopic'];
	$contentd=$row['content'];
	$a = new DateTime($date);
	$excerpt=$row['excerpt'];
$b = new DateTime(date('y-m-d H:i:s', time()));
$interval = $a->diff($b);
$difff=$interval->days.'days';


 $seconds  = strtotime('- 1 hour') - strtotime($date);

        $months = floor($seconds / (3600*24*30));
        $day = floor($seconds / (3600*24));
        $hours = floor($seconds / 3600);
        $mins = floor(($seconds - ($hours*3600)) / 60);
        $secs = floor($seconds % 60);

        if($seconds < 60){
		$diff = $secs." seconds ago";}
        else if($seconds > 60 && $seconds < 60*2)
		{$diff = $mins." minute ago";}
	 else if($seconds > 60*2 && $seconds < 60*60)
		{$diff = $mins." mins ago";}
        else if($seconds >60*60 && $seconds < 60*60*2)
		{$diff = $hours." hour ago";}
else if($seconds > 60*60*2 && $seconds < 60*60*24)
		{$diff = $hours." hours ago";}

	   else if($seconds > 24*60*60 && $seconds < 60*60*24*2)
            {$diff = $day." day ago";}
else if($seconds > 24*60*60*2 && $seconds < 60*60*24*30)
            {$diff = $day." days ago";}

	   else if($seconds > (3600*24*30) && $seconds < 3600*24*30*2){
            $diff = $months." months ago";

        }
		else if($seconds > 3600*24*30*2){
            $diff = $months." months ago";

        }

$excerpt=htmlentities($excerpt);
	$find=substr($excerpt, 97, 100);
	$excerpt=str_replace( $find, '...', $excerpt);
		$exce=substr($excerpt, 0, 100);
		$excerpt=html_entity_decode($exce, ENT_COMPAT, "ISO8859-1");



	$contentdbawo=htmlentities($contentd);
	$find=substr($contentdbawo, 197, 200);
	$contentdbawo1=str_replace( $find, '...', $contentdbawo);
		$contenttd=substr($contentdbawo1, 0, 200);
		$contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
		$contenttdt=substr($contentdbawo, 0, 200);
		$contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

		$contenttded=substr($contentdbawo, 200, strlen($contentdbawo));
		$contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
	$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
	$contentedt.$contentededed.'</div>';
	if(strlen($contentdbawo)>200){

	$rmore=' <span class="readmore"><a href="'.$newssource.'.php">Readmore.....</a></span>';}
 else{$rmore="";}



	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
	$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
   $editnews='<input type="button" style ="display:none" value="edit news" id="'.$titled.'4" onclick=
      "editei(\''.$titled.'\', \''.$categoried.'\');">';
   $backbutto='<input type="button" value="BACK" id="'.$titled.'5" onclick=
   "backbutto(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$backtolist='<input type="button" value="BACK TO HEADLINES" id="'.$titled.'6"
style="color:blue"
onclick="listtopics(\''.$categoried.'\');">';
$contentedt='';
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';

   if($i==1){
 $response.='<div class="advert"></div>'.'<div class="wordbyside"> <a  href="'.$newssource.'.php">
 <div class="firstword"><span style="color: #0084c6;">'.$newcategory.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a><div class="thirdword">';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `tag1`, `newssource`, `name`, `title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
		AND NOT`newcategory` = '')
		ORDER BY `post_id` DESC";
		$resulti= $this->mysqli->query($queryi);
		if ($resulti->num_rows == 0){
			$datei='';
	$namei='';
	$categoriedi='';
		$imageurli='';
	$newssourcei='';
	$titledi='';
	$tag1='';
	$contentdi='';
	$subtopici='';
	$ai = '';
	$excerpti='';

		$lil=$titledi;
		}
		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$contentdi=$rowi['content'];
	$subtopici=$rowi['subtopic'];
	$ai = new DateTime($datei);
	$excerpti=$row['excerpt'];

		$lil=$titledi;}

		if($titledi == $titled){$response .= '</div></div><div class="posts"style="background-image: url(\''.$imageurl.'\')">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: display:none; 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
   <div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div></div>';}else{

 $response .='<a href="'.$newssourcei.'.php" style="    color: #6d6d6d;"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</a></div></div><div class="posts"style="background-image: url(\''.$imageurl.'\')">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: display:none; 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
   <div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div></div>'
;}}elseif($i==2 ){$response.='<div class="advert"></div>'.'<div class="heit postsside" ><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #0084c6;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a></div>';}



 if($i==3){
	 $response.='<div class="advert"></div>'.'<div style="background-color: #eee; border-bottom: 10px;" class="dontshow"><div class="postsside dontshow"><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #0084c6;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword" style="display:none;">'.$excerpt.'</div></a></div>';

 $queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
		AND NOT`newcategory` = '')
		ORDER BY `post_id` DESC";
		$resulti= $this->mysqli->query($queryi);
		$tt=0;while($tt < 4){
		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$contentdi=$rowi['content'];
	$ai = new DateTime($datei);
	$subtopici = $rowi['subtopic'];
	$excerpti=$row['excerpt'];
	if($titledi != $titled){
	$lil=$titledi;

  $now=strtotime("now");
     $postdate =strtotime($datei);
     $iyato = $now - $postdate;



     if ($iyato<259200){


	$response .='</a><a href="'.$newssourcei.'.php" style="text-decoration: none;"><div  style="border-top: 1px solid #dcdcdc; padding: 3px;" class="firstword secondword thirty dontshow"><span style="color: #0084c6;">'.$subtopici.'</span> '.$lil.'</div></a>';}}
 }$tt++;}
		 $response .='</div>';


 $response.='<div class="vertical vertical2 dontshowinsmall">
<div class="headlineright headlinerright2">

</div><div class="advert"></div>'.'<div class="postscontainer"><div class="posts"  style="background-image: url(\''.$imageurl.'\'); width: 100%;">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div><div class="wordbyside" style="width: 98%; border-top: none; overflow: hidden;"> <a  href="'.$newssource.'.php">
 <div class="firstword"><span style="color: #0084c6;">'.$newcategory.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div>';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' ORDER BY `post_id` DESC";
		$resulti= $this->mysqli->query($queryi);
		$tt=0;while($tt < 4){
		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$subtopici = $rowi['subtopic'];
	$contentdi=$rowi['content'];
	$ai = new DateTime($datei);
	$excerpti=$row['excerpt'];
	$newcategory=$row['newcategory'];
	if($titledi != $titled){

	$lil=$titledi;

  $now=strtotime("now");
     $postdate =strtotime($datei);
     $iyato = $now - $postdate;



     if ($iyato<259200){


	$response .='</a><a href="'.$newssourcei.'.php"><div class="firstword secondword thirty"><span style="color: #0084c6;">'.$subtopici.'</span> '.$lil.'</div></a>';
}	} }$tt++;}
		 $response .='</div></div></div>';
		 $response.='<div class="advert"></div>'.'<div class="postsside" style=" background-color:white; padding-right: 20px;
border-right: 1px solid #eee;">';
		 }

   elseif($i==4 || $i==5 || $i==6   ){ $response.='<div class="advert"></div>'.'<div style="height:auto; border-top-color: #0084c6;" class="postsside postside2">';
   if($i == 4){$response.='<div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
   <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #0084c6;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
    elseif($i==5 || $i==6 ){$response.='<div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #0084c6;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
  $response .='</div>';
 }



 elseif($i==7 ){ $response.='</div><div class="advert"></div>'.'<div class="postsside" style="height:544px; background-color:white;">';

    $response.='<div class="advert"></div>'.'<div style="height:auto; border-top-color: #0084c6;" class="postsside postside2"><div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #0084c6;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display:none;" class="secondword">'.$excerpt.'</div></a>';
  $response .='</div>';

 }
 elseif($i==8|| $i==9 || $i==10 || $i==11 || $i==12 ){
    $response.='<div class="advert"></div>'.'<div style="height:auto; border-top-color: #0084c6;" class="postsside postside2"><div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #0084c6;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;"class="secondword">'.$excerpt.'</div></a>';
  $response .='</div>';

 }

 elseif($i==13 ){ $response.='</div>';}





   $i++; }



   }else{
	   $response = '<response> No Post Here';
   }

$response .= '</response>';

return $response;}}
 $blsogg = new blsog();
echo $blsogg->igg();


?>







</div>



<div class="postss"><div class="vertical">
<div class="headlineright" id="aroundtheworldie">
Around The World
</div>

<?php



require_once('config.php');
 Class bleesog{
 private $mysqli;

	function __construct(){
		$this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
	}
	function __destruct(){$this->mysqli->close();}
	private function likenumber ($titled,$categoried){
$title=$this->mysqli->real_escape_string($titled);
	$category=$this->mysqli->real_escape_string($categoried);
$query="SELECT `title`, `category` FROM `likes` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;




	}
	private function commentnumber ($title,$category){
$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="SELECT `title`, `category` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;
}

public function igg(){

$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$i=1;


 $query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `category` ='Around The World' ORDER BY `post_id` DESC LIMIT 100";

		$result=$this->mysqli->query($query);

 if($result->num_rows){

 while($row=$result->fetch_array(MYSQLI_ASSOC)){

	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$newcategory =$row['newcategory'];
	$subtopic=$row['subtopic'];
	$contentd=$row['content'];
	$a = new DateTime($date);
	$excerpt=$row['excerpt'];
$b = new DateTime(date('y-m-d H:i:s', time()));
$interval = $a->diff($b);
$difff=$interval->days.'days';


 $seconds  = strtotime('- 1 hour') - strtotime($date);

        $months = floor($seconds / (3600*24*30));
        $day = floor($seconds / (3600*24));
        $hours = floor($seconds / 3600);
        $mins = floor(($seconds - ($hours*3600)) / 60);
        $secs = floor($seconds % 60);

        if($seconds < 60){
		$diff = $secs." seconds ago";}
        else if($seconds > 60 && $seconds < 60*2)
		{$diff = $mins." minute ago";}
	 else if($seconds > 60*2 && $seconds < 60*60)
		{$diff = $mins." mins ago";}
        else if($seconds >60*60 && $seconds < 60*60*2)
		{$diff = $hours." hour ago";}
else if($seconds > 60*60*2 && $seconds < 60*60*24)
		{$diff = $hours." hours ago";}

	   else if($seconds > 24*60*60 && $seconds < 60*60*24*2)
            {$diff = $day." day ago";}
else if($seconds > 24*60*60*2 && $seconds < 60*60*24*30)
            {$diff = $day." days ago";}

	   else if($seconds > (3600*24*30) && $seconds < 3600*24*30*2){
            $diff = $months." months ago";

        }
		else if($seconds > 3600*24*30*2){
            $diff = $months." months ago";

        }

$excerpt=htmlentities($excerpt);
	$find=substr($excerpt, 97, 100);
	$excerpt=str_replace( $find, '...', $excerpt);
		$exce=substr($excerpt, 0, 100);
		$excerpt=html_entity_decode($exce, ENT_COMPAT, "ISO8859-1");



	$contentdbawo=htmlentities($contentd);
	$find=substr($contentdbawo, 197, 200);
	$contentdbawo1=str_replace( $find, '...', $contentdbawo);
		$contenttd=substr($contentdbawo1, 0, 200);
		$contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
		$contenttdt=substr($contentdbawo, 0, 200);
		$contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

		$contenttded=substr($contentdbawo, 200, strlen($contentdbawo));
		$contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
	$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
	$contentedt.$contentededed.'</div>';
	if(strlen($contentdbawo)>200){

	$rmore=' <span class="readmore"><a href="'.$newssource.'.php">Readmore.....</a></span>';}
 else{$rmore="";}



	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
	$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
   $editnews='<input type="button" style ="display:none" value="edit news" id="'.$titled.'4" onclick=
      "editei(\''.$titled.'\', \''.$categoried.'\');">';
   $backbutto='<input type="button" value="BACK" id="'.$titled.'5" onclick=
   "backbutto(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$backtolist='<input type="button" value="BACK TO HEADLINES" id="'.$titled.'6"
style="color:blue"
onclick="listtopics(\''.$categoried.'\');">';
$contentedt='';
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';

   if($i==1){
 $response.='<div class="advert"></div>'.'<div class="wordbyside"> <a  href="'.$newssource.'.php">
 <div class="firstword"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a><div class="thirdword">';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `tag1`, `newssource`, `name`, `title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
		AND NOT`newcategory` = '')
		ORDER BY `post_id` DESC";
		$resulti= $this->mysqli->query($queryi);
		if ($resulti->num_rows == 0){
			$datei='';
	$namei='';
	$categoriedi='';
		$imageurli='';
	$newssourcei='';
	$titledi='';
	$tag1='';
	$contentdi='';
	$subtopici='';
	$ai = '';
	$excerpti='';

		$lil=$titledi;
		}
		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$contentdi=$rowi['content'];
	$subtopici=$rowi['subtopic'];
	$ai = new DateTime($datei);
	$excerpti=$row['excerpt'];

		$lil=$titledi;}

		if($titledi == $titled){$response .= '</div></div><div class="posts"style="background-image: url(\''.$imageurl.'\')">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: display:none; 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
   <div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div></div>';}else{

 $response .='<a href="'.$newssourcei.'.php" style="    color: #6d6d6d;"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</a></div></div><div class="posts"style="background-image: url(\''.$imageurl.'\')">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: display:none; 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
   <div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div></div>'
;}}elseif($i==2 ){$response.='<div class="advert"></div>'.'<div class="heit postsside" ><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a></div>';}



 if($i==3){
	 $response.='<div class="advert"></div>'.'<div style="background-color: #eee; border-bottom: 10px;" class="dontshow"><div class="postsside dontshow"><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword" style="display:none;">'.$excerpt.'</div></a></div>';

 $queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
		AND NOT`newcategory` = '')
		ORDER BY `post_id` DESC";
		$resulti= $this->mysqli->query($queryi);
		$tt=0;while($tt < 4){
		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$contentdi=$rowi['content'];
	$ai = new DateTime($datei);
	$subtopici = $rowi['subtopic'];
	$excerpti=$row['excerpt'];
	if($titledi != $titled){
	$lil=$titledi;


  $now=strtotime("now");
     $postdate =strtotime($datei);
     $iyato = $now - $postdate;



     if ($iyato<259200){

	$response .='</a><a href="'.$newssourcei.'.php" style="text-decoration: none;"><div  style="border-top: 1px solid #dcdcdc; padding: 3px;" class="firstword secondword thirty dontshow"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</div></a>';}}
 }$tt++;}
		 $response .='</div>';


 $response.='<div class="vertical vertical2 dontshowinsmall">
<div class="headlineright headlinerright2">

</div><div class="advert"></div>'.'<div class="postscontainer"><div class="posts"  style="background-image: url(\''.$imageurl.'\'); width: 100%;">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div><div class="wordbyside" style="width: 98%; border-top: none; overflow: hidden;"> <a  href="'.$newssource.'.php">
 <div class="firstword"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div>';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' ORDER BY `post_id` DESC";
		$resulti= $this->mysqli->query($queryi);
		$tt=0;while($tt < 4){
		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$subtopici = $rowi['subtopic'];
	$contentdi=$rowi['content'];
	$ai = new DateTime($datei);
	$excerpti=$row['excerpt'];
	$newcategory=$row['newcategory'];
	if($titledi != $titled){

	$lil=$titledi;

  $now=strtotime("now");
     $postdate =strtotime($datei);
     $iyato = $now - $postdate;



     if ($iyato<259200){


	$response .='</a><a href="'.$newssourcei.'.php"><div class="firstword secondword thirty"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</div></a>';}
	} }$tt++;}
		 $response .='</div></div></div>';
		 $response.='<div class="advert"></div>'.'<div class="postsside" style=" background-color:white; padding-right: 20px;
border-right: 1px solid #eee;">';
		 }

   elseif($i==4 || $i==5 || $i==6   ){ $response.='<div class="advert"></div>'.'<div style="height:auto;" class="postsside postside2">';
   if($i == 4){$response.='<div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
   <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
    elseif($i==5 || $i==6 ){$response.='<div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
  $response .='</div>';
 }



 elseif($i==7 ){ $response.='</div><div class="advert"></div>'.'<div class="postsside" style="height:544px; background-color:white;">';

    $response.='<div class="advert"></div>'.'<div style="height:auto;" class="postsside postside2"><div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display:none;" class="secondword">'.$excerpt.'</div></a>';
  $response .='</div>';

 }
 elseif($i==8|| $i==9 || $i==10 || $i==11 || $i==12 ){
    $response.='<div class="advert"></div>'.'<div style="height:auto;" class="postsside postside2"><div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;"class="secondword">'.$excerpt.'</div></a>';
  $response .='</div>';

 }

 elseif($i==13 ){ $response.='</div>';}





   $i++; }



   }else{
	   $response = '<response> No Post Here';
   }

$response .= '</response>';

return $response;}}
 $bleesogg = new bleesog();
echo $bleesogg->igg();


?>







</div>




<div class="postss lifes"><div class="vertical">
<div class="headlineright" id="lifestyleie">
Lifestyle
</div>

<?php



require_once('config.php');
 Class blsssog{
 private $mysqli;

	function __construct(){
		$this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
	}
	function __destruct(){$this->mysqli->close();}
	private function likenumber ($titled,$categoried){
$title=$this->mysqli->real_escape_string($titled);
	$category=$this->mysqli->real_escape_string($categoried);
$query="SELECT `title`, `category` FROM `likes` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;




	}
	private function commentnumber ($title,$category){
$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="SELECT `title`, `category` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;
}

public function igg(){

$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$i=1;


 $query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `category` ='lifestyle' ORDER BY `post_id` DESC LIMIT 100";

		$result=$this->mysqli->query($query);

 if($result->num_rows){

 while($row=$result->fetch_array(MYSQLI_ASSOC)){

	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$newcategory =$row['newcategory'];
	$subtopic=$row['subtopic'];
	$contentd=$row['content'];
	$a = new DateTime($date);
	$excerpt=$row['excerpt'];
$b = new DateTime(date('y-m-d H:i:s', time()));
$interval = $a->diff($b);
$difff=$interval->days.'days';


 $seconds  = strtotime('- 1 hour') - strtotime($date);

        $months = floor($seconds / (3600*24*30));
        $day = floor($seconds / (3600*24));
        $hours = floor($seconds / 3600);
        $mins = floor(($seconds - ($hours*3600)) / 60);
        $secs = floor($seconds % 60);

        if($seconds < 60){
		$diff = $secs." seconds ago";}
        else if($seconds > 60 && $seconds < 60*2)
		{$diff = $mins." minute ago";}
	 else if($seconds > 60*2 && $seconds < 60*60)
		{$diff = $mins." mins ago";}
        else if($seconds >60*60 && $seconds < 60*60*2)
		{$diff = $hours." hour ago";}
else if($seconds > 60*60*2 && $seconds < 60*60*24)
		{$diff = $hours." hours ago";}

	   else if($seconds > 24*60*60 && $seconds < 60*60*24*2)
            {$diff = $day." day ago";}
else if($seconds > 24*60*60*2 && $seconds < 60*60*24*30)
            {$diff = $day." days ago";}

	   else if($seconds > (3600*24*30) && $seconds < 3600*24*30*2){
            $diff = $months." months ago";

        }
		else if($seconds > 3600*24*30*2){
            $diff = $months." months ago";

        }

$excerpt=htmlentities($excerpt);
	$find=substr($excerpt, 97, 100);
	$excerpt=str_replace( $find, '...', $excerpt);
		$exce=substr($excerpt, 0, 100);
		$excerpt=html_entity_decode($exce, ENT_COMPAT, "ISO8859-1");



	$contentdbawo=htmlentities($contentd);
	$find=substr($contentdbawo, 197, 200);
	$contentdbawo1=str_replace( $find, '...', $contentdbawo);
		$contenttd=substr($contentdbawo1, 0, 200);
		$contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
		$contenttdt=substr($contentdbawo, 0, 200);
		$contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

		$contenttded=substr($contentdbawo, 200, strlen($contentdbawo));
		$contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
	$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
	$contentedt.$contentededed.'</div>';
	if(strlen($contentdbawo)>200){

	$rmore=' <span class="readmore"><a href="'.$newssource.'.php">Readmore.....</a></span>';}
 else{$rmore="";}



	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
	$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
   $editnews='<input type="button" style ="display:none" value="edit news" id="'.$titled.'4" onclick=
      "editei(\''.$titled.'\', \''.$categoried.'\');">';
   $backbutto='<input type="button" value="BACK" id="'.$titled.'5" onclick=
   "backbutto(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$backtolist='<input type="button" value="BACK TO HEADLINES" id="'.$titled.'6"
style="color:blue"
onclick="listtopics(\''.$categoried.'\');">';
$contentedt='';
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';

   if($i==1){
 $response.='<div class="advert"></div>'.'<div class="wordbyside"> <a  href="'.$newssource.'.php">
 <div class="firstword"><span style="color: #bb3b80;">'.$newcategory.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a><div class="thirdword">';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `tag1`, `newssource`, `name`, `title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
		AND NOT`newcategory` = '')
		ORDER BY `post_id` DESC";
		$resulti= $this->mysqli->query($queryi);
		if ($resulti->num_rows == 0){
			$datei='';
	$namei='';
	$categoriedi='';
		$imageurli='';
	$newssourcei='';
	$titledi='';
	$tag1='';
	$contentdi='';
	$subtopici='';
	$ai = '';
	$excerpti='';

		$lil=$titledi;
		}
		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$contentdi=$rowi['content'];
	$subtopici=$rowi['subtopic'];
	$ai = new DateTime($datei);
	$excerpti=$row['excerpt'];

		$lil=$titledi;}

		if($titledi == $titled){$response .= '</div></div><div class="posts"style="background-image: url(\''.$imageurl.'\')">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: display:none; 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
   <div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div></div>';}else{

 $response .='<a href="'.$newssourcei.'.php" style="    color: #6d6d6d;"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</a></div></div><div class="posts"style="background-image: url(\''.$imageurl.'\')">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: display:none; 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
   <div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div></div>'
;}}elseif($i==2 ){$response.='<div class="advert"></div>'.'<div class="heit postsside" ><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #bb3b80;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a></div>';}



 if($i==3){
	 $response.='<div class="advert"></div>'.'<div style="background-color: #eee; border-bottom: 10px;" class="dontshow"><div class="postsside dontshow"><div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #bb3b80;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword" style="display:none;">'.$excerpt.'</div></a></div>';

 $queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' AND (NOT `newcategory` = 'null'
		AND NOT`newcategory` = '')
		ORDER BY `post_id` DESC";
		$resulti= $this->mysqli->query($queryi);
		$tt=0;while($tt < 4){
		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$contentdi=$rowi['content'];
	$ai = new DateTime($datei);
	$subtopici = $rowi['subtopic'];
	$excerpti=$row['excerpt'];
	if($titledi != $titled){
	$lil=$titledi;


  $now=strtotime("now");
     $postdate =strtotime($datei);
     $iyato = $now - $postdate;



     if ($iyato<259200){

	$response .='</a><a href="'.$newssourcei.'.php" style="text-decoration: none;"><div  style="border-top: 1px solid #dcdcdc; padding: 3px;" class="firstword secondword thirty dontshow"><span style="color: #bb3b80;">'.$subtopici.'</span> '.$lil.'</div></a>';}}
 }$tt++;}
		 $response .='</div>';


 $response.='<div class="vertical vertical2 dontshowinsmall">
<div class="headlineright headlinerright2">

</div><div class="advert"></div>'.'<div class="postscontainer"><div class="posts"  style="background-image: url(\''.$imageurl.'\'); width: 100%;">'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div><div class="wordbyside" style="width: 98%; border-top: none; overflow: hidden;"> <a  href="'.$newssource.'.php">
 <div class="firstword"><span style="color: #bb3b80;">'.$newcategory.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div>';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `content`, `newcategory`, `subtopic` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' ORDER BY `post_id` DESC";
		$resulti= $this->mysqli->query($queryi);
		$tt=0;while($tt < 4){
		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$subtopici = $rowi['subtopic'];
	$contentdi=$rowi['content'];
	$ai = new DateTime($datei);
	$excerpti=$row['excerpt'];
	$newcategory=$row['newcategory'];
	if($titledi != $titled){

	$lil=$titledi;

  $now=strtotime("now");
     $postdate =strtotime($datei);
     $iyato = $now - $postdate;



     if ($iyato<259200){


	$response .='</a><a href="'.$newssourcei.'.php"><div class="firstword secondword thirty"><span style="color: #bb3b80;">'.$subtopici.'</span> '.$lil.'</div></a>';
}	} }$tt++;}
		 $response .='</div></div></div>';
		 $response.='<div class="advert"></div>'.'<div class="postsside" style=" background-color:white; padding-right: 20px;
border-right: 1px solid #eee;">';
		 }

   elseif($i==4 || $i==5 || $i==6   ){ $response.='<div class="advert"></div>'.'<div style="height:auto; border-top-color: #bb3b80;" class="postsside postside2">';
   if($i == 4){$response.='<div class="postssideimage" style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
   <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #bb3b80;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
    elseif($i==5 || $i==6 ){$response.='<div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #bb3b80;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
  $response .='</div>';
 }



 elseif($i==7 ){ $response.='</div><div class="advert"></div>'.'<div class="postsside" style="height:544px; background-color:white;">';

    $response.='<div class="advert"></div>'.'<div style="height:auto; border-top-color: #bb3b80;" class="postsside postside2"><div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #bb3b80;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display:none;" class="secondword">'.$excerpt.'</div></a>';
  $response .='</div>';

 }
 elseif($i==8|| $i==9 || $i==10 || $i==11 || $i==12 ){
    $response.='<div class="advert"></div>'.'<div style="height:auto; border-top-color: #bb3b80;" class="postsside postside2"><div class="postssideimage" style="background-image: url(\''.$imageurl.'\'); display: none;"></div>'.'
<i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #ff5300; color: white; margin-bottom: 6px; margin-top: 0px; margin-left: 0px;padding: 5px 10px; display: none;" onclick="sharedata(\''.$titled.'\');"></i>
<div class="imagetitle">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="blacktransparent" style="display: none;"><div class="title" style="display: block;
    "><div style="font-family: effra,helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 13px;
    text-transform: uppercase;
    color: #ff5300;
    text-shadow: none;
    margin-bottom: 7.5px;
    height: 13px;">'.$newcategory.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #bb3b80;">'.$newcategory.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;"class="secondword">'.$excerpt.'</div></a>';
  $response .='</div>';

 }

 elseif($i==13 ){ $response.='</div>';}





   $i++; }



   }else{
	   $response = '<response> No Post Here';
   }

$response .= '</response>';

return $response;}}
 $blsssogg = new blsssog();
echo $blsssogg->igg();


?>







</div>




<div class="blackbackground" style="float: LEFT;
    float: LEFT;
    MARGIN-LEFT: -5%;
    width: 112%;
    background-color: black;">
<div style="color:#ff5300; border-bottom: 2px solid #ff5300; margin-bottom: -1px; padding: 10px;    color: #ff5300;
    border-bottom: 2px solid #ff5300;
    margin-bottom: 0px;
    padding: 10px;
    padding-top: 40px;
    clear: both;
    font-weight: bold;
    width: 140px;" id="photonewsie">PHOTO NEWS</div><hr style="color: white; margin: 0;">
<div class="postss">

<?php



require_once('config.php');
 Class blag{
 private $mysqli;

	function __construct(){
		$this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
	}
	function __destruct(){$this->mysqli->close();}
	private function likenumber ($titled,$categoried){
$title=$this->mysqli->real_escape_string($titled);
	$category=$this->mysqli->real_escape_string($categoried);
$query="SELECT `title`, `category` FROM `likes` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;




	}
	private function commentnumber ($title,$category){
$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="SELECT `title`, `category` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;
}

public function igg(){

 $query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content` FROM `posts`
		WHERE `category` ='photo' ORDER BY `post_id` DESC ";

		$result=$this->mysqli->query($query);
$response = '<response>';
 if($result->num_rows){$i=0;

 while($row=$result->fetch_array(MYSQLI_ASSOC)){



	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$contentd=$row['content'];
	$a = new DateTime($date);

$b = new DateTime(date('y-m-d H:i:s', time()));
$interval = $a->diff($b);
$difff=$interval->days.'days';


 $seconds  = strtotime('- 1 hour') - strtotime($date);

        $months = floor($seconds / (3600*24*30));
        $day = floor($seconds / (3600*24));
        $hours = floor($seconds / 3600);
        $mins = floor(($seconds - ($hours*3600)) / 60);
        $secs = floor($seconds % 60);

        if($seconds < 60){
		$diff = $secs." seconds ago";}
        else if($seconds > 60 && $seconds < 60*2)
		{$diff = $mins." minute ago";}
	 else if($seconds > 60*2 && $seconds < 60*60)
		{$diff = $mins." mins ago";}
        else if($seconds >60*60 && $seconds < 60*60*2)
		{$diff = $hours." hour ago";}
else if($seconds > 60*60*2 && $seconds < 60*60*24)
		{$diff = $hours." hours ago";}

	   else if($seconds > 24*60*60 && $seconds < 60*60*24*2)
            {$diff = $day." day ago";}
else if($seconds > 24*60*60*2 && $seconds < 60*60*24*30)
            {$diff = $day." days ago";}

	   else if($seconds > (3600*24*30) && $seconds < 3600*24*30*2){
            $diff = $months." months ago";

        }
		else if($seconds > 3600*24*30*2){
            $diff = $months." months ago";

        }


	$contentdbawo=htmlentities($contentd);
	$find=substr($contentdbawo, 197, 200);
	$contentdbawo1=str_replace( $find, '...', $contentdbawo);
		$contenttd=substr($contentdbawo1, 0, 200);
		$contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
		$contenttdt=substr($contentdbawo, 0, 200);
		$contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

		$contenttded=substr($contentdbawo, 200, strlen($contentdbawo));
		$contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
	$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
	$contentedt.$contentededed.'</div>';
	if(strlen($contentdbawo)>200){

	$rmore=' <span class="readmore"><a href="'.$newssource.'.php">Readmore.....</a></span>';}
 else{$rmore="";}



	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
	$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
   $editnews='<input type="button" style ="display:none" value="edit news" id="'.$titled.'4" onclick=
      "editei(\''.$titled.'\', \''.$categoried.'\');">';
   $backbutto='<input type="button" value="BACK" id="'.$titled.'5" onclick=
   "backbutto(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$backtolist='<input type="button" value="BACK TO HEADLINES" id="'.$titled.'6"
style="color:blue"
onclick="listtopics(\''.$categoried.'\');">';
$contentedt='';
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
   $now = strtotime("now");

   $postdate =strtotime($date);
   $iyato = $now - $postdate;



   if ($iyato<3888000){
 $response.='<div class="advert"></div>'.'<div class="postisss" style="border-bottom: none; height: 370px;"><i class="fa fa-share-alt" style="font-size: 17px; padding: 5px 10px;  background-color: #ff5300; color: white; margin-bottom: 6px; position: absolute; margin-top: 0px; margin-left: 0px; " onclick="sharedata(\''.$titled.'\');"></i>'.'

<div class="imagetitle" style="display:block; overflow: hidden; height: 200px; padding-top: 0px;"><div class="photo"style=""> <i class="fas fa-camera-retro" ></i></div>


<img src="'.$imageurl.'"  alt="'.$titled.'" style="height: auto;
    width: 100%;
"></div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="category" style="display: none; margin-top: 10px; margin-bottom: 20px; color:
#ff5300;font-weight: bold; text-transform: uppercase; ">'.$categoried.'</div> '.'<div class="title">'.'<a href="'.$newssource.'.php" style="color: #FFFFFF; font-weight: bold; "> PHOTONEWS: '.$titled.'</a></div><div class="postsbase">
<div class="share"><span class="iconshare">  <hr style="color: #dddddd; display: none;"></span> <span class="comments" style="display: block; margin-top: 8px; float: left; color: #898c8d;">'.$inputs.' comments  </span><span class="comments" style="display: block; margin-top: 8px; float: left; color: #898c8d;"> . '.$diff.'</span></div>'.'</div>'.'</div>'
 ;}}}else{
	 $response='<response> No Post Here';
 }

$response .= '</response>';

return $response;}}
 $blagg = new blag();
echo $blagg->igg();


?>







</div></div>
<div id="otherlateststoriesie" class="postesses" style="margin-top: 40px; margin-bottom: 40px; clear: both;">


<?php



require_once('config.php');
 Class bli{
 private $mysqli;

	function __construct(){
		$this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
	}
	function __destruct(){$this->mysqli->close();}
	private function likenumber ($titled,$categoried){
$title=$this->mysqli->real_escape_string($titled);
	$category=$this->mysqli->real_escape_string($categoried);
$query="SELECT `title`, `category` FROM `likes` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;




	}
	private function commentnumber ($title,$category){
$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="SELECT `title`, `category` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;
}

public function igg(){
	$queryid="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content` FROM `posts`
		ORDER BY `post_id` DESC LIMIT 1";
		$resultid=$this->mysqli->query($queryid);
		if($resultid->num_rows){

 while($rowid=$resultid->fetch_array(MYSQLI_ASSOC)){
		$id=$rowid['post_id'];
		}}
		 $idupper=$id-10;
		$idlower=$id-30;
	$query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content` FROM `posts`
	WHERE `post_id` BETWEEN $idlower  AND $idupper ORDER BY `post_id` DESC ";



		$result=$this->mysqli->query($query);
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
 if($result->num_rows){$i=0;

 while($row=$result->fetch_array(MYSQLI_ASSOC)){

	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$contentd=$row['content'];
	$a = new DateTime($date);

$b = new DateTime(date('y-m-d H:i:s', time()));
$interval = $a->diff($b);
$difff=$interval->days.'days';


 $seconds  = strtotime('- 1 hour') - strtotime($date);

        $months = floor($seconds / (3600*24*30));
        $day = floor($seconds / (3600*24));
        $hours = floor($seconds / 3600);
        $mins = floor(($seconds - ($hours*3600)) / 60);
        $secs = floor($seconds % 60);

        if($seconds < 60){
		$diff = $secs." seconds ago";}
        else if($seconds > 60 && $seconds < 60*2)
		{$diff = $mins." minute ago";}
	 else if($seconds > 60*2 && $seconds < 60*60)
		{$diff = $mins." mins ago";}
        else if($seconds >60*60 && $seconds < 60*60*2)
		{$diff = $hours." hour ago";}
else if($seconds > 60*60*2 && $seconds < 60*60*24)
		{$diff = $hours." hours ago";}

	   else if($seconds > 24*60*60 && $seconds < 60*60*24*2)
            {$diff = $day." day ago";}
else if($seconds > 24*60*60*2 && $seconds < 60*60*24*30)
            {$diff = $day." days ago";}

	   else if($seconds > (3600*24*30) && $seconds < 3600*24*30*2){
            $diff = $months." months ago";

        }
		else if($seconds > 3600*24*30*2){
            $diff = $months." months ago";

        }


	$contentdbawo=htmlentities($contentd);
	$find=substr($contentdbawo, 197, 200);
	$contentdbawo1=str_replace( $find, '...', $contentdbawo);
		$contenttd=substr($contentdbawo1, 0, 200);
		$contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
		$contenttdt=substr($contentdbawo, 0, 200);
		$contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

		$contenttded=substr($contentdbawo, 200, strlen($contentdbawo));
		$contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
	$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
	$contentedt.$contentededed.'</div>';
	if(strlen($contentdbawo)>200){

	$rmore=' <span class="readmore"><a href="'.$newssource.'.php">Readmore.....</a></span>';}
 else{$rmore="";}



	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
	$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
   $editnews='<input type="button" style ="display:none" value="edit news" id="'.$titled.'4" onclick=
      "editei(\''.$titled.'\', \''.$categoried.'\');">';
   $backbutto='<input type="button" value="BACK" id="'.$titled.'5" onclick=
   "backbutto(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$backtolist='<input type="button" value="BACK TO HEADLINES" id="'.$titled.'6"
style="color:blue"
onclick="listtopics(\''.$categoried.'\');">';
$contentedt='';
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $response.='<div class="advert"></div>'.'<div class="postisis" style="border-bottom: none; height: 370px;"><i class="fa fa-share-alt" style="font-size: 17px; padding: 5px 10px;  background-color: #ff5300; color: white; margin-bottom: 6px; position: absolute; margin-top: 0px; margin-left: 0px; " onclick="sharedata(\''.$titled.'\');"></i>'.'

<div class="imagetitle" style="display:block; height:200px; overflow:hidden;  padding-top: 0px;">
<img src="'.$imageurl.'" alt="'.$titled.'" style="height: auto;
    width: 100%;
">
</div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="category" style="display: block; margin-top: 10px; margin-bottom: 20px; color:
#ff5300;font-weight: bold; text-transform: uppercase; ">'.$categoried.'</div> '.'<div class="title">'.'<a href="'.$newssource.'.php" style="color: #222323; font-weight: bold; ">'.$titled.'</a></div><div class="postsbase">
<div class="share"><span class="iconshare">  <hr style="color: #dddddd;"></span> <span class="comments" style="display: block; margin-top: 8px; float: left; color: #898c8d;">'.$inputs.' comments  </span><span class="comments" style="display: block; margin-top: 8px; float: left; color: #898c8d;"> . '.$diff.'</span></div>'.'</div>'.'</div>'
 ;}}else{
	 $response= '<response> No Post Here';
 }

$response .= '</response>';

return $response;}}
 $blki = new bli();
echo $blki->igg();


?>
</div>
<div class="blackbackground" style="float: LEFT;
    float: LEFT;
    MARGIN-LEFT: -5%;
    width: 112%;
    background-color: black;">
<div style="color:#ff5300; border-bottom: 2px solid #ff5300; margin-bottom: -1px; padding: 10px;    color: #ff5300;
    border-bottom: 2px solid #ff5300;
    margin-bottom: 0px;
    padding: 10px;
    padding-top: 40px;
    clear: both;
    font-weight: bold;
    width: 140px;" id="videonewsie">VIDEO NEWS</div><hr style="color: white; margin: 0;">
<div class="postss">

<?php



require_once('config.php');
 Class blakg{
 private $mysqli;

	function __construct(){
		$this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
	}
	function __destruct(){$this->mysqli->close();}
	private function likenumber ($titled,$categoried){
$title=$this->mysqli->real_escape_string($titled);
	$category=$this->mysqli->real_escape_string($categoried);
$query="SELECT `title`, `category` FROM `likes` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;




	}
	private function commentnumber ($title,$category){
$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="SELECT `title`, `category` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
if($result->num_rows){
$responsess=$result->num_rows;
}else{$responsess=0;}
return $responsess;
}

public function igg(){

 $query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content` FROM `posts`
		WHERE `category` ='video' ORDER BY `post_id` DESC ";

		$result=$this->mysqli->query($query);
$response = '<response>';
 if($result->num_rows){$i=0;

 while($row=$result->fetch_array(MYSQLI_ASSOC)){

	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$contentd=$row['content'];
	$a = new DateTime($date);

$b = new DateTime(date('y-m-d H:i:s', time()));
$interval = $a->diff($b);
$difff=$interval->days.'days';


 $seconds  = strtotime('- 1 hour') - strtotime($date);

        $months = floor($seconds / (3600*24*30));
        $day = floor($seconds / (3600*24));
        $hours = floor($seconds / 3600);
        $mins = floor(($seconds - ($hours*3600)) / 60);
        $secs = floor($seconds % 60);

        if($seconds < 60){
		$diff = $secs." seconds ago";}
        else if($seconds > 60 && $seconds < 60*2)
		{$diff = $mins." minute ago";}
	 else if($seconds > 60*2 && $seconds < 60*60)
		{$diff = $mins." mins ago";}
        else if($seconds >60*60 && $seconds < 60*60*2)
		{$diff = $hours." hour ago";}
else if($seconds > 60*60*2 && $seconds < 60*60*24)
		{$diff = $hours." hours ago";}

	   else if($seconds > 24*60*60 && $seconds < 60*60*24*2)
            {$diff = $day." day ago";}
else if($seconds > 24*60*60*2 && $seconds < 60*60*24*30)
            {$diff = $day." days ago";}

	   else if($seconds > (3600*24*30) && $seconds < 3600*24*30*2){
            $diff = $months." months ago";

        }
		else if($seconds > 3600*24*30*2){
            $diff = $months." months ago";

        }


	$contentdbawo=htmlentities($contentd);
	$find=substr($contentdbawo, 197, 200);
	$contentdbawo1=str_replace( $find, '...', $contentdbawo);
		$contenttd=substr($contentdbawo1, 0, 200);
		$contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
		$contenttdt=substr($contentdbawo, 0, 200);
		$contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

		$contenttded=substr($contentdbawo, 200, strlen($contentdbawo));
		$contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
	$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
	$contentedt.$contentededed.'</div>';
	if(strlen($contentdbawo)>200){

	$rmore=' <span class="readmore"><a href="'.$newssource.'.php">Readmore.....</a></span>';}
 else{$rmore="";}



	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
	$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
   $editnews='<input type="button" style ="display:none" value="edit news" id="'.$titled.'4" onclick=
      "editei(\''.$titled.'\', \''.$categoried.'\');">';
   $backbutto='<input type="button" value="BACK" id="'.$titled.'5" onclick=
   "backbutto(\''.$titled.'\', \''.$categoried.'\', \''.$i.'\');">';
$backtolist='<input type="button" value="BACK TO HEADLINES" id="'.$titled.'6"
style="color:blue"
onclick="listtopics(\''.$categoried.'\');">';
$contentedt='';
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
   $now = strtotime("now");

   $postdate =strtotime($date);
   $iyato = $now - $postdate;



   if ($iyato<3888000){
 $response.='<div class="advert"></div>'.'<div class="postisss" style="border-bottom: none; height: 370px;"><i class="fa fa-share-alt" style="font-size: 17px; padding: 5px 10px;  background-color: #ff5300; color: white; margin-bottom: 6px; position: absolute; margin-top: 0px; margin-left: 0px; " onclick="sharedata(\''.$titled.'\');"></i>'.'

<div class="imagetitle" style="display:block; height: 200px; overflow:hidden; padding-top: 0px;"><div class="photo"style=""> <i class="fas fa-play" style="color: white;"></i></div>


<img src="'.$imageurl.'" alt="'.$titled.'" style="height: auto; width: 100%;"></div>'.'<div class="littleword" style="display: none;">
 '.$contentedt.'</div>'.'<div class="category" style="display: none; margin-top: 10px; margin-bottom: 20px; color:
#ff5300;font-weight: bold; text-transform: uppercase; ">'.$categoried.'</div> '.'<div class="title">'.'<a href="'.$newssource.'.php" style="color: #FFFFFF; font-weight: bold; ">'.$titled.'</a></div><div class="postsbase">
<div class="share"><span class="iconshare">  <hr style="color: #dddddd; display: none;"></span> <span class="comments" style="display: block; margin-top: 8px; float: left; color: #898c8d;">'.$inputs.' comments  </span><span class="comments" style="display: block; margin-top: 8px; float: left; color: #898c8d;"> . '.$diff.'</span></div>'.'</div>'.'</div>'
 ;}}}else{
	 $response = '<response> No Post Here';
 }

$response .= '</response>';

return $response;}}
 $blagkg = new blakg();
echo $blagkg->igg();


?>







</div></div>


<div class="disabled" style="display:none;"> <a href="#"> << Previous </a></div>
<span class="next" style ="color: #5b091c; font-family: PT Sans, serif; margin-left: 10px; margin-right: 20px; display: none; background-color: white;  border: 1px solid #bbb; border-radius: 10px; padding: 10px; margin-bottom: 20px; position: relative; z-index: 222222222222222222222222; margin: 10px; float: left;"><a href="page2.php">
Next >> </a></span>
</div>
</div>
</div></div>
<footer>
  <div id="footercontainer">
<div id="topfooter">
<div id="toprightfooter">
  <div id="footerlogo">
<img src="http://jineosy.com/jb.jpg">
  </div>
  Jineosy is a news website that informs users and visitors on the latest news on entertainment, politics, and latest fashion.
	This is done through the use of videos, text and photos.

</div>
<div id="topleftfooter">
  <form action="search.php" method="GET">
  <input type="text" name="text" placeholder="Search" class="searchinputs" style="  "><button type="submit" value="" style=" width: 40px;

padding: 8px;

background-color: #373839;

outline: none;

border: 2px solid #373839;

margin-left: -2px;

color: #c4c6c6;"><i class="fa fa-search" style="position: relative"></i></button></form>
<div class="latestdes" style="margin-bottom: -6px; margin-top:28px; padding: 0px; font-family: effra,helvetica neue,Helvetica,Arial,sans-serif; padding-bottom:10px; font-weight: 600;" id="lateststoriesie"> CONNECT WITH US</div>
<hr class="hrlatest" style="color: white; width:100%; float: none;  margin-bottom: 28px;">
<div class="socialmedia" id="socialmedia" style="clear: none; margin-bottom: 32px;
">
<div id="twitterfooter"><a href="https://twitter.com/jineosy" class="fab fa-twitter"style="  color: white;
  background-color: #6eaee4;"></a> <span style="font-family: effra,'helvetica neue',Helvetica,Arial,sans-serif; color: #c4c6c6;
">FOLLOW US ON TWITTER</span></div>
<div id="facebookfooter"><a href="https://www.facebook.com/jineosy" class="fab fa-facebook" style="background-color: #3b5998;"></a>
  <span style="font-family: effra,'helvetica neue',Helvetica,Arial,sans-serif; color: #c4c6c6;
  ">LIKE US ON FACEBOOK</span></div>
<div id="instagramfooter"><a href="https://www.instagram.com/jinoesblog/" class="fab fa-instagram"style="color: wheat;
  background-color: #2f55a4"></a><span style="font-family: effra,'helvetica neue',Helvetica,Arial,sans-serif; color: #c4c6c6;
">FOLLOW US ON INSTAGRAM</span></div>
<div id="linkedinfooter"><a href="https://www.linkedin.com/in/sodiq-isiaka-24192b180?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BWG3IqXLuTI2DMbxzK7jiOg%3D%3D" class="fab fa-linkedin"style="color: white;
  background-color: #3b5998;"></a><span style="font-family: effra,'helvetica neue',Helvetica,Arial,sans-serif; color: #c4c6c6;
">FOLLOW US ON LINKEDIN</span></div>
<div id ="youtubefooter"><a href="https://www.youtube.com/channel/UCdnvbmn2Rr2TTbkKFBlcf5g" class="fab fa-youtube" style="color: red;
  background-color: #ffffff;
  /* border: 1px solid white;
  /*box-shadow: 0.5px 0.5px 3px 1.5px #bbb;
  ">
</a>
<span style="font-family: effra,'helvetica neue',Helvetica,Arial,sans-serif; color: #c4c6c6;
">WATCH US ON YOUTUBE</span>
</div>
</div>
</div>
</div>
<div id="downfooter">
<div id="aboutjineosy">
  <div class="latestdes" style="margin-bottom: -6px; margin-top:28px; padding: 0px; font-family: effra,helvetica neue,Helvetica,Arial,sans-serif; padding-bottom:10px; font-weight: 600;"id="lateststoriesie">JINEOSY</div>
  <hr class="hrlatest" style="color: white; width:100%; float: none;  margin-bottom: 28px;">
  <ul style="list-style-type: none;
    padding: 0;
    padding-left: 5px;">
<li>
  <a href="#">
About
</a>
</li>
<li>
  <a href="#" onclick="showadvert();">
Contact Us
</a>
</li>
<li>
  <a href="#" onclick="showadvert();">
Advertise
</a>
</li>
<li>
  <a href="newsfeed.xml">
RSS Feeds
</a>
</li>
  </ul>

</div>
<div id="newsauthor">
  <div class="latestdes" style="margin-bottom: -6px; margin-top:28px; padding: 0px;  font-family: effra,helvetica neue,Helvetica,Arial,sans-serif; padding-bottom:10px; font-weight: 600;"id="lateststoriesie"> NEWS AUTHORS</div>
  <hr class="hrlatest" style="color: white; width:100%; float: none;  margin-bottom: 28px;">
  <ul style="list-style-type: none;
    padding: 0;
    padding-left: 5px;">
  <li>
  <a href="#" >
  John Ogoma
  </a>
  </li>
  <li>
  <a href="#" >
  Sodiq Isiaka
  </a>
  </li>

  </ul>
</div>
<div id="sections">
  <div class="latestdes" style="margin-bottom: -6px; margin-top:28px; padding: 0px;  font-family: effra,helvetica neue,Helvetica,Arial,sans-serif; padding-bottom:10px; font-weight: 600;"id="lateststoriesie"> SECTIONS</div>
  <hr class="hrlatest" style="color: white; width:100%; float: none;  margin-bottom: 28px;">


<ul id="footersections"style="list-style-type: none;
  padding: 0;
  padding-left: 5px;">

  <li >
          <a href="index.php" style="color: #ff5306;" > Home</a>
        </li>
        <li>
          <a href="news.php"> News</a>
        </li>
        <li>
          <a href="events.php"> Events</a>
        </li>
        <li>
          <a href="entertainment.php"> Entertainment</a>
        </li>
        <li>
          <a href="lifestyle.php"> LifeStyle</a>
        </li>
        <li>
          <a href="fashion.php"> Fashion</a>
        </li>
   <li>
          <a href="beauty.php"> Beauty</a>
        </li>
  	  <li>
          <a href="inspiration.php"> Inspiration</a>
        </li>
  	   <li>
          <a href="gossip.php"> Gossip</a>
        </li>
  	  <?php
  	  require'init.php';
  	 $query="SELECT `id`, `name` FROM `category` ORDER BY `id` DESC";
  	 $query_run=mysqli_query($connection, $query);
  		if(mysqli_num_rows($query_run) == 0)
  		{

  		}
  		else
  		{
  			while($row=mysqli_fetch_assoc($query_run))
  			{
  				  $category=$row['name'];
  				  if($category != 'News' && $category != 'Events' && $category != 'Entertainment'
  && $category != 'LifeStyle'	&& $category != 'Fashion' && $category != 'Beauty' && $category != 'Inspiration'&& $category != 'Gossip'			  ){

  			echo' <li>
          <a href="categorysearch.php?text='.$category.'"> '.$category.' </a>
        </li>';
  }
  			}
  		}





  	  ?>






</ul>
</div>
</div>
<div id ="copyright" style="text-align: center; width: 95%; font-family: 'helvetica neue',Helvetica,Arial,sans-serif; color: #898c8d;">
&copy; copyright Jineosy 2020. All rights reserved.
<br /></div>

        <div style="color: white; font-family: PT Sans; font-size: 15px;text-align:center; margin-top:20px; color:#898c8d; clear: both; color: #ff5306; padding-bottom: 10px;"> Website Designed By Functions Web Development. Contact: assidiiq25@gmail.com</div>

</div>
</div>
</footer>
<script src="johni.js"></script>
<script>
n=1;
function showDivs() {

    var i;
    var x = document.getElementsByClassName("mySlides");




	if(x[0].style.display =="block"){

		x[0].style.display = "none";
		x[1].style.display = "block";
	}else{
		x[0].style.display = "block";
		x[1].style.display = "none";
	}

}
function showDivis(n) {

    var i;
    var x = document.getElementsByClassName("mySlides");

    if (n > x.length) {slideIndex = 1};
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {

        x[i].style.display = "none";
    }

    x[slideIndex-1].style.display = "block";
	setTimeout(showDivs(n+1), 10000);

}

slideIndex=1;
setInterval(showDivs, 10000);

</script>

</body>
</html>
