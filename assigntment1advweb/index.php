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
            $activepage = 'selected1';
            include('nav.php');
        ?>
    </head>
    <body>
        <div id="title">
            <h2>Welcome Statement</h2>
        </div>
        <div id ="homecontent">
            <h3>Web Development when only the best will do.</h3>
            <p>Our responsibility is to interactively synthesize paradigm-shift intellectual</p> 
            <p>capital, so that we may continue to continually restore progressive technology to</p> 
            <p>set us apart from the competition.</p>
            <form action="http://webdesign4.georgianc.on.ca/~200230985/assignment1advweb/projects.php">
                <input type="submit" value="See more">
            </form>
            <ul>
                <li><img src="images/image1.jpg" /></li>
                <li><img src="images/image2.jpg" /></li>
                <li><img src="images/image3.jpg" /></li>
                <li><img src="images/image4.jpg" /></li>
                <li><img src="images/image6.jpg" /></li>
            </ul>

        </div>
            <?php
                //include the navbar file on the page
                include('keepconnected.php');
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
