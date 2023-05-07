<?php
include 'db_connection.php';

  $Id = $_GET['id'];

  $FlatConn -> query("DELETE FROM `mission_vision_tbl` WHERE `id` = '".$Id."'");
   header("location:mission_vision.php");
?>