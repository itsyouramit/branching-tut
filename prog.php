<?php 

function fact($n){
	
	if($n==0){
		
		return 1;
		}else{
			$num = $n * fact($n-1);
			return $num;
			}
	}
	
echo fact(3)."<br>";



//function to check prime no.

function prime_num($n){
	for($i=2; $i<$n; $i++){
		
		if($n%$i==0){
			return 0;
			}
		
		}
	return 1;
	}


$b = prime_num(8);

if($b==0){
	
	echo "this is not a prime no.";
	}
	
	else{
		echo "prime no";
		
		}


/*-------------------------------------------------------- */

$count = 0;
$num = 2;

while($count<15){
	$div_count = 0;
	for($i=0;$i<=$num;$i++){
		if(($num%$i)==0){
			$div_count++;
			}
		}
		if($div_count<3){
			echo $num.",";
			$count=$count+1;
			}
			$num=$num+1;
	}

?>
