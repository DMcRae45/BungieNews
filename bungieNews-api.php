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
    $sql = "SELECT * FROM NP_ARTICLES";
    $result = mysqli_query($connection, $sql);
    //  convert to JSON
    $rows = array();
    while($r = mysqli_fetch_assoc($result))
    {
    $rows[] = $r;
    }
    return json_encode($rows);

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
