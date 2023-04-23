<?php

$cities[] = 'Beograd';
$cities[] = 'Novi Sad';
$cities[] = 'Užice';
$cities[] = 'Kraljevo';
$cities[] = 'Kruševac';
$cities[] = 'Valjevo';
$cities[] = 'Subotica';
$cities[] = 'Leskovac';
$cities[] = 'Niš';


$query = $_REQUEST['query'];
$suggestion = "";  // responseText

if ($query !== "") {
    $query = strtolower($query);
    $length = strlen($query);

    foreach ($cities as $city) {
        if (stristr($query, substr($city, 0, $length))) {
            if ($suggestion == "") {
                $suggestion = $city;
            } else {
                $suggestion .= ", $city";
            }
        }
    }
}
if ($suggestion == "") {
    echo 'No suggestions';
} else {
    echo $suggestion;
}