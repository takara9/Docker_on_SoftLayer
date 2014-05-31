<html>
<head><title>PHP TEST</title></head>
<body>

<?php
$db_tcp_addr = getenv('DB_PORT_3306_TCP_ADDR');
$db_tcp_port = getenv('DB_PORT_3306_TCP_PORT');
$db_server = "$db_tcp_addr:$db_tcp_port";

// Connect database
print "MySQL Server = $db_server<br>";
$link = mysql_connect($db_server, 'root', 'password');
if (!$link) {
   die('Connecting failed'.mysql_error());
}
print "<p>Successfully Connected to MySQL server</p>";


// Select database
$db_selected = mysql_select_db('sample', $link);
if (!$db_selected) {
    die ('Can\'t use sample : ' . mysql_error());
}




// Close connection
$close_flag = mysql_close($link);
if ($close_flag){
   print "<p>Connection Close Successfully</p>";
}

?>
</body>
</html>
