<!-- Name: services.php
     Authors: Jacob Garland
     Site Name: http://webdesign4.georgianc.on.ca/~200230985/assignment1advweb/services.php
     Site Name: shows what services I offer.-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Services</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <?php
            $activepage = 'selected4';
            include('nav.php');
        ?>
    </head>
    <body>
        <div id="title">
            <h2>Services</h2>
        </div>
        <div id="servicecontent">
            <h3>What I offer.</h3>
            <h4>Web Development</h4>
            <ul>
                <li>Experienced in HTML.</li>
                <li>Experienced in CSS.</li>
                <li>Basic PHP Skills.</li>
            </ul>
            <h4>Programming</h4>
            <ul>
                <li>Experienced in C#.</li>
                <li>Experienced in Python.</li>
                <li>Basic Java Skills.</li>
                <li>Experienced in MySql.</li>                   
            </ul>
            <h4>Other</h4>
            <ul>
                <li>Capable of juggling two things.</li>
                <li>Can fix a bike chain</li>
                <li>2.2k World of Warcraft Rated Battleground rating.</li>
            </ul>
        </div>
        
    </body>
    <footer>
        <?php
            //include the navbar file on the page
            include('copyright.php');
        ?>
    </footer>
</html>
