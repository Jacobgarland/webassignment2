<!-- Name: index.php
     Authors: Jacob Garland
     Site Name: http://webdesign4.georgianc.on.ca/~200230985/assignment1advweb/index.php
     Description: Home page for the website, includes nav bar, call to action button, other stuff.-->

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        
        <?php
        
            //include the navbar file on the page
            $activepage = 'selected7';
            include('nav.php');
        ?>
    </head>
    <body>
        <div id="title">
            <h2>Welcome Statement</h2>
        </div>
        <div id ="phplogin"
            <?php
            ?>
       </div>

    
    </body>
    <footer>
        <?php
            //
            include('copyright.php');
        ?>
    </footer>
</html>
