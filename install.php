<?php
$userip = $_SERVER['REMOTE_ADDR'];
$validconfigs = array_diff(scandir("./systemconfigs-enabled"), array('..', '.'));
if (in_array($userip, $validconfigs)) {
echo "# config for ".$userip."\n";
include("./systemconfigs-enabled/$userip");
}
else
{
echo "echo Error no config for ".$userip."\n";
echo 'read -p "Press [Enter] to quit, you will have to complete install by hand" ';
}
?>

