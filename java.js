var stadsetning = document.getElementById("stadsetning");
var dagsetning = document.getElementById("stadsetning");
$.ajax({
  'url': 'http://apis.is/weather/forecasts/',
  'type': 'GET',
  'dataType': 'json',
  'data': {'stations': '1,422'},
  'success': function(response) {
      if (response.results[0].name === "Reykjavík") {
          stadsetning.innerHTML = "Veður í Reykjavík";
      }
  }
});