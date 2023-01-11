<?php
function shrinkName($name)
{
    if ($name !== 'Möller')
        return strtolower($name);
 
    return $name;
}

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

<?php

$personen = [];
$personen[0]['vorname'] = "Jens";
$personen[0]['nachname'] = "Simon";

$personen[1]['vorname'] = "Hans";
$personen[1]['nachname'] = "Möller";


?>
<h1>Personen</h1>
<ul>
    <?php

    foreach ($personen as $person) { ?>
        <li>
            <?= strtolower($person['vorname']) ?> <?= strtolower($person['nachname']) ?>
        </li>
    <?php }
    ?>

</ul>

<h1>Personen</h1>
<ul>
    <?php

    foreach ($personen as $person) { ?>
        <li>
            <?= shrinkName($person['vorname']) ?> <?= shrinkName($person['nachname']) ?>
        </li>
    <?php }
    ?>

</ul>