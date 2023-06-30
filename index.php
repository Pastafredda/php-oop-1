<?php
class Movie {
    public $title;
    public $director;
    public $plot;

    public function __construct($title,$director,$plot){
        $this -> title = $title;
        $this -> director = $director;
        $this -> plot = $plot;
    }

    public function getFullmovie(){
        return  $this -> title . " " . $this -> director . " " . $this -> plot;
    }
}


$movie1 = new Movie("Carlito's Way", "Brian De Palma", "Carlito Brigante chooses to lead a quiet life after being released from prison.");
var_dump($movie1);