<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<Movies></Movies>");

$item1 = $sxe->addChild('Movie');
$item1->addChild('MovieNo', 1);
$item1->addChild('MovieTitle','Uncharted');
$item1->addChild('ActorName', 'Tom Holland');
$item1->addChild('ReleaseYear', 2022);

$item2 = $sxe->addChild('Movie');
$item2->addChild('MovieNo', 2);
$item2->addChild('MovieTitle','	Jumanji');
$item2->addChild('ActorName', 'Rock');
$item2->addChild('ReleaseYear', 2022);

$item3 = $sxe->addChild('Movie');
$item3->addChild('MovieNo', 3);
$item3->addChild('MovieTitle','Hello World');
$item3->addChild('ActorName', 'Pranit');
$item3->addChild('ReleaseYear', 2035);

$item4 = $sxe->addChild('Movie');
$item4->addChild('MovieNo', 5);
$item4->addChild('MovieTitle','Deadpool');
$item4->addChild('ActorName', 'Ryan Renolds');
$item4->addChild('ReleaseYear', 2022);

$item5 = $sxe->addChild('Movie');
$item5->addChild('MovieNo', 5);
$item5->addChild('MovieTitle','Jolly LLB');
$item5->addChild('ActorName', 'Akshay kumar');
$item5->addChild('ReleaseYear', 2015);
$sxe->asXML('movie.xml');
echo "movie.xml created<h4>";
?>

