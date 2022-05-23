#Download SetB2movie1.php first and then this file :)
<?php
                $doc=simplexml_load_file("movie.xml");
		echo "Movie info";
                foreach($doc->category as $movie)
                {
                                echo "<br>"."Category : ".$movie->category."<br>";
				echo "<br>"."Movie no : ".$movie->mno."<br>";
				echo "<br>"."Movie name : ".$movie->moviename."<br>";
				echo "<br>"."Actor name : ".$movie->actorname."<br>";	
				echo "<br>"."Year : ".$movie->year."<br>";		
                }
                
?>
