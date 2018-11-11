<?php
/* 

    Description: 

    Author: David McRae
    Date: 11-Oct-2018

 */
session_start(); // Start Session / Resume Current Session
session_destroy(); // Destroy Session
header("Location: ../index.php"); // Redirect to index page
exit;
