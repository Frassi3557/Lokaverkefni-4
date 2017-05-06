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