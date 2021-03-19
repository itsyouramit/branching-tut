<?php 


$error =[];

if(isset($_FILES['submit'])) { 
	
	$error = array();
	
	$tmp_file 	= $_FILES['file']['tmp_name'];
	$file_name 	= $_FILES['files']['name'];
	$file_size 	= $_FILES['file']['size'] ;
	$file_type 	= $_FILES['file']['type'];
	$file_error = $_FILES['file']['error'];
	
	$path = "uploads/".$file
	
	move_uploaded_file($tmp_name,$path);
	

	
	
	}


?> 

