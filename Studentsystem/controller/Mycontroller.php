<?php
 include '../config/connection.php';

    class Mycontroller
        {
            function firstpage()
                {
                    header('location:view/first.php');
                }
                function login($email,$password)
                {
               
                    if($email=='admin' && $password=='admin')
                    {
                        header('location:../view/admin_home.php');
                    }
                    else 
                    {
                        include '../model/Mymodel.php';
                        $mod=new Mymodel();
                        $mod->logcheck($email,$password);

                    }
                           
                        
                }
                function Savedata()
                {   $name= $_POST['name'];
                    $regno=$_POST['regno'];
                    $email= $_POST['email'];
                    $dep=$_POST['dep'];
                    $sem=$_POST['sem'];
                    $year= $_POST['year'];
                    $mobile= $_POST['mobile'];
                    $dob= $_POST['dob'];
                    $password=$_POST['password'];
                    include '../model/Mymodel.php';
                    $mod=new Mymodel();
                    $mod->insertdata();
                }
        }
?>