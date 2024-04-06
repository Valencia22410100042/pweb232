<!DOCTYPE html>
<html>
<body>

<h2>Menampilkan Bilangan dari Start sampai End</h2>

<form>
  <label for="start">Start:</label>
  <input type="number" id="start" name="start"><br><br>
  
  <label for="end">End:</label>
  <input type="number" id="end" name="end"><br><br>
  
  <button type="button" onclick="tampilkanBilangan()">Tampilkan</button>
</form>

<p id="hasil"></p>

<script>
function tampilkanBilangan() {
  start = parseInt(document.getElementById("start").value);
  end = parseInt(document.getElementById("end").value);
  text = '';

  if (isNaN(start) || isNaN(end)) {
    alert("Silakan isi nilai start dan end dengan benar.");
    return;
  }

  if (start >= end) {
    alert("Nilai start harus lebih kecil dari nilai end.");
    return;
  }

  for (let i = start; i <= end; i++) {
    text += i + "<br>";
  }

  document.getElementById("hasil").innerHTML = text;
}
</script>

</body>
</html>
