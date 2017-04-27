var stadsetning = document.getElementById("stadsetning");
$.ajax({
  'url': 'http://apis.is/weather/forecasts/',
  'type': 'GET',
  'dataType': 'json',
  'data': {'stations': '1,422'},
  'success': function(response) {
      //console.log(response.results[0].name);
      if (response.results[0].name === "Reykjavík") {
        //document.getElementById("stadsetning").innerHTML = "Good day";
          console.log("Þú ert í Reykjavík");
      }
  }
});