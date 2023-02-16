<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=maakzelfjepizza', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['id'])) {
    $stmt = $pdo->prepare("UPDATE pizza SET bodemformaat = :bodemformaat, saus = :saus, pizzatopping = :pizzatopping, kruiden = :kruiden WHERE id = :id");
    $stmt->execute(array(
      ':id' => $_POST['id'],
      ':bodemformaat' => $_POST['bodemformaat'],
      ':saus' => $_POST['saus'],
      ':pizzatopping' => $_POST['pizzatopping'],
      ':kruiden' => implode(", ", $_POST['kruiden'])
    ));
    echo "Bestelling succesvol bijgewerkt!";
  } else {
    $stmt = $pdo->prepare("SELECT * FROM pizza");
    $stmt->execute();
    $pizzas = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Wijzig Bestellingen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      .container {
        width: 80%;
        margin: 20px auto;
        border: 1px solid gray;
        border-radius: 10px;
        padding: 20px;
      }
      .form-group {
        margin: 25px 0;
      }
      label {
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <section class="section">
      <div class="container">
        <h1 class="title">Wijzig Bestellingen</h1>
        <form action="update.php" method="post">
          <div class="form-group">
            <label for="id">Bestelling ID</label>
            <input type="text" name="id" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="bodemformaat">Bodemformaat</label>
            <div class="select">
              <select name="bodemformaat" class="form-control" required>
                <option value="20">20 centimeter</option>
                <option value="25">25 centimeter</option>
                <option value="30">30 centimeter</option>
                <option value="35">35 centimeter</option>
                <option value="40">40 centimeter</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="saus">Saus</label>
            <div class="select">
              <select name="saus" class="form-control" required>
                <option value="Tomatensaus">Tomatensaus</option>
                <option value="Extra tomatensaus">Extra tomatensaus</option>
                <option value="Spicy tomatensaus">Spicy tomatensaus</option>
                <option value="BBQ saus">BBQ saus</option>
            <option value="Creme fraiche">Creme fraiche</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="pizzatopping">Pizzatoppings</label><br>
        <input type="radio" name="pizzatopping" value="Vegan" required> Vegan<br>
        <input type="radio" name="pizzatopping" value="Vegetarisch" required> Vegetarisch<br>
        <input type="radio" name="pizzatopping" value="Vlees" required> Vlees
      </div>
      <div class="form-group">
        <label for="kruiden">Kruiden</label><br>
        <input type="checkbox" name="kruiden[]" value="Peterselie"> Peterselie<br>
        <input type="checkbox" name="kruiden[]" value="Oregano"> Oregano<br>
        <input type="checkbox" name="kruiden[]" value="Chili Flakes"> Chili Flakes<br>
        <input type="checkbox" name="kruiden[]" value="Zwarte peper"> Zwarte peper<br>
      </div>
      <input type="submit" value="Bijwerken" class="btn btn-primary">
    </form>
  </div>
</section>
</body>
</html>

<?php
  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>