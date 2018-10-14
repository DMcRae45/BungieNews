<?php

/* 

    Description: 

    Author: David McRae
    Date: 13-Oct-2018

 */

include_once 'Includes/dbConnection.php';

$headline = $_POST['headline'];
$image_link = $_POST['image_link'];
$description = $_POST['description'];

$query = $pdo->prepare 
    ("
        
    INSERT INTO NP_ARTICLES (Headline, Image_Link, Description)
    VALUES( :headline, :image_link, :description)

    ");

$success = $query->execute
    ([
    'headline' => $headline,
    'image_link' => $image_link,
    'description' => $description
    ]);

$count = $query->rowCount();
if($count > 0)
{
    $message = "Insert Successful";
    echo "<script type='text/javascript'>alert('$message');</script>";

    header ('location: ../insertArticle.php');
}
else
{
    $message = "Insert Failed";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    header ('location: ../insertArticle.php');
}




?>