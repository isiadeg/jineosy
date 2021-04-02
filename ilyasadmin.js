
var xmlhttp=xmlhttp();
var cache= new Array();
var lastmessageid=-1;
function xmlhttp(){
if(window.XMLHttpRequest){
xmlhttp=new XMLHttpRequest();
}else{
xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');}
return xmlhttp;}
function validatepassword(){
	if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
		var opassword=encodeURIComponent(document.getElementById("password").value);
		
		params='mode=validatepassword'+
		'&password='+opassword;
		xmlhttp.open('POST', 'ilyasadmin.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessageeee;
		xmlhttp.send(params);
	
}}
function handlereceivingmessage(){
	if (xmlhttp.readyState==4) {
		if(xmlhttp.status == 200){
			document.getElementById("listcategorie").innerHTML = xmlhttp.responseText;
			
		}
		
	}
}
function handlereceivingmessageeee(){
	if (xmlhttp.readyState==4) {
		if(xmlhttp.status == 200){ 
	var confirming = xmlhttp.responseText;
	
	
		if (trim(confirming)=='true'){
			
			document.getElementById("enclosed").style.display="";
			document.getElementById("password").style.display="none";
			
		}else if (confirming == 'false'){document.getElementById("enclosed").style.display="none";
		}
			
		}
		
}}
	
	function checktitle(e){ 
	
	if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
		 e = (!e) ? window.event : e; 
 // get the code of the character that has been pressed 
 code = (e.charCode) ? e.charCode : 
 ((e.keyCode) ? e.keyCode : 
 ((e.which) ? e.which : 0)); 
 // handle the keydown event 
 if (e.type == "keyup") 
 { 
 // if enter (code 13) is pressed 
 if(code == 13) 
 { 
 // send the current message 
 titlenext(); 
 }else {
	 var oaddposttitle=encodeURIComponent(document.getElementById("titlenow").value);
		var oaddcategoryi= encodeURIComponent(document.getElementById("categoryselect").value);
		 
		params='mode=checktitle'+
		'&category='+oaddcategoryi+
		'&title='+oaddposttitle;
		xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessagei;
		xmlhttp.send(params);
 }
 }
		
		
}
	
}


function handlereceivingmessagei(){
	if (xmlhttp.readyState==4) {
		if(xmlhttp.status == 200){ 
			response=xmlhttp.responseXML.documentElement;
		
		document.getElementById("checktitle").innerHTML = ''; 
		 massag = response.getElementsByTagName("message");
		 var resultsss = massag.item(0).firstChild.data.toString();
		 var resultssse='<span style="color: red">'+resultsss+'</span>';
			document.getElementById("checktitle").innerHTML = resultssse;
		}
		
	}
}

function namenext(){

	
	document.getElementById("postingcategory").style.display="";
	
	document.getElementById("postingname").style.display="none";
}
	
function handleKey(e) 
{ 
 // get the event 
 e = (!e) ? window.event : e; 
 // get the code of the character that has been pressed 
 code = (e.charCode) ? e.charCode : 
 ((e.keyCode) ? e.keyCode : 
 ((e.which) ? e.which : 0)); 
 // handle the keydown event 
 if (e.type == "keydown") 
 { 
 // if enter (code 13) is pressed 
 if(code == 13) 
 { 
 // send the current message 
 namenext(); 
 } 
 } 
}	
function headlinenext(){
	
	document.getElementById("postingname").style.display="";
	document.getElementById("postingpictures").style.display="none";
	document.getElementById("headlinepictures").style.display="none";
}
	
function categorynext(){
	
	document.getElementById("postingtitle").style.display="";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="none";
}
function titlenext(){
	
	document.getElementById("postingcontent").style.display="";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="none";
	document.getElementById("postingtitle").style.display="none";
}
function filenext(){
	document.getElementById("postingpictures").style.display="none";
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("headlinepictures").style.display="";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="none";
	document.getElementById("postingtitle").style.display="none";
}

function nameback(){
	document.getElementById("postingpictures").style.display="none";
	
	document.getElementById("headlinepictures").style.display="";
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="none";
	document.getElementById("postingtitle").style.display="none";

	
}

function headlineback(){
	document.getElementById("headlinepictures").style.display="none";
	document.getElementById("postingpictures").style.display="";
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="none";
	document.getElementById("postingtitle").style.display="none";	
}

