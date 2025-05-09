<?php
$counterFile = "counter.txt";

// If the file doesn't exist, create it
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

// Read current count
$count = (int)file_get_contents($counterFile);
$count++;

// Write updated count
file_put_contents($counterFile, $count);

// Return count
echo $count;
?>

