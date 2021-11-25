<?php 
require_once 'include/initialize.php';
// Four steps to closing a session
// (i.e. logging out)

// 1. Find the session
@session_start();

 // $sql="INSERT INTO `tbllogs` (`USERID`,USERNAME, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
 //          VALUES (".$_SESSION['USERID'].",'".$_SESSION['FULLNAME']."','".date('Y-m-d H:i:s')."','".$_SESSION['UROLE']."','Logged out')";
 //          mysql_query($sql) or die(mysql_error());

// 2. Unset all the session variables
unset($_SESSION['APPLICANTID']);
unset($_SESSION['USERNAME']);    
// 4. Destroy the session
// session_destroy();
redirect(web_root."index.php");
?>