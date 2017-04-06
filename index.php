<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokaverkefni</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
        </div>
    </div>
    
</body>
</html>