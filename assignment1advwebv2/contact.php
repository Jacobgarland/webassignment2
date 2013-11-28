<!-- Name: contact.php
     Authors: Jacob Garland
     Site Name: http://webdesign4.georgianc.on.ca/~200230985/assignment1advweb/contact.php
     Site Name: shows contact info.-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contact Me</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <?php
            $activepage = 'selected5';
            include('nav.php');            
        ?>
    </head>
    <body>
        <div id="title">
            <h2>Contact Me</h2>

        </div>
        <div id="contactcontent">
            <?php
                //include the navbar file on the page
                include('keepconnected.php');
            ?>
            <h3>
                Contact Me
            </h3>
            <p>E-Mail address: wolf8982@hotmail.com</p>
            <p>Work Address: One Georgian Drive, Barrie Ontario</p>
            <p>Phone Number: 705-770-0425</p>
        </div>
        
    </body>
    <footer>
        <?php
            //include the navbar file on the page
            include('copyright.php');
        ?>
    </footer>
</html>
