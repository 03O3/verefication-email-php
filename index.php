<?php

session_start();


?>



<!DOCTYPE html>
<html>
<body>

<h1>Email Verefication</h1>


<?php

if($_SESSION['veref']){
    echo '<form action="vendor/email_code_checker.php" method="POST">
            <input type="text" id="veref_code" name="veref_code" placeholder="Your code"><br>
            <a href="vendor/reset.php">Reset code</a><br><br>
            <input type="submit" value="Submit">
          </form>';
} else {
    echo '<form action="vendor/sender.php" method="POST">
            <input type="email" id="email" name="email" placeholder="Your mail"><br><br>
            <input type="submit" value="Submit">
          </form>';
}

?>


</body>
</html>
