<?php
//echo sys_get_temp_dir();
//echo phpinfo();

// _session_user_name
// _session_user_role = 1 // unregistered

session_start();
echo 'Welcome to page #1';

$_SESSION['favcolor'] = 'green';
$_SESSION['c'] = isset($_SESSION['c'])?$_SESSION['c']+1:0;

print_r($_SESSION);

?>