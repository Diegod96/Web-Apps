

<html>
<body>

<?php
$string1 = $_POST["string1"];
$string2 = $_POST["string2"];
$dirty_password = $_POST["password"];

if(strpos($string1, $string2) !== false) {
    echo "Substring found with " . $string2;
} else{
    echo "No substring found with " . $string2;
}

$dirty_password = str_replace(' ', '-', $dirty_password);
$clean_password = preg_replace('/[^A-Za-z0-9\-]/', '', $dirty_password);
echo "<br>";
echo "Clean password: " .  $clean_password
?>




</body>
</html>