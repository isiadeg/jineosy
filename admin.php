<?php
require ('init.php');
require('core.inc.php');
if (loggedin()){?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content ="width=device-width, initial-scale=1.0" />
<meta name="keywords" content=" news, nigeria news, newsline"/>
<script src="ckeditor_4.6.1_full/ckeditor/ckeditor.js"></script>
</script><script src="ilyasadmin.js" type="text/javascript" > </script>
<link rel="stylesheet" type="text/css" href="ilyas.css">
<link href="dipoadmin.css" rel="stylesheet" type="text/css">

<title>News line</title>
<style>
header{
margin: -5%;

}
.unmovable{
width: 100%;
background-color: transparent;
    padding: 3%;
    padding-bottom: 0px;
	
 
}
.whitebg{
    padding-top: 2%;
	background-color: white;
box-shadow: 0px 1px 5px 3px rgb(200, 200, 200);
position: fixed;
}
.enclosed{ box-shadow: ; width: 85%; height: auto;   }


body{
font-size: 100%;
overflow-x: hidden;}
.dropdownwrapper{
position: relative;

display: inline-block;

}
ul{
list-style-type:none;
padding: 0px;
}
.dropdowncontent{
	width:0px;
position: absolute;
height: 380px;

overflow:auto;
 
}
.dropdowncontent::-webkit-scrollbar {
    background-color: #262f3d;
    width: 8px;
}
.dropdowncontent::-webkit-scrollbar-thumb {
    background-color: #8a9bb2;
    -webkit-border-radius: 8px;
    border-radius: 8px;
    border: 2px solid #262f3d;
}
.click{
box-shadow: 0px 1px 5px 3px rgb(200, 200, 200);
background-color:#262f3d;

padding: 10px;
}
.click1{

background-color:#262f3d;

padding: 10px;
}
/*
.dropdownwrapper:hover .dropdowncontent{
display: block;
}*/
.bar {
    
    background-color: black;
    margin-top: 4px;
    padding: 2px;
   
    display: block;
}

.dropbutton {
    width:30px;
    padding: 8px;
    padding-top: 3px;
    
    background-color: white;
}
.dropdownwrapper1: {
display: inline-block;
position: relative; 
}
.dropdownwrapper1, .dropdowncontent>nav>ul>li{
border-bottom: 1px solid white;
padding-bottom: 5px;
padding-top: 5px;
background-color: rgb(38, 47, 61);
text-decoration: none;

} 
.color{
background-color: rgb(25,33,43);
}
.dropdowncontent1{
position: relative;
width: 90%;
overflow:auto;
 background-color: rgb(25,33,43);

}
.dropdowncontent1>ul>li{

}
.dropdowncontent1>ul>li>a{
    text-decoration: none;
    color: rgb(183, 185, 188);
    font-family: Roboto,"Helvetica Neue",sans-serif;
    line-height: 22px;
}
.dropdownwrapper1 li a{
    text-decoration: none;
    color: white;
   font-family: cursive,Georgia;
   padding-left: 7px;
   
}
.dropdowncontent1>ul>li{
padding-bottom: 15px;
}
.dropdowncontent1>ul>li>a:link{
}
.dropdowncontent1>ul>li>a:hover{
background-color: rgb(38, 47, 61);
}
.dropdowncontent1>ul>li>a:hover .dropdowncontent1>ul>li{
background-color: rgb(38, 47, 61);
}
.plus{
float: right;
    padding-right: 10px;
    color: white;
    font-family: cursive;
    font-weight: bold;
    padding-top: 2%;
	cursor: pointer;
}
.dropbtn1{
color: white;
    background-color: transparent;
    border: none;
    font-family: cursive, Georgia;
    font-size: 1em;
    text-align: left;
    padding: 5px;
}
/*.dropdownwrapper1:hover .dropdowncontent1{
display: block;

}
.dropdownwrapper1:hover .dropdownwrapper1{
display: block;


}
*/
.gap{
padding-top: 15%;

}
.left{
padding-left: 20px;
float: none;
	width: ;
}
.mainbox{
   border: 1px solid #ccc;
   padding: 10px;
   
   margin: 10px;
   margin-left: 0px;
   font-family: Verdana, Arial, Times, serif;;
   color: #747474;
   background-color: #ffffff;
   border-radius: 4px;
   width: 90%;
   }


   .headerword{
   font-size: 1.1em;
   float: right;
   
   text-transform: uppercase;
    padding-top: 10px;
    margin-right: 35%;
    margin-bottom: 20px;
   }
   .input:focus{
   border: 1px solid blue;
   box-shadow: none;
   outline-offset: none;
   outline: none;
   }
   .input{
   border: 1px solid #ccc;
   margin: 10px;
   width: 80%;
   font-size: 1em;
   padding:10px;
   }
   .instruction{
   color: #967001;
   padding: 10px;
   font-style: italic;
   }
   .convert{
   border-radius: 8px;
   color: #484848;
   border: 1px solid #dedede;
   background-color: #f1f1f1;
   margin: 25px;
   margin-top: 15px;
   cursor: pointer;
   padding: 4px 8px;
   }
   .convert:hover{
   box-shadow: 0px 1px 5px 3px #848484;
   border: 1px solid #bbb;
   }
   .toplabel{
   font-size: 1.1em;
   font-family: Verdana, Arial, Times, serif;
   padding-left: 30px;
   }
   select{
   font-size: 1.1em;
   font-family: Verdana, Arial, Times, serif;
   }
   
   
   
@media only screen and (min-width: 750px){
.dropdownwrapper {
    position: relative;
    display: block;
}


.unmovable{
width: 100%;
background-color: transparent;
    padding: 50px;
    padding-bottom: 0px;
	
 
}
.whitebg{
    padding-top: 40px;
	background-color: white;
}

.gap{
padding-top: 10%;

}
.left{
padding: 20px;
}

.mainbox{
width: 50%;
}

.headerword{
margin-right: 60%;
}

.dropdowncontent{
	width:28%;
	margin-left: -3%;
	margin-top: 45px;
	float:left;
	
	
}
.dropdowncontent1 ul li a{
	padding-left: 30px;
}
.dropbtn1{
	padding-left: 30px;
}

.dropbutton {
	display: none;
}
.left {
	float: left;
	margin-left: 30%;
	width: 65%;
	border-left: 3px solid rgb(25, 33, 43);
	
}

}
</style>





</head>

<body onLoad="firstshowing();">
<header>
<div class="unmovable" id="unmovable">
<div class="headerword" id="headerword">
john blog
</div>
<div class="dropdownwrapper">
<div class="dropbutton">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</div>
<!--<div class="dropdowncontent">
<nav>

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

<div class="dropdownwrapper1">
<li>

<button id="reveallogform"  style="margin-bottom:-4px;"class="dropbtn1">Blog <span style="float: right;">+</span></button>
<div class="dropdowncontent1">
<ul>
<li>
<a href="#">jjjj</a>
</li>
<li>
<a href="#">jjjj</a>
</li>
<li>
<a href="#">jjjj</a>
</li>
</ul>
</div>
</li>
<li>

<a href="geniusrollregistration.php" style="z-index: 8;"target="_self">Register</a>
</li>
</div>
</ul>

</nav>
</div>-->
<div class="dropdowncontent" id="dropdowncontent" >
<nav>

<ul>
<div class="dropdownwrapper1">
<li>

<button id="reveallogform"  style="margin-bottom:-4px;"class="dropbtn1"> Posts & Category</button><span class="plus"style="float: right;">+</span>
<div class="dropdowncontent1" id="dropdowncontent1" style="display: none;">
<ul>
<li>
<a href="#" onclick="posterss();" >ADD POST </a>
</li>
<li>
<a href="#" onclick="category()"  >Category Section</a>
</li>

<li>
<a href="#" onclick="firstshowing();">Show Post</a>
</li>
</ul>
</div>
</li>

</div>

<div class="dropdownwrapper1">
<li>

<button id="reveallogform"  style="margin-bottom:-4px;"class="dropbtn1">Search</button><span class="plus"style="float: right;">+</span>
<div class="dropdowncontent1" id="dropdowncontent1" style="display: none;">
<ul>
<li>
<a href="#">Search News By: <select id="searchtext" style="margin-left: 60px; margin-bottom: 10px; color: rgb(183, 185, 188); background-color: rgb(25, 33, 43);" ><option value="user_name">user_name</option>
	<option value="category">category</option>
	<option value="title">Headlines</option>
	<option value="content">Content</option>	 </select><br />
	<input type="text" style="margin-left: 60px; margin-bottom: 10px; background-color: rgb(25, 33, 43); color: rgb(183, 185, 188);" placeholder="search word" id="search" onkeyup="search();"> </a>
</li>
<li>
<a href="#" > See<select id="seenewmessages" onchange="seerecentposts()"  style=" margin-bottom: 10px; color: rgb(183, 185, 188); background-color: rgb(25, 33, 43);"><option value="Last 0">Last 0</option><option value="Last 50">Last 50</option>
	<option value="Last 100">Last 100</option>
	 </select>News</a>
</li>

</ul>
</div>
</li>

</div>
<div class="dropdownwrapper1">
<li>

<button id="reveallogform"  style="margin-bottom:-4px;"class="dropbtn1">Settings</button><span class="plus"style="float: right;">+</span>
<div class="dropdowncontent1" id="dropdowncontent1" style="display: none;">
<ul>
<li>
<a href="#" onclick="revealchangepassword();">Change password </a>
</li>
<li>
<a href="#" onclick="revealdelete();" STYLE="COLOR: RED;">DELETE POSTS </a>
</li>
 
</ul>
</div>
</li>
<li style="border-top: 1px solid white; padding-top: 5px; padding-bottom: 5px;">

<a href="geniusrollregistration.php" style="z-index: 8; padding-left: 40px; "target="_self">Register</a>
</li>
</div>
<li>
<a id="reveallogform"  style="margin-bottom:-4px;"class="dropbtn1">Blog </a>
</li>

</ul>

</nav>
</div>
</div>
</div>
</header>
<div id="gap" class="gap"></div>
<div class="left">
<div id="encompass" class="encompass">
 <div id="passworddivd" style="display:none;"><input type="password" placeholder="password" 
id="password" onkeyup="validatepassword();" ></div> <div id="what" style="display:none">
<input type="text" placeholder="password" id="changepassword">
<input type="button" value="Change password" onclick="changepassword();" >
<div id="changepassworddiv"></div> 
<input type="button" value="CANCEL/BACK" onclick="cancelpassword();">
</div>
 
 <div id="deletepostdiv" style="display:none">Delete Posts By: 
 <select id="deleteselect" onchange="selectdeleteoption();">
 
	<option value="posted_on">date</option>
	<option value="title">Topic</option>
	 </select>
	<input type="text" id="deletecategorydiv" style="display:none">
	<table id ="table">
	<thead>
		<tr>
			<th>
			select news to delete
			</th>
	
		</tr>
		<tr>
			<th>
			check the boxes to delete
			</th>
			<th>
			topic/date
			</th>
		</tr>
	</thead>
	<tbody>
	
	
	
	</tbody>
	
 
 
 </table>
 <input type="button" id="deletenews" value="DELETE NEWS" onclick="deletenews();" >
<input type="button" value="CANCEL/BACK" onclick="canceldelete();"> 
	</div><div id="enclosed" style="">
 <div id="searchareas"><div id ="categoryrevealer"></div>
 <div id="searchpostdiv"></div>
	<div id="seediv"> </div><div id="addpostdiv">
	 </div>
	 </br></br></div>  <div id="left">
<div id="addcategoriel"> 

  </div>
  </div>
    <div id="maincontent">
 <div id="firstshowing"> 
  </div>	
  </div>



<div id="posting">
 
 <div id="postingpictures"></div>
   <div id="headlinepictures" style="display:none">
   <input type="button" value="CANCEL POST" onclick="cancelpost();"><br />Upload your headline pictures</br>Choose File: </br><input type="file"  id="headlinefile" name="headlinepost">
 <input type="button" id="uploadsecond" value="Upload" onclick="uploadsecond();">
 <input type="text" id="fileurli" style="display:none"></div>

   <div id="postingname" style="display:none">Name: </br><input type="text" placeholder="name" id="namepost" onkeydown="handleKey(event)"/>
<input type="text" placeholder="name" id="nowwhat" style="display:none">

   
   </div> <div id="postingcategory" style="display:none">  Category: </br>
 <select id="categoryselect" onfocus="selectoption();">

<div id="addcategoriel" style="display:none">
  </select><span id="addcategoryword">Add category :</span></br> 
 <input type="text" id="addcategorie" onkeyup ="checkcategoryexists();">
<div id="checkcategorie">
  </div>
 <input type="submit" id="submitaddcategorie" value="add" onclick="addcategory();"> 
  </div>
</div>
  <div id="postingtitle" style="display:none">
<span id="posttitle">Topic :</span></br>
<input type="text" placeholder="topic" id="titlenow" onkeyup="checktitle(event)";>
  <div id="checktitle"></div></br>
<span id="postsource">Source of the news :</span></br>
<input type="text" placeholder="news source" id="newssource" onblur="alerti();"> </br>
  <input type="text" placeholder="user url" style="display:none;" id="fileurlt" onblur="alerti();"> </br>
  <span id="posttitle" >keyword 1 :</span></br><input type="text" placeholder="tags" id="tag1" onblur="alerti();"> </br>
  <span id="posttitle">keyword 2 :</span></br><input type="text" placeholder="keywords" id="tag2" onblur="alerti();"> </br>
  <span id="posttitle">Keyword 3 :</span></br><input type="text" placeholder="keywords" id="tag3" onblur="alerti();"> 
  
  <div id="postingcontent" style="display:none"> <div id="copyingpostcontent" style="display:none"> 
 <textarea id="copypostcontent" class="postcontent"  style="display:none" >
</textarea></br>Copy the content of the Textbox above; click on the "source" in the editable box menu below;</br>
then paste the copied text and click "source" again. </br>
You can  now edit whatever you want to edit.</br></div> <span id="postcontents"> Content: </span></br>
 <textarea id="postcontent" name="postcontent" placeholder="content of your post" onfocus="checkemptytitle();" >
</textarea><script>
            
			CKEDITOR.replace( 'postcontent', {
    filebrowserBrowseUrl: '/brwse.php',
    filebrowserUploadUrl: '/upload.php'
});
        </script></br><div id="checkemptycontent();"></div>
<input type="button" id="insertpostnews" value="post" onclick="insertpost();">
<input type="button" id="editpostnews" value="submit" onclick="editpostgan();">
 </div> </br></br><input type="button" value="Hide posting section" onclick="hideposterss();"style="display:none">
   </div></div></div></div>
   
      <script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    /*document.getElementById("header").className = "headerboxshadow";
document.getElementById("nav1").className += " "+"nav2";*/
if(document.getElementById("unmovable").className ="unmovable"+" "+"whitebg"){

}else{
document.getElementById("unmovable").className +=" "+"whitebg";
}

/*document.getElementById("headerlogo").className = "headerword2";
document.getElementById("headerw").style.display = "inline-block";
*/  
 } else {
  /*document.getElementById("header").className = "";*/
document.getElementById("unmovable").className="unmovable";

/*document.getElementById("showvisagediv").style.top="200px";
document.getElementById("headerlogo").className = "headerlogo";
document.getElementById("headerw").style.display = "none*/
  
    
  }
}
dropbutton=document.querySelector('.dropbutton' );
dropbutton.addEventListener('click', function(){
if(document.getElementById('dropdowncontent').style.width=="0px"){
document.getElementById('dropdowncontent').className +=" "+"click";
document.getElementById('dropdowncontent').style.width="600%";
}
else{
document.getElementById('dropdowncontent').style.width="0px";
document.getElementById('dropdowncontent').className="dropdowncontent";

}
});
dropbtn=document.querySelectorAll('.plus' );