function categoryback(){
	document.getElementById("headlinepictures").style.display="none";
	document.getElementById("postingpictures").style.display="none";
	
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("postingname").style.display="";
	document.getElementById("postingcategory").style.display="none";
	document.getElementById("postingtitle").style.display="none";
}	

	function titleback(){
		document.getElementById("headlinepictures").style.display="none";
	document.getElementById("postingpictures").style.display="none";
	
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="";
	document.getElementById("postingtitle").style.display="none";
}

function contentback(){
	
	document.getElementById("headlinepictures").style.display="none";
	document.getElementById("postingpictures").style.display="none";
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="none";
	document.getElementById("postingtitle").style.display="";
}
	
	
function listcategories(){
	if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
		params='mode=listcategories';
		xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessage;
		xmlhttp.send(params);
	
}}


function deleting(nowant){
	var goodi=nowant;
	document.getElementById(goodi+'222').style.display="";
	var adminpassword=document.getElementById(goodi+'333').value;
	if(adminpassword == 'ope'){if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
		params='mode=deleting'+
		'&name='+goodi;
		xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessage;
		xmlhttp.send(params);
	
}}
}


function listtopics(nowants){
	var goodis=nowants;
	
	if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
		params='mode=listtopics'+
		'&name='+goodis;
		xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessagesss;
		xmlhttp.send(params);
	
}
	function handlereceivingmessagesss(){
		if (xmlhttp.readyState==4) {
		
		if(xmlhttp.status == 200){
			
			document.getElementById(goodis+"111").innerHTML;
			document.getElementById("firstshowing").innerHTML= 'Headlines:'+ '</br>';
			document.getElementById("firstshowing").innerHTML += xmlhttp.responseText;
		document.getElementById("firstshowing").style.display="block";
		document.getElementById("addcategoriel").style.display="none";
		document.getElementById("addcategoriel").style.display="none";
    document.getElementById("posting").style.display="none";
	document.getElementById("firstshowing").style.display="block";
	document.getElementById('insertpostnews').style.display="";
	document.getElementById('editpostnews').style.display="none";
document.getElementById('copypostcontent').style.display="none";
document.getElementById('copyingpostcontent').style.display="none";
	
	document.getElementById("posting").style.display="";
	document.getElementById("postingpictures").style.display="";
   document.getElementById("maincontent").style.display="block";
   
   document.getElementById("headlinepictures").style.display="none";
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="none";
	document.getElementById("postingtitle").style.display="none";

		}}
		
	
}
		
}





function checkcategoryexists(){
	
	if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
		var oaddcategorie=encodeURIComponent(document.getElementById("addcategorie").value);
		params='mode=checkcategoryexists'+
		'&name='+oaddcategorie;
		xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessageo;
		xmlhttp.send(params);
		
}else{
setTimeout('checkcategoryexists();', 1000);}
	
}


function handlereceivingmessageo(){
	if (xmlhttp.readyState==4) {
		if(xmlhttp.status == 200){response=xmlhttp.responseXML.documentElement;
		
		document.getElementById("checkcategorie").innerHTML = ''; 
		 massag = response.getElementsByTagName("message");
		 var resultsss = massag.item(0).firstChild.data.toString();
		 var resultssse='<span style="color: red">'+resultsss+'</span>';
			document.getElementById("checkcategorie").innerHTML = resultssse;
		}
		
	}
}
function addcategory(){
	if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
		var oaddcategorie= encodeURIComponent(document.getElementById("addcategorie").value);
		params='mode=addcategory'+
		'&name='+oaddcategorie;
		xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessage;
		xmlhttp.send(params);
		document.getElementById("addcategorie").value="";
}}

function viewcontent(sodiq, ope){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){
	var sodiqwife = encodeURIComponent(ope);
	var opehusband = encodeURIComponent(sodiq);
	params='mode=viewcontent'+
	'&title='+opehusband+
	'&category='+sodiqwife;
	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingope;
		xmlhttp.send(params);
		
	
	
	
	
	
}}
function selectoption(){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){

params='mode=selectoption';
xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingselectopop;
		xmlhttp.send(params);
}}	
function handlereceivingselectopop(){
	if (xmlhttp.readyState==4) {
		if(xmlhttp.status == 200){
			document.getElementById("categoryselect").innerHTML = xmlhttp.responseText;
			
		}
		
	}
}	




