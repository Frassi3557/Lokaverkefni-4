<!DOCTYPE html>
<html>
  <?php require('../includes/head.php');
        include('../includes/header.php');
  ?>
<body>
  <div class="skrainn">
    <div class="log">
      <form action="bilanidurstodur.php" method="post">
        <h3>Leit</h3>
        <label>Skráningarnr.</label>
        <input type="text" name="numer" required>
        
        <br><br>
        
        <input type="submit" value="Leita">
      </form>
    </div>
  </div>
</body>
</html>