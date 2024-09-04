<?php
$conn=mysqli_connect('localhost','root','','kantortelkom');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>