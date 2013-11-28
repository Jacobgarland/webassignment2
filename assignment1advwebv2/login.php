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
                require_once('connectvars.php');                 
                $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);                
                $url = 'http://webdesign4.georgianc.on.ca/~200230985/assignment1advweb/login.php';           
 

                
                if($_SERVER['REQUEST_METHOD'] != 'POST')
                {
                    echo '<form method="post" action="">
                            Username: <input type="text" name="username" /></br></br>
                            Password: <input type="password" name="password"></br></br>
                            <input type="submit" value="Sign In" />
                         </form>';
                }
                else
                {
                
                 if(!isset($_POST['username']))
                 {
                    echo 'Please enter a username.';
                 }

                 if(!isset($_POST['password']))
                 {
                    echo ' Please enter a password.';              
                   
                 }
                 else
                 {

                
                    $query = "SELECT 
                        username,
                        password
                        FROM admin
			WHERE username = '" . mysqli_real_escape_string($dbc, ($_POST['username'])) . "'
			AND
			password = '" . ($_POST['password']) . "'";
                
                	$result = mysqli_query($dbc, $query);
			if(!$result)
			{
				//something went wrong, display the error
				echo 'Error logging in<a href="login.php" style="color:green"> please try again. </a>';		
			}
			else
			{
				
				if(mysqli_num_rows($result) == 0)
				{
					echo 'You have entered an incorrect username or password <a href="login.php" style="color:green"> please try again. </a>';                              
				}
				else
				{
					
					while($row = mysqli_fetch_assoc($result))
					{
                                                header("Location: contacts.php");
					}				
                                        
                                }
                        }
                 }
                }
                    
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

