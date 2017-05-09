<!DOCTYPE html>
<html>
  <?php require('../includes/head.php');
        include('../includes/header.php');
  ?>
  <div class="skrainn">
    <div class="log">
      <form action="bilanidurstodur.php" method="post">
        <h3>Leit að bíl</h3>
        <label>Skráningarnr.</label>
        <input type="text" name="numer" required>
        
        <br><br>
        
        <input type="submit" value="Leita">
      </form>
			<form action="gengi.php" method="post">
        <h3>Finna gengi krónunar</h3>
        <label>kr</label>
        <input type="text" name="krona" required>
        
        <br><br>
        
        <input type="submit" value="Finna">
      </form>
    </div>
  </div>
</body>
</html>