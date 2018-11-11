<!DOCTYPE html>
<?php
/* 

    Description: 

    Author: David McRae
    Date: 20-Sep-2018

 */
?>
<html>
<head>
    <?php require 'Includes/header.php'; ?>
</head>
<body>
    
    
    
    
    <div class="container text-center">
        <div class="page-header">
            <h1> Week 02 Critique</h1>
        </div>
        
        <div class="container text-center">
            <h4>Bungie News ERD</h4>
            <img class="text-center" src="Images/ERD.JPG" alt="ERD DIAGRAM HERE">
            <p>
                The ERD for this website is based on using 3 Tables or Classes.
                
                These Classes are called; </br>
                NP_Users - Newspaper Users. </br>
                NP_ARTICLES - Newspaper Articles </br>
                NP_Comments - Newspaper comments </br>
                
                The Users Class/Table Attributes consist of; </br>
                
                User_ID
                Admin_Status
                First_Name
                Last_Name
                Email
                Mobile
                
            </p>
        </div>
    </div>   
               
    
    
    
    <footer>
        <?php include 'Includes/footer.php'; ?>
    </footer>

    <?php include 'Includes/bootstrapScript.php'; ?>
</body>
</html>