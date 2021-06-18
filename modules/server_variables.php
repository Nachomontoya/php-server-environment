<?php 
session_start();
?>

<code>

<h2>SERVER SUPERGLOBAL VAR</h2>
<?php

foreach ($_SERVER as $a => $b) {
    echo $a . ' - ' . $b . "<br />";
};

?>

<h2>SESSION SUPERGLOBAL VAR</h2>
<?php


$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['time'] = time();

foreach($_SESSION as $a => $b) {
    echo $a . ' - ' . $b . "<br />";
}
?>

</code>