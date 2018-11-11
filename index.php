<?php
/*
    Description: 
    Newspaper task "Bungie News" 
    using a phpMyAdmin database display newspaper articles 3 at a time

    Author: David McRae
    Student No: 1403163
    Date: 15-Sep-2018
*/
session_start();

$Month = 2592000 + time(); //this adds 30 days to the current time

setcookie('UserVisit',$Month);

?>
<html>
<!--<head>-->
    <?php
        include 'Includes/header.php';
        include 'bungieNews-api.php' ;
    ?>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1> Bootstrap Framework with Bungie News</h1>
    </div>
<?php
echo "
    <div class='row'>
        <div class='col-md-4'>
            <form method='POST' action='index.php'>
                <select class='form-control' name='month' onchange='this.form.submit()'>
                    <option value='placeholder'>Sort By...</option>
                    <option value='0'>Most Recent</option>
                    <option value='1'>January</option>
                    <option value='2'>February</option>
                    <option value='3'>March</option>
                    <option value='4'>April</option>
                    <option value='5'>May</option>
                    <option value='6'>June</option>
                    <option value='7'>July</option>
                    <option value='8'>August</option>
                    <option value='9'>September</option>
                    <option value='10'>October</option>
                    <option value='11'>November</option>
                    <option value='12'>December</option>
                </select>
                <noscript><input type='submit' value ='Sort By Post Date'></noscript>
            </form>
        </div>
    </div>
";
//$result = $pdo->query("SELECT * FROM NP_ARTICLES");
//$rows = $result->rowCount();

//if ($rows > 0)
//{

//$cols = 3;
//$counter = 1;
//$nbsp = $cols - ($rows % $cols);

//echo '<div class="container-fluid">';
//
//    while ($item = $result->fetch(PDO::FETCH_ASSOC))
//    {
//        if(($counter % $cols) == 1) 
//        {    
//            echo '<div class="row">';                                          
//        }
//            echo "<div class='col-md-4'>";
//            echo "<h2>".$item['Headline']."</h2>";
//            echo "<img src=".$item['Image_link']." class='img-thumbnail'>";
//            echo "<p>".$item['Description']."</p>";
//            echo "<button type='button' class='btn btn-default btn-sm'> <span class='glyphicon glyphicon-option-horizontal'></span></button>";
//            echo "</div>";  
//                        
//            if(($counter % $cols) == 0)                                         
//            {       
//                echo '</div>';                                                  
//            }
//    $counter++;                                                                 
//    }
//    
//    if($nbsp > 0)                                                               
//    { 
//        for ($i = 0; $i < $nbsp; $i++)
//        { 
//            echo '<div class="col-md-4">&nbsp;</div>'; 
//        }
//        echo '</div>';                                                          
//    }
//    echo '</div>';
//}
// TEST 1 - USING API DB CONNECTION 


    $articles = getAllArticles() ;
    
$rows = 0;
$cols = 3;
$counter = 1;
$nbsp = $cols - ($rows % $cols);

        if(($counter % $cols) == 1) 
        {    
            echo '<div class="row">';                                          
        }

    // echo $articles ;
    $articleArray = json_decode($articles) ;
    // var_dump($articleArray) ;
    for ($i=0 ; $i < sizeof($articleArray) ; $i++)
    {
        if(($counter % $cols) == 1) 
        {    
            echo '<div class="row">';                                          
        }
            echo "<div class='col-md-4'>";
            echo "<h2>".$articleArray[$i]->Headline."</h2>";
            echo "<img src=".$articleArray[$i]->Image_link." class='img-thumbnail'>";
            echo "<p>".$articleArray[$i]->Description."</p>";
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
           echo'<div class="col-md-4">&nbsp;</div>'; 
        }
    }
    
?>
    <footer class="container">
        <?php include 'Includes/footer.php'; ?>
    </footer>
</div><!-- end of container-->
    <?php include 'Includes/bootstrapScript.php'; ?>
</body>
</html>