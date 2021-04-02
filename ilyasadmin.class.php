<?php
require_once('config.php');
require_once('error_handler.php');
Class admin{
	private $mysqli;
	
	function __construct(){
		$this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	}
	function __destruct(){$this->mysqli->close();}

public function validatepassword ($password){
	$password= $this->mysqli->real_escape_string($password);
	$firstquery='SELECT `id`, `password` FROM `admin` WHERE `password`="'.$password.'"';
	$query_runfirst=$this->mysqli->query($firstquery);
	if ($query_runfirst->num_rows){
		$r='true';
	}else{$r='false';}return $r;
	}
	

	

	
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
	
	
public function insertposts($name, $title,$content, $category ){
	$name=$this->mysqli->real_escape_string($name);
	$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
	$content=$this->mysqli->real_escape_string($content);
	
	if($title !==''){
		if(!$this->titleexists($title, $category)){
			if(strlen($title)<41){
				if ($content !== ''){
				$query="INSERT INTO `posts` SET `posted_on`= NOW(),
												 `category`= '".$category."',
												  `title`  = '".$title."',
												    `content`='".$content."',
													`name`='".$name."'";	
		
				$result=$this->mysqli->query($query);	
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
				
	} elseif(strlen(trim($title))>40){
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
public function viewcontent($title,$category){
	$title=$this->mysqli->real_escape_string($title);
	$category=$this->mysqli->real_escape_string($category);
$query="SELECT `posted_on`, `name`, `title`, `category`, `content` FROM `posts` WHERE 
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
	$contentd=$row['content'];
	$contented=substr($contentd, 0, 800);
		$contenteded=substr($contentd, 800, strlen($contentd));
if(strlen($contentd)>800){
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
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $response.='<div id="posts">
 <div id="postedon">'.'<span 
 id="postedonspan">Posted on</span>'.' '
 .$date.' '.'By'.' '
 .'<span 
 id="name">'.$name.'</span>'.
 '</div>'.
 '</br>'.
 '<div id="category">'.'Category: '.$categoried.'</div>'.'</br>'.
 '<div id="title">'.'Topic: '.$titled.'</div>'.'</br>'.
 '<div id="content">'.
 '<span id="'.$categoried.$titled.'contented">'.$contented.'</span>'.
 '<span style="display:none" id="'.$categoried.$titled.'contenteded">'.$contenteded.'</span>'.
$rmore.
 '</div>'.'</br>'.
 '<div id="like">'.$button.'</div>'.
 '<div id="comment">'.$comment.'</div>'.
 '<div id="comment">'.$commentnametextbox.'</div>'.
 '<div id="commenttextbox">'.$commenttextbox.'</div>'.
 '<div id="commentsubmit">'.$commentsubmit.'</div>'.
 $commentarea.'</div>'.'</br>'.'</br>';
 }}
$response .= '</response>';
				return $response;
	
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
$query="INSERT INTO `comment` (`category`, `name`,`comment`, `title`)VALUES('".$category."', '".$name."', '".$comment."', '".$title."')";
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
	public function firstshow(){
		
		$query="SELECT `post_id`, `posted_on`, `name`, `title`, `category`, `content` FROM `posts`
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
	$titled=$row['title'];
	$contentd=$row['content'];
		$contented=substr($contentd, 0, 800);
		$contenteded=substr($contentd, 800, strlen($contentd));
	if(strlen($contentd)>800){
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
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $response.='<div id="posts">'.'
 <div id="postedon">'.'<span 
 id="postedonspan">Posted on</span>'.' '
 .$date.' '.'By'.' '
 .'<span 
 id="name">'.$name.'</span>'.
 '</div>'.
 '</br>'.
 '<div id="category">'.'Category: '.$categoried.'</div>'.'</br>'.
 '<div id="title">'.'Topic: '.$titled.'</div>'.'</br>'.
 '<div id="content">'.
 '<span id="'.$categoried.$titled.'contented">'.$contented.'</span>'.
 '<span style="display:none" id="'.$categoried.$titled.'contenteded">'.$contenteded.'</span>'.
$rmore.
 '</div>'.'</br>'.
 '<div id="like">'.$button.'</div>'.
 '<div id="comment">'.$comment.'</div>'.
 '<div id="commentNAME">'.$commentnametextbox.'</div>'.
 '<div id="commenttextbox">'.$commenttextbox.'</div>'.
 '<div id="commentsubmit">'.$commentsubmit.'</div>'.
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
if($searchcategories=='user_name'){
	$query="SELECT `post_id`, `name`, `category`, `posted_on`, 
`title`, `content` FROM `posts` WHERE `name`  LIKE '%".$search."%' ORDER BY `post_id` DESC 
";}elseif($searchcategories=='category'){
	$query="SELECT `post_id`, `name`, `category`, `posted_on`, 
`title`, `content` FROM `posts` WHERE `category`  LIKE '%".$search."%' ORDER BY `post_id` DESC
";}elseif($searchcategories=='date'){
	$query="SELECT `post_id`, `name`, `category`, `posted_on`, 
`title`, `content` FROM `posts` WHERE `posted_on`  LIKE '%".$search."%' ORDER BY `post_id` DESC
";}
elseif($searchcategories=='title'){
	$query="SELECT `post_id`, `name`, `category`, `posted_on`, 
`title`, `content` FROM `posts` WHERE `title`  LIKE '%".$search."%' ORDER BY `post_id` DESC
";}
elseif($searchcategories=='content'){$query=
"SELECT `post_id`, `name`, `category`, `posted_on`, 
`title`, `content` FROM `posts` WHERE `posted_on`  LIKE '%".$search."%' ORDER BY `post_id` DESC
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
	$titled=$row['title'];
	$contentd=$row['content'];
		$contented=substr($contentd, 0, 800);
		$contenteded=substr($contentd, 800, strlen($contentd));
	if(strlen($contentd)>800){
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
 $response.='<div id="posts">
 <div id="postedon">'.'<span 
 id="postedonspan">Posted on</span>'.' '
 .$date.' '.'By'.' '
 .'<span 
 id="name">'.$name.'</span>'.
 '</div>'.
 '</br>'.
 '<div id="category">'.'Category: '.$categoried.'</div>'.'</br>'.
 '<div id="title">'.'Topic: '.$titled.'</div>'.'</br>'.
 '<div id="content">'.
 '<span id="'.$categoried.$titled.'contented">'.$contented.'</span>'.
 '<span style="display:none" id="'.$categoried.$titled.'contenteded">'.$contenteded.'</span>'.
$rmore.
 '</div>'.'</br>'.
 '<div id="like">'.$button.'</div>'.
 '<div id="comment">'.$comment.'</div>'.
 '<div id="comment">'.$commentnametextbox.'</div>'.
 '<div id="commenttextbox">'.$commenttextbox.'</div>'.
 '<div id="commentsubmit">'.$commentsubmit.'</div>'.
 $commentarea.'</div>'.'</br>'.'</br>';
 }}
$response .= '</response>';
				return $response;
		
				
}

public function see_older_messages($number){
	if ($number=='Last 50'){
		$query= "SELECT `post_id`, `posted_on`, `name`, `category`,`title`, `content` 
		FROM  `posts` ORDER BY `post_id` DESC LIMIT 50 "; 	
	}
	elseif ($number=='Last 100'){
		$query= "SELECT `post_id`, `posted_on`, `name`, `category`,`title`, `content` 
		FROM  `posts` ORDER BY `post_id` DESC LIMIT 100 ";  }
	else{$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response.='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
$response .= '</response>';
				return $response;}
	

$result=$this->mysqli->query($query); 
$response='<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
$response='<?xml-stylesheet type="text/css" href="search.css" ?>';
$response .= '<response>';
 if($result->num_rows){
while($row=$result->fetch_array(MYSQLI_ASSOC)){
	$date=$row['posted_on'];
	$name=strtoupper($row['name']);
	$categoried=$row['category'];
	$titled=$row['title'];
	$contentd=$row['content'];
		$contented=substr($contentd, 0, 800);
		$contenteded=substr($contentd, 800, strlen($contentd));
	if(strlen($contentd)>800){
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
	$commentsubmit= '<input type="button"  value="submit" id="'.$titled.'3" onclick="comment(\''.$titled.'\', \''.$categoried.'\');">';
   $commentarea= '<div id="'.$titled.$categoried.'commentarea">'.'</div>';
 $response.='<div id="posts">
 <div id="postedon">'.'<span 
 id="postedonspan">Posted on</span>'.' '
 .$date.' '.'By'.' '
 .'<span 
 id="name">'.$name.'</span>'.
 '</div>'.
 '</br>'.
 '<div id="category">'.'Category: '.$categoried.'</div>'.'</br>'.
 '<div id="title">'.'Topic: '.$titled.'</div>'.'</br>'.
 '<div id="content">'.
 '<span id="'.$categoried.$titled.'contented">'.$contented.'</span>'.
 '<span style="display:none" id="'.$categoried.$titled.'contenteded">'.$contenteded.'</span>'.
$rmore.
 '</div>'.'</br>'.
 '<div id="like">'.$button.'</div>'.
 '<div id="comment">'.$comment.'</div>'.
 '<div id="comment">'.$commentnametextbox.'</div>'.
 '<div id="commenttextbox">'.$commenttextbox.'</div>'.
 '<div id="commentsubmit">'.$commentsubmit.'</div>'.
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






















	