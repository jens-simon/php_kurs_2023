<?php

// einzelne Variablen
$vorname1 = "Jens";
$vorname2 = "Hans";

// kein iterieren , kein Schleifen
?>
<h1>Namen</h1>
<ul>
    <li><?= $vorname1 ?></li>
    <li><?= $vorname2 ?></li>
</ul>

<?php
echo "<h1>Namen</h1>";

echo "<ul>";
echo "<li>" . $vorname1 . "</li>";
echo "<li>" . $vorname2 . "</li>";
echo "</ul>";
