<?php 

session_start();
include "db_connection.php";
include_once "pagination.php";

if(!isset($_SESSION["ROLE"])){
	header("location:login.php");
    die();
	}
	
	
$name = $_SESSION["FIRSTNAME"];	

?>



<!DOCTYPE html>
<html lang="en">
    <head>
		<!--header script-->
	<?php include "header_script.php"; ?>
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
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="align-items:center;"><?php echo $_SESSION["FIRSTNAME"];?>'s Project Details</li>
                        </ol>

					<div class="card mb-4">
                   
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>SL No.</th>

                                                <th>Name</th>
                                                <th>Email</th>

                                                <th>Project</th>
                                                <th>View More</th>
                                            </tr>
                                        </thead>
                                 
                                        <tbody>
											
            
									<?php 
										
										//~ $q1 = "SELECT * FROM employee_table WHERE firstname ='$name' LIMIT $record_per_page OFFSET $start_no ";
										
										
										//~ $q1 = "SELECT * FROM employee_table INNER JOIN project_table ON employee_table.firstname=project_table.hired_by WHERE firstname ='$name' LIMIT $record_per_page OFFSET $start_no ";		
										
																		
										$q1="SELECT * FROM employee_table INNER JOIN project_table ON employee_table.firstname=project_table.hired_by OR employee_table.firstname=project_table.team_leder OR employee_table.firstname=project_table.project_manager WHERE firstname ='$name' LIMIT $record_per_page OFFSET $start_no";
										
										$query = mysqli_query($conn,$q1);
									
										while($rows = mysqli_fetch_array($query)){ 
											$count++; ?>
											<tr>
												<td><?php echo $count;?></td>

												<td><?php echo $rows["firstname"]?></td>
												<td><?php echo $rows["email"]?></td>

												<td><?php echo $rows["project_title"]?></td>
												<td>
													<a type="button" class="btn btn-info" href="view_more.php?id=<?php echo $rows['id'];?>">View More</a>
												</td>
												<?php } ?>

											</tr> 
                                        </tbody>
                                        
                                    </table>
                                    
                                    <div style="text-align:center;">
                                     <?php 
										for($page_no = 1; $page_no<= $total_page; $page_no++) {  	
										echo '<a href = "emp_detail.php?page=' . $page_no . '">' . $page_no . ' </a>';
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
			<!-- footer start  -->
			<?php include_once "footer_script.php"; ?> 
    </body>
</html>

