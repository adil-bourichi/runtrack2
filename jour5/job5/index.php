<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de style</title>
  <link id="style-link" rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <h2>Formulaire de style</h2>
  <form method="POST" action="traitement.php">
    <label for="style">Style :</label>
    <select id="style" name="style">
      <option value="style1">Style 1</option>
      <option value="style2">Style 2</option>
      <option value="style3">Style 3</option>
    </select>
    <input type="submit" value="Changer de style">
  </form>
</body>
</html>
