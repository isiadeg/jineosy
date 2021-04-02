<?php
require_once('config.php');
require_once('error_handler.php');
Class blog{
	private $mysqli;
	private $cho = <<<'EOF'
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=PT Sans">
					  <link href="footer.css" rel="stylesheet" type="text/css">
		  <link href="https://fonts.googleapis.com/css?family=Stardos+Stencil:400,700" rel="stylesheet">
  <link href="johni.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Stardos+Stencil:400,700" rel="stylesheet">
  <link href="johni.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Manuale:700" rel="stylesheet">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link href="https://fonts.googleapis.com/css?family=Neuton" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Cantarell" rel="stylesheet">
<style>
header{
	overflow:hidden;
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
footer ul{


}

.postisss .fa, .fas {

    font-size: 30px;
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
.headeradvert{
	background-color: #ffffff;
}
.mySlides{
	margin: 20px 5%;



}
.dontshow{
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

	.dontshows{
	display: none;
}

}
@media only screen and (min-width: 320px) and (max-width: 387px){
	.dontshow{
	display: none;
}

	.subscribe{
	display: block;
}
	.asignin{
		display: block;
	}
}
@media only screen and (min-width: 743px) and (max-width: 1279px){
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
.dontshow, .dontshow:hover{
	display:block;
}
.asignin{
		display: block;
	}

}
@media only screen and (min-width: 1280px) {
	header{
	overflow: unset;
}
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
    margin-left: 70%;
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
}
<style>

.postisss .fa, .fas {

    font-size: 30px;
}
.postside2{
	width: 100%;


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
	margin-top: 58px;
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
@media only screen and (min-width: 743px) and (max-width: 1279px){
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
}
.asignin{
		display: block;
	}
}
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


#sitemap, #contacting{
	width: 49%;
	CLEAR:NONE;
	float: left;
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
    display:block;
}
}
</style>
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
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="409379624889-dro1j1h7hrhkgum7jrvoou87q2fatmmu.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>
<body>
<?php if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }

    require'init.php';
	$query1="SELECT `ip`,`eachpages` FROM `visitors ip` WHERE
	 `eachpages`='".basename($_SERVER['SCRIPT_FILENAME'])."' AND `ip` = '".$ip."'";

	 $query_run1=mysqli_query($connection, $query1);
if(mysqli_num_rows($query_run1) == 0)
		{



	 $query="INSERT INTO `visitors ip` SET `ip`= '".$ip."',
	 `eachpages`='".basename($_SERVER['SCRIPT_FILENAME'])."'";

	 $query_run=mysqli_query($connection, $query);

		 $query2="SELECT `visitcount` FROM `posts` WHERE
	 `eachpages`='".basename($_SERVER['SCRIPT_FILENAME'])."'";

	 $query_run2=mysqli_query($connection, $query2);

		while($row2=mysqli_fetch_assoc($query_run2)){
	$count=$row2['visitcount'];
	$add=$count+1;

	$query3="UPDATE `posts` SET `visitcount`= '".$add."' WHERE
	 `eachpages`='".basename($_SERVER['SCRIPT_FILENAME'])."'";

	 $query_run3=mysqli_query($connection, $query3);


		}

}	else{
		}


?>
<div id="realunmovable" style="position: fixed; top:0px; left: 0px; padding-bottom:6px; height:14px;
box-shadow: 0px -6px 12px 3px rgb(144, 140, 140); width: 100%; z-index: 3000000000009;background-color: #eeeeee;">
<div id="twittershare" style="display: inline-block; 
background-color: blue;"><i class="fab fa-twitter"style="background-color: transparent;
    color: #ffffff;
    margin-top: 0px;
    padding: 0px;
     font-size: 13px; 
    text-align: center; 
    text-decoration: none; 
    /* margin-right: 10px;"></i><a class="twitter-share-button"  
  STYLE="font-size: 12px;
      HEIGHT: 2PX;
    margin-top: 0px;
   
  margin-right: 10px;
z-index: 30000000000000;
background-color:blue;
color: white;
text-decoration: none;
padding-top: 1px;
    padding-bottom: 0px;"
  href="https://twitter.com/intent/tweet?text=<?php require'init.php';
  $query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content`, `excerpt` FROM `posts`
		WHERE `eachpages` ='".basename($_SERVER['SCRIPT_FILENAME'])."' ORDER BY `post_id` DESC LIMIT 100";

		$result=mysqli_query($connection, $query);

 while($row=mysqli_fetch_assoc($result)){

	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$contentd=$row['content'];
 $excerpt=$row['excerpt'];
 echo $excerpt.' http://jineosy.com/'.basename($_SERVER['SCRIPT_FILENAME']) ;}?>"
  url="http://jineosy.com"
  data-size="large">
Tweet</a></div>
<div class="fb-share-button" style="
  margin-right: 10px;
font-size: 12px;
    color: #ffffff;
  background-color: #3b5998;
  z-index: 30000000000000;
  display: inline-block;"
    data-href="http://jineosy.com/<?php echo basename($_SERVER['SCRIPT_FILENAME']);?>"
    data-layout="button_count"></div>
	<div class="fb-share-button" style="position: fixed;
    padding: 10px;
    margin-top: 140px;
    left: 10px;
    z-index: 30000000000000;
	background-color: blue;
	color: white;
	text-decoration: none;
	display: none;"></div><div id="whatsappdiv" style="display: inline-block; 
background-color: blue; margin-left:-7px;">
    <i class="fab fa-whatsapp"  style="background-color: transparent;
    color: #ffffff;
    margin-top: 0px;
    padding: 0px;
     font-size: 13px; 
    text-align: center; 
    text-decoration: none; "></i><a style="text-decoration: none; color:white;" href="https://api.whatsapp.com/send?text=<?php require'init.php';
  $query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content`, `excerpt` FROM `posts`
		WHERE `eachpages` ='".basename($_SERVER['SCRIPT_FILENAME'])."' ORDER BY `post_id` DESC LIMIT 100";

		$result=mysqli_query($connection, $query);

 while($row=mysqli_fetch_assoc($result)){

	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$contentd=$row['content'];
 $excerpt=$row['excerpt'];
 echo $excerpt.' http://jineosy.com/'.basename($_SERVER['SCRIPT_FILENAME']) ;}?>">Whatsapp</a></div>
	<div id="details" style="display: inline-block;
    float: right;
    margin-right: 2px;
	font-size:12px;">
  <details >
  <summary>
  Navigation
  </summary>
  <ul style="padding-inline-start: 10px;">
  <li>
  <a href="#relatedpostie">Related posts</a>
  </li>

  <li>
  <a href="#commentie">comments</a>
  </li>
  </ul>


  </details>
  </div>
  </div>
<div id="advert" class="headeradvert" style="overflow: hidden;"><a href="http://jineosy.com" class="mySlides" style="display: block;"><img src="ppm0000.jpg"></a><a href="https://nigeria-current-news.firebaseapp.com" style="display: none;"class="mySlides"><img src="banner0000.jpg"></a></div>
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

</div>
  <div class="jagbajantis">
<a href="admin.php" style="" class="signin headerjagba">Nigerian News</a>


</div>
  <div class="headerword">
    <a class="headerhomepage" style="font-weight: bold; font-size: 1.8em; color: white; font-family: GuardianTextEgyptianWeb,Georgia,serif;Georgia,serif;" href="#"><IMG src="Untited-4-Recovered0000.jpg"></a>
  </div>
  <a href="#" style="" class="search headerjagba"> Search</a>

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
   <a  href="categorysearch.php?text=opinion"> Opinion</a>
      </li>


	  <li style="border-top: 1px solid #506991;">
   <a  href="categorysearch.php?text=sports"> Sport</a>
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
 </nav>

 </div>


</header>
<div class="wrapper" id="wrapper">
<div class="dropbtn" id="dropbtn"> <span class="bar"></span>
    <span class="bar"></span>
  <span class="bar"></span></div><div class="socialmedia" id="socialmedia" style="clear: none;">
 <a href="https://twitter.com/jineosy" class="fab fa-twitter" style="    color: white;
    background-color: #6eaee4;"></a>
<a href="https://www.facebook.com/jineosy" class="fab fa-facebook" style="background-color: #3b5998;"></a>
<a href="https://www.instagram.com/jinoesblog/" class="fab fa-instagram" style="color: wheat;
    background-color: #2f55a4"></a>
<a href="https://www.linkedin.com/in/sodiq-isiaka-24192b180?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BWG3IqXLuTI2DMbxzK7jiOg%3D%3D" class="fab fa-linkedin" style="color: white;
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

<div class="postss">





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

 $query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `newcategory`, `subtopic`, `content`, `excerpt` FROM `posts`
		WHERE `eachpages` ='".basename($_SERVER['SCRIPT_FILENAME'])."' ORDER BY `post_id` DESC LIMIT 100";

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
		$newcategory=$row['newcategory'];
		$subtopic=$row['subtopic'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$contentd=$row['content'];
	$excerpt=$row['excerpt'];
	$a = new DateTime($date);
	$dac=date_create($date);
	$dddddd= date_format($dac,"M d, Y ");
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
	$find=substr($contentdbawo, 450, 453);
	$contentdbawo1=str_replace( $find, '..>', $contentdbawo);
		$contenttd=substr($contentdbawo1, 0, 453);
		$contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
		$contenttdt=substr($contentdbawo, 0, 453);
		$contentedt=html_entity_decode($contenttdt, ENT_COMPAT, "ISO8859-1");

		$contenttded=substr($contentdbawo, 453, strlen($contentdbawo));
		$contentededed=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
	$contenteded='<div style="display:none" id="'.$categoried.$titled.'contenteded">'.
	$contentedt.$contentededed.'</div>';
	if(strlen($contentdbawo)>453){

	$rmore='<div id="'.$titled.$categoried.'readmore"  style=" background-color: white;
    width: 100%;
    height: 80px;
    margin-top: -80px;
    opacity: 0.8; "><div style="padding-top: 80px;
    /* background-color: white; */
    /* opacity: 0.5; */
    width: 100%;
    height: 0px; "><input type="button" style="padding: 7px 25%;
    margin-left: 10%;
    border: 2px solid #c0c0c0;

    color: #5287bf;
    font-weight: bold;
	background-color: #f7f7f7;

    opacity: 1.0;
" value="Read More" onclick="showrest(\''.$titled.'\', \''.$categoried.'\');"></div></div>';}
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
 $response.='<div class="advert"></div>'.'<div class="posts" style="height: auto;">'.
 '<div class="title">'.'<h1 style="
    text-transform: none;

    text-shadow: none;font-size: 24px;
    font-weight: 600;
    font-style: normal;
    line-height: 30px;
    color: #222323;
	font-family: Cantarell, serif ;">'.$titled.'

</h1></div>'.
'<div class="excerpt">
 '.$excerpt.'</div><hr style="margin: 30px 0;
    border-top: 1px solid #c4c6c6;
    border-bottom: none;">'.'<div class="postdetails" style="height: 50px;font-size: 14px;
    font-weight: 600;
    line-height: 13px;
    color: #898c8d;
    text-shadow: none;
	FONT-FAMILY: EFFRA;
	text-transform: uppercase;"><div class="johnimage"><img src="john.jpg" style="float:left; border-radius: 100%; max-height: 35px; "></div><div class="by" style="float:left; padding-top: 10px; margin-left: 10px;">BY <a href="sodiq.php"> '. $name.'</a></div><div class="time" style="float:left; padding-top: 10px; margin-left: 30px;">'.$dddddd.' </div></div><div class="imagetitle" style="display:block;">
<img src="'.$imageurl.'">
</div>'.'<div class="littleword" style="clear: both; margin-top: 30px;">
 '.
  '<div id="content">'.
 '<div id="'.$categoried.$titled.'contented">'.$contented.'</div>'.
 '<div style="display:none" id="'.$categoried.$titled.'contenteded">'.$contentd.'</div>'.
$rmore.
 '</div>'.'</div>'.'<div class="postsbase" style="display: none;">
<div class="share"><span class="iconshare"> <i class="fa fa-share-alt" style="font-size: 17px; padding 2px;  background-color: #5b091c; color: white; margin-bottom: 6px;" onclick="sharedata(\''.$titled.'\');"></i> by '.$name.' at '.$date.' </span>| <span class="comments">'.$inputs.' comments </span>'.'</div>'.'</div>'.'</div>'
 ;}}

$response .= '</response>';

return $response;}}
 $blogg = new blog();
echo $blogg->igg();


?>





<div class="advertafter"><a href="http://jineosy.com" class="mySlide" style="display: block; margin:20px; max-width: 100%;margin-bottom: 109px;
    clear:both;
    padding-top: 20px;
"><img src="ppm0000.jpg"></a></div>





