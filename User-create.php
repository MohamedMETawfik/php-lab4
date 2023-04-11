<?php

require 'dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" type= "text/css" href="../css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>User Registration Form</h1>
                </div>
                <hr>
                <div class="panel-body">
                    <p>Please fill this form and submit to add user record to the database</p>
                    <form action="code.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div>
                                <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male"> &nbsp Male</label>
                                <br>
                                <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female"> &nbsp Female</label>
                            </div>
                            <label>
                                <input type="checkbox" name="checkAgree">&nbsp Recive Email from us.
                            </label>
                        </div>
                        <input type="submit" name= "submit_user" class="btn btn-primary">
                        <a href="index.php" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>