<!DOCTYPE html>
<html>

<<<<<<< HEAD
  <?php require('includes/head.php');
        require('includes/header.php'); ?>

    <div class="skrainn">
        <div class="log">
            <form action="process/signin.php" method="post">
                <fieldset>
                    <h3>Sign In</h3>
                    <label for="mail">Email</label>
                    <input type="email" name="email" required>

                    <label for="pass">Password</label>
                    <input type="password" name="password" required>

                    <br><br>

                    <input type="submit" value="SUBMIT">
                </fieldset>
            </form>
        </div>
        <div class="log">
            <form action="process/signup.php" method="post">
                <fieldset>
                    <h3>Sign Up</h3>
                    <label for="mail">Email</label>
                    <input type="email" name="mail" placeholder="Your email address" required>

                    <label for="name">Nafn</label>
                    <input type="text" name="nafn" placeholder="Pick a username" required>

                    <label for="pass">Password</label>
                    <input type="password" name="pass" placeholder="Create password" required>

                    <br><br>

                    <input type="submit" value="SUBMIT">
                </fieldset>
            </form>
        </div>
=======
  <?php require('includes/head.php'); ?>
  
  <div class="skrainn">
    <div class="log">
      <form action="process/signin.php" method="post">
        <fieldset>
          <h3>Sign In</h3>
          <label for="mail">Email</label>
          <input type="email" name="email" required>
          
          <label for="lname">Password</label>
          <input type="password" name="password" required>
          
          <br><br>
          
          <input type="submit" value="SUBMIT">
        </fieldset>
      </form>
    </div>
    <div class="log">
      <form action="process/signup.php" method="post">
        <fieldset>
          <h3>Sign Up</h3>
          <label for="mail">Email</label>
          <input type="email" name="mail" placeholder="Your email address" required>
          
          <label for="name">Nafn</label>
          <input type="text" name="nafn" placeholder="Pick a username" required>
          
          <label for="pass">Password</label>
          <input type="password" name="pass" placeholder="Create password" required>
          
          <br><br>
          
          <input type="submit" value="SUBMIT">
        </fieldset>
      </form>
>>>>>>> b7011949630af4e2b5c682100b576803d7d50f63
    </div>
  </div>
    
</body>
</html>