<div class="postss"><div class="vertical">
<div class="headlineright" id="relatedpostie">
Related Posts
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
	$query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `newcategory`, `subtopic`,`title`, `category`, `content`, `excerpt` FROM `posts`
		WHERE `eachpages` ='".basename($_SERVER['SCRIPT_FILENAME'])."' ORDER BY `post_id` DESC LIMIT 100";

		$result=$this->mysqli->query($query);
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
 if($result->num_rows){$i=0;

 while($row=$result->fetch_array(MYSQLI_ASSOC)){
	 $choose=$row['category'];
 $query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `newcategory`, `subtopic`, `name`, `title`, `category`, `excerpt`, `content` FROM `posts`
		WHERE `category` ='".$choose."' ORDER BY `post_id` DESC LIMIT 100";

		$result=$this->mysqli->query($query);

 if($result->num_rows){

 while($row=$result->fetch_array(MYSQLI_ASSOC)){

	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newcategory=$row['newcategory'];
	$subtopic=$row['subtopic'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
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
 <div class="firstword"><span style="color: #c70000">'.$categoried.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a><div class="thirdword">';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `tag1`, `newssource`, `name`, `newcategory`, `subtopic`,`title`, `category`, `excerpt`, `content` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' ORDER BY `post_id` ASC ";
		$resulti= $this->mysqli->query($queryi);

		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$contentdi=$rowi['content'];
	$newcategoryi=$rowi['newcategory'];
	$subtopici=$rowi['subtopic'];

	$ai = new DateTime($datei);
	$excerpti=$row['excerpt'];
	if($titledi != $titled){
	$lil=$titledi;}else{$lil ='';}
		}

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
   ; }elseif($i==2 ){$response.='<div class="advert"></div>'.'<div class="heit postsside" ><div class="postssideimage" style="overflow:hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
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
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$categoried.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div></a></div>';}



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
    height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$categoried.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div class="secondword" style="display:none;">'.$excerpt.'</div></a></div>';
 $queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newcategory`, `subtopic`, `newssource`, `name`, `tag1`,`title`, `category`, `excerpt`, `content` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' ORDER BY `post_id` ASC ";
		$resulti= $this->mysqli->query($queryi);
		$tt=0;while($tt < 4){
		while($rowi=$resulti->fetch_array(MYSQLI_ASSOC)){
			$datei=$rowi['posted_on'];
	$namei=strtoupper($rowi['name']);
	$categoriedi=$rowi['category'];
	$newcategoryi=$rowi['newcategory'];
	$subtopici=$rowi['subtopic'];
		$imageurli=$rowi['imageurl'];
	$newssourcei=$rowi['newssource'];
	$titledi=$rowi['title'];
	$tag1=$rowi['tag1'];
	$contentdi=$rowi['content'];
	$ai = new DateTime($datei);
	$excerpti=$row['excerpt'];
	if($titledi != $titled){
	$lil=$titledi;



	$response .='</a><a href="'.$newssourcei.'.php" style="text-decoration: none;"><div  style="border-top: 1px solid #dcdcdc; padding: 3px;" class="firstword secondword thirty dontshow"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</div></a>';}
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
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></div><div class="wordbyside" style="width: 98%; border-top: none; overflow: hidden;"> <a  href="'.$newssource.'.php">
 <div class="firstword"><span style="color: #c70000">'.$categoried.'/</span><span style="color:#121212; ">'.$titled.'</span></div><div class="secondword">'.$excerpt.'</div>';


$queryi="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `tag1`,`title`, `subtopic`, `newcategory`, `category`, `excerpt`, `content` FROM `posts`
		WHERE `newcategory` ='".$newcategory."' ORDER BY `post_id` ASC ";
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



	$response .='</a><a href="'.$newssourcei.'.php"><div class="firstword secondword thirty"><span style="color: #c70000">'.$subtopici.'</span> '.$lil.'</div></a>';}
		  }$tt++;}
		 $response .='</div></div></div>';
		 $response.='<div class="advert"></div>'.'<div class="postsside" style=" background-color:white; padding-right: 20px;
border-right: 1px solid #eee;">';
		 }

   elseif($i==4 || $i==5 || $i==6   ){ $response.='<div class="advert"></div>'.'<div style="height:auto;" class="postsside postside2">';
   if($i == 4){$response.='<div class="postssideimage"  style="overflow: hidden;"><img src="'.$imageurl.'" style="height: 100%;"></div>'.'
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
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
   <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$categoried.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
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
    height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$categoried.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;" class="secondword">'.$excerpt.'</div></a>';}
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
    height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$categoried.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display:none;" class="secondword">'.$excerpt.'</div></a>';
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
    height: 13px;">'.$categoried.'</div>'.'<a href="'.$newssource.'.php">'.$titled.'</a></div><hr style="color: white;margin-right: -20px;
    margin-left: -20px;"> <span class="comments" style="color: #898c8d;">'.$inputs.' comments </span><span style="color: #898c8d;">. '.$diff.'</span> <div class="postsbase">
<div class="share"><span class="iconshare" style="display: none;">  by '.$name.' at '.$date.' </span>| '.'</div>'.'</div>'.'</div></br><a  href="'.$newssource.'.php" style="word-spacing:normal; color: #585858;" >
 <div class="firstword" style="margin-top: -14px; padding:4px;"><span style="color: #c70000">'.$categoried.'/</span><span style="color:#585858; ">'.$titled.'</span></div><div style="display: none;"class="secondword">'.$excerpt.'</div></a>';
  $response .='</div>';

 }

 elseif($i==13 ){ $response.='</div>';}





   $i++; }



   }

$response .= '</response>';

}}return $response;}}
 $blsogg = new blsog();
echo $blsogg->igg();


?>







</div>



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



<div id="commentsection" class="commentsection" style="background-color: #f3f4f4;clear: both;">
<div style="font-weight: 600; font-size: 20px; margin-top: 25px;">Comments</div><?php
require "init.php";
if(isset($_POST['commentname'])&& !empty($_POST['commentname'])){

	if(isset ($_POST['comment'])&& !empty($_POST['comment'])){
$name=$_POST['commentname'];
$comment = $_POST['comment'];

		$name=mysqli_real_escape_string($connection, $name);
		$comment=mysqli_real_escape_string($connection, $comment);
		 $querying="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content`, `excerpt` FROM `posts`
		WHERE `eachpages` ='".basename($_SERVER['SCRIPT_FILENAME'])."' ORDER BY `post_id` DESC LIMIT 100";

		$resulting=mysqli_query($connection, $querying);

 while($rowing=mysqli_fetch_assoc($resulting)){

	$date=$rowing['posted_on'];
	$nam=strtoupper($rowing['name']);
	$categoried=$rowing['category'];
		$imageurl=$rowing['imageurl'];
	$newssource=$rowing['newssource'];
	$titled=$rowing['title'];
	$contentd=$rowing['content'];
 $excerpt=$rowing['excerpt'];
		$query="INSERT INTO `comment` SET `name` ='".$name."',
									`comment`='".$comment."',
										`category`='".$categoried."',
											`title`='".$titled."',
									`pagename`='".basename($_SERVER['SCRIPT_FILENAME'])."'";
									$query_run = mysqli_query($connection, $query);
									$comment=null;

									$query23="SELECT `name`, `comment` FROM  `comment` WHERE `pagename` = '".basename($_SERVER['SCRIPT_FILENAME'])."'";
$query_run23 = mysqli_query($connection, $query23);
if(mysqli_num_rows($query_run23)){


	while($row23 = mysqli_fetch_assoc($query_run23)){
		echo '<div id="peoplescomment"><div style="font-weight: 600; font-size: 20px; margin-top: 15px; margin-bottom: 20px;">'.$row23['name'].'</div>'.$row23['comment'].'</div>';

	}

}
	}}

}
else{
$query="SELECT `name`, `comment` FROM  `comment` WHERE `pagename` = '".basename($_SERVER['SCRIPT_FILENAME'])."'";
$query_run = mysqli_query($connection, $query);
if(mysqli_num_rows($query_run)){


	while($row = mysqli_fetch_assoc($query_run)){
		echo '<div id="peoplescomment"><div style="font-weight: 600; font-size: 20px; margin-top: 15px; margin-bottom: 20px;">'.$row['name'].'</div>'.$row['comment'].'</div>';

	}

}


}
?>
<span style="font-size: 1.5em;" id="commentie"></span>Add your Comment</br>

	<form action="<?php  echo basename($_SERVER['SCRIPT_FILENAME']);  ?>" method = "POST">
<input type="text" name="image" id="image" style="display: none; padding: 10px; width: 95%; margin-bottom: 20px; nborder: 1px solid #bbb;" placeholder="Fullname" >

<input type="text" name="commentname" id="commentname" style="padding: 10px; width: 95%; margin-bottom: 20px; nborder: 1px solid #bbb;" placeholder="Fullname" >
<input type="text" name="gmail" id="gmail" style="padding: 10px; width: 95%; margin-bottom: 20px; border: 1px solid #bbb;" placeholder="gmail" >
<textarea type="text" name="comment" id="comment" style=" height: 100px; margin-bottom: 20px; padding: 10px; width: 95%; border: 1px solid #bbb;" placeholder="comment" >
</textarea>
<input type="submit"  id="commentname" style="padding: 10px; width: 50%; margin-bottom: 20px; nborder: 1px solid #bbb;" placeholder="Fullname" >
</form>
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
<script>
function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        document.getElementById('commentname').value= profile.getName(); // Don't send this directly to your server!
        alert(profile.getName());
       document.getElementById('image').value=profile.getImageUrl());
          document.getElementById('gmail').value=profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
</div>

</div>

<div class="side" style="display:none;">
<div class="advert">


</div>








</div>
<div class="disabled" style="display:none;"> <a href="#"> << Previous </a></div>
<span class="next" style ="color: #5b091c; font-family: PT Sans, serif; margin-left: 10px; margin-right: 20px; display: none; background-color: white;  border: 1px solid #bbb; border-radius: 10px; padding: 10px; margin-bottom: 20px; position: relative; z-index: 222222222222222222222222; margin: 10px; float: left;"><a href="page2.php">
Next >> </a></span>
</div>
</div>
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
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
	$('#content img').attr({
		style: 'height: auto; width: ;'


	});

});
function showrest(sodiq, ope){

	var sodiqwife = ope;

	var opehusband = sodiq;

	var contented=document.getElementById(sodiqwife+opehusband+'contenteded');

	contented.style.display="";
var	miofecontented=document.getElementById(sodiqwife+opehusband+'contented');
miofecontented.innerHTML="";
	miofecontented.style.display="none";
	document.getElementById(opehusband+sodiqwife+'readmore').style.display="none";

}
</script>
</body>
</html>
EOF;

	function __construct(){
		$this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)OR DIE('COULD NOT CONNECT');
	}
	function __destruct(){$this->mysqli->close();}

public 	function listcategories(){
		$query="SELECT `id`, `name` FROM `category` ORDER BY `id` DESC";
		$result=$this->mysqli->query($query);
		$response='<?xml version="1.0" encoding="utf-8" standalone="yes"?>';
		$response.='<response>';
		if($result->num_rows){
		while($row=$result->fetch_array(MYSQLI_ASSOC)){
			$list='<input type="button"  value="'.$row['name'].'" id="'.$row['name'].'" onclick="listtopics(\''.$row['name'].'\');">';
			$delete='<input type="button"  value="delete" id="'.$row['name'].'" onclick="deleting(\''.$row['name'].'\');">';
			$response.= $list.' '.' '. $delete.'<div style="display:none" id="'.$row['name'].'222">'.'<input type="text" placeholder="administrator password"
			id="'.$row['name'].'333" onkeyup="deleting(\''.$row['name'].'\');">'.'</div>'.'<div id="'.$row['name'].'111">'.'</div>'.'</br>';

		}}
		$response.='</response>';
		return $response;


	}
public 	function deleting($name){
		$name=$this->mysqli->real_escape_string($name);
		$query="delete from `category` WHERE `name`= '".$name."'";
		$result=$this->mysqli->query($query);
	}
public	function listtopics($name){
		$name=$this->mysqli->real_escape_string($name);
		$query="SELECT `post_id`, `title`, `category` FROM `posts` WHERE
		`category`='".$name."'";
		$result=$this->mysqli->query($query);
		$response='<?xml version="1.0" encoding="utf-8" standalone="yes"?>';
		$response.='<response>';
		if($result->num_rows){
		while($row=$result->fetch_array(MYSQLI_ASSOC)){
			$title= $row['title'];
			$category=$row['category'];
		    $response.='<span style="color: blue">'.$title.'</br>'.'<input type="button"  value="view content" id="'.$title.'0" onclick="viewcontent(\''.$title.'\', \''.$category.'\');">'.'</span>'.'</br>';
		}
		}
		$response.='</response>';
		return $response;

	}

public	function addcategory($name){
		$name=$this->mysqli->real_escape_string($name);
		if($name !==''){
			if(strlen($name) < 44){
				if (!$this->categoryexists($name)){
					$query="INSERT INTO `category`(`name`)VALUES('".$name."')";
					$result=$this->mysqli->query($query);
				}
			}

		}else{$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '</response>';
				return $response;}

	}
private	function checkstringlength($name){
	$name=$this->mysqli->real_escape_string($name);
	if(strlen($name)>43){
return true;
	}else{return false;}

}

private function categoryexists($name){
	$name=$this->mysqli->real_escape_string($name);
	$query="SELECT `name` FROM `category` WHERE `name` = '".$name."'";
	$result=$this->mysqli->query($query);
	if($result->num_rows){
		return true;
	}else{return false;}

}
public function checkcategoryexists($name){

	$name=$this->mysqli->real_escape_string($name);
	$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
	if($this->categoryexists($name)){
$response .= '<message>'.'Sorry, this category already exists
'.'</message>';


	}elseif($this->checkstringlength($name)){

$response .= '<message>'.'Sorry, category name can\'t be longer than 43 characters
'.'</message>';



	}


				$response .= '</response>';
				return $response;


}

private function removequot($word){
$find=array('\'', '#', ':','"');
$arrcount = count($find);
for($x=0; $x<$arrcount; $x++){
$word=str_replace($find[$x], '-', $word);

}
return $word;}

private function removeslash($word){
$find=array('\\');
$arrcount = count($find);
for($x=0; $x<$arrcount; $x++){
$word=str_replace($find[$x], '', $word);

}
return $word;}
	private function removeand($word){
$find=array('&',);
$arrcount = count($find);
for($x=0; $x<$arrcount; $x++){
$word=str_replace($find[$x], ' and ', $word);

}
return $word;}

public function insertposts($name, $title,$content, $imageurl,$newssource, $category, $userurl, $tag1, $tag2, $newcategory, $subtopic, $tag3, $excerpt){
	$cot='object classid=&quot;clsid:d27cdb6e-ae6d-11cf-96b8-444553540000&quot; codebase=&quot;http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0&quot;&gt;&lt;param name=&quot;allowFullScreen&quot; value=&quot;true&quot; /&gt;&lt;param name=&quot;quality&quot; value=&quot;high&quot; /&gt;&lt;param name=&quot;movie&quot; value=&quot;';
	  $cotet=htmlentities($content);
 $c=html_entity_decode('style="max-width: 100%;"');
 if($contet=str_replace($cot, 'video controls '.$c.' src=&quot;', $cotet))
 {
	$cot2=' /&gt;&lt;embed allowfullscreen=&quot;true&quot; pluginspage=&quot;http://www.macromedia.com/go/getflashplayer&quot; quality=&quot;high&quot; src=';

	 $contet2=str_replace($cot2, '/&gt; &lt;', $contet);
	 $contet3=html_entity_decode($contet2);
	 $contet=$contet3;
 }else{
	$contet=$content;

 }
 $title=$this->removequot($title);
 $title=$this->removeand($title);
 $excerpt=htmlentities($excerpt);
 $excerpt=$this->removequot($excerpt);
 $newssource=$this->removequot($newssource);
$excerpt=html_entity_decode($excerpt, ENT_COMPAT, "ISO8859-1");
	$name=$this->mysqli->real_escape_string($name);

	$title=$this->mysqli->real_escape_string($title);

	$category=$this->mysqli->real_escape_string($category);
	$cont=$this->mysqli->real_escape_string($contet);

	$newssource=$this->mysqli->real_escape_string($newssource);

	$imageurl=$this->mysqli->real_escape_string($imageurl);
	$userurl=$this->mysqli->real_escape_string($userurl);
	$tag1=$this->mysqli->real_escape_string($tag1);
	$tag2=$this->mysqli->real_escape_string($tag2);
	$tag3=$this->mysqli->real_escape_string($tag3);
	$subtopic=$this->mysqli->real_escape_string($subtopic);
	$newcategory=$this->mysqli->real_escape_string($newcategory);
	$excerpt=$this->mysqli->real_escape_string($excerpt);


	if($title !==''){
		if(!$this->titleexists($title, $category)){
			if(strlen($title)<120){
				if ($content !== ''){
					$newssource=strtolower($newssource);
				$newssource=trim($newssource);
				$find=' ';
				$newssource=str_replace($find, '_', $newssource);
				$query="INSERT INTO `posts` SET `posted_on`= NOW(),
												 `category`= '".$category."',
												  `title`  = '".$title."',
												    `content`='".$cont."',
													`newssource`='".$newssource."',
													`eachpages`='".$newssource.".php',
													`imageurl`='".$imageurl."',
													`name`='".$name."',
													`userurl`='".$userurl."',
													`tag1`='".$tag1."',
													`tag2`='".$tag2."',
													`newcategory`='".$newcategory."',
													`subtopic`='".$subtopic."',
													`excerpt`='".$excerpt."',
													`visitcount`=0,
													`tag3`='".$tag3."'";

				$result=$this->mysqli->query($query);

$query2="INSERT INTO `pagesmenu` SET `pagemenu` ='".$newssource."',
 `postedon`= NOW(),
 `title` = '".$title."',
`category` = '".$category."'";
$result2=$this->mysqli->query($query2);
				$blogurl=$newssource.'.php';

				$query3="SELECT * FROM `posts`
		WHERE `newssource` = '".$newssource."'";
	$result3=$this->mysqli->query($query3);
if($result3->num_rows){
		while($row=$result3->fetch_array(MYSQLI_ASSOC)){
			$post= $row['content'];
			$contentdbawo=htmlentities($post);


	$find='&lt;img';
	$content=str_replace($find, '&lt;amp-img width="400" height="300"
    layout="responsive"
    sizes="(min-width: 320px) 320px, 100vw"', $contentdbawo);
	$post=html_entity_decode($content,ENT_COMPAT, "ISO8859-1");

		    }
		}




				$handle=fopen($blogurl, 'w');

				$content= '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>'.$title.'</title>


<meta name="keywords" content="'.$tag1.','.$tag2.','.$tag3.'">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
   <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=PT Sans">
		   <link href="johni.css" rel="stylesheet" type="text/css">



    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "NewsArticle",
      "headline": "'.$title.'",
      "image": [
        "'.$imageurl.'"
      ],
      "datePublished": "'.date('d-m-Y ', strtotime('- 1 hour')).'",
	    "author": {
    "@type": "Person",
    "name": "Jineosy"
  },
   "publisher": {
    "@type": "Organization",
    "name": "Jineosy",
	 "logo": {
      "@type": "ImageObject",
      "url": "http://jineosy.com/nlogo.jpg"
    }


  },
	  "dateModified": "'.date('d-m-Y ', strtotime('- 1 hour')).'",
	  "description": "'.$excerpt.'",
	  "mainEntityOfPage": "'.'http://jineosy.com/'.$blogurl.'"
    }
    </script>
	<link rel="amphtml" href="http://jineosy.com/amp'.$blogurl.'">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta property="og:url"           content="http://jineosy.com/'.$blogurl.'" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="'.$title.'" />
  <meta property="og:description"   content="'.$excerpt.'" />
  <meta property="og:image"         content="http://jineosy.com/'.$imageurl.'" />
  <meta property="og:image:width"          content="600px" />
    <meta property="og:image:height"          content="600px" />
	  <meta property="fb:app_id"          content="344569333015691" />'.$this->cho;


	fwrite($handle, $content);


$handle2 = fopen('amp'.$blogurl, 'w');



$content1 ='<!doctype html>
<html amp>
<head>

<meta charset="UTF-8">

<meta name="keywords" content="'.$tag1.','.$tag2.','.$tag3.'">
<meta name="author" content="ISIAKA Sodiq Adegboyega">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta property="og:url"           content="http://jineosy.com/'.$blogurl.'" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="'.$title.'" />
  <meta property="og:description"   content="'.$excerpt.'" />
  <meta property="og:image"         content="http://jineosy.com/'.$imageurl.'" />
  <meta property="fb:app_id"          content="344569333015691" />

  <link rel="canonical" href="http://jineosy.com/'.$blogurl.'">


<style amp-custom>
body{
	font-size: 100%;

}
.box{
background-color: white;
box-shadow: 5px 3px 5px 5px rgb(200, 200, 200);
width: 95%;
margin: 0;
margin-top: 30px;
padding-left: 10px;
line-height: 50px;
font-size:0.8em;
font-family: georgia;
 margin-top:200px;
color: #333;


}

 .box a:link{
	font-style:italic;
}
.shiftnav{
	padding-right: 30px;
}
.headings{
	font-weight: bold;
	color: blue;
	font-size: 0.8em;
	display: block;
	margin: 2px;
	text-align:center;
}
h1{
font-size:1.8em;
margin:0;
padding: 0;
font-size:1em;
}
.firstletter{
	color: blue;
	font-size: xx-large;
}
dt{color: blue;
}
header{
		background-position: top top;
}

	.shrink-nav { background-color: #fff;
width: 100%;
 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
 z-index: 50;}
 .hrr{
	 display: block;
	 width: 80%;
	 margin-right: 10%;

 }
 .downimg{
		height: 60%; z-index:-1; opacity: 1.0;  padding-right: 4%; position: relative;
	}
	.downdiv{float: left;width:85%; margin-left:10%;margin-bottom:15px;

	}
.down{
	margin-top:200px;
}
.first{
	margin:20px 20px;
	text-align:justify;
}

[class*="dropbtn"]{
	display: block;
	background-color: black;
	width: 50px;
	height: 50px;
}
[class*="dropdowncontent"]{
	display: none;
	position: absolute;
	background-color: blue;

}
.dropdownwrapper{
width: 30%;
}
.dropdownwrapper1{
width: 30%;

}

[class*="dropbtn1"]{
	display: block;
	background-color: blue;

}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: blue;

}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: -30%;
	margin-left: 100%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	overflow: hidden;
	max-height:70%;
	width: 150%;
	color:red;
}
.dropdownwrapper:hover .unmovable {
    position: relative ;
}





.bar{

	padding: 5% 50%;
	margin-bottom: 20%;
	background-color: white;
}
.dropdownwrapper:hover .dropdowncontent{
	display: block;

	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
}


header ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;


}

header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: blue;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	margin: 4px;



}
header ul li a:hover, header ul li button:hover{

	color: black;

	text-decoration: none;

}
header ul li a:visited{
	background-color: blue;
	color: white;

	text-decoration: none;

}



.dropdownwrapper:hover .unmovable {
    position: relative ;
}
    .unmovable{
	width: 98%;
	top: 0px;
	position: relative;
}


.akokodiv{height: auto; margin: 6% 0% 3% 0%; z-index: -1;}
.rightside{



position: relative;
min-height: 1px;

font-family: Domine;

float: right;
width: 100%;
z-index: -1;
text-align: justify;
padding-top: 10%;
padding-bottom: 10%;

}
.sideimage{width:100%; z-index: -1; float: left; position: relative; height: auto; margin-bottom: 5%;}
header{
background-color: transparent;
background-image: url("upload/g.jpg");


background-repeat: repeat-x;
background-position: top top;
padding:0px;
margin:0px;
width: 100%;
z-index: 1;

}
.homeh{
	font-size: 1.4em;
	margin:10px;
	text-align: left;
}
#agricblog{
	display: none;
	height:15px;
	position:absolute;
	margin-top: 3px;
	margin-bottom: 3px;
	margin-left: 15%;
	padding: 1%;
	width: 70%;
	background-color: white;
	border: 1px solid black;
	opacity: 0.8;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	font-weight: bold;

}

