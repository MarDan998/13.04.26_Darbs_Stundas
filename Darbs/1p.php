<?php

$notes = [];

function addNote(&$notes) {
$title = readline("Piezimes nosaukums: ");
$category = readline("Piezimes kategorija: ");
$description = readline("Piezimes apraksts: ");

$notes[] = [
    'title' => $title,
    'category' => $category,
    'description' => $description
];
echo "Vai velaties pievienot vel vienu piezimi? (j/n): ";
$answer = readline();
if (strtolower($answer) === 'j') {
    addNote($notes);
}
}
function showNotes($notes) {
    echo "\nPiezimes:\n";
    foreach ($notes as $note) {
        echo "Nosaukums:";
        $note["title"] . "\n";
        $note["category"] . "\n";
        $note["description"] . "\n";
        echo "-------------------\n";
    }
}
echo "piezimju sistema\n";
addNote($notes);
showNotes($notes);

?>