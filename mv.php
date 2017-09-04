<?php
if (!defined('SERVERNAME')) define('SERVERNAME', 'localhost');
    if (!defined('USERNAME')) define('USERNAME', 'root');
    if (!defined('PASSWORD')) define('PASSWORD', '');
    if (!defined('DBNAME')) define('DBNAME', 'cs1');

    $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, 'cs1');

?>