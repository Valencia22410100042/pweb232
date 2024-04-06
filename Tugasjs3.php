<!DOCTYPE html>
<html>
<head>

<title>Hitung Volume</title>
</head>
<body>
  <label for="balok">Balok</label>
  <input type="checkbox" id="balok">
  <label for="kubus">Kubus</label>
  <input type="checkbox" id="kubus"><br><br>

  <p id="inputBalok" style="display: none;">
    Panjang: <input type="number" id="panjang"><br>
    Lebar: <input type="number" id="lebar"><br>
    Tinggi: <input type="number" id="tinggi"><br>
  </p>

  <p id="inputKubus" style="display: none;">
    Sisi: <input type="number" id="sisi"><br>
  </p>

  <button onclick="hitungVolume()">Hitung Volume</button><br><br>

  <input type="number" name="hasil" id="hasil">

  <script>
    function hitungVolume() {
      let balokCheckbox = document.getElementById("balok");
      let kubusCheckbox = document.getElementById("kubus");

      let inputBalok = document.getElementById("inputBalok");
      let inputKubus = document.getElementById("inputKubus");

      let p = document.getElementById("hasil");

      if (balokCheckbox.checked) {
        let panjang = parseFloat(document.getElementById("panjang").value);
        let lebar = parseFloat(document.getElementById("lebar").value);
        let tinggi = parseFloat(document.getElementById("tinggi").value);
        let volume = panjang * lebar * tinggi;
        (document.getElementById("hasil").value = volume)
      } else if (kubusCheckbox.checked) {
        let sisi = parseFloat(document.getElementById("sisi").value);
        let volume = sisi * sisi * sisi;
        (document.getElementById("hasil").value = volume)
      } else {
        p.innerHTML = "Silakan centang Balok atau Kubus.";
      }
    }

    document.getElementById("balok").addEventListener("change", function() {
        let inputBalok = document.getElementById("inputBalok");
      inputBalok.style.display = this.checked ? "block" : "none";
    });

    document.getElementById("kubus").addEventListener("change", function() {
        let inputKubus = document.getElementById("inputKubus");
      inputKubus.style.display = this.checked ? "block" : "none";
    });
  </script>
</body>
</html>
