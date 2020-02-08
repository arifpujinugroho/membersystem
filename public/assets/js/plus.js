function showTime() {
      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth();
      var year = date.getFullYear('yyyy');
      var curr_hour = date.getHours();
      var curr_minute = date.getMinutes();
      var curr_second = date.getSeconds();
      curr_hour = checkTime(curr_hour);
      curr_minute = checkTime(curr_minute);
      curr_second = checkTime(curr_second);
      document.getElementById('time').innerHTML = day + " " + months[month] + " " + year + "&ensp;" + " " + curr_hour + ":" + curr_minute + ":" + curr_second;
    }

function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }
    setInterval(showTime, 500);

    function showTimeMobile() {
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        var year = date.getFullYear('yyyy');
        var curr_hour = date.getHours();
        var curr_minute = date.getMinutes();
        var curr_second = date.getSeconds();
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
        document.getElementById('time-mobile').innerHTML = day + " " + months[month] + " " + year + "&ensp;" + " " + curr_hour + ":" + curr_minute + ":" + curr_second;
      }
  
  function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
      setInterval(showTimeMobile, 500);

    $('#time').click(function() {
        Swal.fire({
            title:'coba Sweet Alert 2',
            type: 'success',
            timer: 1500
        });

    });