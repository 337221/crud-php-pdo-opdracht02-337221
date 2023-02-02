<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Maakzelfjepizza</title>
</head>
<body>
    <h1 class="text-center">Maak je eigen pizza</h1>
    <div class="container">
        <form>
            <div class="form-group">
                <label>Bodemformaat:</label>
                <select class="form-control">
                    <option value="20">20 centimeter</option>
                    <option value="25">25 centimeter</option>
                    <option value="30">30 centimeter</option>
                    <option value="35">35 centimeter</option>
                    <option value="40">40 centimeter</option>
                </select>
            </div>
            <div class="form-group">
                <label>Saus:</label>
                <select class="form-control">
                    <option value="tomatensaus">Tomatensaus</option>
                    <option value="extra-tomatensaus">Extra tomatensaus</option>
                    <option value="spicy-tomatensaus">Spicy tomatensaus</option>
                    <option value="bbq-saus">BBQ saus</option>
                    <option value="creme-fraiche">Crème Fraîche</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pizzatoppings:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="vegan" name="pizzatoppings" value="vegan">
                    <label class="form-check-label" for="vegan">Vegan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="vegetarisch" name="pizzatoppings" value="vegetarisch">
                    <label class="form-check-label" for="vegetarisch">Vegetarisch</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="vlees" name="pizzatoppings" value="vlees">
                    <label class="form-check-label" for="vlees">Vlees</label>
                </div>
            </div>
            <div class="form-group">
                <label>Kruiden:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="ppeterselie" name="kruiden" value="peterselie">
                    <label class="form-check-label" for="peterselie">Peterselie</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="oregano" name="kruiden" value="oregano">
                    <label class="form-check-label" for="oregano">Oregano</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="chili-flakes" name="kruiden" value="chili-flakes">
                    <label class="form-check-label" for="chili-flakes">Chili Flakes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="zwarte-peper" name="kruiden" value="zwarte-peper">
                    <label class="form-check-label" for="zwarte-peper">Zwarte peper</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Bestel</button>
        </form>
    </div>
</body>
</html>
