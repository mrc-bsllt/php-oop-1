<?php
  class Book {
    public $title;
    public $author;
    public $cover;
    public $plot;
    public $year;
    public $vote;

    function __construct($title, $author, $year, $vote = 0) {
      $this->title = $title;
      $this->author = $author;
      $this->year = $year;
    }

  }
?>
