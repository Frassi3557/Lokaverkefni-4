var stadsetning = document.getElementById("stadsetning");
var dagsetning = document.getElementById("stadsetning");
var vedurupp = document.getElementById("vedurupp");
var gradur = document.getElementById("hiti");
var mynd = document.getElementById("icon");
$.ajax({
  'url': 'http://apis.is/weather/forecasts/',
  'type': 'GET',
  'dataType': 'json',
  'data': {'stations': '1,422'},
  'success': function(response) {
		
		
		var d = new Date();
		var n = d.getDay();
		var h = d.getHours();
		if(n < 10){
    	n = "0" + n;
    }
		for (i = 0; i < response.results[0].forecast.count; i++) {
			var str = response.results[0].forecast[i].ftime;
			var res = str.substring(8, 10);
			var timeres = str.substring(11, 13);
    	if(res === n){
				if(timeres === h){
					dagsetning.innerHTML = response.results[0].forecast[i].ftime;
				}
			}
		}
		
		 //ef result er reykjavík koma skilaboð
      if (response.results[0].name === "Reykjavík") {
          stadsetning.innerHTML = "Veður í Reykjavík yfir daginn";
      }
      //dagsetning.innerHTML = response.results[0].forecast[5].ftime;
      vedurupp.innerHTML = "Veðurlýsing yfir daginn: " + response.results[0].forecast[5].W;
      gradur.innerHTML = "Hiti yfir daginn: " + response.results[0].forecast[5].T + "°C";
		
			/* ef það er eitthvað sérstakt veður kemur sér mynd fyrir hvert*/
      if(response.results[0].forecast[5].W === "Heiðskírt")
      {
          mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/421f0c16071075.562a500e6ddd4.gif'>";
      }
      else if(response.results[0].forecast[5].W === "Skýjað" || response.results[0].forecast[5].W === "Alskýjað")
      {
          mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/d241d716071075.562a50091d914.gif'>";
      }
      else if(response.results[0].forecast[5].W === "Léttskýjað")
      {
          mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/c81fed16071075.562a501d5e911.gif'>";
      }
      else if(response.results[0].forecast[5].W === "Rigning" || response.results[0].forecast[5].W === "Lítils háttar rigning")
      {
          mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/7205bf16071075.562a50132e33e.gif'>";
      }
      else if(response.results[0].forecast[5].W === "Snjókoma" || response.results[0].forecast[5].W === "Lítils háttar snjókoma" || response.results[0].forecast[5].W === "Snjóél")
      {
          mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/a2405c16071075.562a5050beed0.gif'>";
      }
      else if(response.results[0].forecast[5].W === "Þoka")
      {
          mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/4d353e16071075.562a504473c5c.gif'>";
      }
  }
});