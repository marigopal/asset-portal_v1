<?php

include "../../include/lib_page.php";
if (isset($_POST['remember'])) {
    $remember = $_POST['remember'];
}
if ($_POST['login_auth'] == 1) {
    $adServer = 'PacDC2.Pactronindia.org';
    $ldap = ldap_connect($adServer);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ldaprdn = $username . '@Pactronindia.org';
    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
    $bind = @ldap_bind($ldap, $ldaprdn, $password);

    if ($bind) {

        $filter = "(sAMAccountName=$username)";
        $result = ldap_search($ldap, "dc=Pactronindia,dc=org", $filter);
        ldap_sort($ldap, $result, "sn");
        $info = ldap_get_entries($ldap, $result);
        $username = strtoupper($username);
        local_loginchk();
    } else {
        echo "[{\"login\":\"0\"}]";
    }
} else if ($_POST['login_auth'] == 2) {
    local_loginchk();
} else {
    echo "[{\"login\":\"4\"}]";
}

function local_loginchk() {
    global $con;
    if ($_POST['login_auth'] == 1) {
        $check_user = "select count(*) as cntUser,users_uid,is_firstlogin,user_access from tbl_users WHERE username = '" . $_POST['username'] . "' AND `is_deleted` = '0' GROUP BY users_uid";
    } else if ($_POST['login_auth'] == 2) {
        $pass = encrypt($_POST['password']);
        $check_user = "select count(*) as cntUser,users_uid,is_firstlogin,user_access from tbl_users WHERE username = '" . $_POST['username'] . "' AND password = '" . $pass . "' AND `is_deleted` = '0' GROUP BY users_uid";
    }
    $result = mysqli_query($con, $check_user);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];
    $user = encrypt($row['users_uid']);
    $first_login = $row['is_firstlogin'];
    $_SESSION['useraccess'] = $row['user_access'];
    if ($count == '') {
        $count = 0;
        echo "[{\"login\":\"3\",\"user\":\"" . $user . "\",\"isfirst_login\":\"" . $first_login . "\"}]";
    } else if ($count > 0) {
        if (isset($_POST['remember'])) {
            global $remember;
            if ($remember == 'on') {

                echo "[{\"login\":\"2\",\"user\":\"" . $user . "\",\"isfirst_login\":\"" . $first_login . "\"}]";
            }
        } else {
            echo "[{\"login\":\"1\",\"user\":\"" . $user . "\",\"isfirst_login\":\"" . $first_login . "\"}]";
        }
    }
}

?>