function handlereceivingope(){
	if (xmlhttp.readyState==4) {
		if(xmlhttp.status == 200){
			alert(xmlhttp.responseText);
			document.getElementById("firstshowing").innerHTML = xmlhttp.responseText;
			document.getElementById("addcategoriel").style.display="none";
    document.getElementById("posting").style.display="none";
	document.getElementById("firstshowing").style.display="block";
	document.getElementById('insertpostnews').style.display="";
	document.getElementById('editpostnews').style.display="none";
document.getElementById('copypostcontent').style.display="none";
document.getElementById('copyingpostcontent').style.display="none";
	
	document.getElementById("posting").style.display="";
	document.getElementById("postingpictures").style.display="";
   document.getElementById("maincontent").style.display="block";
   
   document.getElementById("headlinepictures").style.display="none";
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="none";
	document.getElementById("postingtitle").style.display="none";
	
		}
		
	}
}

function firstshowing(){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){ 
	params='mode=firstshow';
	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingope;
		xmlhttp.send(params);
		
	
	
	
	
	
}}


	
function liking(sodiq, ope){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){
	var sodiqwife = encodeURIComponent(ope);
	var opehusband = encodeURIComponent(sodiq);
	params='mode=liking'+
	'&title='+opehusband+
	'&category='+sodiqwife;
	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingope;
		xmlhttp.send(params);
		
	
	
	
	
	
}}

function like(sodiq, ope){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){
	var sodiqwife = encodeURIComponent(ope);
	var opehusband = encodeURIComponent(sodiq);
	params='mode=like'+
	'&title='+opehusband+
	'&category='+sodiqwife;
	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingope;
		xmlhttp.send(params);
		
	
	
	
	
	
}}


function comment(sodiq, ope){
	
	var sodiqwife = ope;
	var opehusband = sodiq;
	var nam=document.getElementById(opehusband+sodiqwife+'name').value;
	var name= encodeURIComponent(nam);
	
	var realcomm=document.getElementById(opehusband+sodiqwife+'realcomment').value;
	var realcomment= encodeURIComponent(realcomm);
	
			if (trim(name) != "" && 
 trim(realcomment) != "" ){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){
	
	params='mode=comment'+
	'&title='+opehusband+
	'&category='+sodiqwife+
	'&name='+name+
	'&comment='+realcomment;
	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingope;
		xmlhttp.send(params);
		
	
	
	
	
	
}}}

function commentei(sodiq, ope){
	var sodiqwife = ope;
	var opehusband = sodiq;
	var nam=document.getElementById(opehusband+sodiqwife+'name').value;
	var name= encodeURIComponent(nam);
	var realcomm=document.getElementById(opehusband+sodiqwife+'realcomment').value;
	var realcomment= encodeURIComponent(realcomm);
			if (trim(name) != "" && 
 trim(realcomment) != "" ){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){
	
	
	params='mode=commentei'+
	'&title='+opehusband+
	'&category='+sodiqwife+
	'&name='+name+
	'&comment='+realcomment;
	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingope;
		xmlhttp.send(params);
		
	
	
	
	
	
}}}





function commenttexts(sodiq, ope){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){
	var sodiqwife = encodeURIComponent(ope);
	var opehusband = encodeURIComponent(sodiq);
	
	params='mode=commenttexts'+
	'&title='+opehusband+
	'&category='+sodiqwife;
	
	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingsodiqsope;
xmlhttp.send(params);}
		
	function handlereceivingsodiqsope(){
	if (xmlhttp.readyState==4) {
		if(xmlhttp.status == 200){ 
		document.getElementById(sodiq+ope+"commentarea").innerHTML="";
		response = xmlhttp.responseXML.documentElement;
		var opemessager = response.getElementsByTagName("commenttext").item(0).firstChild.data.toString();
		
		opemessage2 = response.getElementsByTagName("commentname");
		
		opemessage3 = response.getElementsByTagName("commentgan");
		for(var i=0; i<opemessage2.length; i++){
		opemessage4=opemessage2.item(i).firstChild.data.toString();
		
		opemessage5=opemessage3.item(i).firstChild.data.toString();
		
		result='<div id="commentss">'+ opemessager+'  '+'<span style="color:green">'+opemessage4+'</span>'+'</br> '+opemessage5+'</div>';
				document.getElementById(sodiq+ope+"commentarea").innerHTML += result;
		document.getElementById(sodiq+ope+"commentarea").className="commentarea";
		}
		}
		
	}
}
	
	
	
	
}

function showrest(sodiq, ope){

	var sodiqwife = ope;

	var opehusband = sodiq;
	
	var contented=document.getElementById(sodiqwife+opehusband+'contenteded');

	contented.style.display="";
	document.getElementById(opehusband+sodiqwife+'readmore').style.display="none";
		
}

