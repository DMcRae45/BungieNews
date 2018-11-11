<?php

/* 

    Description: 

    Author: David McRae
    Date: 08-Oct-2018

 */
session_start();
include "Includes/dbConnection.php";

// Sanitize User Input for Username
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

// Sanitize User Input for Password
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); 

$salt = "saltyPasswordSalt"; // Salt for Password Encryption
$password = $password.$salt; // Concatenate Sanitized Password and the Password Salt
$password = md5($password); // Hash password using "md5"

// Sql SELECT Statement for finding mathcing Username AND Password
$sql = "SELECT * FROM NP_USERS WHERE Username = :username
        AND Password = :password";

// Prepare the Sql Statement
$stmt = $pdo->prepare($sql);

// Execute the Sql statement with the PasswordHash
$success = $stmt->execute(['username' => $username, 'password' => $password]);

// if 1 or more rows effected (Log in Successfull)
if($success && $stmt->rowCount() > 0)
{
    echo "sucessfully logged in";
    $_SESSION['LoggedIn'] = true; // Set User to Logged in
    $_SESSION['username'] = $username; // Set User Session to the users Username
    
    header ('location: ../index.php'); // Redirect user to index page
      
}
else // if 0 Rows were effected (log in Failed)
{
    echo "Failed to login";
    $_SESSION['username'] = ""; // Set User Session to Blank value 
    
    header ('location: index.php'); // Redirect user to index page
}
var_dump($_SESSION);
