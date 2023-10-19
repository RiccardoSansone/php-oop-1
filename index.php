
<?php

    class Movie {

        public $title;
        public $genre;
        public $year;
        public $scare = false;

        public function __construct($title, $genre, $year) {
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
            $this->checkScare();
        }

        public function checkScare() {
            if ($this->genre === 'Horror') {
                $this->scare = true;
            }
        }

        public function printScare() {
            if ($this->scare) {
                echo 'Attention! could be very scary';
            } else {
                echo 'You can watch without getting scared';
            }
        }
    }

    $movie_1 = new Movie("Mission Impossible", "Action", 1996);
    $movie_2 = new Movie("The Exorcist", "Horror", 1973);

    echo 'title: ' . $movie_1->title . ', genre: ' . $movie_1->genre . ' of ' . $movie_1->year . ',  ';
    $movie_1->printScare();
    echo '<br>';

    echo 'title: ' . $movie_2->title . ', genre: ' . $movie_2->genre . ' of ' . $movie_2->year . ',  ';
    $movie_2->printScare();


?>