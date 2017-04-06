<?php
  if (isset($_POST['password']) && isset($_POST['email'])) {
          include "../connect.php";
      
    try {
        $sql = "SELECT * FROM users WHERE email ='" . $_POST['email'] . "';";
		// PDO->query(); er notað fyrir SELECT statements ONLY, skilar object af PDOStatement class
		$result = $pdo ->query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while($row = $result -> fetch()){
		  $id = $row['id'];
          $name = $row['name'];
          $password = $row['pass'];
          $email = $row['email'];
	}
      
      if ($_POST['password'] == $password && $_POST['email'] == $email) {
          if (!session_id())
              session_start();
          $_SESSION['logon'] = true;
          $_SESSION['id'] = $id;
          $_SESSION['name'] = $name;
          $_SESSION['password'] = $password;
          $_SESSION['email'] = $email;
          header('Location: ../admin.php');
          die();
      }
      else{
          echo "<h1>Not right login access</h1>";
          header("Refresh: 2; URL=../index.php");
      }
  }
      
?>