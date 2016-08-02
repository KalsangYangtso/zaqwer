<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
    $link = mysqli_connect('phpmyadmin','kay','dtycts16');
  
            if(!$link)
            {
                $output='Unable to connect to the Database Server.';
                 include'output.html.php'; 
                     exit();
            }
    if(!mysqli_set_charset($link, 'utf8'))
    {
        $output='Unable to set database connection encoding.';
        include'output.html.php'; 
        exit();
        
    }
    if(!mysqli_select_db($link, 'kay'))
    {
        $output='Unable to connect to the Database Server.';
        include'output.html.php'; 
        exit();
        
    }
  $output='Database connection established.';
        include'output.html.php'; 
         ?>
    </body>
</html>