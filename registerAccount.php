<?php
/*

    Description: 

    Author: David McRae
    Date: 01-Oct-2018

*/
?>
<html>
<head>
<?php
    include 'Includes/header.php';
?>  
</head>
        
<body>
<div class="container"> <!-- contains the visible web page-->
    
    <div class="container">

        <form class="form-group" action="attempt_register.php" method="POST">

            <div class="form-row">
                <div class="col-md-6 form-group">
                    <input class="form-control" type="text" name="firstName" placeholder="Firstname">
                </div>
                <div class="col-md-6 form-group">
                    <input class="form-control" type="text" name="lastName" placeholder="Lastname">
                </div>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="mobile" placeholder="Mobile">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>

            <button class="form-control" type="submit" name="submit">Sign up</button>
        </form>
    </div>
</div>
<?php
    include_once 'Includes/footer.php';
?>

