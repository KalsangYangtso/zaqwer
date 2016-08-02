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
            $output = 'Unable to connect to the Database Server.';
            include'output.html.php';
            exit();
        }
        $output = 'Database connection established.';
        include'output.html.php';
        
        $sql = 'CREATE TABLE CUSTOMER
(
  CID INT NOT NULL,
  CFName varchar(25) NOT NULL,
  CLName varchar(25) NOT NULL,
  CUserName varchar(25) NOT NULL,
  CPassword varchar(25) NOT NULL,
  CBBuildingNo char(25) NOT NULL,
CBAptNo char(15) NOT NULL,
CBStreetAvenue varchar(25) NOT NULL,
CBCity varchar(25) NOT NULL,
CBState varchar(25) NOT NULL,
CBZipcode numeric (15) NOT NULL,
CSBuildingNo char(25) NOT NULL,
CSAptNo char(15) NOT NULL,
CSStreetAvenue varchar(25) NOT NULL,
CSCity varchar(25) NOT NULL,
CSState varchar(25) NOT NULL,
CSZipcode numeric (15) NOT NULL,
  
  PRIMARY KEY (CID),
  UNIQUE (CUserName)
) DEFAULT CHARACTER SET utf8';
        if(!mysqli_query($link, $sql))
        {
            $output ='Error creating Customer table'.mysqli_error($link);
            include 'output.html.php';
            exit();
        }
        
        $output = 'customer table successfully created.';
        include 'output.html.php';
        ?>
    </body>
</html>