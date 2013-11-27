<!-- Name: about.php
     Authors: Jacob Garland
     Site Name: http://webdesign4.georgianc.on.ca/~200230985/assignment1advweb/about.php
     Site Name: About me page, picture of me, bio.-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>About Me</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <?php
            $activepage = 'selected2';
            include('nav.php');
            
        ?>
    </head>
    <body>
        <div id="title">
            <h2>About Me</h2>
        </div>
        
        <div id="aboutmecontent">
            <img src="images/selfie.jpg" style = "width:100px; height:150px;">        
            <p>
                Current Resume
            </p>
            <h3>A bit about me</h3>
            <p>My name is Jacob Garland. I was born in Barrie, Ontario.</p>
            <p>My hobbies include video games, drinking pop, and high volume drug use.</p>
            <p>I attend Georgian College in the COPR, computer programmer program.</p>
            <p>I also currently work at Georgian College as a Janitor.</p>
            
            
        </div>
    </body>
    <footer>
        <?php
            //include the navbar file on the page
            include('copyright.php');
        ?>
    </footer>
</html>
