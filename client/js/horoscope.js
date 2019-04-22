$.ajax({
  url: 'https://horoscopes-and-astrology.com/json/?d=',
  success: function(result) {

    function zodiac(day, month) {
      // returns the zodiac sign according to day and month
      var zodiac = ['', 'Capricorn', 'Aquarius', 'Pisces', 'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn'];
      var last_day = ['', 19, 18, 20, 20, 21, 21, 22, 22, 21, 22, 21, 20, 19];
      return (day > last_day[month]) ? zodiac[month * 1 + 1] : zodiac[month];
    }
    document.getElementById('test_z').onclick = function() {

      var sign = zodiac(document.getElementById('s_days').value, document.getElementById('s_m').value);

      var horoscope = result.dailyhoroscope[sign]; //testing
      console.log(result);

      $("#horoscope").html(horoscope); // this displays the result for the sign
      console.log(result); //this returns the whole object
    };

  },
  error: function(jqXHR, textStatus, errorThrown) {
    console.log(jqXHR);
    console.log(textStatus);
    console.log(errorThrown);
  }
});
