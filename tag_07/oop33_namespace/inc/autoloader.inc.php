<?php
function autoload_class($className)
{
    echo "<br>Gesuchte Klasse: " . $className . PHP_EOL;
    $datei = "inc/$className.php";
    
    $datei = str_replace('\\','/',$datei);


    if (file_exists($datei))
        require_once $datei;
    else
        "Datei nicht gefunden!";
}

function autoload_trait($traitName)
{
    echo "<br>Gesuchte Trait: " . $traitName . PHP_EOL;

    
    $datei = "inc/$traitName.php";

    $datei = str_replace('\\','/',$datei);

    if (file_exists($datei))
            require_once $datei;
    else
        "Datei nicht gefunden!";
}


spl_autoload_register('autoload_class',true,true);
spl_autoload_register('autoload_trait',true,true);
