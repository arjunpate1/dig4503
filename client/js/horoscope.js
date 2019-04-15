$.ajax({
  url: 'https://horoscopes-and-astrology.com/json/?d=',
  success: function(result) {

    var horoscope = result.dailyhoroscope.Virgo; //testing
    console.log(horoscope); // testing


    $('#horoscope').html(result);
    console.log(result); //this returns the whole object
  },
  error: function(jqXHR, textStatus, errorThrown) {
    console.log(jqXHR);
    console.log(textStatus);
    console.log(errorThrown);
  }
});
