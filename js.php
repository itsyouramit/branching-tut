<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
	.col-sm-4{
		border:1px solid grey;
		padding:20px;
		}
		p{
		font-size:15px;
		    }


</style>
</head>
<body>


<div class="container" style="margin-top:60px;">
	
  <div class="row">
	  
 
	  
    <div class="col-sm-4 box1" >
    <p> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
    </div>
    
    <div class="col-sm-4 box2">
    <p> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
    </div>
    
    <div class="col-sm-4 box3">
      <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
    </div>
    
    
    <div class="col-sm-4 box4">
		<select id="state">
		<option value="">-select-</option>
		<option value="UP">UP</option>
		<option value="MP">MP</option>
		<option value="Bihar">Bihar</option>
		<option value="Haryana">Haryana</option>

		</select>
  </div>
  
    <div class="col-sm-4 box5">
		<select id="capital">
		<option value="">-select-</option>
		<option value="Lucknow">Lucknow</option>
		<option value="Bhopal">Bhopal</option>
		<option value="Patna">Patna</option>
		<option value="Chandigarh">Chandigarh</option>

		</select>
  </div>
  
  
      <div class="col-sm-4 box6">
		 <button>CLICK ON ME</button>
		 <div class="text">
		 <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested</p>
		 </div>
		</div>
		
		
      <div class="col-sm-4 box7">
		 <button>SLIDE UP AND DOWN</button>
		 <div class="tex">
		 <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested</p>
		 </div>
		</div>
  </div>
</div>








<script>
$(document).ready(function(){
	
	/*
	  $(".col-sm-4").mouseenter(function(){
		$(this).css("color","red");
		$(this).css("background-color","blue");  
	  });
  
  
	$(".col-sm-4").mouseleave(function(){
	  $(this).css("color","blue"); 
	  $(this).css("background-color","white");   
	  });
  
	$(".col-sm-4").hover(function(){

	$(this).css("background-color","skyblue");  
	},function(){
	$(this).css("background-color","white");  	
		});
		
	$("#capital").on("click",function(){
		$(this).hide("1000");
		});  
*/		
	$("button").click(function(){
		$(".text").toggle("1000");
		});  		

	  
	
	$(".box7").click(function(){
		$(".text1").slidetoggle("1000");
		
		});
 
	  
});
</script>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
