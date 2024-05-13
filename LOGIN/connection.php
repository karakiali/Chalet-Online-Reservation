<?php

$hostname = "localhost";
$user = "id20280008_chalets";
$pw = "=CH+v)n*RL7z?Z8#";
$db = "id20280008_chalet";
$con = mysqli_connect($hostname, $user, $pw, $db);
if (mysqli_connect_errno()) {
    echo "error in connectoin";
}
?>
