<!DOCTYPE html>
<?php
/* 

    Description: 

    Author: David McRae
    Date: 15-Sep-2018

 */
//We need to have a session started on ALL pages
session_start(); 
?>

<head>
    <title>
        Bungie News
    </title>
</head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- bootstrap Css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<?php
    include_once 'Includes/dbConnection.php';
    require 'Includes/navigation.php';
?>