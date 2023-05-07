<?php
  session_start();
  unset($_SESSION['login_status']);
  unset($_SESSION['login_email']);
  header("location:index.php");
?>