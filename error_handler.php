<?php
set_error_handler('sodiqErrorHandler', E_ALL);
function sodiqErrorHandler ($number, $message, $theFile, $theLine){
$errorMessage='Error: '.$number.chr(10).
			   'Message: '.$message.chr(10).
			   'File: '.$theFile.chr(10).
			   'Line: '.$theLine;
			   echo $errorMessage;
}




?>