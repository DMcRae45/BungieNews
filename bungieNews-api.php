<?php

/* 

    Description: 

    Author: David McRae
    Date: 07-Oct-2018

 */

//// FORCE ENCODE IN UTF8 (JSON ENCODE NEEDS UTF8)
//function utf8ize($d)
//{
//    if (is_array($d))
//    {
//        foreach ($d as $k => $v)
//        {
//            $d[$k] = utf8ize($v);
//        }
//    } 
//    else if (is_string ($d))
//    {
//        return utf8_encode($d);
//    }
//    return $d;
//}

// Connect to database
include 'Includes/dbConnection.php';
$db = new databaseObject();
$connection = $db->getConnectionstring();

//  function to get all the employees
function getAllArticles()
{
    global $connection;
    
    $filter = '';
    if (filter_input(INPUT_POST, "month", FILTER_SANITIZE_STRING))
    {
        $month = filter_input (INPUT_POST, "month", FILTER_SANITIZE_STRING);
        if ($month == "0")
        {
            $filter = '';
        }
        else
        {
            $filter = "WHERE MONTH(Post_Date) = '$month'";
        }
    }
    
    $sql = "SELECT Headline, Image_link, SUBSTRING(Description, 1, 150) AS Summary FROM NP_ARTICLES $filter ORDER BY Post_Date desc";
    $result = mysqli_query($connection, $sql);
    
    //  convert to JSON
    $rows = array();
    while($r = mysqli_fetch_assoc($result))
    {
    $rows[] = $r;
    }
    return json_encode($rows);

}

function createNewUser()
{
    global $connection;

    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_NUMBER_INT);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $salt = "saltyPasswordSalt";
    $password = $password.$salt;
    $password = md5($password);
    
    if (filter_input(INPUT_POST, "submit", FILTER_SANITIZE_STRING))
    {
        // create SQL Template
        $sql = "INSERT INTO NP_Users (First_Name, Last_Name, Email, Mobile, Username, Password) VALUES (?, ?, ?, ?, ?, ?)";
        
        // initialise statement using connection
        $stmt = mysqli_stmt_init($connection);
        // prepare the statement
        mysqli_stmt_prepare($stmt, $sql);
        
        // bind the parameters to the "?" placeholder/placeholders in "$sql"
        mysqli_stmt_bind_param("sssiss", $firstName, $lastName, $email, $mobile, $username, $password);
        
        // if the statement executes
        if(mysqli_stmt_execute($stmt))
        {
            echo 'Registration Succesfull';
            // encode the data
            json_encode($stmt);
        }
        // if the statement does NOT execute
        else
        {
            echo 'Registration Failed';
            
            // error checking during development.
            //echo "ERROR: could not execute query: $sql. " .mysli_error($connection);
        }
        // close the connection
        mysqli_close($connection);
    }
}

function attemptLogIn()
{
    global $connection;

    // Sanitize User Input for Username & Password
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); 

    $salt = "saltyPasswordSalt"; // Salt for Password Encryption
    $password = $password.$salt; // Concatenate Sanitized Password and the Password Salt
    $password = md5($password); // Hash password using "md5"

    if (filter_input(INPUT_POST, "submit", FILTER_SANITIZE_STRING))
    {
    
    // Sql SELECT Statement for finding mathcing Username AND Password
    // 
    // 
    // 
    // 
    //$sql = "SELECT * FROM NP_USERS WHERE Username = :username AND Password = :password";

    $sql = "SELECT * FROM NP_Users WHERE Username = '$username' AND Password = '$password'";
        
    $stmt = mysqli_stmt_init($connection);
    
    mysqli_stmt_prepare($stmt, $sql);
    
    //mysqli_stmt_bind_param("ss", $username, $password);

        // if the statement executes
        if(mysqli_stmt_execute($stmt))
        {
            $_SESSION['LoggedIn'] = true; // Set User to Logged in
            $_SESSION['username'] = $username; // Set User Session to the users Username

            header ('location: ../index.php'); // Redirect user to index page
        }
        // if the statement does NOT execute
        else
        {
            $_SESSION['username'] = ""; // Set User Session to Blank value 

            header ('location: index.php'); // Redirect user to index page
            
            // error checking during development.
            //echo "ERROR: could not execute query: $sql. " .mysli_error($connection);
        }
        // close the connection
        mysqli_close($connection);
    }
        
}



























//  function to get a single employee
function getEmployeeById($id)
{
        global $conn;
        $stmt = mysqli_stmt_init($conn);
        $sql = "SELECT * FROM employee WHERE eno= ? LIMIT 1" ;
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row=mysqli_fetch_array($result) ;  //there is only 1 row
        return json_encode($row);
}

// function to DELETE a single employee record
// Author: David McRae
function deleteEmployeeById($id)
{
        global $conn;
        $stmt = mysqli_stmt_init($conn);
        $sql = "DELETE FROM employee WHERE eno= ?" ;
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        $result = mysqli_stmt_execute($stmt);
        return $result;
}

// function to update a room
// Author David McRae
function updateEmployeeRoomById($id)
{
        global $conn;
        $stmt = mysqli_stmt_init($conn);
        $sql = "UPDATE employee SET employee_room = $room WHERE eno= ?" ;
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        $result = mysqli_stmt_execute($stmt);
        return $result;
}
	
?>
