<?php
$doc = new DOMDocument("1.0", "UTF-8");
$doc->formatOutput = true;
$movieinfo= $doc->createElement("MovieInfo");
$doc->appendChild($movieinfo);


$mno= $doc->createElement("mno","1");
$movieinfo->appendChild($mno);
$mname= $doc->createElement("moviename","Raven");
$movieinfo->appendChild($mname);
$aname= $doc->createElement("actorname","Kelly");
$movieinfo->appendChild($aname);
$year= $doc->createElement("year","2010");
$movieinfo->appendChild($year);

//$movieinfo->appendChild($movie);
$mno= $doc->createElement("mno","2");
$movieinfo->appendChild($mno);
$mname= $doc->createElement("moviename","Impossible");
$movieinfo->appendChild($mname);
$aname= $doc->createElement("actorname","Bradd pitt");
$movieinfo->appendChild($aname);
$year= $doc->createElement("year","2016");
$movieinfo->appendChild($year);

//$movieinfo->appendChild($movie);
$mno= $doc->createElement("mno","3");
$movieinfo->appendChild($mno);
$mname= $doc->createElement("moviename","Jersey");
$movieinfo->appendChild($mname);
$aname= $doc->createElement("actorname","Sahid");
$movieinfo->appendChild($aname);
$year= $doc->createElement("year","2015");
$movieinfo->appendChild($year);

//$movieinfo->appendChild($movie);
$mno= $doc->createElement("mno","4");
$movieinfo->appendChild($mno);
$mname= $doc->createElement("moviename","Run");
$movieinfo->appendChild($mname);
$aname= $doc->createElement("actorname","Ryan");
$movieinfo->appendChild($aname);
$year= $doc->createElement("year","2010");
$movieinfo->appendChild($year);

//$movieinfo->appendChild($movie);
$mno= $doc->createElement("mno","5");
$movieinfo->appendChild($mno);
$mname= $doc->createElement("moviename","Jumanji");
$movieinfo->appendChild($mname);
$aname= $doc->createElement("actorname","Rock");
$movieinfo->appendChild($aname);
$year= $doc->createElement("year","2010");
$movieinfo->appendChild($year);
$doc->save("movie1.xml");
echo "movie1.xml created<h4>";
?>

