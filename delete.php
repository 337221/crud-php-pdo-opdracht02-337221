<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=maakzelfjepizza', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['id'])) {
    $stmt = $pdo->prepare("DELETE FROM pizza WHERE id = :id");
    $stmt->execute(array(':id' => $_POST['id']));
    echo "Bestelling succesvol verwijderd!";
  } else {
    $stmt = $pdo->prepare("SELECT * FROM pizza");
    $stmt->execute();
    $pizzas = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Verwijder Bestellingen</title>
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
        <h1 class="title">Verwijder Bestellingen</h1>
        <form action="delete.php" method="post">
          <div class="form-group">
            <label for="id">Bestelling ID</label>
            <input type="text" name="id" class="form-control" required>
          </div>
          <input type="submit" value="Verwijderen" class="btn btn-danger">
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