.announce{
	font-family: Verdana, Serif;
	font-size: 1em;
	line-height: 45px;
}
.result{
	margin: 5px;
	font-family: Helvetica, Serif;
	font-size: 1em;
	line-height: 30px;
	text-transform: capitalize;
	color: #333;
	line-height: 45px;
}
#chatpopup .result{
	text-transform: none;
	margin: 0px;
}
.homeleft, .homemiddle, .homeright{
	float: ;
	width: 100%;
	margin-top: 20px;
	margin-bottom: 20px;
	font-family: Helvetica, Serif;
	font-size: 1.2em;
	text-align: justify;
}

#chatframe{
	float: ;
	width: 100%;


}
.right{
	width: 100%;
	float: ;
	margin-left: 0px;
	background-color: #f1f1f1;
}
#headerword{
	display: none;
	text-align: center;
	font-size: 20px;
	position: absolute;
	z-index: 5;

}
body{
	font-size: 100%;
}

.hr{
	max-width: 100%;
	float:right;
	position: absolute;
	opacity: 0.8;
	height:auto;
}
.main{
	background-image:url("upload/hr.pg.jpg");
	background-repeat: no-repeat;
	background-position: center center;

}
.chat:link{
	text-decoration: none;
	margin-top: 30px;
	background-color: blue;

	color: white;
}
.chat:visited{
	text-decoration: none;



	color: white;
}
.chat:hover{
	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
}
.red{
	font-weight: bold;
	color:red;
	font-size: 1em;

}
.red ul{
	list-style-type: circle;
}
.regheadspan{
	font-weight: bold;
	margin: 4% 5%;
	text-align: justify;
	display: block;

}
.unmovable{
	width: 98%;
	top: 0px;
	position: relative;
}
.reginput{
	margin-bottom: 10px;
display: block;
width: 85%;
font-size: 2em;
margin-left: 5%;
margin-right: 4%;
padding: 2% 2%;
border-radius: 4px;
border: 1px solid #bbb;
}
.reginput:focus{

	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
}
.reginput:hover{
	border: 1px solid blue;

}
.regspan{
	margin-bottom: 3px;
display: block;
margin-left: 5%;
font-size: 1.5em;
color: #333;
}
[class*="dropbtn"]{
	display: block;
	background-color: black;
	width: 50px;
	height: 50px;
}
[class*="dropdowncontent"]{
	display: none;
	position: absolute;
	background-color: blue;

}
.dropdownwrapper{
width: 30%;
}
.dropdownwrapper1{
width: 30%;

}

[class*="dropbtn1"]{
	display: block;
	background-color: blue;

}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: blue;

}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: -30%;
	margin-left: 100%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	overflow: hidden;
	max-height:70%;
	width: 150%;
	color:red;
}
.dropdownwrapper:hover .unmovable {
    position: relative ;
}





.bar{

	padding: 5% 50%;
	margin-bottom: 20%;
	background-color: white;
}
.dropdownwrapper:hover .dropdowncontent{
	display: block;

	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
}
 header ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;


}

header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: blue;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	margin: 4px;



}
header ul li a:hover, header ul li button:hover{

	color: black;

	text-decoration: none;

}
header ul li a:visited{
	background-color: blue;
	color: white;

	text-decoration: none;

}

#registerpopup, #loginpopup, .chatpopup{
	display: none;
	height:85%;
	position:relative;
	top: 10%;
	left:15%;
	padding: 2%;
	width: 70%;
	background-color: white;
	border: 1px solid black;
	z-index: 1;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);


}
#loginpopup{
position: relative;
}
 .chatpopup{
	 font-size: 1.5em;

 }

#regeffect{
	margin-top: 20px;
	border-bottom: 2px solid black;
	margin-bottom: -13px;

}
#regspan{
background-color: #FFF;
padding: 5px 12px;
text-align: center;
margin-left: 37.5%;
font-size:1.7em;
color: blue;
font-weight: bold;
}

#matric, .matric{
	width: 80%;
	display: block;
	margin: 16px;
	margin-top: 0px;
	padding: 8px;
	font-family: Georgia;
	font-size: 1.4em;
	position:relative;
}
 #matric:focus , .matric:focus{
	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
 }
 .matricnspan{
	 font-size: 1.35em;
	 text-align: center;
	 font-family: Helvetica, Courier New, serif;
	 margin-top: 16px;
	 letter-spacing: 4px;
 }
.submit1, .fileupload{
	background-color: blue;

	height: 45px;
	width: 50%;
	color: white;
	display: block;
	border: none;
	margin-left: 40%;
	font-size: 1.2em;
	font-family: Georgia, serif;
}
.fileupload{
	margin-left: 25%;
	background-color: rgb(25, 100, 170);
	margin-bottom: 5%;
}
.submit1:hover{
	box-shadow: 3px 3px 9px 4px rgb(25, 25, 170)
}



header{


background-image: url("upload/images.jpeg");
background-attachment: fixed;
padding:0;
margin:0;
width: 100%;

z-index: 3;
background-repeat: repeat;
position:relative;
}
.shrink-nav{
    position:absolute;
}
.boldlink:link{
	color: #fc0;
	text-decoration: none;

}
#sidebartext img{
   position:relative;
    max-width:100%;


}

#sidebartext div img{
    max-width: 100%;
    position: relative;
}
div {
max-width: 100%;
}

div img{
    position: relative;
    max-width:100%;
}
    #sidebartext div~img{
    position:relative;
    max-width: 100%;
}
#sidebartext p img{
    max-width:100%;
    position: relative;


}
#relatedposttopic .relatedtopic:link{

    text-decoration: none;
    color: black;
}
.relatedtopic:visited{

    text-decoration: none;
    color: black;
}
.relatedtopic:hover{

    text-decoration: none;
    color: black;
}
.boldlink:hover{
	color: green;
	text-decoration: none;

}
.boldlink:visited{
	color: #fc0;
	text-decoration: none;
}
#boldcaption{
	width: 100%;
	font-size: 1em;
	color: #fc0;

	z-index: 12;
	top: 235px;
	text-align: center;
	font-size: 1.2em;
	font-weight: bold
}
.moveboldcaption{

}
.firstimage{left: 0; float:right; width: 100%;   margin-top: 40px; top:0; opacity: 1.0; z-index: -1; }
.headerwordwhite{
	color: white;
}
#peoplescomment{
	margin: 5%;
	text-align: left;
	padding: 3%;
	border: 1px solid #E1E1E1;

}
.firstdown{

}
#encompass{
	padding: 0;
	margin:0;
	width: 100%;
	background-color: white;
	position: relative;

z-index: 1;}
#encompass::before, #reencompass::before, #wrap::before{
	content: ("");
	display: table;

}
#reencompass{
	width: 96%;

	padding-top: 50px;

}
.commentname, .comment{
border-radius: 2px;
border: 1px solid #e1e1e1;
margin-top: 20px;
margin-bottom: 30px;
width: 90%;

	padding: 14px 16px 12px;
	display: block;

}
.comment{
	height: 200px;
}
.commentname:hover, .comment:hover{
border: 1px solid blue;
}

#commentarea{
	padding-top: 20px;
	padding-bottom: 30px;
	border-top: 1px solid #e1e1e1;
	border-bottom:  1px solid #e1e1e1;
}
.submit{
	background-color: #FC0;
	width: auto;
	padding: 11px 53px 7px;
	font-family: "Josefin Sans",sans-serif;
	letter-spacing: 0.15em;
}
#wrap{
	margin: 0px auto;
	width: 80%;
	    font-family: Hind,sans-serif;
    font-weight: 400;
    font-size: 14px;
    line-height: 23px;
    color: #5B5A5A;


}
#sidebar{
	float: left;

	width: 100%;
}
#sidebarright{
	width: 100%;
}
#sidebarimage{
	position: relative;
	vertical-align: middle;
	overflow: hidden;
	margin-bottom: 33px;
}
#sidebarimage img{

	max-width: 100%;
	height: auto;
}

#sidebartopic{

	font-family: "Josefin Sans",sans-serif;
font-weight: 600;
font-size: 22px;
margin-bottom: 15px;
	}
.headerwordblack{
color: #2E2E2E;

}
#sidebartext{
	padding-bottom: 50px;
	border-bottom: 1px solid #e1e1e1;
}
#sidebardate{
	margin-bottom:15px;
}
#sidebarauthor{
text-align: right;
padding-right: 20px;
padding-bottom: 50px;
padding-top: 20px;
border-bottom: 1px solid #e1e1e1;
}
#aboutauthorimage img{
	width: 100px;
	height: 100px;
	border-radius: 5em;
}
#aboutauthor{

	padding: 5%;
	padding-bottom: 50px;
	border-bottom: 1px solid #e1e1e1;
}
#aboutusdiv{

	border-radius: 2px;
	padding: 15px;
	text-align: left;
	margin-bottom: 20px;

}
#aboutusdiv img{
	display: block;
	margin-bottom: 10px;
	height: auto;
	width: 90%;
}
#relatedimage{
	float:left;
	padding: 10px;
	width: 60%;

}
.relatedpostdivimage{
	width: 100%;
}
#relatedpostdiv{
	border: 1px solid #e1e1e1;
	height: 3000px;
}
#relatedposttopic{
	float: left;
	width: 30%;
	padding-top:40px;
}
#relatedpost{
	padding: 15px;
}
.homeh{
	font-size: 1.4em;
	margin:10px;
	text-align: left;
}
#agricblog{
	display: none;
	height:15px;
	position:absolute;
	margin-top: 3px;
	margin-bottom: 3px;
	margin-left: 15%;
	padding: 1%;
	width: 70%;
	background-color: white;
	border: 1px solid black;
	opacity: 0.8;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	font-weight: bold;

}

.announce{
	font-family: Verdana, Serif;
	font-size: 1em;
	line-height: 45px;
}
.result{
	margin: 5px;
	font-family: Helvetica, Serif;
	font-size: 1em;
	line-height: 30px;
	text-transform: capitalize;
	color: #333;
	line-height: 45px;
}
#chatpopup .result{
	text-transform: none;
	margin: 0px;
}
.homeleft, .homemiddle, .homeright{
	float: ;
	width: 100%;
	margin-top: 20px;
	margin-bottom: 20px;
	font-family: Helvetica, Serif;
	font-size: 1.2em;
	text-align: justify;
}

#chatframe{
	float: ;
	width: 100%;


}
.right{
	width: 100%;
	float: ;
	margin-left: 0px;
	background-color: #f1f1f1;
}
#headerword{
	display: none;
	text-align: center;
	font-size: 20px;
	position: absolute;
	z-index: 5;

}
body{
	font-size: 100%;
}

.hr{
	width: 50%;
	float:left;
	position: absolute;
	opacity: 0.8;
}
.main{
	background-image:url("upload/hr.pg.jpg");
	background-repeat: no-repeat;
	background-position: center center;
	background-attachment: fixed;
}
.chat:link{
	text-decoration: none;
	margin-top: 30px;
	background-color: blue;

	color: white;
}
.chat:visited{
	text-decoration: none;



	color: white;
}
.chat:hover{
	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
}
.red{
	font-weight: bold;
	color:red;
	font-size: 1em;

}
.red ul{
	list-style-type: circle;
}
.regheadspan{
	font-weight: bold;
	margin: 4% 5%;
	text-align: justify;
	display: block;

}
.unmovable{
	width: 98%;
	top: 0px;
	position: relative;
}
.reginput{
	margin-bottom: 10px;
display: block;
width: 85%;
font-size: 2em;
margin-left: 5%;
margin-right: 4%;
padding: 2% 2%;
border-radius: 4px;
border: 1px solid #bbb;
}
.reginput:focus{

	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
}
.reginput:hover{
	border: 1px solid blue;

}
.regspan{
	margin-bottom: 3px;
display: block;
margin-left: 5%;
font-size: 1.5em;
color: #333;
}
[class*="dropbtn"]{
	display: block;
	background-color: black;
	width: 50px;
	height: 50px;
}
[class*="dropdowncontent"]{
	display: none;
	position: absolute;
	background-color: blue;
}
.dropdownwrapper{
width: 30%;
}
.dropdownwrapper1{
width: 30%;

}

[class*="dropbtn1"]{
	display: block;
	background-color: blue;

}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: blue;

}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: -100%;
	margin-left: 100%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	max-width: 200%;
	max-height :85%;
	overflow: scroll

}





.bar{

	padding: 5% 50%;
	margin-bottom: 20%;
	background-color: white;
}
.dropdownwrapper:hover .dropdowncontent{
	display: block;

	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	margin-left:0;
	max-height: 900%;
	width: auto;
}
 header ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;


}

header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: blue;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	margin: 4px;



}
header ul li a:hover, header ul li button:hover{

	color: black;

	text-decoration: none;

}
header ul li a:visited{
	background-color: blue;
	color: white;

	text-decoration: none;

}

#registerpopup, #loginpopup, .chatpopup{
	display: none;
	height:85%;
	position:relative;
	top: 10%;
	left:15%;
	padding: 2%;
	width: 70%;
	background-color: white;
	border: 1px solid black;
	z-index: 1;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);


}
 .chatpopup{
	 font-size: 1.5em;

 }

#regeffect{
	margin-top: 20px;
	border-bottom: 2px solid black;
	margin-bottom: -13px;

}
#regspan{
background-color: #FFF;
padding: 5px 12px;
text-align: center;
margin-left: 37.5%;
font-size:1.7em;
color: blue;
font-weight: bold;
}

#matric, .matric{
	width: 80%;
	display: block;
	margin: 16px;
	margin-top: 0px;
	padding: 8px;
	font-family: Georgia;
	font-size: 1.4em;
}
 #matric:focus , .matric:focus{
	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
 }
 .matricnspan{
	 font-size: 1.35em;
	 text-align: center;
	 font-family: Helvetica, Courier New, serif;
	 margin-top: 16px;
	 letter-spacing: 4px;
 }
