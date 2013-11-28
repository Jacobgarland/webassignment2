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
            <h2>Business Contacts</h2>
        </div>
        <div id ="usersdisplay"
            <?php
            require_once('connectvars.php');
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            
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
