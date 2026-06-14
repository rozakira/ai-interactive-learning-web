<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Slide 5 - Prediksi AI di Masa Depan</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom right, #e3f2fd, #ffffff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      position: relative;
      overflow: hidden;
    }

    .container {
      display: flex;
      width: 90%;
      max-width: 1100px;
      background-color: #ffffffcc;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      border-radius: 15px;
      overflow: hidden;
      z-index: 1;
    }

    .text-box {
      flex: 1;
      padding: 30px;
    }

    .text-box h2 {
      color: #1976d2;
      font-size: 28px;
      margin-bottom: 15px;
    }

    .text-box p {
      font-size: 18px;
      line-height: 1.6;
      color: #333;
    }

    .video-box {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    iframe {
      width: 100%;
      height: 300px;
      border: none;
      border-radius: 12px;
    }

    .next-button,
    .back-button {
      position: absolute;
      bottom: 30px;
      padding: 12px 20px;
      background-color: #1976d2;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      text-decoration: none;
      z-index: 2;
    }

    .next-button {
      right: 40px;
    }

    .back-button {
      left: 40px;
    }

    .next-button:hover,
    .back-button:hover {
      background-color: #1565c0;
    }

    /* Elemen Terbang */
    .flying-icon {
      position: absolute;
      width: 60px;
      opacity: 0.7;
      animation: fly 15s linear infinite;
    }

    .icon1 {
      top: 10%;
      left: -80px;
      animation-delay: 0s;
    }

    .icon2 {
      top: 40%;
      left: -120px;
      animation-delay: 5s;
    }

    .icon3 {
      top: 70%;
      left: -100px;
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

  <!-- Elemen AI terbang -->
  <img src="https://cdn-icons-png.flaticon.com/512/4712/4712109.png" class="flying-icon icon1" alt="AI chip">
  <img src="https://cdn-icons-png.flaticon.com/512/4712/4712000.png" class="flying-icon icon2" alt="Robot">
  <img src="https://cdn-icons-png.flaticon.com/512/2889/2889676.png" class="flying-icon icon3" alt="AI Head">

  <div class="container">
    <div class="text-box">
      <h2>Prediksi AI di Masa Depan</h2>
      <p>
        Kecerdasan buatan (AI) diprediksi akan memainkan peran yang semakin besar dalam kehidupan manusia. 
        AI akan digunakan untuk otomatisasi yang lebih canggih, menciptakan solusi dalam bidang kesehatan, transportasi, pendidikan, dan bahkan seni. 
        Meskipun menghadirkan banyak manfaat, penggunaan AI juga harus diiringi regulasi agar tidak disalahgunakan. 
        Mari kita lihat gambaran masa depan AI melalui video berikut.
      </p>
    </div>
    <div class="video-box">
      <iframe src="https://www.youtube.com/embed/2ePf9rue1Ao" allowfullscreen></iframe>
    </div>
  </div>

  <a href="slide4.php" class="back-button">← Kembali </a>
  <a href="kuis.php" class="next-button">Kerjakan Kuis →</a>

</body>
</html>