.submit1, .fileupload{
	background-color: blue;

	height: 45px;
	width: 50%;
	color: white;
	display: block;
	border: none;
	margin-left: 40%;
	font-size: 1.2em;
	font-family: Georgia, serif;
}
.fileupload{
	margin-left: 25%;
	background-color: rgb(25, 100, 170);
	margin-bottom: 5%;
}
.submit1:hover{
	box-shadow: 3px 3px 9px 4px rgb(25, 25, 170)
}













@media only screen and (min-width: 800px){





header ul li{
	float: right;
	display: block;
	margin-top: 20px;

}
header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: #ACDD08;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;



}
header ul li a:hover, header ul li button:hover{

	color: blue;

	text-decoration: none;

}
header ul li a:visited{
	background-color: #ACDD08;
	color: white;

	text-decoration: none;

}
.dropbtn{
display: none;
}
.dropdowncontent{
	display: block;
	position: relative;
	background: none;
}
.dropdownwrapper{
	width: auto;
}
.dropdownwrapper1{
	width: 20%;
}
.dropdownwrapper:hover .dropdowncontent{
	box-shadow: none;
}

[class*="dropbtn1"]{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: #ACDD08;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	width: auto;
	height: auto;
}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: transparent;
}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: 0%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	margin-left:0;
	width:auto;

	max-height: 900%;

}

.dropdownwrapper1:hover .unmovable {
    position: relative;
}



	.first{
	margin:20px 20px;
	text-align:justify;
}
	.downimg{
		height: 60%; opacity: 1.0;  padding-right: 4%; position: relative;
	}
	.downdiv{float: left;width:30%;height:500px; margin-left:10%;

	}

header amp-img{
height: 850px;
}

	.down{
	margin-top: 500px;
}
	.box{
		margin-left: 15%;
		width: 67%;
		font-size:1em;
		padding: 15px 30px;
		margin-top:800px;
	}
.shiftnav{
	padding-right: 30px;
}
	.shrink-nav { background-color: #fff;
	width: 100%;
	margin:0;
	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
	 z-index: 50;
	}
header{background-position: top top; }
	.hrr{
		display: inline;
		width: 30%;
		float: left;
	}
	header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: black;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;



}

header ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;
	overflow: hidden;
	z-index: 5;



}
#rightregister, #leftregister{
	float:left;
	margin: 4% 5%;
	width: 40%;
}
.regheadspan{
	margin-top:0;
}
header ul li{
	float: right;
	display: block;
	margin-top: 20px;

}
header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: #ACDD08;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;



}
header ul li a:hover, header ul li button:hover{

	color: blue;

	text-decoration: none;

}
header ul li a:visited{
	background-color: #ACDD08;
	color: white;

	text-decoration: none;

}
.dropbtn{
display: none;
}
.dropdowncontent{
	display: block;
	position: relative;
	background: none;
}
.dropdownwrapper{
	width: auto;
}
.dropdownwrapper1{
	width: 20%;
}
.dropdownwrapper:hover .dropdowncontent{
	box-shadow: none;
}

[class*="dropbtn1"]{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: #ACDD08;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	width: auto;
	height: auto;
}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: transparent;
}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: 0%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	margin-left:0;
	width:auto;

	max-height: 900%;

}
#registerpopup, #loginpopup, .chatpopup{
	display: none;
	height:70%;
	position:relative;
	top: 10%;
	left:28%;
	padding: 2%;
	width: 40%;
	background-color: white;
	border: 1px solid black;
	z-index: 1;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);


}.chatpopup{
	 font-size: 1.5em;
	 	height:50%;
 }
.submit1{
	background-color: blue;

	height: 45px;
	width: 150px;
	color: white;
	display: block;
	border: none;
	margin-left: 60%;
	font-size: 1.2em;
	font-family: Georgia, serif;
}

.reginput{
	margin-bottom: 10px;
display: block;
width: 70%;
font-size: 1.5em;
margin-left: 5%;
margin-right: 4%;
padding: 2% 2%;
border-radius: 4px;
border: 1px solid #bbb;
}
.hr{
	width:20%;
	float:right;
	position: absolute;
	opacity: 0.8;
	border-bottom: 1px solid black;
	height: auto;
}
#headerword{
	display: block;
	text-align: center;
	font-size: 20px;
	position: absolute;
	z-index: 5;

}
#chatframe{
	float: right;

	width: 37%;
border: 0;
padding: 0;
}
.right{
	width: 47%;
	float: left;
}
.right{

	margin-left: 25px;
	background-color: #f1f1f1;
}
#agricblog{
	display: none;
	height:15px;
	position:absolute;
	margin-top: 3px;
	margin-bottom: 3px;
	padding: 1%;
	width: 50%;
	background-color: white;
	border: 1px solid black;
	opacity: 0.5;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);

}
.announce{
	font-family: Verdana, Serif;
	font-size: 1.5em;
	line-height: 45px;
}
.result{
	margin: 20px;
	font-family: Helvetica, Serif;
	font-size: 1.5em;
	line-height: 30px;
	text-transform: capitalize;
	color: #333;
	line-height: 45px;
}
.homeleft, .homemiddle, .homeright{
	float: left;
	width: 25%;
	margin: 20px 3%;
	padding: 1%;
	text-align: justify;
	font-family: Helvetica, Serif;
	font-size: 1em;
}
.rightside{



position: relative;
min-height: 1px;
padding-right: 25px;
padding-left: 15px;
font-family: Domine;

float: right;
width: 60%;
z-index: -1;
text-align: right;
padding-top: 10%;

}
.dropdownwrapper1:hover .unmovable {
    position: relative;
}
.sideimage{
width:35%; z-index: -1; float: right; position: relative; height: auto; margin-bottom: 5%;
}
.akokodiv{height: auto; margin: 3% 0% 3% 0%; z-index: -1;}

header ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;
	overflow: hidden;
	z-index: 5;



}
header{

    position: relative;
    z-index: 90;
}
#rightregister, #leftregister{
	float:left;
	margin: 4% 5%;
	width: 40%;
}
.regheadspan{
	margin-top:0;
}
header ul li{
	float: right;
	display: block;
	margin-top: 20px;

}
header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: black;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;



}
header ul li a:hover, header ul li button:hover{

	color: blue;

	text-decoration: none;

}
header ul li a:visited{
	background-color: black;
	color: white;

	text-decoration: none;

}
.dropbtn{
display: none;
}
.dropdowncontent{
	display: block;
	position: relative;
	background: none;
}
.dropdownwrapper{
	width: auto;
}
.dropdownwrapper1{
	width: 20%;
}
.dropdownwrapper:hover .dropdowncontent{
	box-shadow: none;
}

[class*="dropbtn1"]{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: black;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	width: auto;
	height: auto;
}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: black;
}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: 0%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	margin-left:0;
	width:auto;
	max-height:900%;
}
#registerpopup, #loginpopup, .chatpopup{
	display: none;
	height:70%;
	position:relative;
	top: 10%;
	left:28%;
	padding: 2%;
	width: 40%;
	background-color: white;
	border: 1px solid black;
	z-index: 1;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);


}.chatpopup{
	 font-size: 1.5em;
	 	height:50%;
 }
.submit1{
	background-color: blue;

	height: 45px;
	width: 150px;
	color: white;
	display: block;
	border: none;
	margin-left: 60%;
	font-size: 1.2em;
	font-family: Georgia, serif;
}

.reginput{
	margin-bottom: 10px;
display: block;
width: 70%;
font-size: 1.5em;
margin-left: 5%;
margin-right: 4%;
padding: 2% 2%;
border-radius: 4px;
border: 1px solid #bbb;
}
.hr{
	width: 13%;
	float:left;
	position: absolute;
	opacity: 0.8;
	border-bottom: 1px solid black;
}
#headerword{
	display: block;
	text-align: center;
	font-size: 20px;
	position: absolute;
	z-index: 5;

}
#chatframe{
	float: right;

	width: 37%;
border: 0;
padding: 0;
}
.right{
	width: 47%;
	float: left;
}
.right{

	margin-left: 25px;
	background-color: #f1f1f1;
}
#agricblog{
	display: none;
	height:15px;
	position:absolute;
	margin-top: 3px;
	margin-bottom: 3px;
	padding: 1%;
	width: 50%;
	background-color: white;
	border: 1px solid black;
	opacity: 0.5;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);

}
.announce{
	font-family: Verdana, Serif;
	font-size: 1.5em;
	line-height: 45px;
}
.result{
	margin: 20px;
	font-family: Helvetica, Serif;
	font-size: 1.5em;
	line-height: 30px;
	text-transform: capitalize;
	color: #333;
	line-height: 45px;
}
.homeleft, .homemiddle, .homeright{
	float: left;
	width: 25%;
	margin: 20px 3%;
	padding: 1%;
	text-align: justify;
	font-family: Helvetica, Serif;
	font-size: 1em;
}
.headerwordwhite{
	color: white;
}
.headerwordblack{
color: #2E2E2E;

}
header{


background-image: url("upload/images.jpeg");
background-attachment: fixed;
padding:0;
margin:0;
width: 100%;
/*height: 930px;*/
z-index: 9;
background-repeat: repeat;
}
.firstimage{left: 0; float:right; width: 40%;  margin: 3%; margin-top: 80px; margin-right: 20px;top:0; opacity: 1.0; z-index: -1; height: auto;}
#boldcaption{
	width: 50%;
	text-align: right;
	margin-right: 20px;
	margin-top: 35%;
	font-size: 1.5em;
	font-weight: bold;
	color: #FFFFFF;
	position: absolute;
	top:0;
}

.firstdown{
padding: 0;}
#reencompass{
	width: 100%;

	padding-top: 30px;
}
#wrap{
padding:0;
padding-right:0;
margin: 0;
margin-left:0;
    width: 100%;
}

#sidebar{

padding-left: 11%;
	padding-right: 5%;
	float: left;
width: 46%;

}
.commentname, .comment{
border-radius: 2px;
border: 1px solid #e1e1e1;
margin-top: 20px;
margin-bottom: 30px;
width: 90%;
	padding: 14px 16px 12px;
	display: block;

}
.commentname:hover, .comment:hover{
border: 1px solid blue;
}

#commentarea{
	padding-top: 20px;
	padding-bottom: 30px;
	border-top: 1px solid #e1e1e1;
	border-bottom:  1px solid #e1e1e1;
}
.submit{
	background-color: #FC0;
	width: auto;
	padding: 11px 53px 7px;
	font-family: "Josefin Sans",sans-serif;
	letter-spacing: 0.15em;
}
.submit:hover{
	background-color: #e1e1e1;
	border: 1px solid #FC0;
}
#aboutauthor{

	padding-left: 20px;
	height: 50px;
		padding-bottom: 100px;
}
#aboutauthorimage {
	float: left;
}
#aboutauthortext{
	float: left;
	padding-left: 15px;
	text-align: left;
	padding-top: 10px;
	width: 70%;
}
#sidebarright{
	width:25%;

	margin-right: 10;
	margin-right: 0;
	padding-right: 0;
	float: left;

}
#aboutusdiv {
	border: 1px solid #e1e1e1;
}
#aboutusdiv img{
	display: block;

	height: auto;
	width: 100%;
}
.boldlink:link{
	color: #ffffff;
	text-decoration: none;

}
.boldlink:hover{
	color: green;
	text-decoration: none;

}
.boldlink:visited{
	color: #ffffff;
	text-decoration: none;
}




	}
</style>



    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "NewsArticle",
      "headline": "'.$title.'",
      "image": [
        "'.$imageurl.'"
      ],
      "datePublished": "'.date('d-m-Y ', strtotime('- 1 hour')).'",
	    "author": {
    "@type": "Person",
    "name": "Jineosy"
  },
   "publisher": {
    "@type": "Organization",
    "name": "Jineosy",
	 "logo": {
      "@type": "ImageObject",
      "url": "http://jineosy.com/nlogo.jpg"
    }


  },
	  "dateModified": "'.date('d-m-Y ', strtotime('- 1 hour')).'",
	  "description": "'.$excerpt.'",
	  "mainEntityOfPage": "'.'http://jineosy.com/'.$blogurl.'"
    }
    </script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>



</script>
<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>

<title>'.$title.'</title>
</head>

<body>
<div id="fb-root"></div>

<header>
<div id="unmovable" class="unmovable" ><span id="headerword" style=" position: absolute; font-size:40px;"><h1>Genius Roll</h1></span>
<nav><div class="dropdownwrapper">
<button class="dropbtn" >
<div class="bar"></div>
<div class="bar"></div>
<div class="bar"></div>
</button>
<div class="dropdowncontent">

<ul>
<li>
<a href="index.php" style="z-index: 8;" target="_self">Home</a>
</li>

<li>
<a href="about.php" style="z-index:8;"target="_self">About</a>
</li>
<li>
<button id="reveallogform" >Login</button>
</li>
<li>
<div class="dropdownwrapper1">
<button id="reveallogform"  style="margin-bottom:-4px;"class="dropbtn1">Blog</button>
<div class="dropdowncontent1">
<ul>
<li>
<a href="#"></a>
</li>
</ul>
</div>
</div></li>
<li>
<a href="geniusrollregistration.php" style="z-index: 8;"target="_self">Register</a>
</li>

</ul>

</div>
</div>
</nav>

</div>

</header>

<div id="encompass">

<div id = "reencompass">
<div id="wrap">
<div id="sidebar">
<div id="sidebarimage"><amp-img src="'.$imageurl.'"  width="0" height="0"
    layout="responsive"
    sizes="(min-width: 320px) 320px, 100vw">  alt="'.$title.'"></amp-img> </div>
<div id="sidebardate">'.date('d-m-Y ', strtotime('- 1 hour')).'/'
.$category.'/'
.$title.'

</div>
<div id="sidebartopic"><h2 style="margin:0; font-size: 22px; font-family:Josefin Sans,sans-serif;">'.$title.'</h2> </div>
<div id="sidebartext">'.$post.'<div class="fb-quote"></div>
<amp-social-share type="facebook" width="60" height="44"
  data-param-app_id="344569333015691"
  data-param-url="http://jineosy.com/'.$blogurl.'">
</amp-social-share>
<amp-social-share type="twitter" width="60" height="44"
  data-param-text="'.$excerpt.'">
</amp-social-share>
<amp-social-share type="whatsapp" width="60" height="44"
  data-param-text="'.$excerpt.'">
</amp-social-share>
</div>
</div>
<div id="sidebarauthor">by '.$name.'</div>

<div id="sidebarright">






</div>
</div>


</div>
</div>


</div>












</body></html>';

fwrite($handle2, $content1);

	$querywhatever="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content` FROM `posts`
		ORDER BY `post_id` DESC";

		$result=$this->mysqli->query($querywhatever);
				$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
 if($result->num_rows){
 while($row=$result->fetch_array(MYSQLI_ASSOC)){
	$date=$row['posted_on'];
	$named=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$contentd=$row['content'];
	$contentdbawo=htmlentities($contentd);

		$contenttd=substr($contentdbawo, 0, 350);
		$contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
		$contenttded=substr($contentdbawo, 350, strlen($contentdbawo));
		$contenteded=html_entity_decode($contenttded, ENT_COMPAT, "ISO8859-1");
	if(strlen($contentdbawo)>350){
$rmore='<input type="button" value="read more" id="'.$titled.$categoried.'readmore" onclick="showrest(\''.$titled.'\', \''.$categoried.'\');" />';}
 else{$rmore="";}

	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
	$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\');" />';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');" />';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name" />';
	$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment" />';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\');" />';
   $editnews='<input type="button" value="edit post" id="'.$titled.'4" onclick=
   "editei(\''.$titled.'\', \''.$categoried.'\');" />';

   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $response.='<div id="posts">'.'
 <div id="postedon">'.'<span
 id="postedonspan">Posted on</span>'.' '
 .$date
 .'<span
 id="name" style="display:none">'.' '.'By'.' '.$named.'</span>'.
 '</div>'.
 '<br />'.'<div id="imageurlpost">'.'<img src="'.$imageurl.'"  height ="100" width ="100">'.'</img>'.'</div>'.'<br />'.
 '<div id="category">'.'Category: '.$categoried.'</div>'.'<br />'.
 '<div id="title">'.'Topic: '.$titled.'</div>'.'<br />'.
 '<div id="content">'.

$contentd.
 '</div>'.'<br />'.
 '<div id="newssourcepost">'.$newssource.'</div>'.'<br />'.

 '<div id="like">'.$button.'</div>'.
 '<div id="comment">'.$comment.'</div>'.
 '<div id="commentNAME">'.$commentnametextbox.'</div>'.
 '<div id="commenttextbox">'.$commenttextbox.'</div>'.
 '<div id="commentsubmit">'.$commentsubmit.'</div>'.$editnews.
 $commentarea.'</div>'.'<br />'.'<br />';
 }}
$response .= '</response>';



	$handlewhatever=fopen('newsfeed.xml', 'w');

				$contentwhatever=$response;
