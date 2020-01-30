<?php
 include '../config/connection.php';
include 'student_header.php';
?>
		<!--------------Student profile section---------------------->
			<section>
				<div class="container">
						<div class="row border ">
							<div class="col-md-6">
								<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>MY PROFILE</h3>
								<div class="d-flex">
									<div class="col-md-3">
										
									</div>
								</div>
							</div>

							
						
						<div class="col-md-12">
							<table class="border table table-striped bg-table">
								<tr>
								<th class="text-info">Basic Information</th>
								<th class="text-right"><a href="student_profile_edit.php"><button   class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
								</th>
								</tr>
								
								
								<tr>
								<td class="font-weight-bolder">RegisterNumber</td>
								<td></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Name</td>
								<td></td>
								</tr>
								
							
								
								<tr>
								<td class="font-weight-bolder">Course</td>
								<td></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">DOB</td>
								<td></td>
								</tr>
								
								
								
								<tr>
								<td class="font-weight-bolder">Mobile</td>
								<td>></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Email</td>
								<td></td>
								</tr>						
								
								<tr>
								<td class="font-weight-bolder">Year</td>
								<td></td>
								</tr>
								
							</table>
						</div>
					</div>
				</div>
			</section>
			
		<!--------------Student profile section ends---------------------->
	  <!-- Footer -->
     <?php include('footer.php'); ?>