<html>
<head>
  <title>PHP Test</title>
</head>
<body>
<h1>Test2: Check of the environmental variables of Docker</h1>
<?php
 $db_name = getenv('DB_NAME');
 $db_port = getenv('DB_PORT');
 $db_tcp  = getenv('DB_PORT_3306_TCP');
 $db_tcp_addr = getenv('DB_PORT_3306_TCP_ADDR');
 $db_tcp_port = getenv('DB_PORT_3306_TCP_PORT');
 $db_tcp_prot = getenv('DB_PORT_3306_TCP_PROTO');
 $as_addr = getenv('SERVER_ADDR');

 print "<p>IP Address = $as_addr</p>";
 print "<p>DB_NAME = $db_name</p>";
 print "<p>DB_PORT = $db_port</p>";
 print "<p>DB_PORT_3306_TCP = $db_tcp</p>";
 print "<p>DB_PORT_3306_TCP_ADDR = $db_tcp_addr</p>";
 print "<p>DB_PORT_3306_TCP_PORT = $db_tcp_port</p>";
 print "<p>DB_PORT_3306_TCP_PROTO = $db_tcp_prot</p>";

?>
</body>
</html>
