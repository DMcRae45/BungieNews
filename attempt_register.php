<?php
/* 

    Description: 

    Author: David McRae
    Date: 10-Oct-2018

 */
include_once 'Includes/dbConnection.php';

$firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_NUMBER_INT);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$salt = "saltyPasswordSalt";
$password = $password.$salt;
$password = md5($password);

$query = $pdo->prepare 
    ("
        
    INSERT INTO NP_Users (First_Name, Last_Name, Email, Mobile, Username, Password)
    VALUES( :firstName, :lastName, :email, :mobile, :username, :password)

    ");

$success = $query->execute
    ([
    'firstName' => $firstName,
    'lastName' => $lastName,
    'email' => $email,
    'mobile' => $mobile,
    'username' => $username,
    'password' => $password
    ]);


$count = $query->rowCount();
if($count > 0)
{
    echo "Thank You for Registering an Account";
}else{
    echo "Insert Failed";
   echo $query -> errorInfo()[2];
}

?>