function choosemaincontent(){
	if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
		var ochoosetopic=encodeURIComponent(document.getElementById("choosetopic").value);
		var ochoosecategory= encodeURIComponent(document.getElementById("choosecategory").value);
		 
		params='mode=choosefirstcontent'+
		'&choosecategory='+ochoosecategoryi+
		'&choosetopic='+ochoosetopic;
		xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessagein;
		xmlhttp.send(params);
		
}}




function checktitle(){ 
	
	if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
		var oaddposttitle=encodeURIComponent(document.getElementById("titlenow").value);
		var oaddcategoryi= encodeURIComponent(document.getElementById("categoryselect").value);
		 
		params='mode=checktitle'+
		'&category='+oaddcategoryi+
		'&title='+oaddposttitle;
		xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessagei;
		xmlhttp.send(params);
		
}
	
}


function handlereceivingmessagei(){
	if (xmlhttp.readyState==4) {
		if(xmlhttp.status == 200){ 
			response=xmlhttp.responseXML.documentElement;
		
		document.getElementById("checktitle").innerHTML = ''; 
		 massag = response.getElementsByTagName("message");
		 var resultsss = massag.item(0).firstChild.data.toString();
		 var resultssse='<span style="color: red">'+resultsss+'</span>';
			document.getElementById("checktitle").innerHTML = resultssse;
		}
		
	}
}




function checkemptytitle(){ 
	
	if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
		var oaddposttitle=encodeURIComponent(document.getElementById("titlenow").value);
		
		 
		params='mode=checkemptytitle'+
		
		'&title='+oaddposttitle;
		xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessagei;
		xmlhttp.send(params);
		
}
	
}


function editei(sodiq, ope){ 
	
	if (xmlhttp.readyState==0 ||
	xmlhttp.readyState==4){
	
		
		 
		params='mode=editei'+
		
		'&category='+ope+
		'&title='+sodiq;
	
		xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingeditei;
		xmlhttp.send(params);
		
}
	
}

function handlereceivingeditei(){
	if (xmlhttp.readyState==4) {
		if(xmlhttp.status == 200){ 
		   
	
		var response=xmlhttp.responseXML.documentElement;
		
 
		  massag = response.getElementsByTagName('name');
var resultsss = massag.item(0).firstChild.data.toString();
document.getElementById('namepost').value=resultsss;
		
 massago = response.getElementsByTagName("content");
 var resulto = massago.item(0).innerHTML;

document.getElementById('copypostcontent').style.display="";
document.getElementById('copyingpostcontent').style.display="";
document.getElementById('copypostcontent').innerHTML=resulto;
 

massagl = response.getElementsByTagName("imageurl");
var resultl = massagl.item(0).firstChild.data.toString();
document.getElementById('fileurli').value=resultl;		


 
 massags = response.getElementsByTagName("newssource");
var results = massags.item(0).firstChild.data.toString();
document.getElementById('newssource').value=results;		
 massagt = response.getElementsByTagName("title");
var resultt = massagt.item(0).firstChild.data.toString();
		document.getElementById('titlenow').value=resultt;
 massagf = response.getElementsByTagName("category");
var resultf = massagf.item(0).firstChild.data.toString();
				document.getElementById('categoryselect').value=resultf;
massagg = response.getElementsByTagName("date");
var resultg = massagg.item(0).firstChild.data.toString();
				document.getElementById('nowwhat').value=resultg;
				
				massagsod = response.getElementsByTagName("tag1");
				var resultsod = massagsod.item(0).firstChild.data.toString();
				document.getElementById('tag1').value=resultsod;
				
				massagsod2 = response.getElementsByTagName("tag2");
				var resultsod2 = massagsod2.item(0).firstChild.data.toString();
				document.getElementById('tag2').value=resultsod2;
				
				massagsod3 = response.getElementsByTagName("tag3");
				var resultsod3 = massagsod3.item(0).firstChild.data.toString();
				document.getElementById('tag3').value=resultsod3;


				posterssz();	
	document.getElementById('insertpostnews').style.display="none";
	document.getElementById('editpostnews').style.display="";

	
	}
}
}

