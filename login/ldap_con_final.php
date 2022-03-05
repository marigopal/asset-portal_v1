<?php

if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] != '' & $_POST['password'] != '') {
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
        echo $username;exit();
        $_SESSION['user'] = $username;
        }
}
?>
    <form action="" method="POST">
        <label for="username">Username: </label><input id="username" type="text" name="username" /> 
        <label for="password">Password: </label><input id="password" type="password" name="password" />        <input type="submit" name="submit" value="Submit" />
    </form>
