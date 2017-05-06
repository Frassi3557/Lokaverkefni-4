<body>
  <ul>
    <li><a href="http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/undirsidur/breyta.php">Breyta Upplýsingum</a></li>
    <li><a href="http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/undirsidur/bilaleit.php">Bifreiðaleit</a></li>
    <li><a href="http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/admin.php">Heim</a></li>
  </ul>
	<form action="process/signout.php" method="post">
        <input class="logout" type="submit" value="Logout">
    </form>
  <script>
      var blockedIP = new Array();
      
      blockedIP[0] = "x.x.x.x";
      blockedIP[1] = "31.209.229.95";
      blockedIP[2] = "x.x.x.x";
      
      for(var i=0; i<blockedIP.length; i++){
        
        if(blockedIP[i] == userip){
          
          alert("Þú ert ekki leyfður á þessari síðu");
          window.location = "http://www.google.com";
          break;
          
        }
        
      }
    </script>