fwrite($handlewhatever, $contentwhatever);



$querysitemap="SELECT `pagemenu`, `postedon` FROM `pagesmenu`
		ORDER BY `id` DESC";

		$resultsitemap=$this->mysqli->query($querysitemap);
				$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

$response .= '<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
$response.= '<url>
 <loc>http://jineosy.com/index.php</loc>
 <lastmod>'.date('c', time()).'</lastmod>
 <changefreq>daily</changefreq>
 <priority>1.00</priority>
 </url>';
 if($resultsitemap->num_rows){
 while($row=$resultsitemap->fetch_array(MYSQLI_ASSOC)){
 $loc=$row['pagemenu'];
 $lastmod =$row['postedon'];
 $datetime = new DateTime($lastmod);
$resulttime = $datetime->format('Y-m-d\TH:i:sP');


 $response.= '<url>

 <loc>http://jineosy.com/'.$loc.'.php</loc>
 <lastmod>'.date('c', time()).'</lastmod>
 <changefreq>daily</changefreq>
 <priority>0.8</priority>
 </url>';
 $response.= '<url>
 <loc>http://jineosy.com/amp'.$loc.'.php</loc>
 <lastmod>'.date('c', time()).'</lastmod>
 <changefreq>daily</changefreq>
 <priority>0.8</priority>
 </url>';
 }
 $response.= '</urlset>';
$handlesitemap = fopen('sitemap.xml', 'w');
fwrite($handlesitemap, $response);


				}


				}else{$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '<message>'.'Sorry, you must enter the content of this posts
'.'</message>';
$response .= '</response>';
				return $response;

				}
			}
		}
	}}







public function editposts($name, $title,$content, $imageurl,$newssource, $category, $timepost, $userurl, $tag1, $tag2, $newcategory, $subtopic, $tag3, $excerpt){
	$cot='object classid=&quot;clsid:d27cdb6e-ae6d-11cf-96b8-444553540000&quot; codebase=&quot;http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0&quot;&gt;&lt;param name=&quot;allowFullScreen&quot; value=&quot;true&quot; /&gt;&lt;param name=&quot;quality&quot; value=&quot;high&quot; /&gt;&lt;param name=&quot;movie&quot; value=&quot;';
	  $cotet=htmlentities($content);
 $c=html_entity_decode('style="max-width: 100%;"');
 if($contet=str_replace($cot, 'video controls '.$c.' src=&quot;', $cotet))
 {
	$cot2=' /&gt;&lt;embed allowfullscreen=&quot;true&quot; pluginspage=&quot;http://www.macromedia.com/go/getflashplayer&quot; quality=&quot;high&quot; src=&quot;http://localhost/upload/files/20Columns.mp4&quot; type=&quot;application/x-shockwave-flash&quot;&gt;&lt;/embed&gt;&lt;/object&gt;';

	 $contet2=str_replace($cot2, '/&gt;', $contet);
	 $contet3=html_entity_decode($contet2);
	 $contet=$contet3;
 }else{
	$contet=$content;

 }
 $title=$this->removequot($title);
	$title=$this->removeand($title);
 $excerpt=htmlentities($excerpt);
 $excerpt=$this->removequot($excerpt);
 $newssource=$this->removequot($newssource);
$excerpt=html_entity_decode($excerpt, ENT_COMPAT, "ISO8859-1");

	$name=$this->mysqli->real_escape_string($name);

	$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
	$cont=$this->mysqli->real_escape_string($contet);

	$newssource=$this->mysqli->real_escape_string($newssource);
$imageurl=$this->mysqli->real_escape_string($imageurl);
	$userurl=$this->mysqli->real_escape_string($userurl);
	$trag1=$this->mysqli->real_escape_string($tag1);
	$tag2=$this->mysqli->real_escape_string($tag2);
	$tag3=$this->mysqli->real_escape_string($tag3);

	$timepost=$this->mysqli->real_escape_string($timepost);
	$subtopic=$this->mysqli->real_escape_string($subtopic);
	$newcategory=$this->mysqli->real_escape_string($newcategory);

	$excerpt=$this->mysqli->real_escape_string($excerpt);

	if($title !==''){
		if(1==1){
			if(strlen($title)<120){
				if ($content !== ''){
					$newssource=strtolower($newssource);
				$newssource=trim($newssource);
				$find=' ';
				$newssource=str_replace($find, '_', $newssource);
				$query="UPDATE `posts` SET  `category`= '".$category."',
												  `title`  = '".$title."',
												    `content`='".$cont."',
													`newssource`='".$newssource."',

													`eachpages`='".$newssource.".php',
													`imageurl`='".$imageurl."',
													`name`='".$name."',
													`userurl`='".$userurl."',
													`tag1`='".$tag1."',
													`tag2`='".$tag2."',
													`newcategory`='".$newcategory."',
													`subtopic`='".$subtopic."',
													`excerpt`='".$excerpt."',
													`tag3`='".$tag3."'
													 WHERE `posts`.`posted_on` ='".$timepost."'";

				$result=$this->mysqli->query($query);


$query2="UPDATE `pagesmenu` SET `pagemenu` ='".$newssource."',
 `postedon`= NOW()
 WHERE `pagesmenu`.`title` = '".$title."' && `pagesmenu`.`category` = '".$category."'";
								$result2=$this->mysqli->query($query2);
				$newssource=strtolower($newssource);
			$query3="SELECT * FROM `posts`
		WHERE `newssource` = '".$newssource."'";
	$result3=$this->mysqli->query($query3);
if($result3->num_rows){
		while($row=$result3->fetch_array(MYSQLI_ASSOC)){
			$post= $row['content'];
			$contentdbawo=htmlentities($post);


	$find='&lt;img';
	$content=str_replace($find, '&lt;amp-img width="400" height="300"
    layout="responsive"
    sizes="(min-width: 320px) 320px, 100vw"', $contentdbawo);
	$post=html_entity_decode($content,ENT_COMPAT, "ISO8859-1");

		    }
		}

$blogurl=$newssource.'.php';


				$handle=fopen($blogurl, 'w');

				$content='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>'.$title.'</title>
	<meta charset="UTF-8">

<meta name="keywords" content="'.$tag1.','.$tag2.','.$tag3.'">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
   <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=PT Sans">
		   <link href="johni.css" rel="stylesheet" type="text/css">

  <link rel="amphtml" href="http://jineosy.com/amp'.$blogurl.'">

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "NewsArticle",
      "headline": "'.$title.'",
      "image": [
        "'.$imageurl.'"
      ],
      "datePublished": "'.date('d-m-Y ', strtotime('- 1 hour')).'",
	    "author": {
    "@type": "Person",
    "name": "jineosy"
  },
   "publisher": {
    "@type": "Organization",
    "name": "jineosy",
	 "logo": {
      "@type": "ImageObject",
      "url": "http://jineosy.com/nlogo.jpg"
    }


  },
	  "dateModified": "'.date('d-m-Y ', strtotime('- 1 hour')).'",
	  "description": "'.$excerpt.'",
	  "mainEntityOfPage": "'.'http://jineosy.com/'.$blogurl.'"
    }
    </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta property="og:url"           content="http://jineosy.com/'.$blogurl.'" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="'.$title.'" />
  <meta property="og:description"   content="'.$excerpt.'" />
  <meta property="og:image"         content="http://jineosy.com/'.$imageurl.'" />
  <meta property="og:image:width"          content="600px" />
    <meta property="og:image:height"          content="600px" />
	  <meta property="fb:app_id"          content="344569333015691" />'.$this->cho;
	fwrite($handle, $content);




$handle2 = fopen('amp'.$blogurl, 'w');

$content1 ='<!doctype html>
<html amp>
<head>

<meta charset="UTF-8">

<meta name="keywords" content="'.$tag1.','.$tag2.','.$tag3.'">
<meta name="author" content="ISIAKA Sodiq Adegboyega">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta property="og:url"           content="http://jineosy.com/'.$blogurl.'" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="'.$title.'" />
  <meta property="og:description"   content="'.$excerpt.'" />
  <meta property="og:image"         content="http://jineosy.com/'.$imageurl.'" />
  <meta property="fb:app_id"          content="344569333015691" />

  <link rel="canonical" href="http://jineosy.com/'.$blogurl.'">


<style amp-custom>
body{
	font-size: 100%;

}
.box{
background-color: white;
box-shadow: 5px 3px 5px 5px rgb(200, 200, 200);
width: 95%;
margin: 0;
margin-top: 30px;
padding-left: 10px;
line-height: 50px;
font-size:0.8em;
font-family: georgia;
 margin-top:200px;
color: #333;


}

 .box a:link{
	font-style:italic;
}
.shiftnav{
	padding-right: 30px;
}
.headings{
	font-weight: bold;
	color: blue;
	font-size: 0.8em;
	display: block;
	margin: 2px;
	text-align:center;
}
h1{
font-size:1.8em;
margin:0;
padding: 0;
font-size:1em;
}
.firstletter{
	color: blue;
	font-size: xx-large;
}
dt{color: blue;
}
header{
		background-position: top top;
}

	.shrink-nav { background-color: #fff;
width: 100%;
 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
 z-index: 50;}
 .hrr{
	 display: block;
	 width: 80%;
	 margin-right: 10%;

 }
 .downimg{
		height: 60%; z-index:-1; opacity: 1.0;  padding-right: 4%; position: relative;
	}
	.downdiv{float: left;width:85%; margin-left:10%;margin-bottom:15px;

	}
.down{
	margin-top:200px;
}
.first{
	margin:20px 20px;
	text-align:justify;
}

[class*="dropbtn"]{
	display: block;
	background-color: black;
	width: 50px;
	height: 50px;
}
[class*="dropdowncontent"]{
	display: none;
	position: absolute;
	background-color: blue;

}
.dropdownwrapper{
width: 30%;
}
.dropdownwrapper1{
width: 30%;

}

[class*="dropbtn1"]{
	display: block;
	background-color: blue;

}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: blue;

}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: -30%;
	margin-left: 100%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	overflow: hidden;
	max-height:70%;
	width: 150%;
	color:red;
}
.dropdownwrapper:hover .unmovable {
    position: relative ;
}





.bar{

	padding: 5% 50%;
	margin-bottom: 20%;
	background-color: white;
}
.dropdownwrapper:hover .dropdowncontent{
	display: block;

	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
}


header ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;


}

header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: blue;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	margin: 4px;



}
header ul li a:hover, header ul li button:hover{

	color: black;

	text-decoration: none;

}
header ul li a:visited{
	background-color: blue;
	color: white;

	text-decoration: none;

}



.dropdownwrapper:hover .unmovable {
    position: relative ;
}
    .unmovable{
	width: 98%;
	top: 0px;
	position: relative;
}


.akokodiv{height: auto; margin: 6% 0% 3% 0%; z-index: -1;}
.rightside{



position: relative;
min-height: 1px;

font-family: Domine;

float: right;
width: 100%;
z-index: -1;
text-align: justify;
padding-top: 10%;
padding-bottom: 10%;

}
.sideimage{width:100%; z-index: -1; float: left; position: relative; height: auto; margin-bottom: 5%;}
header{
background-color: transparent;
background-image: url("upload/g.jpg");


background-repeat: repeat-x;
background-position: top top;
padding:0px;
margin:0px;
width: 100%;
z-index: 1;

}
.homeh{
	font-size: 1.4em;
	margin:10px;
	text-align: left;
}
#agricblog{
	display: none;
	height:15px;
	position:absolute;
	margin-top: 3px;
	margin-bottom: 3px;
	margin-left: 15%;
	padding: 1%;
	width: 70%;
	background-color: white;
	border: 1px solid black;
	opacity: 0.8;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	font-weight: bold;

}

.announce{
	font-family: Verdana, Serif;
	font-size: 1em;
	line-height: 45px;
}
.result{
	margin: 5px;
	font-family: Helvetica, Serif;
	font-size: 1em;
	line-height: 30px;
	text-transform: capitalize;
	color: #333;
	line-height: 45px;
}
#chatpopup .result{
	text-transform: none;
	margin: 0px;
}
.homeleft, .homemiddle, .homeright{
	float: ;
	width: 100%;
	margin-top: 20px;
	margin-bottom: 20px;
	font-family: Helvetica, Serif;
	font-size: 1.2em;
	text-align: justify;
}

#chatframe{
	float: ;
	width: 100%;


}
.right{
	width: 100%;
	float: ;
	margin-left: 0px;
	background-color: #f1f1f1;
}
#headerword{
	display: none;
	text-align: center;
	font-size: 20px;
	position: absolute;
	z-index: 5;

}
body{
	font-size: 100%;
}

.hr{
	max-width: 100%;
	float:right;
	position: absolute;
	opacity: 0.8;
	height:auto;
}
.main{
	background-image:url("upload/hr.pg.jpg");
	background-repeat: no-repeat;
	background-position: center center;

}
.chat:link{
	text-decoration: none;
	margin-top: 30px;
	background-color: blue;

	color: white;
}
.chat:visited{
	text-decoration: none;



	color: white;
}
.chat:hover{
	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
}
.red{
	font-weight: bold;
	color:red;
	font-size: 1em;

}
.red ul{
	list-style-type: circle;
}
.regheadspan{
	font-weight: bold;
	margin: 4% 5%;
	text-align: justify;
	display: block;

}
.unmovable{
	width: 98%;
	top: 0px;
	position: relative;
}
.reginput{
	margin-bottom: 10px;
display: block;
width: 85%;
font-size: 2em;
margin-left: 5%;
margin-right: 4%;
padding: 2% 2%;
border-radius: 4px;
border: 1px solid #bbb;
}
.reginput:focus{

	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
}
.reginput:hover{
	border: 1px solid blue;

}
.regspan{
	margin-bottom: 3px;
display: block;
margin-left: 5%;
font-size: 1.5em;
color: #333;
}
[class*="dropbtn"]{
	display: block;
	background-color: black;
	width: 50px;
	height: 50px;
}
[class*="dropdowncontent"]{
	display: none;
	position: absolute;
	background-color: blue;

}
.dropdownwrapper{
width: 30%;
}
.dropdownwrapper1{
width: 30%;

}

[class*="dropbtn1"]{
	display: block;
	background-color: blue;

}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: blue;

}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: -30%;
	margin-left: 100%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	overflow: hidden;
	max-height:70%;
	width: 150%;
	color:red;
}
.dropdownwrapper:hover .unmovable {
    position: relative ;
}





.bar{

	padding: 5% 50%;
	margin-bottom: 20%;
	background-color: white;
}
.dropdownwrapper:hover .dropdowncontent{
	display: block;

	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
}
 header ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;


}

header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: blue;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	margin: 4px;



}
header ul li a:hover, header ul li button:hover{

	color: black;

	text-decoration: none;

}
header ul li a:visited{
	background-color: blue;
	color: white;

	text-decoration: none;

}

#registerpopup, #loginpopup, .chatpopup{
	display: none;
	height:85%;
	position:relative;
	top: 10%;
	left:15%;
	padding: 2%;
	width: 70%;
	background-color: white;
	border: 1px solid black;
	z-index: 1;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);


}
#loginpopup{
position: relative;
}
 .chatpopup{
	 font-size: 1.5em;

 }

#regeffect{
	margin-top: 20px;
	border-bottom: 2px solid black;
	margin-bottom: -13px;

}
#regspan{
background-color: #FFF;
padding: 5px 12px;
text-align: center;
margin-left: 37.5%;
font-size:1.7em;
color: blue;
font-weight: bold;
}

#matric, .matric{
	width: 80%;
	display: block;
	margin: 16px;
	margin-top: 0px;
	padding: 8px;
	font-family: Georgia;
	font-size: 1.4em;
	position:relative;
}
 #matric:focus , .matric:focus{
	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
 }
 .matricnspan{
	 font-size: 1.35em;
	 text-align: center;
	 font-family: Helvetica, Courier New, serif;
	 margin-top: 16px;
	 letter-spacing: 4px;
 }
.submit1, .fileupload{
	background-color: blue;

	height: 45px;
	width: 50%;
	color: white;
	display: block;
	border: none;
	margin-left: 40%;
	font-size: 1.2em;
	font-family: Georgia, serif;
}
.fileupload{
	margin-left: 25%;
	background-color: rgb(25, 100, 170);
	margin-bottom: 5%;
}
.submit1:hover{
	box-shadow: 3px 3px 9px 4px rgb(25, 25, 170)
}



header{


background-image: url("upload/images.jpeg");
background-attachment: fixed;
padding:0;
margin:0;
width: 100%;

z-index: 3;
background-repeat: repeat;
position:relative;
}
.shrink-nav{
    position:absolute;
}
.boldlink:link{
	color: #fc0;
	text-decoration: none;

}
#sidebartext img{
   position:relative;
    max-width:100%;


}

#sidebartext div img{
    max-width: 100%;
    position: relative;
}
div {
max-width: 100%;
}

