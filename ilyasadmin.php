<?php
require_once('ilyasadmin.class.php');
$mode=$_POST['mode'];
 $blogg = new admin();
if($mode=='validatepassword'){
	$password= $_POST['password'];
	echo $blogg->validatepassword($password);
	
}
elseif($mode=='choosefirstcontent'){
	$choosecategory= $_POST['choosecategory'];
	$choosetopic= $_POST['choosetopic'];
	echo $blogg->$choosemaincontent();
	
}
elseif($mode=='listcategories'){
	echo $blogg->listcategories();
}
elseif($mode=='addcategory'){
	$name= $_POST['name'];
 $blogg->addcategory($name);
 echo $blogg->listcategories();
}

elseif($mode=='selectoption'){
 echo $blogg->selectoption();
}

elseif($mode=='liking'){
	$category= $_POST['category'];
	$title=$_POST['title'];
 $blogg->like($title, $category);
 echo $blogg->viewcontent($title, $category);
}

elseif($mode=='like'){
	$category= $_POST['category'];
	$title=$_POST['title'];
 $blogg->like($title, $category);
 echo $blogg->firstshow();
}

elseif($mode=='commentei'){
	$comment = $_POST['comment'];
	$name = $_POST['name'];
	$category= $_POST['category'];
	$title=$_POST['title'];
 $blogg->comment($title, $name, $comment, $category);
 echo $blogg->viewcontent($title, $category);
}



elseif($mode=='comment'){
	
	$comment = $_POST['comment'];
	$name = $_POST['name'];
	$category= $_POST['category'];
	$title=$_POST['title'];
if($comment !== '' && $name !==''){	
 $blogg->comment($title, $name, $comment, $category);
 echo $blogg->firstshow();
	}}
elseif($mode=='viewcontent'){
	$category= $_POST['category'];
	$title=$_POST['title'];
 echo $blogg-> viewcontent($title, $category);
}
elseif($mode=='insertposts'){
	$name = $_POST['name'];
	$content= $_POST['content'];
	$category= $_POST['category'];
	$title=$_POST['title'];
$blogg->insertposts($name, $title,$content, $category);
echo $blogg->firstshow();
}
elseif($mode=='listtopics'){
	$name = $_POST['name'];
 echo $blogg->listtopics($name);
}
elseif($mode=='checkstringlength'){
	$name = $_POST['name'];

}
elseif($mode=='deleting'){
	$name = $_POST['name'];
 $blogg->deleting($name);
echo $blogg->listcategories();
}

elseif($mode=='checkcategoryexists'){
	$name = $_POST['name'];
}

elseif($mode=='checktitle'){
	
$category= $_POST['category'];
	$title=$_POST['title'];
}

elseif($mode=='checkemptytitle'){
	

	$title=$_POST['title'];
}
elseif($mode=='commenttexts'){
	$category= $_POST['category'];
	$title=$_POST['title'];
	
}
elseif($mode=='firstshow'){
	echo $blogg->firstshow();
}

elseif($mode=='searching'){
	$searchtext= $_POST['searchcategory'];
	$search=$_POST['searchword'];
  echo $blogg->searching($searchtext, $search)	;
}

elseif($mode=='seeoldermessages'){
	$number= $_POST['number'];
	
  echo $blogg->see_older_messages($number);	
}
elseif($mode=='searchcategory'){
	$search= $_POST['search'];
	
  echo $blogg->searchingcategory($search);	
}



if($mode=='checkcategoryexists' || $mode=='commenttexts' || $mode=='checktitle'
|| $mode=='checkemptytitle'){
if(ob_get_length()) ob_clean(); 
// Headers are sent to prevent browsers from caching 
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . 'GMT'); 
header('Cache-Control: no-cache, must-revalidate'); 
header('Pragma: no-cache'); 
header('Content-Type: text/xml');  
if($mode=='checkcategoryexists'){
	
echo $blogg->checkcategoryexists($name);}
elseif($mode=='commenttexts'){
	
echo $blogg->commenttexts($title, $category);	
}


elseif($mode=='checktitle'){
	echo $blogg->checktitle($title, $category);
	
	
}

elseif($mode=='checkemptytitle'){
	echo $blogg->checkemptytitle($title);
}

}



?>