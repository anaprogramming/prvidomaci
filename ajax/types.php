<?php

$types[] = 'Teretana';
$types[] = 'Grupni trening-teretana-sauna';
$types[] = 'Vođeni treninzi';
$types[] = 'Aerobik';
$types[] = 'Pump';
$types[] = 'Personalni treninzi';
$types[] = 'Zumba';
$types[] = 'Glute&Core';
$types[] = 'Fitness';
$types[] = 'Masaža';
$types[] = 'Boks';


$query = $_REQUEST['query'];
$suggestion = "";  // responseText

if ($query !== "") {
    $query = strtolower($query);
    $length = strlen($query);

    foreach ($types as $type) {
        if (stristr($query, substr($type, 0, $length))) {
            if ($suggestion == "") {
                $suggestion = $type;
            } else {
                $suggestion .= ", $type";
            }
        }
    }
}
if ($suggestion == "") {
    echo 'No suggestions';
} else {
    echo $suggestion;
}
