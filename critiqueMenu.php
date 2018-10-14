<?php
/*

    Description: 
    Newspaper task "Bungie News" 
    using a phpMyAdmin database display newspaper articles 3 at a time

    Author: David McRae
    Student No: 1403163
    Date: 15-Sep-2018

*/
?>
<html>
<head>
    <?php 
        include_once 'Includes/dbConnection.php';
        require 'Includes/header.php';
    ?>
</head>
<body>
    
    <div class="container">
        <div class="page-header">
            <h1> Critique</h1>
        </div>
       
 <section class="inner container">
           
    <!-- menu -->
    <div class="Critique-menu">
        <ul>
            <li><a href="Critiques/week_01.php">week_01</a></li>
            <li><a href="Critiques/week_02.php">week_02</a></li>
            <li><a href="Critiques/week_03.php">week_03</a></li>
            <li><a href="Critiques/week_04.php">week_04</a></li>
            <li><a href="Critiques/week_05.php">week_05</a></li>
            <li><a href="Critiques/week_06.php">week_06</a></li>
        </ul>
    </div>
    <!-- menu --> 
    
</section>
</div><!-- end of container-->
    
    <footer>
        <?php include 'Includes/footer.php'; ?>
    </footer>

    <?php require 'Includes/bootstrapScript.php'; ?>
</body>
</html>