<?php
    $output = shell_exec("/etc/init.d/STORJ.sh is-authorized 2>&1");
    if ( $output == "ok"){
    header("Location: dashboard.php");
    } else {
    header("Location: authorize.php");
    }
    die();
?>
