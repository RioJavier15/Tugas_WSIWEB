<?php
//mengaktifkan session php
session_start();

//mengahpus semua session
session_destroy();

//mengalihkan halaman ke halaman login
header("location:index.php");
?>
