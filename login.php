<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>This is a phishing simulation demo. No real data is stored.</h3>";
    header("Refresh:3; url=https://instagram.com");
    exit();
}
?>
