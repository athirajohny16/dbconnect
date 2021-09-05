<?php require_once('config.php'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Skincare Recommendations</title>
</head>
<body>
    <div class="container">
        <div class="col-6 mt-5">
<form class="row g-3" method="post">
<div class="col-12">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product name">
  </div>
  <div class="col-md-6">
    <label for="brand" class="form-label">Brand</label>
    <input type="text" name="brand" class="form-control" id="brand">
  </div>
  <div class="col-md-6">
    <label for="suggestedby" class="form-label">Suggested By</label>
    <input type="text" name="suggestedby" class="form-control" id="suggestedby">
  </div>

  <div class="col-12">
    <label for="notes" class="form-label">Notes</label>
    <input type="text" name="notes" class="form-control" id="notes" placeholder="Additional notes if any">
  </div>
  <div class="col-md-3">
  <label for="fragrance" class="form-label">Fragrance Free?</label>
    <select id="fragrance" class="form-select" name="fragrance">
  <option value="y" selected>Yes</option>
  <option value="n">No</option>
    </select>
  </div>
  <div class="col-md-3">
  <label for="productype" class="form-label">Product Type</label>
    <select id="productype" class="form-select" name="productype">
  <option value="CLEANSER" selected>CLEANSER</option>
  <option value="EXFOLIATOR">EXFOLIATOR</option>
  <option value="TONER">TONER</option>
  <option value="ESSENCE">ESSENCE</option>
  <option value="SERUM">SERUM</option>
  <option value="MOISTURISER">MOISTURISER</option>
  <option value="mask">FACE MASK</option>
  <option value="sunscreen">SUNSCREEN</option>
  <option value="sleeping mask">SLEEPING MASK</option>
    </select>
  </div>

  <div class="col-md-6">
  <label for="skintype" class="form-label">Skin Type</label>
    <select id="skintype" class="form-select" name="skintype">
      <option value="Oily" selected>Oily</option>
      <option value="Combination">Combination</option>
      <option value="Dry">Dry</option>
      <option value="Sensitive">Sensitive</option>
      <option value="Acne">Acne prone</option>
    </select>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit"> Save</button>
  </div>
</form>
</div>
</div>
    
</body>
</html>