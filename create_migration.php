<?php

// Get the migration name from the command-line argument
if ($argc < 2) {
    echo "Usage: php create_migration.php <migration_name>\n";
    exit(1);
}

$migrationName = $argv[1];  // Migration name passed as argument

// Define the directory for migrations
$migrationsDir = __DIR__ . '/database/migrate';

// Ensure the migrations directory exists
if (!is_dir($migrationsDir)) {
    mkdir($migrationsDir, 0777, true);
}

// Create a timestamp with full date and time (YYYYMMDDHHMMSS format)
$timestamp = date('YmdHis');  // Format: 20250410093758
$filename = $migrationsDir . '/' . $timestamp . '_' . $migrationName . '.php';

// Create a basic template for the migration file
$migrationTemplate = "<?php

// This migration was created on {$timestamp}

\$mysqli = new mysqli('localhost', 'root', 'qwer4321', 'oasd');

// Check for connection errors
if (\$mysqli->connect_error) {
    die('❌ DB Connection Error: ' . \$mysqli->connect_error);
}

// Write your migration logic here, for example:

// \$query = 'CREATE TABLE IF NOT EXISTS ...';
// if (\$mysqli->query(\$query) === TRUE) {
//     echo 'Migration applied successfully.';
// } else {
//     echo 'Error: ' . \$mysqli->error;
// }

?>";

// Write the template to the file
file_put_contents($filename, $migrationTemplate);

echo "✅ Migration file created: $filename\n";
