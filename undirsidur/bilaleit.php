<!DOCTYPE html>
<html>
  <?php require('../includes/head.php');
        include('../includes/header.php');
  ?>
	<div class="uppl">
		<h1>Leit að bíl</h1>
		<h2>Á þessari síðu er hægt að leita að númeraplötu bæils og fá birtar upplýsingar og með myndum af eins bíl.</h2>
		<h3>Mjög notarlegt að hafa svona ef maður sér flottan bíl úti og maður vill fá upplýsingar um bílinn án þess að trufla eigandann.</h3>
		<h2>ATH: Númeraplatan verður að vera ðll saman. Ekkert bil eða strik má vera á milli.</h2>
		<br>
		<hr>
		<br>
		<h1>Gengi krónunar</h1>
		<h2>Eins og hér stendur slærðu inn upphæð í íslenskum krónum og færð þá gengi á mörgum tegundum penings um víðann heim.</h2>
	</div>
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