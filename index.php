<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$lucie = new Warrior('Lucie');
$anto = new Mage('Anto');
$jon = new Archer('Jon');

// Characters are attacking while both are alive
while ($lucie->isAlive() && $anto->isAlive()) {
    // First Character is attacking the 2nd
    echo $lucie->action($anto);
    if(!$anto->isAlive()) {
        echo "<br>";
        echo "$anto->pseudo est KO";
    }
    echo '<br>';
    if ($anto->isAlive()) {
        // Second Character is attacking the first
        echo $anto->action($lucie);
        if(!$lucie->isAlive()) {
            echo '<br>';
            echo "$lucie->pseudo est KO.";
        }
    } echo "<br>";

}

