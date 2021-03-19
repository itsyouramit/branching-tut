<?php 
session_start();
include_once "db_connection.php";

?>

<!doctype html>
<html>
<head>
    <title>How to Auto populate dropdown with jQuery AJAX</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <style>
			
			.clear{
			clear:both;
			margin-top: 20px;
		}

		select{
			padding: 5px;
			width: 250px;
			letter-spacing: 1px;
			height:40px;
		}

		select option{
			padding:5px;
}
    
    </style>

    <script type="text/javascript">
        $(document).ready(function(){

            $("#depart").change(function(){
                var deptid = $(this).val();
					
                $.ajax({
                    url: 'bidder_name.php',
                    type: "POST",
                    data: {depart:deptid},
                    dataType: 'json',
                    
                    success:function(response){
						var len = response.length;
						
						$("#bidder").empty();
						for( var i = 0; i<len; i++){
							
							var id = response[i]['id'];
                            var name = response[i]['firstname'];
							
							$("#bidder").append("<option value='"+id+"'>"+name+"</option>");
							}
						}
                });
            });

        });
    </script>
</head>
<body>


        <div>Departments </div>
        <select id="depart">
            <option value="0">- Select -</option>
            <?php 
            // Fetch Department
            $department = "SELECT * FROM department_table";
            $data = mysqli_query($conn, $department);
            while($row = mysqli_fetch_array($data) ){
				
				
                $departid = $row['id'];
                $departname = $row['department'];
                echo "<option value='".$departid."' >".$departname."</option>"; } ?>
                
        </select>
        <div class="clear"></div>

        <div>Users </div>
        <select id="bidder">
            <option value="0">- Select -</option>
        </select>
</body>
</html>






















