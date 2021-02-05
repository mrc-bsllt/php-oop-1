<?php
  class Book {
    public $title;
    public $author;
    public $plot;
    public $year;
    public $vote;

    function __construct($title, $author, $vote = 0) {
      $this->title = $title;
      $this->author = $author;
    }

  }
?>
