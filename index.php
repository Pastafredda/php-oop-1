<?php
class Genre{
    public $name;
    public function __construct($name){
        $this -> name = $name;
    }

}
class Movie {
    public $title;
    public $director;
    public array $genres;

    public function __construct($title,$director, Genre ...$genres){
        $this -> title = $title;
        $this -> director = $director;
        $this -> genres = $genres;
    }

    public function getFullmovie(){
        $movie = $this -> title . " " . $this -> director;
        foreach($this -> genres as $genre){
            $movie .=  " " .$genre -> name;
        }
        return $movie;
    }

}

$genre1 = new Genre("Crime/Drama");
$genre2 = new Genre("Mystery");


$movie1 = new Movie("Carlito's Way", "Brian De Palma" , $genre1);
$movie2 = new Movie ("Zodiac", "David Fincher",  $genre2);
echo $movie1 -> getFullmovie();

echo "<br />";
echo $movie2-> getFullmovie();
