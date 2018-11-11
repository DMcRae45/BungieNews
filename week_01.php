<!DOCTYPE html>
<?php
/* 

    Description: 

    Author: David McRae
    Date: 15-Sep-2018

 */
?>
<html>
<head>
    <?php require 'Includes/header.php'; ?>
</head>
<body>
    
    <div class="container text-center">
        <div class="page-header">
            <h1>Week 01 Critique</h1>
        </div>
        
        
        <div class="content text-center">
            <h1>Bootstap Vs Foundation </h1>
            <p>
            At the heart of HTML5 frameworks there are two very prominent choices.
            Bootstrap and Foundation.

            This will be a comparison on these two options and how each supports a responsive web design.

            Both are a great option for responsive websites but depending on what you want as an outcome will have a heavy impact on which one you use, 
            </p>


            <h4>Bootstrap</h4></br>
            <p>
            Pro’s</br>
            - Knowledge of CSS not required.</br>
            - Supports rapid development projects.</br>
            - Back end developers don’t need to worry too much about the look of the front end as bootstrap deals with all the layout.</br>
            - Good documentation to help user understand things if necessary.</br>
            - Wide variety of templates.</br>
            - Uses fixed and fluid patterns.</br>
            - Excellent mobile support.</br>
            Cons</br>
            - Not as customisable as foundation.
            - Code can be quite “heavy”
            </p>

            <h4>Foundation</h4></br>
            <p>
            Pro’s</br>
            - Offers a more customisable framework than bootstrap</br>
            - Supports rapid development projects.</br>
            - High end companies using this framework (Amazon, eBay)</br>
            - Robust grid system.</br>
            Con’s</br>
            - Can be complex when customising.</br>
            - Atleast some knowledge of CSS is Required</br>
            - Does not support inline forms.</br>
            </p>

            <h1>Bootstrap Menu's</h1></br>
            <p>
            The Framework I have chosen to use is Bootstraps as I will be focusing more on the functionality of this website rather than the look of it.
            Menu systems are a tricky thing to get right as in a perfect work a menu should use hierarchical un-numbered lists.
            Bootstrap does this very well as the incorporate menu systems with dropdown options inside other dropdown menus.
            These un-numbered lists look very neat are a great responsive way to navigate around any webpage.
            </p>

            <h1>5 Features of Boostrap</h1>
            <p>
            Bootstrap has many useful features, but I will be talking about 5 of what I believe to be very useful and intuitive features that bootstrap supports.
            1- Inline forms - A very simple but very effective use of this framework is to keep everything neat and tidy, forms are a great way to display the functionality of a website effectively.

            2- Glyph icons – Bootstrap includes over 250 glyphs to be used around the website, these Glyphs can be used in many ways simply to replace some text or can be used as buttons.

            3- Sizing – Bootstrap implements a very easy way to change the size of many components they use in this framework, many options such as buttons can be resized easily.

            4- Jumbotron – This is a very useful feature for displaying key components of the webpage. It can be used for any points of interest or important information. This feature “Blows up” content and extends the entire viewport which really helps showcase specific content.

            5- Thumbnail – This feature I believe is very useful, it allows any images on the webpage to be displayed at all the same size and keeps these images responsive.
            </p>
        </div>
    </div>   
               
    
    
    
    <footer>
        <?php include 'Includes/footer.php'; ?>
    </footer>

    <?php include 'Includes/bootstrapScript.php'; ?>
</body>
</html>