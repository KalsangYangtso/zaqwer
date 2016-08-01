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
        $username = $_REQUEST['username'];
        
        if($username == 'Kalsang')
        {
            echo 'Welcome, oh glorious leader!';
        }
 else {
       
        echo 'Welcome to our website, '  .
      
          htmlspecialchars($username, ENT_QUOTES, 'UTF-8').'!';
 }
        ?>
    </body>
</html>
