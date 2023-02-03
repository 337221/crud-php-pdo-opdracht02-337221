<style>
  .container {
    width: 80%;
    margin: 20px auto;
    border: 1px solid gray;
    border-radius: 10px;
    padding: 20px;
  }

  .pizza-order {
    margin-bottom: 20px;
  }

  .pizza-order h3 {
    margin-bottom: 10px;
  }

  .pizza-order p {
    margin: 0;
    font-size: 14px;
  }
</style>

<div class="container">
  <h2>Alle Bestellingen</h2>
  <?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=maakzelfjepizza', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM pizza");
    $stmt->execute();
    $pizzas = $stmt->fetchAll();

    foreach ($pizzas as $pizza) {
  ?>
    <div class="pizza-order">
      <h3>Bestelling #<?php echo $pizza['id']; ?></h3>
      <p><b>Bodemformaat:</b> <?php echo $pizza['bodemformaat']; ?> cm</p>
      <p><b>Saus:</b> <?php echo $pizza['saus']; ?></p>
      <p><b>Topping:</b> <?php echo $pizza['pizzatopping']; ?></p>
      <p><b>Kruiden:</b> <?php echo $pizza['kruiden']; ?></p>
    </div>
  <?php
    }
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  ?>
</div>
