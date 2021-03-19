<?php 

include_once "db_connection.php";


$departid = $_POST['depart'];

//~ if(isset($_POST['depart'])){
   //~ $departid = mysqli_real_escape_string($conn,); 
//~ }

$users_arr = array();

//~ if($departid > 0){
    $sql = "SELECT * FROM employee_table WHERE department='".$departid."'"; 

    $result = mysqli_query($conn,$sql);
    
    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['id'];
        $name = $row['firstname'];
        $users_arr[] = array("id" => $userid, "firstname" => $name);
    }
//}
echo json_encode($users_arr);



