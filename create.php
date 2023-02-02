<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=maakzelfjepizza", "root", "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("INSERT INTO pizza (bodemformaat, saus, pizzatoppings, kruiden) 
  VALUES (:bodemformaat, :saus, :pizzatoppings, :kruiden)");
  $stmt->bindParam(':bodemformaat', $bodemformaat);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':pizzatoppings', $pizzatoppings);
  $stmt->bindParam(':kruiden', $kruiden);

  $bodemformaat = $_POST['bodemformaat'];
  $saus = $_POST['saus'];
  $pizzatoppings = $_POST['pizzatoppings'];
  $kruiden = implode(",", $_POST['kruiden']);

  $stmt->execute();
  echo "Record created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>