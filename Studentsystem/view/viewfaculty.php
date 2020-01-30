<!----------------------------------------Header Starts--------------------------------------------------->  
<?php
include '../config/connection.php';
include 'admin_header.php';
?>
<!----------------------------------------Header End------------------------------------------------------>
<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		
			<div class="col-md-6 text-center bor py-4 t-center">
			  <h2 class="fontcol">Students</h2>
			</div>
			
				
			<div class="col-md-12">
				<div style="overflow-x:auto;">
				<table class="table table-hover">
				  
				  <thead>
					<tr>
					  <th>Sl.no</th>
					  <th>Student Name</th>
                      <th>Department</th>
                      <th>Semester</th>
                      <th>Year</th>
					  <th>Mobile</th>
					  <th>Email</th>
					 					</tr>
				  </thead>
				  
					  <tbody id="myTable">
					  
						<tr>
						  <td><?php echo $row['id']; ?></td>
						  <td><?php echo $row['name']; ?></td>
						  <td><?php echo $row['dep']; ?></td>
						  <td><?php echo $row['sem']; ?></td>
                          <td><?php echo $row['year']; ?></td>
                          <td><?php echo $row['mobile']; ?></td>
                          <td><?php echo $row['email']; ?></td>
						  <td><button class="btn btn-primary">more</button></td>
						</tr>
					
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</section>


