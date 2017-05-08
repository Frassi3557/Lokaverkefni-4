<?php
  if (isset($_POST['mail'])) {
          include "../connect.php";
      $nafn = $_POST['nafn'];
      $lykill = $_POST['pass'];
      $email = $_POST['mail'];
    try {
        $sql = "
        INSERT INTO users
        (name, pass, email)
        VALUES
        (:name,:pass,:email);
        ";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':name', $nafn);
        $statement->bindValue(':pass', $lykill);
        $statement->bindValue(':email', $email);
        $inserted = $statement->execute();	
        if($inserted){
    echo 'Skráður í kerfið!<br>';
            
}
	} catch (Exception $e) {
		echo "Ekki tókst að skrá gögnin". "<br>" . $e->getMessage();
	}
      
    header("Refresh: 2; URL=../index.php");
  }
else{
    header("Location:../index.php");
}
      
?>