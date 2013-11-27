<!-- Name: projects.php
     Authors: Jacob Garland
     Site Name: http://webdesign4.georgianc.on.ca/~200230985/assignment1advweb/project.php
     Site Name: project page for current projects.-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Projects</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <?php
            $activepage = 'selected3';
            include('nav.php');
            
        ?>
    </head>
    <body>
        <div id="title">
        <h2>Projects</h2>
        </div>
        <div id="projects">
        <h3>Here are some of my fine products.</h3>
        <p>A pet rock advertisement web site.</p>
        <a href="http://webdesign4.georgianc.on.ca/~200230985/PetRocks/index.html">
            <img src="images/PetRock1.jpg" style = "width:150px; height:150px;"></a>
        </div>
    </body>
    <footer>
        <?php
            //include the navbar file on the page
            include('copyright.php');
        ?>
    </footer>
</html>