dropbtn[0].addEventListener('click', function(){

hey=document.getElementsByClassName('dropdowncontent1');
hiy=document.getElementsByClassName('dropdownwrapper1');
if(hey[0].style.display=="none"){
hey[0].className +=" "+"click1";
hey[0].style.display="block";
dropbtn[0].innerHTML ="-";
hiy[0].className +=" "+"color";
}
else{
hey[0].style.display="none";
hey[0].className="dropdowncontent1";
dropbtn[0].innerHTML ="+";
hiy[0].className ="dropdownwrapper1";

} 

}); 

dropbtn[1].addEventListener('click', function(){

hey=document.getElementsByClassName('dropdowncontent1');
hiy=document.getElementsByClassName('dropdownwrapper1');
if(hey[1].style.display=="none"){
hey[1].className +=" "+"click1";
hey[1].style.display="block";
dropbtn[1].innerHTML ="-";
hiy[1].className +=" "+"color";
}
else{
hey[1].style.display="none";
hey[1].className="dropdowncontent1";
dropbtn[1].innerHTML ="+";
hiy[1].className ="dropdownwrapper1";
} 

}); 
dropbtn[2].addEventListener('click', function(){

hey=document.getElementsByClassName('dropdowncontent1');
hiy=document.getElementsByClassName('dropdownwrapper1');
if(hey[2].style.display=="none"){
hey[2].className +=" "+"click1";
hey[2].style.display="block";
dropbtn[2].innerHTML ="-";
hiy[2].className +=" "+"color";
}
else{
hey[2].style.display="none";
hey[2].className="dropdowncontent1";
dropbtn[2].innerHTML ="+";
hiy[2].className ="dropdownwrapper1";
} 

}); 

</script>
   
   
   </body>
</html>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
<?php }
else
{
include 'dipologinform.inc.php';
}


?>