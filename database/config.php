<?php

// Database configuration, See PDO documentation for connection string: http://php.net/manual/en/pdo.construct.php for more information

$config['db']['pdo']['default'] = [
    'string'             => 'pgsql:host=localhost;dbname=',
    'username'           => '',
    'password'           => '',
    'charset'            => 'UTF8',
    'persistent'         => false,
    'wrap_column'        => '"', // ` - for mysql, " - for postgresql
    'fetch_mode_objects' => false,
    'debug'              => false
];

?>