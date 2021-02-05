<?php
  include __DIR__."/book.php";

  $book1 = new Book ("Le Asagiatrici", "Rossella Postorino", 2018);
  $book1->plot = "Rosa Sauer, la protagonista, diventa assaggiatrice ufficiale dei cibi di Adolf Hitler, durante la Seconda guerra mondiale. ... Il marito, Gregor, è partito per la guerra e sta combattendo sul fronte russo. Dopo una settimana dal suo arrivo viene reclutata per diventare un'assaggiatrice di Hitler.";
  var_dump($book1->vote);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-1</title>
  </head>
  <body>

    <div class="book" style="width:50%">
      <h2><?= $book1->title."<small style='margin-left:20px; font-size:15px'>(".$book1->author.")</small>"; ?></h2>
      <p><?= $book1->plot; ?></p>
      <small><strong><?= $book1->year; ?></strong></small>
      <p><strong>Voto:</strong> <?= $book1->vote; ?></p>


    </div>


  </body>
</html>
