<?php
function autoload_class($className)
{
    echo "<br>Gesuchte Klasse: " . $className . PHP_EOL;
    $datei = "inc/classes/$className.php";
    if (file_exists($datei))
        require_once $datei;

}

function autoload_trait($traitName)
{
    echo "<br>Gesuchte Trait: " . $traitName . PHP_EOL;
    $datei = "inc/traits/$traitName.php";
    if (file_exists($datei))
        require_once $datei;

}


spl_autoload_register('autoload_class',true,true);
spl_autoload_register('autoload_trait',true,true);
