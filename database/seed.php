<?php

$config = require __DIR__ . '/../config/database.php';

try {
    // MySQLi connection
    $mysqli = new mysqli($config['host'], $config['user'], $config['password'], $config['dbname']);

    // Check for connection errors
    if ($mysqli->connect_error) {
        die("❌ DB Connection Error: " . $mysqli->connect_error);
    }

    // Loop through seed files and execute them
    foreach (glob(__DIR__ . '/seeds/*.php') as $file) {
        require $file;
    }

    echo "✅ Seeding complete!\n";

} catch (Exception $e) {
    die("❌ Error: " . $e->getMessage());
}