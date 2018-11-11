<?php

/* 

    Description:
 *  Database Connection and Log in Credentials.

    Author: David McRae
    Date: 15-Sep-2018

 */
// PDO Connection
//try
//{
//    $host ='lochnagar.abertay.ac.uk';
//    $dbname = 'sql1403163';
//    $un = 'sql1403163';
//    $pw = 'adbhU2vvBINm';
//
//    $pdo = new PDO ("mysql:host=$host;dbname=$dbname;charset=UTF8",$un,$pw);
//}
//catch (PDOException $ex)
//{
//    Die("Connection Failed");
//}

// MYSQLI Connection
//  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
//  if ($connection->connect_error) die($connection->connect_error);


// TEST 1 - USING API DB CONNECTION 
// Connection for the API as an Object
Class databaseObject
{
    /* Database connection start */
    var $servername = "lochnagar.abertay.ac.uk";
    var $username = "sql1403163";
    var $password = "adbhU2vvBINm";
    var $dbname = "sql1403163";
    var $connection;

    function getConnectionstring()
    {
        $connectionString = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

        /* check connection */
        if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
        } else {
            $this->connection = $connectionString;
        }
        return $this->connection;
    }
}
?>
    