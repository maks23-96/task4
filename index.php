<?php 
include('config.php');
include('libs/Sql.php');
$db = new Sql();
$db->select('key')->from('MY_TEST')->where(key=='key')->exec();

include('templates/index.php');
?>