div img{
    position: relative;
    max-width:100%;
}
    #sidebartext div~img{
    position:relative;
    max-width: 100%;
}
#sidebartext p img{
    max-width:100%;
    position: relative;


}
#relatedposttopic .relatedtopic:link{

    text-decoration: none;
    color: black;
}
.relatedtopic:visited{

    text-decoration: none;
    color: black;
}
.relatedtopic:hover{

    text-decoration: none;
    color: black;
}
.boldlink:hover{
	color: green;
	text-decoration: none;

}
.boldlink:visited{
	color: #fc0;
	text-decoration: none;
}
#boldcaption{
	width: 100%;
	font-size: 1em;
	color: #fc0;

	z-index: 12;
	top: 235px;
	text-align: center;
	font-size: 1.2em;
	font-weight: bold
}
.moveboldcaption{

}
.firstimage{left: 0; float:right; width: 100%;   margin-top: 40px; top:0; opacity: 1.0; z-index: -1; }
.headerwordwhite{
	color: white;
}
#peoplescomment{
	margin: 5%;
	text-align: left;
	padding: 3%;
	border: 1px solid #E1E1E1;

}
.firstdown{

}
#encompass{
	padding: 0;
	margin:0;
	width: 100%;
	background-color: white;
	position: relative;

z-index: 1;}
#encompass::before, #reencompass::before, #wrap::before{
	content: ("");
	display: table;

}
#reencompass{
	width: 96%;

	padding-top: 50px;

}
.commentname, .comment{
border-radius: 2px;
border: 1px solid #e1e1e1;
margin-top: 20px;
margin-bottom: 30px;
width: 90%;

	padding: 14px 16px 12px;
	display: block;

}
.comment{
	height: 200px;
}
.commentname:hover, .comment:hover{
border: 1px solid blue;
}

#commentarea{
	padding-top: 20px;
	padding-bottom: 30px;
	border-top: 1px solid #e1e1e1;
	border-bottom:  1px solid #e1e1e1;
}
.submit{
	background-color: #FC0;
	width: auto;
	padding: 11px 53px 7px;
	font-family: "Josefin Sans",sans-serif;
	letter-spacing: 0.15em;
}
#wrap{
	margin: 0px auto;
	width: 80%;
	    font-family: Hind,sans-serif;
    font-weight: 400;
    font-size: 14px;
    line-height: 23px;
    color: #5B5A5A;


}
#sidebar{
	float: left;

	width: 100%;
}
#sidebarright{
	width: 100%;
}
#sidebarimage{
	position: relative;
	vertical-align: middle;
	overflow: hidden;
	margin-bottom: 33px;
}
#sidebarimage img{

	max-width: 100%;
	height: auto;
}

#sidebartopic{

	font-family: "Josefin Sans",sans-serif;
font-weight: 600;
font-size: 22px;
margin-bottom: 15px;
	}
.headerwordblack{
color: #2E2E2E;

}
#sidebartext{
	padding-bottom: 50px;
	border-bottom: 1px solid #e1e1e1;
}
#sidebardate{
	margin-bottom:15px;
}
#sidebarauthor{
text-align: right;
padding-right: 20px;
padding-bottom: 50px;
padding-top: 20px;
border-bottom: 1px solid #e1e1e1;
}
#aboutauthorimage img{
	width: 100px;
	height: 100px;
	border-radius: 5em;
}
#aboutauthor{

	padding: 5%;
	padding-bottom: 50px;
	border-bottom: 1px solid #e1e1e1;
}
#aboutusdiv{

	border-radius: 2px;
	padding: 15px;
	text-align: left;
	margin-bottom: 20px;

}
#aboutusdiv img{
	display: block;
	margin-bottom: 10px;
	height: auto;
	width: 90%;
}
#relatedimage{
	float:left;
	padding: 10px;
	width: 60%;

}
.relatedpostdivimage{
	width: 100%;
}
#relatedpostdiv{
	border: 1px solid #e1e1e1;
	height: 3000px;
}
#relatedposttopic{
	float: left;
	width: 30%;
	padding-top:40px;
}
#relatedpost{
	padding: 15px;
}
.homeh{
	font-size: 1.4em;
	margin:10px;
	text-align: left;
}
#agricblog{
	display: none;
	height:15px;
	position:absolute;
	margin-top: 3px;
	margin-bottom: 3px;
	margin-left: 15%;
	padding: 1%;
	width: 70%;
	background-color: white;
	border: 1px solid black;
	opacity: 0.8;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	font-weight: bold;

}

.announce{
	font-family: Verdana, Serif;
	font-size: 1em;
	line-height: 45px;
}
.result{
	margin: 5px;
	font-family: Helvetica, Serif;
	font-size: 1em;
	line-height: 30px;
	text-transform: capitalize;
	color: #333;
	line-height: 45px;
}
#chatpopup .result{
	text-transform: none;
	margin: 0px;
}
.homeleft, .homemiddle, .homeright{
	float: ;
	width: 100%;
	margin-top: 20px;
	margin-bottom: 20px;
	font-family: Helvetica, Serif;
	font-size: 1.2em;
	text-align: justify;
}

#chatframe{
	float: ;
	width: 100%;


}
.right{
	width: 100%;
	float: ;
	margin-left: 0px;
	background-color: #f1f1f1;
}
#headerword{
	display: none;
	text-align: center;
	font-size: 20px;
	position: absolute;
	z-index: 5;

}
body{
	font-size: 100%;
}

.hr{
	width: 50%;
	float:left;
	position: absolute;
	opacity: 0.8;
}
.main{
	background-image:url("upload/hr.pg.jpg");
	background-repeat: no-repeat;
	background-position: center center;
	background-attachment: fixed;
}
.chat:link{
	text-decoration: none;
	margin-top: 30px;
	background-color: blue;

	color: white;
}
.chat:visited{
	text-decoration: none;



	color: white;
}
.chat:hover{
	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
}
.red{
	font-weight: bold;
	color:red;
	font-size: 1em;

}
.red ul{
	list-style-type: circle;
}
.regheadspan{
	font-weight: bold;
	margin: 4% 5%;
	text-align: justify;
	display: block;

}
.unmovable{
	width: 98%;
	top: 0px;
	position: relative;
}
.reginput{
	margin-bottom: 10px;
display: block;
width: 85%;
font-size: 2em;
margin-left: 5%;
margin-right: 4%;
padding: 2% 2%;
border-radius: 4px;
border: 1px solid #bbb;
}
.reginput:focus{

	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
}
.reginput:hover{
	border: 1px solid blue;

}
.regspan{
	margin-bottom: 3px;
display: block;
margin-left: 5%;
font-size: 1.5em;
color: #333;
}
[class*="dropbtn"]{
	display: block;
	background-color: black;
	width: 50px;
	height: 50px;
}
[class*="dropdowncontent"]{
	display: none;
	position: absolute;
	background-color: blue;
}
.dropdownwrapper{
width: 30%;
}
.dropdownwrapper1{
width: 30%;

}

[class*="dropbtn1"]{
	display: block;
	background-color: blue;

}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: blue;

}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: -100%;
	margin-left: 100%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	max-width: 200%;
	max-height :85%;
	overflow: scroll

}





.bar{

	padding: 5% 50%;
	margin-bottom: 20%;
	background-color: white;
}
.dropdownwrapper:hover .dropdowncontent{
	display: block;

	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	margin-left:0;
	max-height: 900%;
	width: auto;
}
 header ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;


}

header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: blue;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	margin: 4px;



}
header ul li a:hover, header ul li button:hover{

	color: black;

	text-decoration: none;

}
header ul li a:visited{
	background-color: blue;
	color: white;

	text-decoration: none;

}

#registerpopup, #loginpopup, .chatpopup{
	display: none;
	height:85%;
	position:relative;
	top: 10%;
	left:15%;
	padding: 2%;
	width: 70%;
	background-color: white;
	border: 1px solid black;
	z-index: 1;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);


}
 .chatpopup{
	 font-size: 1.5em;

 }

#regeffect{
	margin-top: 20px;
	border-bottom: 2px solid black;
	margin-bottom: -13px;

}
#regspan{
background-color: #FFF;
padding: 5px 12px;
text-align: center;
margin-left: 37.5%;
font-size:1.7em;
color: blue;
font-weight: bold;
}

#matric, .matric{
	width: 80%;
	display: block;
	margin: 16px;
	margin-top: 0px;
	padding: 8px;
	font-family: Georgia;
	font-size: 1.4em;
}
 #matric:focus , .matric:focus{
	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
 }
 .matricnspan{
	 font-size: 1.35em;
	 text-align: center;
	 font-family: Helvetica, Courier New, serif;
	 margin-top: 16px;
	 letter-spacing: 4px;
 }
.submit1, .fileupload{
	background-color: blue;

	height: 45px;
	width: 50%;
	color: white;
	display: block;
	border: none;
	margin-left: 40%;
	font-size: 1.2em;
	font-family: Georgia, serif;
}
.fileupload{
	margin-left: 25%;
	background-color: rgb(25, 100, 170);
	margin-bottom: 5%;
}
.submit1:hover{
	box-shadow: 3px 3px 9px 4px rgb(25, 25, 170)
}













@media only screen and (min-width: 800px){





header ul li{
	float: right;
	display: block;
	margin-top: 20px;

}
header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: #ACDD08;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;



}
header ul li a:hover, header ul li button:hover{

	color: blue;

	text-decoration: none;

}
header ul li a:visited{
	background-color: #ACDD08;
	color: white;

	text-decoration: none;

}
.dropbtn{
display: none;
}
.dropdowncontent{
	display: block;
	position: relative;
	background: none;
}
.dropdownwrapper{
	width: auto;
}
.dropdownwrapper1{
	width: 20%;
}
.dropdownwrapper:hover .dropdowncontent{
	box-shadow: none;
}

[class*="dropbtn1"]{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: #ACDD08;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	width: auto;
	height: auto;
}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: transparent;
}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: 0%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	margin-left:0;
	width:auto;

	max-height: 900%;

}

.dropdownwrapper1:hover .unmovable {
    position: relative;
}



	.first{
	margin:20px 20px;
	text-align:justify;
}
	.downimg{
		height: 60%; opacity: 1.0;  padding-right: 4%; position: relative;
	}
	.downdiv{float: left;width:30%;height:500px; margin-left:10%;

	}

header amp-img{
height: 850px;
}

	.down{
	margin-top: 500px;
}
	.box{
		margin-left: 15%;
		width: 67%;
		font-size:1em;
		padding: 15px 30px;
		margin-top:800px;
	}
.shiftnav{
	padding-right: 30px;
}
	.shrink-nav { background-color: #fff;
	width: 100%;
	margin:0;
	 box-shadow: 0px 0px 9px 0px rgb(25, 25, 100);
	 z-index: 50;
	}
header{background-position: top top; }
	.hrr{
		display: inline;
		width: 30%;
		float: left;
	}
	header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: black;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;



}

header ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;
	overflow: hidden;
	z-index: 5;



}
#rightregister, #leftregister{
	float:left;
	margin: 4% 5%;
	width: 40%;
}
.regheadspan{
	margin-top:0;
}
header ul li{
	float: right;
	display: block;
	margin-top: 20px;

}
header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: #ACDD08;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;



}
header ul li a:hover, header ul li button:hover{

	color: blue;

	text-decoration: none;

}
header ul li a:visited{
	background-color: #ACDD08;
	color: white;

	text-decoration: none;

}
.dropbtn{
display: none;
}
.dropdowncontent{
	display: block;
	position: relative;
	background: none;
}
.dropdownwrapper{
	width: auto;
}
.dropdownwrapper1{
	width: 20%;
}
.dropdownwrapper:hover .dropdowncontent{
	box-shadow: none;
}

[class*="dropbtn1"]{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: #ACDD08;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	width: auto;
	height: auto;
}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: transparent;
}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: 0%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	margin-left:0;
	width:auto;

	max-height: 900%;

}
#registerpopup, #loginpopup, .chatpopup{
	display: none;
	height:70%;
	position:relative;
	top: 10%;
	left:28%;
	padding: 2%;
	width: 40%;
	background-color: white;
	border: 1px solid black;
	z-index: 1;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);


}.chatpopup{
	 font-size: 1.5em;
	 	height:50%;
 }
.submit1{
	background-color: blue;

	height: 45px;
	width: 150px;
	color: white;
	display: block;
	border: none;
	margin-left: 60%;
	font-size: 1.2em;
	font-family: Georgia, serif;
}

.reginput{
	margin-bottom: 10px;
display: block;
width: 70%;
font-size: 1.5em;
margin-left: 5%;
margin-right: 4%;
padding: 2% 2%;
border-radius: 4px;
border: 1px solid #bbb;
}
.hr{
	width:20%;
	float:right;
	position: absolute;
	opacity: 0.8;
	border-bottom: 1px solid black;
	height: auto;
}
#headerword{
	display: block;
	text-align: center;
	font-size: 20px;
	position: absolute;
	z-index: 5;

}
#chatframe{
	float: right;

	width: 37%;
border: 0;
padding: 0;
}
.right{
	width: 47%;
	float: left;
}
.right{

	margin-left: 25px;
	background-color: #f1f1f1;
}
#agricblog{
	display: none;
	height:15px;
	position:absolute;
	margin-top: 3px;
	margin-bottom: 3px;
	padding: 1%;
	width: 50%;
	background-color: white;
	border: 1px solid black;
	opacity: 0.5;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);

}
.announce{
	font-family: Verdana, Serif;
	font-size: 1.5em;
	line-height: 45px;
}
.result{
	margin: 20px;
	font-family: Helvetica, Serif;
	font-size: 1.5em;
	line-height: 30px;
	text-transform: capitalize;
	color: #333;
	line-height: 45px;
}
.homeleft, .homemiddle, .homeright{
	float: left;
	width: 25%;
	margin: 20px 3%;
	padding: 1%;
	text-align: justify;
	font-family: Helvetica, Serif;
	font-size: 1em;
}
.rightside{



position: relative;
min-height: 1px;
padding-right: 25px;
padding-left: 15px;
font-family: Domine;

float: right;
width: 60%;
z-index: -1;
text-align: right;
padding-top: 10%;

}
.dropdownwrapper1:hover .unmovable {
    position: relative;
}
.sideimage{
width:35%; z-index: -1; float: right; position: relative; height: auto; margin-bottom: 5%;
}
.akokodiv{height: auto; margin: 3% 0% 3% 0%; z-index: -1;}

header ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;
	overflow: hidden;
	z-index: 5;



}
header{

    position: relative;
    z-index: 90;
}
#rightregister, #leftregister{
	float:left;
	margin: 4% 5%;
	width: 40%;
}
.regheadspan{
	margin-top:0;
}
header ul li{
	float: right;
	display: block;
	margin-top: 20px;

}
header ul li a:link, header ul li button{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: black;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;



}
header ul li a:hover, header ul li button:hover{

	color: blue;

	text-decoration: none;

}
header ul li a:visited{
	background-color: black;
	color: white;

	text-decoration: none;

}
.dropbtn{
display: none;
}
.dropdowncontent{
	display: block;
	position: relative;
	background: none;
}
.dropdownwrapper{
	width: auto;
}
.dropdownwrapper1{
	width: 20%;
}
.dropdownwrapper:hover .dropdowncontent{
	box-shadow: none;
}

[class*="dropbtn1"]{
	color: white;
	display: block;
	text-decoration: none;
	padding:15px;
	background-color: black;
	border: none;
	font-size: 18px;
	font-family: Helvetica, Verdana, serif;
	cursor: pointer;
	width: auto;
	height: auto;
}
[class*="dropdowncontent1"]{
	display: none;
	position: absolute;
	background-color: black;
}


.dropdownwrapper1:hover .dropdowncontent1{
	display: block;
	margin-top: 0%;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);
	margin-left:0;
	width:auto;
	max-height:900%;
}
#registerpopup, #loginpopup, .chatpopup{
	display: none;
	height:70%;
	position:relative;
	top: 10%;
	left:28%;
	padding: 2%;
	width: 40%;
	background-color: white;
	border: 1px solid black;
	z-index: 1;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);


}.chatpopup{
	 font-size: 1.5em;
	 	height:50%;
 }
.submit1{
	background-color: blue;

	height: 45px;
	width: 150px;
	color: white;
	display: block;
	border: none;
	margin-left: 60%;
	font-size: 1.2em;
	font-family: Georgia, serif;
}

.reginput{
	margin-bottom: 10px;
display: block;
width: 70%;
font-size: 1.5em;
margin-left: 5%;
margin-right: 4%;
padding: 2% 2%;
border-radius: 4px;
border: 1px solid #bbb;
}
.hr{
	width: 13%;
	float:left;
	position: absolute;
	opacity: 0.8;
	border-bottom: 1px solid black;
}
#headerword{
	display: block;
	text-align: center;
	font-size: 20px;
	position: absolute;
	z-index: 5;

}
#chatframe{
	float: right;

	width: 37%;
