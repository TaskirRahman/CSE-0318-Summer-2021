<?php

session_start();
unset($_session['choose.html']);
header("location:index.php");
?>