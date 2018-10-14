<?php
/*
    Description: 

    Author: David McRae
    Date: 13-Oct-2018

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
    <div class="page-header">
        <h1>Insert Page</h1>
    </div>
    
    <div class="container">

        <form class="form-group" action="attempt_insert.php" method="POST">

            <div class="form-group">
                <input class="form-control" type="text" name="headline" placeholder="Headline">
            </div>

            <div class="for-group">
                <input class="form-control" type="text" name="image_link" placeholder="Image_link">
            </div>

            <div class="form-group">
                </br>
                <textarea class="form-control" type="text" name="description" placeholder="Description" rows="5"></textarea>
            </div>

            <button class="form-control" type="submit" name="submit">Insert Article</button>
        </form>
    </div>
</div>
<?php
    include_once 'Includes/footer.php';
?>
