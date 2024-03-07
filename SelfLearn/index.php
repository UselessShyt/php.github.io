<!-- http://localhost/php.github.io/selflearn/index.php -->
<?php
$arrFiles = array();
$dirPath = "./";

// Method 3: Using opendir(), readdir(), and closedir()
if ($handle = opendir($dirPath)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != "index.php") {
            $fullPath = $dirPath . '/' . $entry;
            if (is_file($fullPath)) {
                echo '<a href="' . $fullPath . '">' . $entry . '</a><br><br>';
            } elseif (is_dir($fullPath)) {
                echo '<a href="' . $fullPath . '">' . $entry . '/</a><br><br>';
            }
        }
    }
    closedir($handle);
} else {
    echo "Failed to open directory.";
}
?>