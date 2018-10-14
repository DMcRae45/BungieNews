<?php
/* 

    Description: 

    Author: David McRae
    Date: 08-Oct-2018

 */
?>
<html>
<head>
    <?php
        include 'Includes/header.php';
    ?>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1> Login page </h1>
    </div>

    <div class="container">
        <form class="form-group" name="login_form" action="attempt_login.php" method="POST">

            <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username" />  
            </div>
            
            <div class="form-group">
                <input class="form-control" type="Password" name="password" placeholder="Password" autocomplete="off"/>
            </div>

            <button class="form-control" type="submit" value="Login">Log in</button>
        </form>		
    </div>

    <footer>
        <?php include 'Includes/footer.php'; ?>
    </footer>
</div><!-- end of container-->
    <?php require 'Includes/bootstrapScript.php'; ?>
</body>
</html>
