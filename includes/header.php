	<header>
		<nav class="menu">
  <ul class="topmenu">
		<li><a href="http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/admin.php">Heim</a></li>
    <li><a href="http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/undirsidur/breyta.php">Breyta Upplýsingum</a></li>
    <li><a href="http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/undirsidur/bilaleit.php">Bifreiðaleit</a></li>
		<li><a href="http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/undirsidur/tonleikar.php">Tónleikar</a></li>
    <li><a href="http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/undirsidur/info.php">Um Mig</a></li>
    <li><a href="http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/process/signout.php">Útskrá</a></li>
  </ul>
			</nav>
	</header>
<body>
  
  <script>
    var blockedIP = new Array();
    
    blockedIP[0] = "x.x.x.x";
    blockedIP[1] = "x.x.x.x";
    blockedIP[2] = "x.x.x.x";
    
    for(var i=0; i<blockedIP.length; i++){
      
      if(blockedIP[i] == userip){
        //window.location = "http://www.google.com";
        break;
        
      }
      else {
        
      }
    }
    
    blockedIP.push(userip);
    //alert(blockedIP.toString());
    
    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var expires = "expires="+d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    
    function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(';');
      for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    
    function checkCookie() {
      var ipaddress = getCookie("ip");
      if (ipaddress != "") {
        document.getElementById("welcometext").innerHTML+= "Velkomin/n aftur!";
      } else {
        user = userip;
        if (user != "" && user != null) {
          setCookie("ip", user, 365);
        }
      }
    }

    
  </script>
  <body onload="checkCookie()">