<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="kuis.css">
<title>Hitung Volume dan Luas Permukaan</title>
</head>
<body>
<form id="calculatorForm">
  <label for="vbalok">Volume Balok</label>
  <input type="checkbox" id="vbalok" name="volume"><br><br>
  <label for="vkubus">Volume Kubus</label>
  <input type="checkbox" id="vkubus" name="volume"><br><br>
  <label for="vtabung">Volume Tabung</label>
  <input type="checkbox" id="vtabung" name="volume"><br><br>
  <label for="lbalok">Luas Balok</label>
  <input type="checkbox" id="lbalok" name="luas"><br><br>
  <label for="lkubus">Luas Kubus</label>
  <input type="checkbox" id="lkubus" name="luas"><br><br>
  <label for="ltabung">Luas Tabung</label>
  <input type="checkbox" id="ltabung" name="luas"><br><br>

  <div id="inputBalok" style="display: none;">
    <label for="panjang">Panjang:</label> <input type="number" id="panjang" name="panjang"><br>
    <label for="lebar">Lebar:</label> <input type="number" id="lebar" name="lebar"><br>
    <label for="tinggi">Tinggi:</label> <input type="number" id="tinggi" name="tinggi"><br>
  </div>

  <div id="inputKubus" style="display: none;">
    <label for="sisi">Sisi:</label> <input type="number" id="sisi" name="sisi"><br>
  </div>

  <div id="inputTabung" style="display: none;">
    <label for="phi">Phi:</label> <input type="number" id="phi" name="phi"><br>
    <label for="jari_jari">Jari-jari:</label> <input type="number" id="jari_jari" name="jari_jari"><br>
    <label for="tinggi_tabung">Tinggi:</label> <input type="number" id="tinggi_tabung" name="tinggi_tabung"><br>
  </div>

  <button type="button" onclick="hitung()">Hitung</button><br><br>

  <input type="text" name="hasil" id="hasil" readonly>

</form>

<script>
  function hitung() {
    let vbalokCheckbox = document.getElementById("vbalok");
    let vkubusCheckbox = document.getElementById("vkubus");
    let vtabungCheckbox = document.getElementById("vtabung");
    let lbalokCheckbox = document.getElementById("lbalok");
    let lkubusCheckbox = document.getElementById("lkubus");
    let ltabungCheckbox = document.getElementById("ltabung");

    let volumeCheckboxes = [vbalokCheckbox, vkubusCheckbox, vtabungCheckbox];
    let luasCheckboxes = [lbalokCheckbox, lkubusCheckbox, ltabungCheckbox];

    let numVolumeChecked = volumeCheckboxes.filter(checkbox => checkbox.checked).length;
    let numLuasChecked = luasCheckboxes.filter(checkbox => checkbox.checked).length;

    if (numVolumeChecked > 1 || numLuasChecked > 1) {
      alert("Pilih salah satu!");
      return;
    }

    let p = document.getElementById("hasil");

    if (vbalokCheckbox.checked) {
      let panjang = parseFloat(document.getElementById("panjang").value);
      let lebar = parseFloat(document.getElementById("lebar").value);
      let tinggi = parseFloat(document.getElementById("tinggi").value);
      let volume = panjang * lebar * tinggi;
      p.value = volume;
    } else if (vkubusCheckbox.checked) {
      let sisi = parseFloat(document.getElementById("sisi").value);
      let volume = sisi * sisi * sisi;
      p.value = volume;
    } else if (vtabungCheckbox.checked) {
      let phi = parseFloat(document.getElementById("phi").value);
      let jari_jari = parseFloat(document.getElementById("jari_jari").value);
      let tinggi_tabung = parseFloat(document.getElementById("tinggi_tabung").value);
      let volume = phi * jari_jari * jari_jari * tinggi_tabung;
      p.value = volume;
    } else if (lbalokCheckbox.checked) {
      let panjang = parseFloat(document.getElementById("panjang").value);
      let lebar = parseFloat(document.getElementById("lebar").value);
      let tinggi = parseFloat(document.getElementById("tinggi").value);
      let luas = 2 * ((panjang * lebar) + (panjang * tinggi) + (lebar * tinggi));
      p.value = luas;
    } else if (lkubusCheckbox.checked) {
      let sisi = parseFloat(document.getElementById("sisi").value);
      let luas = 6 * (sisi * sisi);
      p.value = luas;
    } else if (ltabungCheckbox.checked) {
      let phi = parseFloat(document.getElementById("phi").value);
      let jari_jari = parseFloat(document.getElementById("jari_jari").value);
      let tinggi_tabung = parseFloat(document.getElementById("tinggi_tabung").value);
      let luas_permukaan_tabung = 2 * phi * jari_jari * (jari_jari + tinggi_tabung);
      p.value = luas_permukaan_tabung;

    } else {
      p.innerHTML = "Silakan centang salah satu.";
    }
  }

  document.getElementById("vbalok").addEventListener("change", function() {
    let inputBalok = document.getElementById("inputBalok");
    inputBalok.style.display = this.checked ? "block" : "none";
  });

  document.getElementById("vkubus").addEventListener("change", function() {
    let inputKubus = document.getElementById("inputKubus");
    inputKubus.style.display = this.checked ? "block" : "none";
  });

  document.getElementById("vtabung").addEventListener("change", function() {
    let inputTabung = document.getElementById("inputTabung");
    inputTabung.style.display = this.checked ? "block" : "none";
  });

  document.getElementById("lbalok").addEventListener("change", function() {
    let inputBalok = document.getElementById("inputBalok");
    inputBalok.style.display = this.checked ? "block" : "none";
  });

  document.getElementById("lkubus").addEventListener("change", function() {
    let inputKubus = document.getElementById("inputKubus");
    inputKubus.style.display = this.checked ? "block" : "none";
  });

  document.getElementById("ltabung").addEventListener("change", function() {
    let inputTabung = document.getElementById("inputTabung");
    inputTabung.style.display = this.checked ? "block" : "none";
  });
</script>
</body>
</html>
