<?php
   
   require 'dbcon.php';

   if (isset($_POST['submit_user']))
   {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $checkAgree = mysqli_real_escape_string($con, $_POST['checkAgree']);
        isset($_POST["checkAgree"]) == 1 ? $checkAgree = "yes" : $checkAgree = "no";

        $query = "INSERT INTO registration (Name, Email, Gender ,Mail_Status)
        VALUES ('$name','$email','$gender','$checkAgree')";

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