border: 0;
padding: 0;
}
.right{
	width: 47%;
	float: left;
}
.right{

	margin-left: 25px;
	background-color: #f1f1f1;
}
#agricblog{
	display: none;
	height:15px;
	position:absolute;
	margin-top: 3px;
	margin-bottom: 3px;
	padding: 1%;
	width: 50%;
	background-color: white;
	border: 1px solid black;
	opacity: 0.5;
	box-shadow: 0px 5px 10px 5px rgb(25, 25, 80);

}
.announce{
	font-family: Verdana, Serif;
	font-size: 1.5em;
	line-height: 45px;
}
.result{
	margin: 20px;
	font-family: Helvetica, Serif;
	font-size: 1.5em;
	line-height: 30px;
	text-transform: capitalize;
	color: #333;
	line-height: 45px;
}
.homeleft, .homemiddle, .homeright{
	float: left;
	width: 25%;
	margin: 20px 3%;
	padding: 1%;
	text-align: justify;
	font-family: Helvetica, Serif;
	font-size: 1em;
}
.headerwordwhite{
	color: white;
}
.headerwordblack{
color: #2E2E2E;

}
header{


background-image: url("upload/images.jpeg");
background-attachment: fixed;
padding:0;
margin:0;
width: 100%;
/*height: 930px;*/
z-index: 9;
background-repeat: repeat;
}
.firstimage{left: 0; float:right; width: 40%;  margin: 3%; margin-top: 80px; margin-right: 20px;top:0; opacity: 1.0; z-index: -1; height: auto;}
#boldcaption{
	width: 50%;
	text-align: right;
	margin-right: 20px;
	margin-top: 35%;
	font-size: 1.5em;
	font-weight: bold;
	color: #FFFFFF;
	position: absolute;
	top:0;
}

.firstdown{
padding: 0;}
#reencompass{
	width: 100%;

	padding-top: 30px;
}
#wrap{
padding:0;
padding-right:0;
margin: 0;
margin-left:0;
    width: 100%;
}

#sidebar{

padding-left: 11%;
	padding-right: 5%;
	float: left;
width: 46%;

}
.commentname, .comment{
border-radius: 2px;
border: 1px solid #e1e1e1;
margin-top: 20px;
margin-bottom: 30px;
width: 90%;
	padding: 14px 16px 12px;
	display: block;

}
.commentname:hover, .comment:hover{
border: 1px solid blue;
}

#commentarea{
	padding-top: 20px;
	padding-bottom: 30px;
	border-top: 1px solid #e1e1e1;
	border-bottom:  1px solid #e1e1e1;
}
.submit{
	background-color: #FC0;
	width: auto;
	padding: 11px 53px 7px;
	font-family: "Josefin Sans",sans-serif;
	letter-spacing: 0.15em;
}
.submit:hover{
	background-color: #e1e1e1;
	border: 1px solid #FC0;
}
#aboutauthor{

	padding-left: 20px;
	height: 50px;
		padding-bottom: 100px;
}
#aboutauthorimage {
	float: left;
}
#aboutauthortext{
	float: left;
	padding-left: 15px;
	text-align: left;
	padding-top: 10px;
	width: 70%;
}
#sidebarright{
	width:25%;

	margin-right: 10;
	margin-right: 0;
	padding-right: 0;
	float: left;

}
#aboutusdiv {
	border: 1px solid #e1e1e1;
}
#aboutusdiv img{
	display: block;

	height: auto;
	width: 100%;
}
.boldlink:link{
	color: #ffffff;
	text-decoration: none;

}
.boldlink:hover{
	color: green;
	text-decoration: none;

}
.boldlink:visited{
	color: #ffffff;
	text-decoration: none;
}




	}
</style>



    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "NewsArticle",
      "headline": "'.$title.'",
      "image": [
        "'.$imageurl.'"
      ],
      "datePublished": "'.date('d-m-Y ', strtotime('- 1 hour')).'",
	   "author": {
    "@type": "Person",
    "name": "Jineosy"
  },
   "publisher": {
    "@type": "Organization",
    "name": "Jineosy",
	 "logo": {
      "@type": "ImageObject",
      "url": "http://jineosy.com/nlogo.jpg"
    }


  },
	  "dateModified": "'.date('d-m-Y ', strtotime('- 1 hour')).'",
	  "description": "'.$excerpt.'",
	  "mainEntityOfPage": "'.'http://jineosy.com/'.$blogurl.'"
    }
    </script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>



</script>
<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>

<title>'.$title.'</title>
</head>

<body>
<div id="fb-root"></div>

<header>
<div id="unmovable" class="unmovable" ><span id="headerword" style=" position: absolute; font-size:40px;"><h1>Genius Roll</h1></span>
<nav><div class="dropdownwrapper">
<button class="dropbtn" >
<div class="bar"></div>
<div class="bar"></div>
<div class="bar"></div>
</button>
<div class="dropdowncontent">

<ul>
<li>
<a href="index.php" style="z-index: 8;" target="_self">Home</a>
</li>

<li>
<a href="about.php" style="z-index:8;"target="_self">About</a>
</li>
<li>
<button id="reveallogform" >Login</button>
</li>
<li>
<div class="dropdownwrapper1">
<button id="reveallogform"  style="margin-bottom:-4px;"class="dropbtn1">Blog</button>
<div class="dropdowncontent1">
<ul>
<li>
<a href="#"></a>
</li>
</ul>
</div>
</div></li>
<li>
<a href="geniusrollregistration.php" style="z-index: 8;"target="_self">Register</a>
</li>

</ul>

</div>
</div>
</nav>

</div>

</header>
<div class="firstdown">
</div>
<div id="encompass">

<div id = "reencompass">
<div id="wrap">
<div id="sidebar">
<div id="sidebarimage"><amp-img src="'.$imageurl.'"  width="400" height="300"
    layout="responsive"
    sizes="(min-width: 320px) 320px, 100vw">  alt="'.$title.'"></amp-img> </div>
<div id="sidebardate">'.date('d-m-Y ', strtotime('- 1 hour')).'/'
.$category.'/'
.$title.'

</div>
<div id="sidebartopic"><h2 style="margin:0; font-size: 22px; font-family:Josefin Sans,sans-serif;">'.$title.'</h2> </div>
<div id="sidebartext">'.$post.'<div class="fb-quote"></div>
<amp-social-share type="facebook" width="60" height="44"
  data-param-app_id="344569333015691"
  data-param-url="http://jineosy.com/'.$blogurl.'">
</amp-social-share>
<amp-social-share type="twitter" width="60" height="44"
  data-param-text="'.$excerpt.'">
</amp-social-share>
<amp-social-share type="whatsapp" width="60" height="44"
  data-param-text="'.$excerpt.'">
</amp-social-share>
</div>
<div id="sidebarauthor">by '.$name.'</div>

<div id="sidebarright">






</div>
</div>


</div>
</div>


</div>












</body></html>';

fwrite($handle2, $content1);


				$querywhatever="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content` FROM `posts`
		ORDER BY `post_id` DESC";

		$result=$this->mysqli->query($querywhatever);
				$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
 if($result->num_rows){
 while($row=$result->fetch_array(MYSQLI_ASSOC)){
	$date=$row['posted_on'];
	$named=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$contentd=$row['content'];
	$contentdbawo=htmlentities($contentd);

		$contenttd=substr($contentdbawo, 0, 350);
		$contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
		$contenttded=substr($contentdbawo, 350, strlen($contentdbawo));
		$contenteded=html_entity_decode($contenttded, ENT_COMPAT, "ISO8859-1");
	if(strlen($contentdbawo)>350){
$rmore='<input type="button" value="read more" id="'.$titled.$categoried.'readmore" onclick="showrest(\''.$titled.'\', \''.$categoried.'\');" />';}
 else{$rmore="";}

	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
	$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\');" />';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');" />';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name" />';
	$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment" />';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\');" />';
   $editnews='<input type="button" value="edit post" id="'.$titled.'4" onclick=
   "editei(\''.$titled.'\', \''.$categoried.'\');" />';

   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $response.='<div id="posts">'.'
 <div id="postedon">'.'<span
 id="postedonspan">Posted on</span>'.' '
 .$date
 .'<span
 id="name" style="display:none">'.' '.'By'.' '.$named.'</span>'.
 '</div>'.
 '<br />'.'<div id="imageurlpost">'.'<img src="'.$imageurl.'"  height ="100" width ="100">'.'</img>'.'</div>'.'<br />'.
 '<div id="category">'.'Category: '.$categoried.'</div>'.'<br />'.
 '<div id="title">'.'Topic: '.$titled.'</div>'.'<br />'.
 '<div id="content">'.

$contentd.
 '</div>'.'<br />'.
 '<div id="newssourcepost">'.$newssource.'</div>'.'<br />'.

 '<div id="like">'.$button.'</div>'.
 '<div id="comment">'.$comment.'</div>'.
 '<div id="commentNAME">'.$commentnametextbox.'</div>'.
 '<div id="commenttextbox">'.$commenttextbox.'</div>'.
 '<div id="commentsubmit">'.$commentsubmit.'</div>'.$editnews.
 $commentarea.'</div>'.'<br />'.'<br />';
 }}
$response .= '</response>';



	$handlewhatever=fopen('newsfeed.xml', 'w');

				$contentwhatever=$response;
fwrite($handlewhatever, $contentwhatever);


	$querysitemap="SELECT `pagemenu`, `postedon` FROM `pagesmenu`
		ORDER BY `id` DESC";

		$resultsitemap=$this->mysqli->query($querysitemap);
				$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

$response .= '<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
$response.= '<url>
 <loc>http://jineosy.com/index.php</loc>
 <lastmod>'.date('c', time()).'</lastmod>
 <changefreq>daily</changefreq>
 <priority>1.00</priority>
 </url>';
 if($resultsitemap->num_rows){
 while($row=$resultsitemap->fetch_array(MYSQLI_ASSOC)){
 $loc=$row['pagemenu'];
 $lastmod =$row['postedon'];
 $datetime = new DateTime($lastmod);
$resulttime = $datetime->format('Y-m-d\TH:i:sP');


 $response.= '<url>
 y
 <loc>http://jineosy.com/'.$loc.'.php</loc>
 <lastmod>'.date('c', time()).'</lastmod>
 <changefreq>daily</changefreq>
 <priority>0.8</priority>
 </url>';
 $response.= '<url>
 <loc>http://jineosy.com/amp'.$loc.'.php</loc>
 <lastmod>'.date('c', time()).'</lastmod>
 <changefreq>daily</changefreq>
 <priority>0.8</priority>
 </url>';
 }
 $response.= '</urlset>';
$handlesitemap = fopen('sitemap.xml', 'w');
fwrite($handlesitemap, $response);



				}

}else{$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '<message>'.'Sorry, you must enter the content of this posts
'.'</message>';
$response .= '</response>';
				return $response;

				}
			}
		}
	}


}



public function changepassword ($newpassword){
	$newpassword= $this->mysqli->real_escape_string($newpassword);
	$newpassord=md5($newpassword);
	$oh=1;
	$firstquery="UPDATE `admin` SET `password` = '".$newpassord."' WHERE `admin`.`user_id` = 2";


	if($result=$this->mysqli->query($firstquery)){

		$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
		$response .= '<response>';
$response .= '<message>'.'password change is successful, your password is now '.$newpassword
.'</message>';
$response .= '</response>';
				return $response;

	}else{
		$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

		$response .= '<response>';
$response .= '<message>'.'Sorry, password change is not succcessfull
'.'</message>';
$response .= '</response>';
				return $response;

	}
	}






	public function deletenews ($topictodelete){
	$topictodelete= $this->mysqli->real_escape_string($topictodelete);
	$xml=simplexml_load_string($topictodelete);
	foreach($xml-> topic as $topici){
$tu=$topici->topicde;

$tu=$this->mysqli->real_escape_string($tu);

	$firstquery="DELETE FROM  `posts` WHERE `posts`.`posted_on`='".$tu."' || `posts`.`title`='".$tu."'
	ORDER BY `post_id` DESC";



	$result=$this->mysqli->query($firstquery);

	$secondquery="DELETE FROM  `pagesmenu` WHERE `pagesmenu`.`title`='".$tu."'" ;



	$results=$this->mysqli->query($secondquery);

	}}
public function selecttopnews ($topictodelete){
	$topictodelete= $this->mysqli->real_escape_string($topictodelete);
	$xml=simplexml_load_string($topictodelete);



	$firstquery="TRUNCATE TABLE `topnews`";



	$result=$this->mysqli->query($firstquery);
	foreach($xml-> topic as $topici){
$tu=$topici->topicde;
$tu=$this->mysqli->real_escape_string($tu);

	$secondquery="INSERT INTO `topnews` SET `title`='".$tu."' " ;



	$results=$this->mysqli->query($secondquery);

	}}











	public function selectdeleteoption ($selectdeletecategory){
	$newpassword= $this->mysqli->real_escape_string($selectdeletecategory);

	$firstquery="SELECT `".$newpassword."` FROM  `posts` ORDER BY `post_id` DESC LIMIT 50";



	$result=$this->mysqli->query($firstquery);
	$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
	$response .= '<response>';
	while($row=$result->fetch_array(MYSQLI_ASSOC)){
	$date=$row[$newpassword];




$response .= '<message>'.$date
.'</message>';



	}

	$response .= '</response>';
	return $response;	}



private function titleexists($title, $category){
$title=$this->mysqli->real_escape_string($title);
$category=$this->mysqli->real_escape_string($category);
$query="SELECT `category`, `title` FROM `posts`
WHERE `category`='".$category."' && `title` ='".$title."' ";
$result=$this->mysqli->query($query);
if ($result->num_rows){
	return true;
}else{return false;}

}

public function checktitle($title, $category){
	$title=$this->mysqli->real_escape_string($title);
$category=$this->mysqli->real_escape_string($category);
	if($this->titleexists($title, $category)){
		$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '<message>'.'Sorry, this topic already exists in this same category; please enter another topic
'.'</message>';
$response .= '</response>';

	} elseif(strlen(trim($title))>119){
		$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '<message>'.'Sorry, your topic can\'t be longer than 40 characters
'.'</message>';
$response .= '</response>';


	} else{
		$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '</response>';


	}
	return $response;
}
public function checkemptytitle($title){
	if ($title == ''){

		$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '<message>'.'Sorry, you have to enter a topic.
'.'</message>';
$response .= '</response>';
				return $response;

	} else{
		$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '</response>';
				return $response;

	}

}
 public function like($title, $category){
	$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="INSERT INTO `likes` (`category`, `title`)VALUES('".$category."','".$title."')";
$result=$this->mysqli->query($query);
 }
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

 public function comment($title, $name, $comment, $category){
	$title=$this->mysqli->real_escape_string($title);
	$name=$this->mysqli->real_escape_string($name);
	$comment=$this->mysqli->real_escape_string($comment);
	$category=$this->mysqli->real_escape_string($category);
$query="INSERT INTO `comment` (`category`, `name`,`comment`, `title`, `pagename`)VALUES('".$category."', '".$name."', '".$comment."', '".$title."', 'admin')";
$result=$this->mysqli->query($query);
 }
