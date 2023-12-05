<?php
unset($_SESSION['userName']);
header('location: ../view/index.php;
refresh:1');
?>