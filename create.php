<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=maakzelfjepizza', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare("INSERT INTO pizza (bodemformaat, saus, pizzatopping, kruiden) VALUES (:bodemformaat, :saus, :pizzatopping, :kruiden)");
  $stmt->execute(array(
    ':bodemformaat' => $_POST['bodemformaat'],
    ':saus' => $_POST['saus'],
    ':pizzatopping' => $_POST['pizzatopping'],
    ':kruiden' => implode(',', $_POST['kruiden'])
  ));

  echo "Pizza is besteld!";
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>