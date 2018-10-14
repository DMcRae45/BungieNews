<?php

/*
    Description: 

    Author: David McRae
    Date: 01-Oct-2018
*/
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navigation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <a class="nav-link" href="index.php">Articles <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="critiqueMenu.php">Critiques</a>
        </li>

        <li class="nav-item dropdown">
            
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
            
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="login.php">Login</a>
                    
                <div class="dropdown-divider"></div>  <!-- divider between menu items -->
                
                    <a class="dropdown-item" href="registerAccount.php">Register</a>
                    
                    <a class="dropdown-item" href="insertArticle.php">Insert</a>
            </div>
        </li>    
    </ul>
</div>
</nav>


<!--if(!isset($_SESSION['LoggedIn']))
{

echo ' <nav class="navbar navbar-expand-lg navbar-light bg-light"> ';
    echo ' <a class="navbar-brand" href="#">Navigation</a> ';
    echo ' <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> ';
        echo ' <span class="navbar-toggler-icon"></span> ';
    echo ' </button> ';


    echo '<div class="collapse navbar-collapse" id="navbarSupportedContent"> ';

        echo ' <ul class="navbar-nav mr-auto"> ';

            echo ' <li class="nav-item active"> ';
                echo ' <a class="nav-link" href="index.php">Articles <span class="sr-only">(current)</span></a> ';
            echo ' </li> ';

            echo ' <li class="nav-item"> ';
                echo ' <a class="nav-link" href="critiqueMenu.php">Critiques</a> ';
            echo ' </li> ';

            echo ' <li class="nav-item dropdown"> ';

                echo ' <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a> ';

                echo ' <div class="dropdown-menu" aria-labelledby="navbarDropdown"> ';
                    echo ' <a class="dropdown-item" href="login.php">Login</a> ';

                echo ' <div class="dropdown-divider"></div>   divider between menu items  ';

                    echo ' <a class="dropdown-item" href="registerAccount.php">Register</a> ';
                echo ' </div> ';
            echo ' </li> ';
        echo ' </ul> ';
    echo '</div> ';
echo '</nav> ';

}
elseif ($_SESSION['LoggedIn'])
{
    
}-->