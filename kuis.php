<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kuis AI</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom right, #d0e7ff, #ffffff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
      position: relative;
    }

    form {
      width: 100%;
      max-width: 1000px;
      z-index: 2;
    }

    .quiz-container {
      background: white;
      padding: 20px 30px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .column {
      flex: 1;
      padding: 10px;
      min-width: 300px;
    }

    .question {
      margin-bottom: 15px;
    }

    .question-title {
      font-weight: bold;
      margin-bottom: 5px;
    }

    label {
      display: block;
      margin: 5px 0;
      font-size: 14px;
    }

    input[type="radio"] {
      margin-right: 8px;
    }

    h2 {
      text-align: center;
      margin-bottom: 10px;
      font-size: 26px;
    }

    .btn-container {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
      padding: 0 20px;
    }

    .btn-container button {
      padding: 8px 20px;
      font-size: 14px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      background-color: #0288d1;
      color: white;
      transition: background-color 0.3s ease;
    }

    .btn-container button:hover {
      background-color: #0277bd;
    }

    /* Animasi Icon Terbang */
    .flying-icon {
      position: absolute;
      width: 60px;
      opacity: 0.6;
      animation: fly 18s linear infinite;
      z-index: 1;
    }

    .icon1 {
      top: 10%;
      left: -100px;
      animation-delay: 0s;
    }

    .icon2 {
      top: 35%;
      left: -150px;
      animation-delay: 5s;
    }

    .icon3 {
      top: 65%;
      left: -120px;
      animation-delay: 10s;
    }

    @keyframes fly {
      0% {
        transform: translateX(0) rotate(0deg);
      }
      100% {
        transform: translateX(120vw) rotate(360deg);
      }
    }
  </style>
</head>
<body>

  <!-- Icon Terbang -->
  <img src="https://cdn-icons-png.flaticon.com/512/4712/4712109.png" class="flying-icon icon1" alt="AI Chip">
  <img src="https://cdn-icons-png.flaticon.com/512/4712/4712000.png" class="flying-icon icon2" alt="Robot">
  <img src="https://cdn-icons-png.flaticon.com/512/2889/2889676.png" class="flying-icon icon3" alt="AI Head">

  <form action="hasil.php" method="POST">
    <h2>Kuis: Seberapa Paham Kamu tentang AI?</h2>
    <div class="quiz-container">
      <div class="column">
        <div class="question">
          <div class="question-title">1. Apa itu AI?</div>
          <label><input type="radio" name="q1" value="a" required> Perangkat keras</label>
          <label><input type="radio" name="q1" value="b"> Kecerdasan buatan</label>
          <label><input type="radio" name="q1" value="c"> Sistem operasi</label>
        </div>

        <div class="question">
          <div class="question-title">2. Contoh AI sehari-hari?</div>
          <label><input type="radio" name="q2" value="a" required> Mencetak dokumen</label>
          <label><input type="radio" name="q2" value="b"> Siri / Google Assistant</label>
          <label><input type="radio" name="q2" value="c"> Pompa air</label>
        </div>

        <div class="question">
          <div class="question-title">3. AI membantu di bidang?</div>
          <label><input type="radio" name="q3" value="a" required> Semua benar</label>
          <label><input type="radio" name="q3" value="b"> Kesehatan</label>
          <label><input type="radio" name="q3" value="c"> Pendidikan</label>
        </div>
      </div>

      <div class="column">
        <div class="question">
          <div class="question-title">4. AI bekerja berdasarkan?</div>
          <label><input type="radio" name="q4" value="a" required> Intuisi</label>
          <label><input type="radio" name="q4" value="b"> Data dan algoritma</label>
          <label><input type="radio" name="q4" value="c"> Keberuntungan</label>
        </div>

        <div class="question">
          <div class="question-title">5. AI bisa ditemukan di?</div>
          <label><input type="radio" name="q5" value="a" required> Sapu lidi</label>
          <label><input type="radio" name="q5" value="b"> Ponsel pintar</label>
          <label><input type="radio" name="q5" value="c"> Ember</label>
        </div>

        <div class="question">
          <div class="question-title">6. Agar AI tidak disalahgunakan?</div>
          <label><input type="radio" name="q6" value="a" required> Bebas pakai</label>
          <label><input type="radio" name="q6" value="b"> Tanpa aturan</label>
          <label><input type="radio" name="q6" value="c"> Diberi regulasi</label>
        </div>
      </div>
    </div>

    <div class="btn-container">
      <a href="slide5.php"><button type="button">⬅ Kembali</button></a>
      <button type="submit">Lihat Hasil</button>
    </div>
  </form>

</body>
</html>
