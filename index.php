<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Memory JS</title>
    <link rel="stylesheet" href="assets/app.css">
    <script src="vendors/jquery/jquery-3.4.1.min.js"></script>
    <script src="assets/app.js"></script>
  </head>
  <body>
    <div id="board">
      <?php
        $cards = [1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8,9,9];
        shuffle($cards);

        for($i = 0; $i < count($cards); $i++) {
          echo "<div class='card js_click_on_card' data-value='" . $cards[$i] . "'>";
          echo "<img src='assets/img/cards/" . $cards[$i] . ".png' class='card--front'>";
          echo "<img src='assets/img/cards/back.png' class='card--back'>";
          echo "</div>";
        }
      ?>
    </div>
  </body>
</html>
