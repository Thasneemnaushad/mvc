<?php
 include '../config/connection.php';
include 'admin_header.php';
?>
 
 
 <section>
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Add Faculty details </h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Faculty id</label>
                                    <div class="col-md-6 ">
                                        <input type="number" id="full_name" class="form-control box-bg " name="fid">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control box-bg" name="name">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Department</label>
                                    <div class="col-md-6 d-flex form-check">
									<select name="dep">
										<option selected>Choose..</option>
										<option value="Mechanical">Mechanical</option>
										<option value="EC">Electronics and Communication</option>
                                        <option value="Computer">Computerscience</option>
                                       
									</select>
                                       
                                    </div>
                                </div>

                               
								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg" name="email">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                                    <div class="col-md-6">
                                        <input type="date"   class="form-control box-bg" name="dob">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile </label>
                                    <div class="col-md-6">
                                        <input type="number"  class="form-control box-bg" name="mobile">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Qualification</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg" name="qualification">
                                    </div>
                                </div>
								
								
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg" name="password">
                                    </div>
                                </div>
								

								
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary" name="submit">
                                        <a class="text-light text-decoration-none">Register</a>
                                        </button>
                                    </div>
									<div class="col-md-6 ">
                                        <button type="submit" class="btn btn-danger"><a href="#" class="text-light text-decoration-none">
                                        Clear</a>
                                        </button>
                                    </div>
                                </div>
								</div>
                            </form>
                            <?php
                            if(isset($_POST['submit']))
                                {
                                    include '../controller/Mycontroller.php';
                                    $obj=new Mycontroller();
                                    $obj->Savefaculty();
                                }
                            ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>

				</div>
</section>
		
<script>
	function say()
	{
		alert("successfully submitted");
	}
</script>
