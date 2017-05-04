var stadsetning = document.getElementById("stadsetning");
var dagsetning = document.getElementById("stadsetning");
var vedurupp = document.getElementById("vedurupp");
var gradur = document.getElementById("hiti");
var vedurlysing = response.results[0].forecast[5].W;
$.ajax({
  'url': 'http://apis.is/weather/forecasts/',
  'type': 'GET',
  'dataType': 'json',
  'data': {'stations': '1,422'},
  'success': function(response) {
      if (response.results[0].name === "Reykjavík") {
          stadsetning.innerHTML = "Veður í Reykjavík yfir daginn";
      }
      dagsetning.innerHTML = response.results[0].forecast[5].ftime;
      vedurupp.innerHTML = "Veðurlýsing yfir daginn: " + response.results[0].forecast[5].W;
      gradur.innerHTML = "Hiti yfir daginn: " + response.results[0].forecast[5].T + "°C";
  }
});