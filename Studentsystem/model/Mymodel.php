<?php
class Mymodel
    {
        function insertdata()
            {
                include '../config/connection.php';
                $name= $_POST['name'];
                $regno=$_POST['regno'];
                $email= $_POST['email'];
                $dep=$_POST['dep'];
                $sem=$_POST['sem'];
                $year= $_POST['year'];
                $mobile= $_POST['mobile'];
                $pwd=$_POST['password'];
                $dob=$_POST['dob'];
                $sql="INSERT INTO student(name,regno,dep,sem,year,email,mobile,password,dob) VALUES('".$name."','".$regno."','".$dep."',
                '".$sem."','".$year."','".$email."','".$mobile."','".$pwd."','".$dob."')";
                if(mysqli_query($conn,$sql))
                {
                    header('location:../view/admin_home.php');
                }
                else
                {
                    echo'error';
                }
                
            
            }
            function logcheck($email,$pwd)
            {
                include '../config/connection.php';
                $sql="SELECT name FROM student WHERE email='".$email."' and password='".$pwd."'";                                                    ;
                $result=mysqli_query ($conn,$sql);
                if(mysqli_num_rows($result)>0)
	                {	
		                while($row=mysqli_fetch_assoc($result))
		                    {
		                    	
			                     header('location:../view/student_home.php');
		                    }
	               
                     }
           }


    }

?>
 

