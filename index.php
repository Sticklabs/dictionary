<?php
// Define the file that will store the visitor count
$countFile = 'count.txt';

// Check if the file exists
if (file_exists($countFile)) {
    // Read the current count from the file
    $count = file_get_contents($countFile);
    $count = intval($count) + 1;
} else {
    // If the file doesn't exist, start the count at 1
    $count = 1;
}

// Write the new count back to the file
file_put_contents($countFile, $count);

// Display the current visitor count
echo "<h1>Visitor Count: $count</h1>";
?>
