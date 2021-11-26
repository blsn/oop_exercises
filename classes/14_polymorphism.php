<?php
    abstract class User14 {
        protected $scores = 0;
        protected $numberOfArticles = 0;

        public function setNumberOfArticles($int) {
            $numberOfArticles = (int)$int;
            $this->numberOfArticles = $numberOfArticles;
        }

        public function getNumberOfArticles() {
            return $this->numberOfArticles;
        }

        abstract public function calcScores();
    }

    class Author14 extends User14 {
        public function calcScores() {
            return $this->scores = $this->numberOfArticles * 10 + 20;
        }
    }

    class Editor14 extends User14 {
        public function calcScores() {
            return $this->scores = $this->numberOfArticles * 6 + 15;
        }
    }

    $author1 = new Author14();
    $author1->setNumberOfArticles(8);
    echo $author1->calcScores() . "<br>";

    $editor1 = new Editor14();
    $editor1->setNumberOfArticles(15);
    echo $editor1->calcScores();
?>

