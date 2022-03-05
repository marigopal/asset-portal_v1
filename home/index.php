<?php

session_start();
if( $_SESSION['useraccess'] == 1){
header("Location: ../dashboard/");}else if( $_SESSION['useraccess'] == 2)
{
	header("Location: ../dashboard_users/");
}
?>