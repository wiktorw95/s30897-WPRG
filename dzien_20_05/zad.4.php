<?php
$filename = 'linki.txt';
if (!file_exists($filename)) {
    file_put_contents($filename, "http://example.com/;Przykładowa strona");
} else {
    $lines = file($filename);
    foreach ($lines as $line) {
        list($url, $description) = explode(';', $line);
        echo "<li><a href=\"$url\">$description</a></li>";
    }
}
?>