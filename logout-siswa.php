<?php
session_start();
session_destroy();
header("Location: siswa-login.html");
exit();
?>
