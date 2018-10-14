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
<!--<head>-->
    <?php
        include 'Includes/header.php';
    ?>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1> Bootstrap Framework with Bungie News</h1>
    </div>
<?php

//echo "<select name='month'>";
//echo "<option value='0'>Most Recent</option>";
//echo "<option value='1'>January</option>";
//echo "<option value='2'>February</option>";
//echo "<option value='3'>March</option>";
//echo "<option value='4'>April</option>";
//echo "<option value='5'>May</option>";
//echo "<option value='6'>June</option>";
//echo "<option value='7'>July</option>";
//echo "<option value='8'>August</option>";
//echo "<option value='9'>September</option>";
//echo "<option value='10'>October</option>";
//echo "<option value='11'>November</option>";
//echo "<option value='12'>December</option>";
//echo "</select>";
//echo "<input type='submit' value ='Sort By Post Date'>";
//
//
//$filter = '';
//if (isset($_POST['month']))
//{
//    $month = $_POST['month'];
//    
//    if ($month == '0')
//    {
//        $filter = "";
//    }
//    else
//    {
//        $filter = "WHERE MONTH(Post_Date) = '$month'";
//    }
//}    
    
$result = $pdo->query("SELECT * FROM NP_ARTICLES");
$rows = $result->rowCount();

if ($rows > 0)
{

$cols = 3;
$counter = 1;
$nbsp = $cols - ($rows % $cols);

echo '<div class="container-fluid">';

    while ($item = $result->fetch(PDO::FETCH_ASSOC))
    {
        if(($counter % $cols) == 1) 
        {    
            echo '<div class="row">';                                          
        }
            echo "<div class='col-md-4'>";
            echo "<h2>".$item['Headline']."</h2>";
            echo "<img src=".$item['Image_link']." class='img-thumbnail'>";
            echo "<p>".$item['Description']."</p>";
            echo "<button type='button' class='btn btn-default btn-sm'> <span class='glyphicon glyphicon-option-horizontal'></span></button>";
            echo "</div>";  
                        
            if(($counter % $cols) == 0)                                         
            {       
                echo '</div>';                                                  
            }
    $counter++;                                                                 
    }
    
    if($nbsp > 0)                                                               
    { 
        for ($i = 0; $i < $nbsp; $i++)
        { 
            echo '<div class="col-md-4">&nbsp;</div>'; 
        }
        echo '</div>';                                                          
    }
    echo '</div>';
}
// TEST 1 - USING API DB CONNECTION 
//    include 'bungieNews-api.php' ;
//    $articles = getAllArticles() ;
//    // echo $articles ;
//    $articleArray = json_decode($articles) ;
//    // var_dump($articleArray) ;
//    for ($i=0 ; $i < sizeof($articleArray) ; $i++)
//    {
//        echo $articleArray[$i] -> Headline ;
//        echo "<img src=".$articleArray[$i] -> Image_link."class='img-thumbnail'>";
//        //echo $articleArray[$i] -> Image_link ;
//        echo $articleArray[$i] -> Description ;
//    }

?>
    <footer>
        <?php include 'Includes/footer.php'; ?>
    </footer>
</div><!-- end of container-->
    <?php require 'Includes/bootstrapScript.php'; ?>
</body>
</html>