<?php 



include "db_connection.php";
/*
//$sql = "UPDATE custom_menu SET position = position - 1 WHERE position = 4";
//$query = mysqli_query($conn,$sql);
 

$q1 = "SELECT * FROM custom_menu";
$query = mysqli_query($conn,$q1);
$menu1 = '2';
$newArray = [];
while($rows=mysqli_fetch_array($query)){ 
	$newArray[$rows["position"]] = array($rows["menu"] =>$rows["position"]);
//	echo $rows["position"]." ";
	//echo $rows["menu"]."<br>";
 //~ echo $rows["position"]."<br>";

} 
echo "<pre>";
ksort($newArray);
//in$menu1
print_r($newArray);

$q1 = "SELECT * FROM custom_menu where menu = 'menu1'";
$result = mysqli_query($conn, $q1) or die( mysqli_error($conn));
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo "<pre>";
print_r($row);


$sql = "UPDATE custom_menu SET position = $menu1 WHERE  menu = 1";
$query = mysqli_query($conn,$sql);

echo $row['menu'];
exit();

*/
?>


<?php 

$q1 = "SELECT * FROM custom_menu ORDER BY position ASC"; 

$result = mysqli_query($conn, $q1) or die( mysqli_error($conn));
$rows=mysqli_fetch_array($result);



while($rows=mysqli_fetch_array($result)){ 
	echo $rows['menu']."<br>";

} 

$q1 = "SELECT * FROM custom_menu ORDER BY position ASC"; 

$result = mysqli_query($conn, $q1) or die( mysqli_error($conn));
$rows=mysqli_fetch_array($result);
echo "<pre>";

list($array1, $array2) = array_chunk($rows, ceil(count($rows) / 2));



print_r( $array1);
$sql = "UPDATE custom_menu SET position = position + 1 WHERE position = 2";
$query = mysqli_query($conn,$sql);


print_r( $array2);


$sql = "UPDATE custom_menu SET position =  position - 1 WHERE  position = 4";
$query = mysqli_query($conn,$sql);


?>


