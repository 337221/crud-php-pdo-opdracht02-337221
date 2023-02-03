<!DOCTYPE html>
<html lang="en">
  <head>
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
    <div class="container">
      <h2>Maak je eigen pizza</h2>
      <form>
        <div class="form-group">
          <label for="bodemformaat">Bodemformaat</label>
          <select class="form-control" id="bodemformaat">
            <option>20 centimeter</option>
            <option>25 centimeter</option>
            <option>30 centimeter</option>
            <option>35 centimeter</option>
            <option>40 centimeter</option>
          </select>
        </div>
        <div class="form-group">
          <label for="saus">Saus</label>
          <select class="form-control" id="saus">
            <option>Tomatensaus</option>
            <option>Extra tomatensaus</option>
            <option>Spicy tomatensaus</option>
            <option>BBQ saus</option>
            <option>Creme fraiche</option>
          </select>
        </div>
        <div class="form-group">
          <label for="pizzatoppings">Pizzatoppings</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pizzatoppings" id="vegan" value="vegan">
            <label class="form-check-label" for="vegan">Vegan</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pizzatoppings" id="vegetarisch" value="vegetarisch">
            <label class="form-check-label" for="vegetarisch">Vegetarisch</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pizzatoppings" id="vlees" value="vlees">
            <label class="form-check-label" for="vlees">Vlees</label>
          </div>
        </div>
        <div class="form-group">
          <label for="kruiden">Kruiden</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="peterselie">
            <label class="form-check-label" for="peterselie">Peterselie</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="oregano">
            <label class="form-check-label" for="oregano">Oregano</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="chiliflakes">
            <label class="form-check-label" for="chiliflakes">Chili Flakes</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="zwartepeper">
            <label class="form-check-label" for="zwartepeper">Zwarte peper</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Bestel</button>
      </form>
    </div>
  </body>
</html>
