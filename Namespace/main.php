<?php 

require_once 'Connection.php';

use App\Database\Connection;

$db = new Connection();
echo $db -> connect();

?>