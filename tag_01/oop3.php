<?php

$vornamen = [];
$vornamen[0] = "Jens";
$vornamen[1] = "Hans";
$vornamen[2] = "Otto";
$vornamen[3] = "Tim";

$nachnamen = [];
$nachnamen[0] = "Simon";
$nachnamen[1] = "Trump";
$nachnamen[2] = "Lessmann";
$nachnamen[3] = "Müller";

?>
<h1>Namen</h1>
<ul>
    <?php

    foreach ($vornamen as $key => $vorname) { ?>
        <li><?= $vorname ?> <?= $nachnamen[$key] ?></li>
    <?php }
    ?>

</ul>