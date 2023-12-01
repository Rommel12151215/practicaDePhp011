<?php
$date = new DateTime();

echo "La fecha actual es: " . $date->format('Y-m-d');

$date->modify('+1 day');
echo "<br>La fecha después de un día será: " . $date->format('Y-m-d');
?>
