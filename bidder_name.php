<?php 

include_once "db_connection.php";

if(isset($_POST['depart'])){
	
	$departid = $_POST['depart'];

	$users_arr = array();

	if($departid >= 0){
		$sql = "SELECT * FROM employee_table WHERE department='".$departid."'"; 

		$result = mysqli_query($conn,$sql);
		
		while( $row = mysqli_fetch_array($result) ){
			$userid = $row['id'];
			$name = $row['firstname'];
			$users_arr[] = array("id" => $userid, "firstname" => $name);
		}
	}
	echo json_encode($users_arr);
	
	}
/*	
	
	if(isset($_POST['name'])){
		
		$name = $_POST['name'];

		$users_name = array();

		if($departid >= 0){
			$sql = "SELECT * FROM employee_table WHERE role='".$name."'"; 

			$result = mysqli_query($conn,$sql);
			
			while( $row = mysqli_fetch_array($result) ){
				$userid = $row['id'];
				$name = $row['firstname'];
				$users_name[] = array("id" => $userid, "firstname" => $name);
			}
		}
		echo json_encode($users_name);
		
	}	
	
*/
	


