
var reykjStads = document.getElementById("reyStads");
var akuStads = document.getElementById("akStads");
var minirStads = document.getElementById("myStads");

var nr = 0;

var akLat = 65.6885;
var akLon = -18.1262;
var akZoom = 10;
var reyLat = 64.1265;
var reyLon = -21.8174;
var reyZoom = 10;

var map, infoWindow;
function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: reyLat, lng: reyLon},
          zoom: 13
        });
				var trafficLayer = new google.maps.TrafficLayer();
						trafficLayer.setMap(map);
				reykjStads.addEventListener("click",function() {
	 						var pos = {
								lat: reyLat,
								lng: reyLon
							};
							map.setCenter(pos);
							nr = 0;
						}, false);
						akuStads.addEventListener("click",function() {
	 						var pos = {
								lat: akLat,
								lng: akLon
							};
							map.setCenter(pos);
							nr = 1;
						}, false);
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
						var defLat = position.coords.latitude;
						var defLong = position.coords.longitude;
            var pos = {
              lat: defLat,
              lng: defLong
            };
						minirStads.addEventListener("click",function() {
	 						var pos = {
								lat: defLat,
								lng: defLong
							};
							map.setCenter(pos);
						}, false);
					
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
}

var stadsetning = document.getElementById("stadsetning");
var dagsetning = document.getElementById("dagsetning");
var klukka = document.getElementById("klukka");
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
		var n = d.getDate();
		var h = d.getHours();
		if(n < 10){
    	n = "0" + n;
    }
		var i;
		for (i = 0; i < response.results[0].forecast.length; i++) {
			var str = response.results[0].forecast[i].ftime;
			var res = str.substring(8, 10);
			var timeres = str.substring(11, 13);
			var manudur = str.substring(5, 7);
			var ollklukka = str.substring(11, 16);
			var tvothus = str.substring(0, 4);
			var dagsetninar = res + "/" + manudur + "/" + tvothus;
    	if(res == n){
				if(timeres == h){
					//text += res + " " + n + "<br>" + timeres + " " + h + "<br>";
                    //demo2.innerHTML =  response.results[0].forecast[i].ftime;
					stadsetning.innerHTML = "Veðrið í " + response.results[nr].name;
          dagsetning.innerHTML = dagsetninar;
					klukka.innerHTML = ollklukka;
					vedurupp.innerHTML = "Veðurlýsing: " + response.results[0].forecast[i].W;
					gradur.innerHTML = "Hiti: " + response.results[0].forecast[i].T + "°C";

					/* ef það er eitthvað sérstakt veður kemur sér mynd fyrir hvert*/
					if(response.results[0].forecast[i].W === "Heiðskírt")
					{
							mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/421f0c16071075.562a500e6ddd4.gif'>";
					}
					else if(response.results[0].forecast[i].W === "Skýjað" || response.results[0].forecast[i].W === "Alskýjað")
					{
							mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/d241d716071075.562a50091d914.gif'>";
					}
					else if(response.results[0].forecast[i].W === "Léttskýjað")
					{
							mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/c81fed16071075.562a501d5e911.gif'>";
					}
					else if(response.results[0].forecast[i].W === "Rigning" || response.results[0].forecast[i].W === "Lítils háttar rigning")
					{
							mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/7205bf16071075.562a50132e33e.gif'>";
					}
					else if(response.results[0].forecast[i].W === "Snjókoma" || response.results[0].forecast[i].W === "Lítils háttar snjókoma" || response.results[0].forecast[i].W === "Snjóél")
					{
							mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/a2405c16071075.562a5050beed0.gif'>";
					}
					else if(response.results[0].forecast[i].W === "Þoka")
					{
							mynd.innerHTML = "<img class='vedurmyndin' src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/4d353e16071075.562a504473c5c.gif'>";
					}
				}
			}
		} 
  }
});