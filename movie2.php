<?php
                $doc=simplexml_load_file("movie.xml");
		echo "Movie info";
                foreach($doc->category as $movie)
                {
                                echo "<br>"."Category : ".$movie->category."<br>";
				echo "<br>"."Book no : ".$movie->mno."<br>";
				echo "<br>"."Book name : ".$movie->moviename."<br>";
				echo "<br>"."Author name : ".$movie->actorname."<br>";	
				echo "<br>"."Year : ".$movie->year."<br>";		
                }
                
?>
