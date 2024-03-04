<?php
$arrFiles = array();
$dirPath = "./";

// Method 3: Using opendir(), readdir(), and closedir()
if ($handle = opendir($dirPath)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != "index.php" && is_file($dirPath . '/' . $entry)) {
            echo '<a href="' . $dirPath . '/' . $entry . '">' . $entry . '</a><br>';
        }
    }
    closedir($handle);
} else {
    echo "Failed to open directory.";
}
?>
