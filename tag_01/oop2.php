<?php

$vornamen = [];
$vornamen[0] ="Jens";
$vornamen[1] ="Hans";
$vornamen[2] ="Otto";
$vornamen[3] ="Tim";
?>
<h1>Namen</h1>
<ul>
<?php

foreach($vornamen as $vorname) { ?>
    <li><?= $vorname ?></li>
<?php }
?>

</ul>

