<?php

require_once('blog.class.php');
$mode=$_POST['mode'];
 $blogg = new blog();
if($mode=='listcategories'){
	echo $blogg->listcategories();
}



elseif($mode=='deletenews'){
	$topictodelete= $_POST['topictodelete'];
	$selectdeletecategory=$_POST['selectdeletecategory'];


	echo $blogg->deletenews($topictodelete);
	echo $blogg->selectdeleteoption($selectdeletecategory);

}
elseif($mode=='selecttopnews'){
	$topictodelete= $_POST['topictodelete'];
	$selectdeletecategory=$_POST['selectdeletecategory'];


	echo $blogg->selecttopnews($topictodelete);
	echo $blogg->selectdeleteoption($selectdeletecategory);

}


elseif($mode=='selectdeleteoption'){
	$selectdeletecategory=$_POST['selectdeletecategory'];

}

elseif($mode=='changepassword'){
$newpassword=$_POST['newpassword'];
echo $blogg->changepassword($newpassword);  
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
	$newssource=$_POST['newssource'];
	$imageurl=$_POST['imageurl'];
	$userurl=$_POST['userurl'];
	$tag1=$_POST['tag1'];
	$tag2=$_POST['tag2'];
	$tag3=$_POST['tag3'];
	$subcategory=$_POST['subcategory'];
	$newcategory=$_POST['newcategory'];
	$excerpt=$_POST['excerpt'];
$blogg->insertposts($name, $title,$content, $imageurl, $newssource, $category, $userurl, $tag1, $tag2, $newcategory, $subcategory,  $tag3, $excerpt);
echo $blogg->firstshow();
}

elseif($mode=='editnews'){
	$name = $_POST['name'];
	$content= $_POST['content'];
	$category= $_POST['category'];
	$title=$_POST['title'];
	$newssource=$_POST['newssource'];
	$imageurl=$_POST['imageurl'];
	$timepost=$_POST['timepost'];
	$userurl=$_POST['userurl'];
	$tag1=$_POST['tag1'];
	$tag2=$_POST['tag2'];
	$tag3=$_POST['tag3'];
$blogg->editposts($name, $title,$content, $imageurl, $newssource, $category,$timepost, $userurl, $tag1, $tag2, $tag3);
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

elseif($mode=='editei'){
	$category= $_POST['category'];
	$title=$_POST['title'];
 
}


if($mode=='checkcategoryexists' || $mode=='commenttexts' || $mode=='checktitle'
|| $mode=='checkemptytitle'|| $mode=='changepassword' || $mode=='selectdeleteoption'  || $mode=='deletenews'  || $mode=='selecttopnews' || $mode=='editei'){
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


elseif($mode=='selectdeleteoption'){
 echo $blogg->selectdeleteoption($selectdeletecategory);
  
}

elseif($mode=='changepassword'){
echo $blogg->changepassword($newpassword);
  
}

elseif($mode=='deletenews'){
	echo $blogg->selectdeleteoption($selectdeletecategory);

}

elseif($mode=='editei'){
echo $blogg->editpostpost($title, $category);
}}
?>