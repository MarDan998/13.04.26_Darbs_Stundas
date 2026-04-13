<?php

$notes = [];

while (true) {
    echo "Ievadi piezimes nosaukumu: ";
    
    $title = trim(fgets(STDIN));

    echo "Ievadi kategoriju: ";
    $category = trim(fgets(STDIN));

    echo "Ievadi aprkastku:";
    $description = trim(fgets(STDIN));

    $notes[] = [
        'title' => $title,
        'category' => $category,
        'description' => $description
    ];

    echo "Vai vēlaties pievienot vēl vienu piezīmi? (jā/nē): ";
    $answer = trim(fgets(STDIN));
    if ($answer !== 'jā') {
        break;

    }
}
echo "\n VISAS PIEZIMES \n";
foreach ($notes as $index => $note) {
    echo "Nosaukums:";
    $note['title'] . "\n";
    echo "Kategorija:";
    $note['category'] . "\n";
    echo "Apraksts:";
    $note['description'] . "\n";
    echo "-------------------------\n";
}