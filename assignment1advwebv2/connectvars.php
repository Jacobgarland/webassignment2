<?php
    // Define database connection constants
    define('DB_HOST', 'webdesign4.georgianc.on.ca');
    define('DB_USER', 'db200230985');
    define('DB_PASSWORD', '65749');
    define('DB_NAME', 'db200230985');
    mysql_select_db('admin');   
    
    if(!mysql_connect(DB_HOST, DB_USER, DB_PASSWORD))
        {
                exit('Error: could not establish database connection');
        }
        if(!mysql_select_db(DB_NAME))
        {
                exit('Error: could not select the database');
        }
        ?>
    
?>


