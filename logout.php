<?php
session_start();
session_destroy();
header("Location: admin-login.html");
exit();
?>
