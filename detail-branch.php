<?php
session_start();
$branch_name = $_SESSION['branch_name'];
?>

<html>
    <p><?php echo 'Selamat datang di '.$branch_name; ?></p>
</html>