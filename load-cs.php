<?php 
include_once "db_connection.php";

if($_POST['type'] == ''){
	$q1 = "SELECT * FROM department_table";
	$query = mysqli_query($conn, $q1);


	$str = "";

	while($rows=mysqli_fetch_assoc($query){
		$str.= "<option value="{$rows['id']}">{$rows['department']}</option>"
		}	
	
	}elseif($_POST['type'] == "namedata"){
		$q2 = "SELECT * FROM employee_table WHERE department = {$_POST["id"]}";
		$query = mysqli_query($conn, $q2);
			
			
		while($rows=mysqli_fetch_assoc($query){
		$str.= "<option value="{$rows['id']}">{$rows['department']}</option>"
		}
	}

echo $str;


?>
