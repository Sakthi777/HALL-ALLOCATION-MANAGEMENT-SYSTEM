<?php
    include_once('connection.php');

    if(isset($_POST['submit']))
    {
        $username=mysqli_real_escape_string($con,$_POST['username']);
        $register_no =mysqli_real_escape_string($con,$_POST['register_no']);
        $department=mysqli_real_escape_string($con,$_POST['department']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $feedback=mysqli_real_escape_string($con,$_POST['feedback']);

            if(empty($username) || empty($register_no) || empty($department) || empty($email))
            {
                echo "fill all the fileds...";
            }else{
                $sql="insert into register1_table(username,register_no,department,email,feedback) 
                values('$username','$register_no','$department','$email','$feedback')";
                $result=mysqli_query($con,$sql);
            }
       if($result){
            header("location: home.php");
       }

    }
?>