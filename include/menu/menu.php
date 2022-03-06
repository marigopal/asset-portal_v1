<?php

session_start();
include('../include/db_config.php');
//if ($_SESSION['useraccess'] == 1) {
//    include ('../include/menu/menu_it.php');
//} else if ($_SESSION['useraccess'] == 2) {
//    include ('../include/menu/menu_users.php');
//}
include ('../include/menu/menu_it.php');
?>