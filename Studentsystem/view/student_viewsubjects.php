<?php
 include '../config/connection.php';
include 'student_header.php';
?>

<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		<div class="col-md-12">
		
		<div class="card-header text-center p-1 bg-info "><h2 class="text-white">Subjects</h2></div>
			
		</div>				
			<div class="col-md-12 mt-3">
				<div style="overflow-x:auto;">
				<table class="container-fluid table ">
				  
				  <thead>
					<tr>
					  <th>Sl.no</th>
					  <th>Course</th>
					  <th>Semester</th>
					  <th>Subjects</th>
					  <th> </th>
					  </tr>
				  </thead>
				  
					  <tbody id="myTable">
					  
						<tr>
						 
						  <td></td>
						  <td></td>
						  <td></td>
						  <td></td>
						  <td><button class="btn btn-primary">more</button></td>
						</tr>
				
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</section>
<div class="col-md-3 ">
	<button type="clear" class="btn btn-danger"><a href="admin_student_new.php" class="text-light text-decoration-none">Add New+</a></button>
</div>
<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php
include 'footer.php';
?>
<!----------------------------------------Footer End--------------------------------------------------->