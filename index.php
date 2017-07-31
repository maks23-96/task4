<?php 
include('config.php');
include('libs/Sql.php');
$db = new MySql();
$db->select('`key`')->from('`my_test`')->where("data='data'")->exec();
//$db->delete('')->from('`my_test`')->where("data='data2'")->exec();
include('templates/index.php');
?>
