<?php 
include('config.php');
include('libs/Sql.php');
$db = new Sql();
$db->select('key')->from('MY_TEST')->where("key='USER'")->exec();

include('templates/index.php');
?>
