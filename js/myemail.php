<?php

$fnameB = $_POST["fname"];
$emailB = $_POST["email"];
$lnameB = $_POST["lname"]

?>
<!DOCTYPE html>

<html>
    <body>
        Welcome <?php echo $fnameB; ?>&nbsp;<?php echo $lnameB; ?><br>
        We will Send More Information to This Email-Address: <?php echo $emailB; ?>
    </body>
</html>