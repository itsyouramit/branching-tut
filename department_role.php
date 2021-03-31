<?php
session_start();
include "db_connection.php";
$q1 = "SELECT * FROM `role_table`";
$result = mysqli_query($conn,$q1);
$rowcount = mysqli_num_rows($result);


$record_per_page = 5;

$total_page=ceil($rowcount/$record_per_page);

if(isset($_GET["page"]) && $_GET["page"]!=1)
{
	$start_no = ($_GET["page"]-1)*$record_per_page;
	}
	else{
		$start_no=0;
	}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WizeBrain Family</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  
  
        
   <script>
	function conf_delete() 
	{
	  var r = confirm("Do You really want to delete?");
	  if (r)
		return true;
	  else 
		return false;
	}
	</script>
        
        
        
        
    </head>

    <body class="sb-nav-fixed">
        <!-- navigation bar -->
        <?php include "navbar.php"; ?>
        
        <!-- sidenav-->
        <div id="layoutSidenav">
           <?php include "leftsidenav.php"; ?>  
			<!-- sidecontent-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4" style="text-align:center;">Department's Role</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Department Role List</li>
                        </ol>

						
						<div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
									
									<table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									  <thead >
										<tr>
										  <th scope="col">Serial No</th>
										  <th scope="col">Department Role</th>
										  <?php if ($_SESSION["ROLE"] == 1) { ?>
										  <th scope="col">Update</th>
										  <th scope="col">Delete</th>
										  <?php } ?>					  
										</tr>
									  </thead>
									  <tbody>
								  
										<?php
											$q1 = "SELECT * FROM role_table LIMIT $record_per_page OFFSET $start_no";
											$query = mysqli_query($conn,$q1);
											while($rows = mysqli_fetch_array($query)){
												$count++;  ?>
										
										<tr>
										<td><?php echo $count; ?></td>
										<td><?php echo $rows["role_name"]?></td>
										<?php if ($_SESSION["ROLE"] == 1) { ?>
										<td ><btn><a  class="btn btn-primary" href="update_role.php?id=<?php echo $rows["id"];?>&role=<?php echo $rows["role"]?>">Update</a></btn></td>							
										
										<td ><btn><a  class="btn btn-danger" href="delete_role.php?id=<?php echo $rows["id"];?>"onclick="conf_delete()">Delete</btn></td>
										<?php } ?>
										</tr>
									<?php } ?>
		
							  </tbody>
							</table>
                                    <div style="text-align:center;">
                                     <?php 
										for($page_no = 1; $page_no<= $total_page; $page_no++) {  	
										echo '<a href = "department_role.php?page=' . $page_no . '">' . $page_no . ' </a>';
										}
									?>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- footer start  -->
                <?php include "footer.php"; ?> 

            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