function editpostgan(){ 
contentpost=encodeURIComponent(CKEDITOR.instances.postcontent.getData());
timepost=encodeURIComponent(document.getElementById('nowwhat').value);

namepost=encodeURIComponent(document.getElementById('namepost').value);
categorypost=encodeURIComponent(document.getElementById('categoryselect').value);
titlepost=encodeURIComponent(document.getElementById('titlenow').value);
newssource=encodeURIComponent(document.getElementById('newssource').value);
imageurl=encodeURIComponent(document.getElementById('fileurli').value);
userurl=encodeURIComponent(document.getElementById('fileurlt').value);
tag1=encodeURIComponent(document.getElementById('tag1').value);
tag2=encodeURIComponent(document.getElementById('tag2').value);
tag3=encodeURIComponent(document.getElementById('tag3').value);
if (trim(namepost) != "" && 
 trim(categorypost) != ""  && 
 trim(titlepost) != ""&& 
 trim(contentpost) != "" && 
 trim(newssource) != "" && 
 trim(imageurl) != "" ){
if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){ 

	params='mode=editnews'+
	'&name='+namepost+
	'&category='+categorypost+
	'&title='+titlepost+
	'&content='+contentpost+
	'&newssource='+newssource+
	'&imageurl='+imageurl+
	'&userurl='+userurl+
	'&timepost='+timepost+
	'&tag1='+tag1+
	'&tag2='+tag2+
	'&tag3='+tag3;
	document.getElementById("titlenow").value="";
	document.getElementById("postcontent").value="";
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("headlinepictures").style.display="none";
	document.getElementById("posting").style.display="none"	  
	document.getElementById("maincontent").style.display="";
document.getElementById("maincontent").style.width="100%";

	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingope;
		xmlhttp.send(params);
		
	
	
	

document.getElementById('insertpostnews').style.display="";
	document.getElementById('editpostnews').style.display="none";
document.getElementById('copypostcontent').style.display="none";
document.getElementById('copyingpostcontent').style.display="none";
	
	
 }
 }	
		
	
}






function insertpost(){ 

contentpost=encodeURIComponent(CKEDITOR.instances.postcontent.getData());
excerptpost=encodeURIComponent(CKEDITOR.instances.postexcerpt.getData());

subcategory=encodeURIComponent(document.getElementById('subcategory').value);
newcategory=encodeURIComponent(document.getElementById('newcategory').value);


namepost=encodeURIComponent(document.getElementById('namepost').value);
categorypost=encodeURIComponent(document.getElementById('categoryselect').value);
titlepost=encodeURIComponent(document.getElementById('titlenow').value);
newssource=encodeURIComponent(document.getElementById('newssource').value);
imageurl=encodeURIComponent(document.getElementById('fileurli').value);
userurl=encodeURIComponent(document.getElementById('fileurlt').value);
tag1=encodeURIComponent(document.getElementById('tag1').value);
tag2=encodeURIComponent(document.getElementById('tag2').value);
tag3=encodeURIComponent(document.getElementById('tag3').value);
if (trim(namepost) != "" && 
 trim(categorypost) != ""  && 
 trim(titlepost) != ""&& 
 trim(contentpost) != "" && 
 trim(newssource) != "" && 
 trim(imageurl) != "" ){
if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){ 

	params='mode=insertposts'+
	'&name='+namepost+
	'&category='+categorypost+
	'&title='+titlepost+
	'&content='+contentpost+
	'&newssource='+newssource+
	'&imageurl='+imageurl+
	'&userurl='+userurl+
	'&tag1='+tag1+
	'&tag2='+tag2+
	'&tag3='+tag3+
	'&subcategory='+subcategory+
	'&newcategory='+newcategory+
	'&excerpt='+excerptpost;
	document.getElementById("titlenow").value="";
	document.getElementById("postcontent").value="";
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("headlinepictures").style.display="none";
	document.getElementById("posting").style.display="none"	  
	document.getElementById("maincontent").style.display="";
document.getElementById("maincontent").style.width="100%";

	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingope;
		xmlhttp.send(params);
		
	
	
	

	
	
 }
 }	
		
	
}

function search(){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){ 
 var searchcategory=encodeURIComponent(document.getElementById("searchtext").value);
 var searchword=encodeURIComponent(document.getElementById("search").value);

 params='mode=searching'+
	'&searchcategory='+searchcategory+
	'&searchword='+searchword;
	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingope;
		xmlhttp.send(params);
		
	
	
	
	
	
}}


function seerecentposts(){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){ 
 var searchnumber=encodeURIComponent(document.getElementById("seenewmessages").value);


 params='mode=seeoldermessages'+
	'&number='+searchnumber;
	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingope;
		xmlhttp.send(params);
		
	
	
	
	
	
}}

