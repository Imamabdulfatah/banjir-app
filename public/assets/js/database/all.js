$(document).ready(function () {
  setInterval(function () {
    // Loop through 10 tempat
    for (let i = 1; i <= 10; i++) {
      // Buat URL untuk setiap tempat
      let url = "../../../polusi-app/cekpolusifull.php?tempat=" + i;

      // Mengambil data menggunakan AJAX
      $.get(url, function (data) {
        let suhu = parseInt(data);
        let warna = getBackgroundColor(suhu);
        console.log(suhu);
        console.log(warna);

        // Perbarui latar belakang elemen dengan id yang sesuai
        $("#point" + i).css("background-color", warna);
      });
    }
  }, 5000);
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
