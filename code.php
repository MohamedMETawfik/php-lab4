<?php
   
   require 'dbcon.php';

   if (isset($_POST['submit_user']))
   {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $checkAgree = mysqli_real_escape_string($con, $_POST['checkAgree']);

        $query = "INSERT INTO registration (Name, Email, Gender ,Mail Status)
        VALUES ('$name','$email','$gender')";

        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            header("Location: index.php");
            exit(0);
        }
        else
        {
            header("Location: index.php");
            exit(0);
        }


   }

?>