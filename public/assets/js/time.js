function displayCurrentTime() {
  var now = new Date();
  var hours = now.getHours();
  var minutes = now.getMinutes();

  // Format waktu agar memiliki dua digit
  hours = (hours < 10 ? "0" : "") + hours;
  minutes = (minutes < 10 ? "0" : "") + minutes;

  // Tampilkan waktu di elemen dengan id "current-time"
  document.getElementById("current-time").innerText = hours + ":" + minutes;

  // Perbarui waktu setiap detik
  setTimeout(displayCurrentTime, 1000);
}

// Panggil fungsi untuk menampilkan waktu saat halaman dimuat
window.onload = function () {
  displayCurrentTime();
};
