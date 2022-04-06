<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" /> 
    
    <?// ajout du .sass ?>
    
    <title>Document</title>
</head>
<body>
<form action='formulaire.php' method="POST" class="form">
    <div class="input-title">
        <label>Titre :</label>
        <input name='title' type="text">
      </div>

      <div class="input-description">
        <label>Description :</label>
        <input name='description' type="text">
      </div>

      <div class="input-price">
        <label>Prix :</label>
        <input name='price' type="text">
      </div>

      <div class="input-location">
        <label>Localisation :</label>
        <input name='location' type="text">
      </div>

      <div class="input-category">
        <label>Categorie :</label>
        <input name='category' type="text">
      </div>
</form>

</body>
</html>