$(document).ready(function () {
  setInterval(function () {
    $.get("../../../polusi-app/cekpolusi.php", function (data) {
      let suhu = parseInt(data);
      console.log(suhu);
      let warna = getBackgroundColor(suhu);
      $("#point1").css("background-color", warna);
    });
  }, 1000);
});

function getBackgroundColor(suhu) {
  if (suhu > 0 && suhu < 50) {
    return "green";
  } else if (suhu > 51 && suhu < 100) {
    return "yellow";
  } else if (suhu > 101 && suhu < 150) {
    return "orange";
  } else if (suhu > 151 && suhu < 200) {
    return "red";
  } else if (suhu > 201 && suhu < 300) {
    return "purple";
  } else {
    return "white";
  }
}
