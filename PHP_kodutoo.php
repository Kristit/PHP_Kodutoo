<?php

include('test.html');

$kassid = array(
    array('nimi'=>'Miisu', 'vanus'=>2,'karv'=>"musta-valge", 'omanik'=>"Kalju"),
    array('nimi'=>'Tom', 'vanus'=>3, 'karv'=>"kollane", 'omanik'=>"Vallu"),
    array('nimi'=>'Kiisu', 'vanus'=>1, 'karv'=>"must", 'omanik'=>"Kusti"),

);

echo $kassid['nimi'][0];


foreach($kassid as $kass) {

    include("test.html");
}


?>