function searchcategory(){
	if (xmlhttp.readyState==0 ||
xmlhttp.readyState==4){ 
 var searcher=encodeURIComponent(document.getElementById("searchcategory").value);


 params='mode=searchcategory'+
	'&search='+searcher;
	xmlhttp.open('POST', 'blog.php', true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingmessage;
		xmlhttp.send(params);
		
	
	
	
	
	
}}



function trim(s) 
{ 
 return s.replace(/(^\s+)|(\s+$)/g, "") 
} 

function category(){
	document.getElementById("addcategoriel").style.display="block";
	document.getElementById("addcategoriel").innerHTML='<div id="addcategori">'+ 
'<span id="addcategoryword">'+'Add category :'+'</span>'+'</br> '+
 '<input type="text" id="addcategorie" onkeyup ="checkcategoryexists();">'+
'<div id="checkcategorie">' +
  '</div>'+
 '<input type="submit" id="submitaddcategorie" value="add" onclick="addcategory();">'+ 
  '</div>'+ ' <span class="searchcategori">Search categories: </span><input type="text" placeholder="search word" id="searchcategory" onkeyup="searchcategory();">'+ 
  '</br></br>'+
  '<div id="listcategori">'+
  '<input type="button" value="List categories" onclick="listcategories();">'+' </div>'+'</br>'+
   '<div id="listcategorie"> </div>'+'<input type="button" value="Hide category section" onclick="hidecategory();">';
   
    document.getElementById("posting").style.display="none";
	document.getElementById("firstshowing").style.display="none";
	document.getElementById('insertpostnews').style.display="";
	document.getElementById('editpostnews').style.display="none";
document.getElementById('copypostcontent').style.display="none";
document.getElementById('copyingpostcontent').style.display="none";
	
	document.getElementById("posting").style.display="";
	document.getElementById("postingpictures").style.display="";
   document.getElementById("maincontent").style.display="none";
   
   document.getElementById("headlinepictures").style.display="none";
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="none";
	document.getElementById("postingtitle").style.display="none";
	
	
}
function hidecategory(){
	document.getElementById("addcategoriel").innerHTML="";
	document.getElementById("maincontent").style.width="100%";
	document.getElementById("firstshowing").style.display="block";
	document.getElementById("addcategoriel").style.display="none";
    document.getElementById("posting").style.display="none";
	document.getElementById("firstshowing").style.display="block";
	document.getElementById('insertpostnews').style.display="";
	document.getElementById('editpostnews').style.display="none";
document.getElementById('copypostcontent').style.display="none";
document.getElementById('copyingpostcontent').style.display="none";
	
	document.getElementById("posting").style.display="";
	document.getElementById("postingpictures").style.display="";
   document.getElementById("maincontent").style.display="block";
   
   document.getElementById("headlinepictures").style.display="none";
	document.getElementById("postingcontent").style.display="none";
	document.getElementById("postingname").style.display="none";
	document.getElementById("postingcategory").style.display="none";
	document.getElementById("postingtitle").style.display="none";

}

function posterss(){
	document.getElementById('insertpostnews').style.display="";
	document.getElementById('editpostnews').style.display="none";
document.getElementById('copypostcontent').style.display="none";
document.getElementById('copyingpostcontent').style.display="none";
	
	document.getElementById("posting").style.display="";
	document.getElementById("postingpictures").style.display="";
   document.getElementById("maincontent").style.display="none";
   document.getElementById("addcategoriel").innerHTML="";
   document.getElementById("headlinepictures").style.display="block";
	document.getElementById("postingcontent").style.display="block";
	document.getElementById("postingname").style.display="block";
	document.getElementById("postingcategory").style.display="block";
	document.getElementById("postingtitle").style.display="block";

   
}

function posterssz(){
	
	document.getElementById("posting").style.display="";
	document.getElementById("postingpictures").style.display="";
   document.getElementById("maincontent").style.display="none";
   document.getElementById("addcategoriel").innerHTML="";
   document.getElementById("headlinepictures").style.display="block";
	document.getElementById("postingcontent").style.display="block";
	document.getElementById("postingname").style.display="block";
	document.getElementById("postingcategory").style.display="block";
	document.getElementById("postingtitle").style.display="block";

   
}


function hideposterss(){
	document.getElementById("posting").style.display="none";
	document.getElementById("maincontent").style.width="100%";
	
}

function revealchangepassword(){
	document.getElementById('passworddivd').style.display="none";
	document.getElementById('deletepostdiv').style.display="none";
	document.getElementById('enclosed').style.display="none";
	document.getElementById('what').style.display="";
}	


function cancelpassword(){
	document.getElementById('passworddivd').style.display="none";
	document.getElementById('deletepostdiv').style.display="none";
	document.getElementById('enclosed').style.display="";
	document.getElementById('what').style.display="none";
}	

function revealdelete(){
document.getElementById('passworddivd').style.display="none";
	document.getElementById('deletepostdiv').style.display="";
	document.getElementById('enclosed').style.display="none";
	document.getElementById('what').style.display="none"	
	
	
	
}	

function canceldelete(){
document.getElementById('passworddivd').style.display="none";
	document.getElementById('deletepostdiv').style.display="none";
	document.getElementById('enclosed').style.display="";
	
	document.getElementById('what').style.display="none";
	
}	

	
function cancelpost(){
	document.getElementById('passworddivd').style.display="none";
	document.getElementById('deletepostdiv').style.display="none";
	document.getElementById('enclosed').style.display="";

	document.getElementById("posting").style.display="none";
	document.getElementById("maincontent").style.display="";
	document.getElementById("maincontent").style.width="100%";
	
}
function uploadsecond(){
	var file = document.getElementById("headlinefile");
     
      /* Create a FormData instance */
      var formData = new FormData();
      /* Add the file */ 
      formData.append("file", file.files[0]);

      xmlhttp.open("post", "uploader2.php", true);
 xmlhttp.onreadystatechange=handlereceivingurl1;
      xmlhttp.send(formData); 
	  document.getElementById("uploadsecond").value="uploading";
}


function uploadthird(){
	var file = document.getElementById("userurl");
     
      /* Create a FormData instance */
      var formData = new FormData();
      /* Add the file */ 
      formData.append("file", file.files[0]);

      xmlhttp.open("post", "uploader2.php", true);
 xmlhttp.onreadystatechange=handlereceivingurl2;
      xmlhttp.send(formData); 
	  document.getElementById("uploadthird").value="uploading";
}

function uploadfirst(){
	var file = document.getElementById("filepost");
     
      /* Create a FormData instance */
      var formData = new FormData();
      /* Add the file */ 
      formData.append("file", file.files[0]);

      xmlhttp.open("post", "uploader9.php", true);
		xmlhttp.onreadystatechange=handlereceivingurl;
      xmlhttp.send(formData); 
}
function handlereceivingurl(){
	if(xmlhttp.readyState==4){
		
		if(xmlhttp.status==200){
				response = xmlhttp.responseText;
			document.getElementById('fileurl').innerHTML=response;
			
		}
	}
}

function handlereceivingurl1(){
	if(xmlhttp.readyState==4){
		
		if(xmlhttp.status==200){
			
						

				  
				 			
							
							document.getElementById('fileurli').value=xmlhttp.responseText;
document.getElementById("uploadsecond").value="upload";
			
			
		}
	}
}
function handlereceivingurl2(){
	if(xmlhttp.readyState==4){
		
		if(xmlhttp.status==200){
			
						

				  
				 			
							
							document.getElementById('fileurlt').value=xmlhttp.responseText;
document.getElementById("uploadthird").value="upload";
			
			
		}
	}
}


function changepassword() {
	if (xmlhttp.readyState==0 || xmlhttp.readyState==4){
		var ocpassword=encodeURIComponent(document.getElementById('changepassword').value);
		params='mode=changepassword'+
		'&newpassword='+ocpassword;
		
		xmlhttp.open("post", "blog.php", true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange=handlereceivingpasswordchange;
		xmlhttp.send(params);

		
		
		
	}
	
	
	
	
}

function handlereceivingpasswordchange(){
	if(xmlhttp.readyState==4){
		
		if(xmlhttp.status==200){
		
			document.getElementById('changepassworddiv').innerHTML=xmlhttp.responseText;
			
			
		}
	}
}
function selectdeleteoption(){
	
		if (xmlhttp.readyState==0  || xmlhttp.readyState==4)
		{
		var deletecategory=document.getElementById('deleteselect').value;
	params = 'mode=selectdeleteoption'+
	'&selectdeletecategory='+deletecategory;
	document.getElementById('deletecategorydiv').innerHTML=deletecategory;
	xmlhttp.open("post", "blog.php", true);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");	
	xmlhttp.onreadystatechange=handlereceivingselectoption;
	xmlhttp.send(params);
		
		
	}
	
	
	
}
function selectdeleteoption1(){
	
		if (xmlhttp.readyState==0  || xmlhttp.readyState==4)
		{
		var deletecategory=document.getElementById('deleteselect1').value;
	params = 'mode=selectdeleteoption'+
	'&selectdeletecategory='+deletecategory;
	document.getElementById('deletecategorydiv1').innerHTML=deletecategory;
	xmlhttp.open("post", "blog.php", true);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");	
	xmlhttp.onreadystatechange=handlereceivingselecttopoption;
	xmlhttp.send(params);
		
		
	}
	
	
	
}
function handlereceivingselectoption(){
	
	
	
	if(xmlhttp.readyState==4){
		
		if(xmlhttp.status==200){
	
	var otable=document.getElementById('table');
	
	var otbody=otable.getElementsByTagName('tbody');
	
	otable.removeChild(otbody[0]);

	response=xmlhttp.responseXML.documentElement.getElementsByTagName('message');
	

	
	
	
		
		var otbody=document.createElement('tbody');
	
	for(var i=0; i<response.length; i++){
	var responsei=response.item(i).firstChild.data.toString();
	
	var checkbox=document.createElement('input');
	checkbox.setAttribute('type', 'checkbox');
	var otd=document.createElement('td');
	otd.appendChild(checkbox);
	var otr=document.createElement('tr');
	otr.appendChild(otd);
	var topic=document.createTextNode(responsei);
	var otd=document.createElement('td');
	otd.appendChild(topic);
	
	otr.appendChild(otd);
	
	
	otbody.appendChild(otr);
	
	
	
	}
otable.appendChild(otbody);
}}}
function handlereceivingselecttopoption(){
	
	
	
	if(xmlhttp.readyState==4){
		
		if(xmlhttp.status==200){
	
	var otable=document.getElementById('table1');
	
	var otbody=otable.getElementsByTagName('tbody');
	
	otable.removeChild(otbody[0]);

	response=xmlhttp.responseXML.documentElement.getElementsByTagName('message');
	

	
	
	
		
		var otbody=document.createElement('tbody');
	
	for(var i=0; i<response.length; i++){
	var responsei=response.item(i).firstChild.data.toString();
	
	var checkbox=document.createElement('input');
	checkbox.setAttribute('type', 'checkbox');
	var otd=document.createElement('td');
	otd.appendChild(checkbox);
	var otr=document.createElement('tr');
	otr.appendChild(otd);
	var topic=document.createTextNode(responsei);
	var otd=document.createElement('td');
	otd.appendChild(topic);
	
	otr.appendChild(otd);
	
	
	otbody.appendChild(otr);
	
	
	
	}
otable.appendChild(otbody);
}}}

function deletenews()
{
	if(xmlhttp.readyState==0 || xmlhttp.readyState==4){
var otable=document.getElementById('table');
var ocategory=document.getElementById('deleteselect').value;
var oinput=otable.getElementsByTagName('input');
var xmld='<top>';

for(i=0; i<oinput.length; i++){
	if(oinput[i].checked){ 
		var otr=getParentTag(oinput[i], 'tr');
		//parentNode;
		/*var otrr=otr.nodeName;
		var otrrr= otr.parentNode;
		alert(otrrr.nodeName);*/
		
		var topicd=otr.getElementsByTagName('td')[1];
		var topicdd=topicd.firstChild.data;
		
		xmld+='<topic><topicde>'+topicdd+'</topicde></topic>';
		
	}
	
	
}xmld+='</top>';



params='mode=deletenews'+
'&topictodelete='+xmld+
'&selectdeletecategory='+ocategory;
xmlhttp.open("post", "blog.php", true);
xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xmlhttp.onreadystatechange=handlereceivingselectoption;
xmlhttp.send(params);

}
}

function selecttopnews()
{
	if(xmlhttp.readyState==0 || xmlhttp.readyState==4){
var otable=document.getElementById('table1');
var ocategory=document.getElementById('deleteselect1').value;
var oinput=otable.getElementsByTagName('input');
var xmld='<top>';

for(i=0; i<oinput.length; i++){
	if(oinput[i].checked){ 
		var otr=getParentTag(oinput[i], 'tr');
		//parentNode;
		/*var otrr=otr.nodeName;
		var otrrr= otr.parentNode;
		alert(otrrr.nodeName);*/
		
		var topicd=otr.getElementsByTagName('td')[1];
		var topicdd=topicd.firstChild.data;
		
		xmld+='<topic><topicde>'+topicdd+'</topicde></topic>';
		
	}
	
	
}xmld+='</top>';



params='mode=selecttopnews'+
'&topictodelete='+xmld+
'&selectdeletecategory='+ocategory;
xmlhttp.open("post", "blog.php", true);
xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xmlhttp.onreadystatechange=handlereceivingselecttopoption;
xmlhttp.send(params);

}
}



function handlereceivingdeletingnews(){
	
	
}

function getParentTag(oNode, oParenttype){
	var oParent=oNode.parentNode;

	
		if (oParent.nodeName == oParenttype)
		{
	return oParent;
	}else{
			
		oParents=oParent.parentNode;
	
	return oParents;}
	
	
}



