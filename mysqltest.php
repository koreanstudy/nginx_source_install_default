<?php
echo "MySql connect test<br>";
$db = mysqli_connect("localhost", "root", "\$MYSQL_P", "mysql");
if($db){echo "connect success.<br>";}
else{echo "connect fail.<br>";}
$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>
