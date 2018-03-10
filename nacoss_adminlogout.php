<?php
session_start();
if(session_destroy()){
header("location:".'nacoss_adminlogin.php');
}
?>