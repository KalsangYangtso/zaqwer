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
      <form action="welcome5.php"  method="get">
   <fieldset>
    <legend>Login</legend>
 UserName:<br>
  <input type="text" name="username">
  <br>
  Password:<br>
  <input type="text" name="password">
  <br>
        <?php
        $link = mysqli_connect('localhost', 'kay', 'dtycts16');

        if (!$link) {
            $output = 'Unable to connect to the Database Server.';
            include'output.html.php';
            exit();
        }
        if (!mysqli_set_charset($link, 'utf8')) {
            $output = 'Unable to set database connection encoding.';
            include'output.html.php';
            exit();
        }
        if (!mysqli_select_db($link, 'kay')) {
        
            include'output.html.php';
            exit();
        }
       
        include'output.html.php';
        
       
        if(!mysqli_query($link, $sql))
        {
           
            include 'output.html.php';
            exit();
        }
        
    
        include 'output.html.php';
        ?>
 <input type="submit" value="Login">

   </fieldset>
</form>
        
       
    </body>
</html>