<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     
        <h4>Registration confirmed</h4> 
       
<?php
include ('script.php');
if (isset($_POST['formsubmitted'])) {
    $error = array(); 
    if (empty($_POST['username'])) { 
        $error[] = 'Please Enter a name '; 
    } else {
        $username = $_POST['username']; 
    }

    if (empty($_POST['e-mail'])) {
        $error[] = 'Please Enter your Email ';
    } else {

        if (filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL)) {
            //for email validation (refer: http://us.php.net/manual/en/function.filter-var.php)

            $email = $_POST['e-mail'];
        } else {
            $error[] = 'Your EMail Address is invalid  ';
        }

    }

    if (empty($_POST['password'])) {
        $error[] = 'Please Enter Your Password ';
    } else {
        $password = $_POST['password'];
    }

    if (empty($error))

    { // If everything's OK...


        $query = "SELECT * FROM members  WHERE username ='$username'";
        $result = mysqli_query($dbc, $query); // here $dbc is your mysqli $link
        if (!$result) {
            echo ' Database Error Occured ';
        }

        if (mysqli_num_rows($result) == 0) { // IF no previous user is using this username.

            $query = "INSERT INTO `members` ( `username`, `email`, `password`) VALUES ( '$name', '$email', '$password')";

            $result = mysqli_query($dbc, $query);
            if (!$result) {
                echo 'Query Failed ';
            }

            if (mysqli_affected_rows($dbc) == 1) { //If the Insert Query was successfull.

                // Send an email

                // Finish the page:
                echo '<div class="success">Thank you for registering! A confirmation email has been sent to ' . $email . ' Please click on the Activation Link to Activate your account </div>';

            } else { // If it did not run OK.
                echo '<div class="errormsgbox">You could not be registered due to a system error. We apologize for any inconvenience.</div>';
            }

        } else { // The username is not available.
            echo '<div class="errormsgbox" >That username has already been registered.
</div>';
        }

    } else { //If the "error" array contains error msg , display them.... e.g....

        echo '<div class="errormsgbox"> <ul>';
        foreach ($error as $key => $values) {

            echo '  <li>' . $values . '</li>';

        }
        echo '</ul></div>';

    }

    mysqli_close($dbc); //Close the DB Connection

} // End of the main Submit conditional.

?>
        <?php
        $sql=mysql_query("SELECT FROM users (username, password, email) WHERE username=$fusername");
 if(mysql_num_rows($sql)>=1)
   {
    echo"name already exists";
   }
 else
    {
   //insert query goes here
    }
    ?>
    </body>
</html>