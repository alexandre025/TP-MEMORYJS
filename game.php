<?php
  if (isset($_POST['number_of_pairs'])) {
    $numberOfPairs = (int)$_POST['number_of_pairs'];

    if ($numberOfPairs >= 2 && $numberOfPairs <= 9) {
      $cards = array();

      for($i = 1; $i <= $numberOfPairs; $i++) {
        array_push($cards, $i, $i);
      }

      shuffle($cards);
    } else {
      $params = array('error' => 'Wrong number of pairs!');
      header('Location: index.php?' . http_build_query($params));
    }

  } else {
    http_response_code(500);
    exit;
  }
?>


<!doctype html>
<html>
<?php include('views/head.php'); ?>

  <body>
    <div id="board">
      <?php
        for($i = 0; $i < count($cards); $i++) {
          echo "<div class='card' data-value='" . $cards[$i] . "'>";
          echo "<img src='assets/img/cards/" . $cards[$i] . ".png' class='card--front'>";
          echo "<img src='assets/img/cards/back.png' class='card--back'>";
          echo "</div>";
        }
      ?>
    </div>
  </body>
</html>
