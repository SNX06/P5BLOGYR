<?php
namespace index;
use controller;

define('DS', DIRECTORY_SEPARATOR); 
define('ROOT', dirname(__FILE__).DS); 
session_start();
require_once'app/Autoloader.php';
\app\Autoloader::register();

if(isset($_GET['p']))
{
    //$content= controller\UserList::WatchUserList(); //TEST BDD USER
    $content= controller\UserList::test();
    var_dump($content);
    //require('indexView.php');
}
else
{
    $content = '<div><H2>AUCUNE DONNEE A CHARGER</H2></div>';
    require('indexView.php');
}
?>