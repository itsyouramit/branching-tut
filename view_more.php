<?php
session_start();
include "db_connection.php";
include_once "pagination.php";
include_once "function.php";

if(!isset($_SESSION["ROLE"])){
	header("location:login.php");
    die();
	}
	

$rows=pro_detail($conn);	
$row = detail($conn);	


$dep_role=role($conn);
$dep = dep($conn);

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
                    <div class="container-fluid" >
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?php echo $_SESSION["FIRSTNAME"]; ?>'s Project Detail</li>
                        </ol>


                                        <form  style="border:1px solid grey; margin-top:12px; padding:10px;">
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Project Title</label>
                                                           
                                                        <input class="form-control py-2" id="inputFirstName" type="textarea" 
                                                         name="project_title"  value="<?php echo $rows["project_title"]; ?>" disabled/>
															
                                                         
                                                     
                                                     
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Client Name</label>
                                                        
                                                        <input class="form-control py-2" id="inputLastName" type="text" 
                                                         name="last_name"  value="<?php echo $rows["client_name"]; ?>" disabled/>
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Project Start Date</label>
                                                           
                                                        <input class="form-control py-2" id="inputFirstName" type="text" 
                                                         name="start_date"  value="<?php echo $rows["start_date"]; ?>" disabled/>
                                                     
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Upwork Id</label>
                                                        
                                                        <input class="form-control py-2" id="inputLastName" type="text" 
                                                         name="upwork_id"  value="<?php echo $rows["upwork_id"]; ?>" disabled/>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirsproject_titlet Name">Status</label>
                                                           
                                                        <input class="form-control py-2" id="inputFirstName" type="text" 
                                                         name="status"  value="<?php echo $rows["status"]; ?>" disabled/>
                                                     
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
														<label class="small mb-1" for="inputFirstName">Project Url</label>
                                                        
                                                        <input class="form-control py-2" id="inputFirstName" type="text" 
                                                        name="url" value="<?php echo $rows["url"]; ?>" disabled/>
														
														
														


                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
														<label class="small mb-1" for="inputLastName">File</label>

                                                        <input class="form-control py-2" id="inputLastName" type="textarea" 
                                                        placeholder=""  name="file" value="<?php echo $rows["file"]; ?>" disabled/>
														
														

                                                     
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Country</label>
                                                        
                                                        <input class="form-control py-2" id="inputLastName" type="text" 
                                                         name="last_name"  value="<?php echo $row["country"]; ?>" disabled/>




                                                        
                                                    </div>
                                                </div>
                                            </div><hr>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">First Name</label>
                                                        
                                                        <input class="form-control py-2" id="inputLastName" type="text" 
                                                        name="firstname"  value="<?php echo $row["firstname"]; ?>" disabled/>
                                                         
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <div class="form-group">

														<label class="small mb-1" for="inputFirstName">Last name</label>
                                                           
                                                        <input class="form-control py-2" id="inputFirstName" type="text" 
                                                         name="lastname"  value="<?php echo $row["lastname"]; ?>" disabled/>
                                                         
                                                         

                                                         
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Employee Id</label>
                                                        
                                                        <input class="form-control py-2" id="inputFirstName" type="text" 
                                                        name="url" value="<?php echo $row["emp_id"]; ?>" disabled/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Date OF Birth</label>
                                                       
														<input class="form-control py-2" id="inputLastName" type="text" 
                                                        placeholder=""  name="emp_id" value="<?php echo $row["dob"]; ?>" disabled/>
                                                    </div>
                                                </div> 
                                             
                                             <div class="col-md-4">
												<div class="form-group">
													<label class="small mb-1" for="inputLastName">Department*</label>
													
														<input class="form-control py-2" id="inputLastName" type="text" 
                                                        placeholder=""  name="emp_id" value="<?php echo $dep["department"]; ?>" disabled/>														
									

												</div>
                                             </div>
                                             
                                             <div class="col-md-4">
												<div class="form-group">
													<label class="small mb-1" for="inputLastName">Role*</label>
									                <input class="form-control py-2" id="inputLastName" type="text" 
                                                        placeholder="" name="emp_id" value="<?php echo $dep_role['role_name'] ?>" disabled/>
												</div>
                                             </div>
                                      
                                            </div>
 <div class="form-row">
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email*</label>
                                                <input class="form-control py-2" id="inputEmailAddress" type="text" aria-describedby="emailHelp" 
                                                placeholder="Enter email address" name="email" value="<?php echo $row["email"]; ?>" disabled />
                                            </div>
                                          </div>
                                          
										<div class="col-md-6">
                                            <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Date of joining</label>
                                                        
                                                        <input class="form-control py-2" id="inputLastName" type="text" 
                                                         name="last_name"  value="<?php echo $row["joining_date"]; ?>" disabled/>
                                            </div>
                                          </div>
                                          </div>
                                        </form>

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

