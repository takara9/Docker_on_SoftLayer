<html>
<head><title>PHP TEST2</title></head>
<body>

<?php
$db_tcp_addr = getenv('DB_PORT_3306_TCP_ADDR');
$db_tcp_port = getenv('DB_PORT_3306_TCP_PORT');
$db_server = "$db_tcp_addr:$db_tcp_port";

// Connect database
$link = mysql_connect($db_server, 'root', 'password');
if (!$link) {
   die('Connecting failed'.mysql_error());
}


// Select database
$db_selected = mysql_select_db('sample', $link);
if (!$db_selected) {
    die ('Can\'t use sample : '.mysql_error());
}

$result = mysql_query('SELECT id,title,price,auth_name FROM vbooks');
if (!$result) {
    die('SQL Failed'.mysql_error());
}
?>
<H1>BOOK LIST</H1>
<table border=1>
<tr bgcolor="#00cccc">
<th>ID</th><th>TITLE</th><th>PRICE</th><th>AUTHOR</th>
</tr>
<?php
while ($row = mysql_fetch_assoc($result)) {
   print('<tr bgcolor="#ffffcc">');
   print('<td>'.$row['id'].'</td>');
   print('<td>'.$row['title'].'</td>');
   print('<td>'.$row['price'].'</td>');
   print('<td>'.$row['auth_name'].'</td>');
   print('</tr>');
}
?>
</table>

<?php
// Close connection
$close_flag = mysql_close($link);
?>
</body>
</html>
