<?php
include('dbcon.php');
extract($_REQUEST);
unlink("files/".$filename);
$db->conn->exec("delete from upload where id='$del'");
header("Location:index.php");

echo 'tet sonar';

?>
