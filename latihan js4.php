<!DOCTYPE html>
<html>
</head>
<body>
  <h2>Hitung Nilai Akhir</h2>

  <form>
    <label for="uts">Nilai UTS:</label>
    <input type="number" id="uts" min="0" max="100"><br>
    
    <label for="uas">Nilai UAS:</label>
    <input type="number" id="uas" min="0" max="100"><br>
    
    <label for="tugas">Nilai Tugas:</label>
    <input type="number" id="tugas" min="0" max="100"><br>
    
    <button type="button" onclick="hitungNilai()">Hitung Nilai Akhir</button><br>

    <input type="number" name="hasil" id="hasil">
  </form>

  <script>
    function hitungNilai() {
      uts = parseFloat(document.getElementById("uts").value);
      uas = parseFloat(document.getElementById("uas").value);
      tugas = parseFloat(document.getElementById("tugas").value);

      if (isNaN(uts) || isNaN(uas) || isNaN(tugas)) {
        alert("Silakan isi semua nilai dengan benar.");
        return;
      }

      UTS = 0.3;
      UAS = 0.3;
      Tugas = 0.4;

      nilaiAkhir = (uts * UTS) + (uas * UAS) + (tugas * Tugas);
      (document.getElementById("hasil").value = nilaiAkhir)
      
    }

  </script>

</body>
</html>