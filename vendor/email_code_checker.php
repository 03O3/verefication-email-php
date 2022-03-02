<?php

session_start();

$user_input = $_POST['veref_code'];

if($user_input == $_SESSION['code']['veref_code']){
    echo "Mail successfully activated!";
    unset($_SESSION['veref']);
} else {
    echo "Failed to activate mail";
}

?>

<!DOCTYPE html>
<html>
<body>

<br><a href="../">Go back</a>

</body>
</html>


