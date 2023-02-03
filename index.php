<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Maak je eigen pizza</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
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
        <h1 class="title">Maak je eigen pizza</h1>
        <form action="create.php" method="post">
          <div class="field">
            <label class="label">Bodemformaat</label>
            <div class="control">
              <div class="select">
                <select name="bodemformaat">
                  <option value="20">20 centimeter</option>
                  <option value="25">25 centimeter</option>
                  <option value="30">30 centimeter</option>
                  <option value="35">35 centimeter</option>
                  <option value="40">40 centimeter</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field">
            <label class="label">Saus</label>
            <div class="control">
              <div class="select">
                <select name="saus">
                  <option value="Tomatensaus">Tomatensaus</option>
                  <option value="Extra tomatensaus">Extra tomatensaus</option>
                  <option value="Spicy tomatensaus">Spicy tomatensaus</option>
                  <option value="BBQ saus">BBQ saus</option>
                  <option value="Creme fraiche">Creme fraiche</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field">
            <label class="label">Pizzatoppings</label><br>
            <input type="radio" name="pizzatopping" value="Vegan"> Vegan<br>
            <input type="radio" name="pizzatopping" value="Vegetarisch"> Vegetarisch<br>
            <input type="radio" name="pizzatopping" value="Vlees"> Vlees
          </div>
          <div class="field">
            <label class="label">Kruiden</label><br>
            <input type="checkbox" name="kruiden[]" value="Peterselie"> Peterselie<br>
            <input type="checkbox" name="kruiden[]" value="Oregano"> Oregano<br>
            <input type="checkbox" name="kruiden[]" value="Chili Flakes"> Chili Flakes<br>
            <input type="checkbox" name="kruiden[]" value="Zwarte peper"> Zwarte peper<br>
            <input type="submit" value="Bestel">
        </form>
      </div>
    </section>
  </body>
</html>
