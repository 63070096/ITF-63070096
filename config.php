<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-63070096.mysql.database.azure.com', 'it63070096@itf-63070096', 'DTSquj72', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