public function commenttexts ($title,$category){
$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="SELECT `id`, `name`,`title`, `category`, `comment` FROM `comment` WHERE `title`
='".$title."' && `category` ='".$category."'";
$result=$this->mysqli->query($query);
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
 if($result->num_rows){
 while($row=$result->fetch_array(MYSQLI_ASSOC)){
	$id=$row['id'];
	$name=$row['name'];
	$comment=$row['comment'];
	$category=$row['category'];
	$title=$row['title'];

 $response .='<div id="comments">

 '.'<commenttext>'.'Comment: '.' '.'By'.'</commenttext> '.'<commentname>'.chr(10) .$name.'</commentname>'.'<commentgan>'.' '.$comment.'</commentgan>'.
 '</div>';
 }}
$response .= '</response>';
				return $response;

}
public function choosemaincontent(){
	$choosecategory=$this->mysqli->real_escape_string($choosecategory);
$choosetopic=$this->mysqli->real_escape_string($choosecategory);
$query="INSERT INTO `choosecontent`(`category`, `title`) VALUES('".$choosecategory."','".$choosetopic."')";
	$result=$this->mysqli->query($query);
	$query1="INSERT INTO `choosecontent`(`category`, `title`) VALUES('".$choosecategory."','".$choosetopic."')";
	$result1=$this->mysqli->query($query1);
	$query="SELECT `category`, `title` FROM `choosecontent` ORDER BY `id` DESC LIMIT 1";
while($row=$result->fetch_array(MYSQLI_ASSOC)){
	$categorychosen=$row['category'];
	$topicchosen=$row['title'];
	$choosecattopic ='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
	$response .= '<response>';
	$choosecattopic .='<topicchosen>'.$topicchosen.'</topicchosen>';
	$choosecattopic .='<categorychosen>'.$categorychosen.'</categorychosen>';
	$response .= '</response>';

}
	return $choosecattopic;

}
public function viewcontent($title,$category){
	$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="SELECT `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content` FROM `posts` WHERE
`title`='".$title."' && `category`='".$category."'";
$result=$this->mysqli->query($query);
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
 if($result->num_rows){
 while($row=$result->fetch_array(MYSQLI_ASSOC)){
	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
	$titled=$row['title'];
	$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$contentd=$row['content'];

	$contentdbawo=htmlentities($contentd);
		$contenttd=substr($contentdbawo, 0, 350);
		$contented=html_entity_decode($contenttd);
		$contenttded=substr($contentdbawo, 350, strlen($contentdbawo));
		$contenteded=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
	if(strlen($contentdbawo)>350){
$rmore='<input type="button" value="read more" id="'.$titled.$categoried.'readmore" onclick="showrest(\''.$titled.'\', \''.$categoried.'\');">';}
 else{$rmore="";}
	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
		$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="liking(\''.$titled.'\', \''.$categoried.'\');">';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
	$commenttextbox='<input type="text" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="commentei(\''.$titled.'\', \''.$categoried.'\');">';
   $editnews='<input type="button" value="edit news" id="'.$titled.'4" onclick=
   "editei(\''.$titled.'\', \''.$categoried.'\');">';

   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $response.='<div id="posts">
 <div id="postedon">'.'<span
 id="postedonspan">Posted on</span>'.' '
 .$date
 .'<span
 id="name" style="display:none">'.' '.'By'.$name.'</span>'.
 '</div>'.
 '</br>'.
 '<div id="imageurlpost">'.'<img src='.$imageurl.' heigth ="100" width ="100">'.'</img>'.'</div>'.'</br>'.
 '<div id="category">'.'Category: '.$categoried.'</div>'.'</br>'.
 '<div id="title">'.'Topic: '.$titled.'</div>'.'</br>'.
 '<div id="content">'.
 '<span id="'.$categoried.$titled.'contented">'.$contented.'</span>'.
 '<span style="display:none" id="'.$categoried.$titled.'contenteded">'.$contenteded.'</span>'.
$rmore.
 '</div>'.'</br>'.'<div id="newssourcepost">'.$newssource.'</div>'.'</br>'.

 '<div id="like">'.$button.'</div>'.
 '<div id="comment">'.$comment.'</div>'.
 '<div id="comment">'.$commentnametextbox.'</div>'.
 '<div id="commenttextbox">'.$commenttextbox.'</div>'.
 '<div id="commentsubmit">'.$commentsubmit.'</div>'.
 $editnews.$commentarea.'</div>'.'</br>'.'</br>';
 }}
$response .= '</response>';
				return $response;

}



	public function firstshow(){

		$query="SELECT `post_id`, `posted_on`, `imageurl`, `newssource`, `name`, `title`, `category`, `content` FROM `posts`
		ORDER BY `post_id` DESC LIMIT 10";

		$result=$this->mysqli->query($query);
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
 if($result->num_rows){
 while($row=$result->fetch_array(MYSQLI_ASSOC)){
	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
		$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$titledii=$titled;
	$contentd=$row['content'];
	$contentdbawo=htmlentities($contentd);

		$contenttd=substr($contentdbawo, 0, 350);
		$contented=html_entity_decode($contenttd, ENT_COMPAT, "ISO8859-1");
		$contenttded=substr($contentdbawo, 350, strlen($contentdbawo));
		$contenteded=html_entity_decode($contenttded, ENT_COMPAT, "ISO8859-1");
	if(strlen($contentdbawo)>350){
$rmore='<input type="button" value="read more" id="'.$titled.$categoried.'readmore" onclick="showrest(\''.$titled.'\', \''.$categoried.'\');">';}
 else{$rmore="";}

	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
	$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\');">';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
	$commenttextbox='<input type="text" style="width:250px" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\');">';
   $editnews='<input type="button" value="edit post" id="'.$titled.'4" onclick=
   "editei(\''.$titledii.'\', \''.$categoried.'\');">';

   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $response.='<div id="posts">'.'
 <div id="postedon">'.'<span
 id="postedonspan">Posted on</span>'.' '
 .$date
 .'<span
 id="name" style="display:none">'.' '.'By'.' '.$name.'</span>'.
 '</div>'.
 '</br>'.'<div id="imageurlpost">'.'<img src="'.$imageurl.'"  height ="100" width ="100">'.'</img>'.'</div>'.'</br>'.
 '<div id="category">'.'Category: '.$categoried.'</div>'.'</br>'.
 '<div id="title">'.'Topic: '.$titled.'</div>'.'</br>'.
 '<div id="content">'.
 '<span id="'.$categoried.$titled.'contented">'.$contented.'</span>'.
 '<span style="display:none" id="'.$categoried.$titled.'contenteded">'.$contenteded.'</span>'.
$rmore.
 '</div>'.'</br>'.
 '<div id="newssourcepost" style="width:60%"><a href="'.$newssource.'.php">link</a></div>'.'</br>'.

 '<div id="like">'.$button.'</div>'.
 '<div id="comment">'.$comment.'</div>'.
 '<div id="commentNAME">'.$commentnametextbox.'</div>'.
 '<div id="commenttextbox">'.$commenttextbox.'</div>'.
 '<div id="commentsubmit">'.$commentsubmit.'</div>'.$editnews.
 $commentarea.'</div>'.'</br>'.'</br>';
 }}
$response .= '</response>';
				return $response;


	}






public function selectoption(){
$query="SELECT `name` FROM `category`";
$query_run=$this->mysqli->query($query);
while($row=$query_run->fetch_array(MYSQLI_ASSOC)){
	$option .='<option value="'.$row['name'].'">'. $row['name'].' </option>';

}
return $option;


}


public function searching ($searchtext, $search){
$searchcategories=$this->mysqli->real_escape_string($searchtext);
$search=$this->mysqli->real_escape_string($search);
if (trim($search !=="")){
if($searchcategories=='username'){
	$query="SELECT `post_id`, `imageurl`, `newssource`, `name`, `category`, `posted_on`,
`title`, `content` FROM `posts` WHERE `name`  LIKE '%".$search."%' ORDER BY `post_id` DESC
";}elseif($searchcategories=='category'){
	$query="SELECT `post_id`, `imageurl`, `newssource`,`name`, `category`, `posted_on`,
`title`, `content` FROM `posts` WHERE `category`  LIKE '%".$search."%' ORDER BY `post_id` DESC
";}elseif($searchcategories=='date'){
	$query="SELECT `post_id`, `imageurl`, `newssource`,`name`, `category`, `posted_on`,
`title`, `content` FROM `posts` WHERE `posted_on`  LIKE '%".$search."%' ORDER BY `post_id` DESC
";}
elseif($searchcategories=='title'){
	$query="SELECT `post_id`, `imageurl`, `newssource`,`name`, `category`, `posted_on`,
`title`, `content` FROM `posts` WHERE `title`  LIKE '%".$search."%' ORDER BY `post_id` DESC
";}
elseif($searchcategories=='content'){$query=
"SELECT `post_id`, `imageurl`, `newssource`,`name`, `category`, `posted_on`,
`title`, `content` FROM `posts` WHERE `content`  LIKE '%".$search."%' ORDER BY `post_id` DESC
";}

}else{$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '</response>';
				return $response;}
$result = $this->mysqli->query($query);

$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
 if($result->num_rows){
while($row=$result->fetch_array(MYSQLI_ASSOC)){
$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
	$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];

	$titled=$row['title'];
	$titledii=$this->removequot($titled);
	$contentd=$row['content'];
	$contentdbawo=htmlentities($contentd);
		$contenttd=substr($contentdbawo, 0, 350);
		$contented=html_entity_decode($contenttd);
		$contenttded=substr($contentdbawo, 350, strlen($contentdbawo));
		$contenteded=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
	if(strlen($contentdbawo)>350){
$rmore='<input type="button" value="read more" id="'.$titled.$categoried.'readmore" onclick="showrest(\''.$titled.'\', \''.$categoried.'\');">';}
 else{$rmore="";}

	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
	$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\');">';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
	$commenttextbox='<input type="text" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.$categoried.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\');">';
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $editnews='<input type="button" value="edit news" id="'.$titled.'4" onclick=
   "editei(\''.$titledii.'\', \''.$categoried.'\');">';

 $response.='<div id="posts">
 <div id="postedon">'.'<span
 id="postedonspan">Posted on</span>'.' '
 .$date.'<span
 id="name" style="display:none">'.' '.'By'.' '
 .$name.'</span>'.
 '</div>'.
 '</br>'.'<div id="imageurlpost">'.'<img src="'.$imageurl.'" heigth ="100" width ="100">'.'</img>'.'</div>'.'</br>'.
 '<div id="category">'.'Category: '.$categoried.'</div>'.'</br>'.
 '<div id="title">'.'Topic: '.$titled.'</div>'.'</br>'.
 '<div id="content">'.
 '<span id="'.$categoried.$titled.'contented">'.$contented.'</span>'.
 '<span style="display:none" id="'.$categoried.$titled.'contenteded">'.$contenteded.'</span>'.
$rmore.
 '</div>'.'</br>'.
 '<div id="newssourcepost" style="width:60%;">'.$newssource.'</div>'.'</br>'.
 '<div id="like">'.$button.'</div>'.
 '<div id="comment">'.$comment.'</div>'.
 '<div id="comment">'.$commentnametextbox.'</div>'.
 '<div id="commenttextbox">'.$commenttextbox.'</div>'.
 '<div id="commentsubmit">'.$commentsubmit.'</div>'.$editnews.
 $commentarea.'</div>'.'</br>'.'</br>';
 }}
$response .= '</response>';
				return $response;


}





public function editpostpost($title,$category){
	$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="SELECT `posted_on`, `imageurl`, `newssource`, `name`, `title`, `userurl`, `tag1`, `tag2`, `tag3`, `category`, `newcategory`, `subtopic`, `excerpt`, `content` FROM `posts` WHERE
`title`='".$title."' && `category`='".$category."'";
$result=$this->mysqli->query($query);
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

$response .= '<response>';
 if($result->num_rows){
 while($row=$result->fetch_array(MYSQLI_ASSOC)){
	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
	$titled=$row['title'];
	$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$userurl=$row['userurl'];
	$tag1=$row['tag1'];
	$tag2=$row['tag2'];
	$tag3=$row['tag3'];
	$newcategory=$row['newcategory'];
	$subtopic=$row['subtopic'];
	$excerpt=$row['excerpt'];
	$contentd=$row['content'];
	$contentdbawo=htmlentities($contentd);

	$imageurl=htmlentities($imageurl);
	$findimg='&';
	$imageurl=str_replace($findimg, '&amp;', $imageurl);
	$imageurl=html_entity_decode($imageurl,ENT_COMPAT, "ISO8859-1");

	$excerpt=htmlentities($excerpt);
	$findexc='&';
	$excerpt=str_replace($findexc, '&amp;', $excerpt);
	$excerpt=html_entity_decode($excerpt,ENT_COMPAT, "ISO8859-1");


	$find='&';
	$content=str_replace($find, '&amp;', $contentdbawo);
	$contenteded=html_entity_decode($content,ENT_COMPAT, "ISO8859-1");
	$response .= '<responses>';

 $response.=
'<name>'.$name.'</name>'.

 '<category>'.$categoried.'</category>'.
 '<title>'.$titled.'</title>'.
 '<content>'
 .$contenteded.
 '</content>'.
 '<date>'
 .$date.
 '</date>'.
 '<newssource>'.$newssource.'</newssource>'.
  '<imageurl>'.$imageurl.'</imageurl>'.
  '<userurl>'.$userurl.'</userurl>'.
  '<newcategory>'.$newcategory.'</newcategory>'.
  '<subtopic>'.$subtopic.'</subtopic>'.
  '<excerpt>'.$excerpt.'</excerpt>'.
  '<tag1>'.$tag1.'</tag1>'.
  '<tag2>'.$tag2.'</tag2>'.
  '<tag3>'.$tag3.'</tag3>';
$response .= '</responses>';
 }}
$response .= '</response>';
$response = trim($response);
				return $response;

}










public function see_older_messages($number){
	if ($number=='Last 50'){
		$query= "SELECT `post_id`, `imageurl`, `newssource`, `posted_on`, `name`, `category`,`title`, `content`
		FROM  `posts` ORDER BY `post_id` DESC LIMIT 50 ";
	}
	elseif ($number=='Last 100'){
		$query= "SELECT `post_id`, `imageurl`, `newssource`, `posted_on`, `name`, `category`,`title`, `content`
		FROM  `posts` ORDER BY `post_id` DESC LIMIT 100 ";  }
	else{$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '</response>';
				return $response;}


$result=$this->mysqli->query($query);
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
 if($result->num_rows){
while($row=$result->fetch_array(MYSQLI_ASSOC)){
$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
	$imageurl=$row['imageurl'];
	$newssource=$row['newssource'];
	$titled=$row['title'];
	$contentd=$row['content'];
	$contentdbawo=htmlentities($contentd);
		$contenttd=substr($contentdbawo, 0, 350);
		$contented=html_entity_decode($contenttd);
		$contenttded=substr($contentdbawo, 350, strlen($contentdbawo));
		$contenteded=html_entity_decode($contenttded,ENT_COMPAT, "ISO8859-1");
	if(strlen($contentdbawo)>350){
$rmore='<input type="button" value="read more" id="'.$titled.$categoried.'readmore" onclick="showrest(\''.$titled.'\', \''.$categoried.'\');">';}
 else{$rmore="";}

	$input = $this->likenumber($titled,$categoried);
	if($input>1){$like='likes';}else{$like='like';}
	$button='<input type="button" value="'.$input.' '.$like.'" id="'.$titled.$categoried.'" onclick="like(\''.$titled.'\', \''.$categoried.'\');">';
	$inputs=$this->commentnumber($titled,$categoried);
	if($inputs>1){$comment='comments';}else{$comment='comment';}
	$comment='<input type="button" value="view '.$inputs.' '.$comment.'" id="'.$titled.'1" onclick="commenttexts(\''.$titled.'\', \''.$categoried.'\');">';
	$commentnametextbox='<input type="text" id="'.$titled.$categoried.'name" placeholder="name">';
	$commenttextbox='<input type="text" id="'.$titled.$categoried.'realcomment" placeholder="write comment">';
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.$categoried.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\');">';
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $editnews='<input type="button" value="edit news" id="'.$titled.'4" onclick=
   "editei(\''.$titled.'\', \''.$categoried.'\');">';

 $response.='<div id="posts">
 <div id="postedon">'.'<span
 id="postedonspan">Posted on</span>'.' '
 .$date.'<span
 id="name" style="display:none">'.' '.'By'.' '
 .$name.'</span>'.
 '</div>'.
 '</br>'.'<div id="imageurlpost">'.'<img src="'.$imageurl.'" heigth ="100" width ="100">'.'</img>'.'</div>'.'</br>'.
 '<div id="category">'.'Category: '.$categoried.'</div>'.'</br>'.
 '<div id="title">'.'Topic: '.$titled.'</div>'.'</br>'.
 '<div id="content">'.
 '<span id="'.$categoried.$titled.'contented">'.$contented.'</span>'.
 '<span style="display:none" id="'.$categoried.$titled.'contenteded">'.$contenteded.'</span>'.
$rmore.
 '</div>'.'</br>'.
 '<div id="newssourcepost" style="width: 60%;">'.$newssource.'</div>'.'</br>'.
 '<div id="like">'.$button.'</div>'.
 '<div id="comment">'.$comment.'</div>'.
 '<div id="comment">'.$commentnametextbox.'</div>'.
 '<div id="commenttextbox">'.$commenttextbox.'</div>'.
 '<div id="commentsubmit">'.$commentsubmit.'</div>'.$editnews.
 $commentarea.'</div>'.'</br>'.'</br>';
 }}
 $response .= '</response>';
				return $response;


}

public function searchingcategory ($search){

$search=$this->mysqli->real_escape_string($search);
if (trim($search !=="")){
$query="SELECT `id`, `name` FROM `category` WHERE `name`  LIKE '%".$search."%' ORDER BY `id` DESC
";}
else{$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '</response>';
				return $response;}
$result = $this->mysqli->query($query);

$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

$response .= '<response>';
 if($result->num_rows){
while($row=$result->fetch_array(MYSQLI_ASSOC)){
$list='<input type="button"  value="'.$row['name'].'" id="'.$row['name'].'" onclick="listtopics(\''.$row['name'].'\');">';
			$delete='<input type="button"  value="delete" id="'.$row['name'].'" onclick="deleting(\''.$row['name'].'\');">';
			$response.= $list.' '.' '. $delete.'<div style="display:none" id="'.$row['name'].'222">'.'<input type="text" placeholder="administrator password"
			id="'.$row['name'].'333" onkeyup="deleting(\''.$row['name'].'\');">'.'</div>'.'<div id="'.$row['name'].'111">'.'</div>'.'</br>';

		}}
		$response.='</response>';
		return $response;



}
}



?>
