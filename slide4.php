<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dampak Buruk AI</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom right, #d0e7ff, #ffffff);
      position: relative;
      overflow-x: hidden;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 60px 20px;
      min-height: 100vh;
      position: relative;
      z-index: 2;
    }

    .content-box {
      background: white;
      border-radius: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      display: flex;
      max-width: 1100px;
      width: 100%;
      overflow: hidden;
      flex-wrap: wrap;
      animation: floatUp 1.5s ease;
    }

    .text-section {
      flex: 1;
      padding: 50px 40px;
      min-width: 300px;
      animation: fadeInLeft 1.5s ease;
    }

    .text-section h2 {
      color: #007acc;
      margin-bottom: 20px;
      font-size: 32px;
    }

    .text-section p {
      font-size: 16px;
      line-height: 1.7;
      color: #333;
      margin-bottom: 15px;
    }

    .text-section ul {
      margin-left: 20px;
      color: #444;
    }

    .text-section ul li {
      margin-bottom: 10px;
    }

    .btn-nav {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 22px;
      background: #007acc;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      margin-right: 12px;
      transition: background 0.3s ease;
    }

    .btn-nav:hover {
      background: #005f99;
    }

    .video-section {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #f0f8ff;
      padding: 20px;
      min-width: 300px;
      animation: fadeInRight 1.5s ease;
    }

    video {
      width: 90%;
      max-width: 500px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    }

    @media (max-width: 768px) {
      .content-box {
        flex-direction: column;
      }

      .video-section {
        padding-top: 0;
      }

      .text-section {
        padding: 30px 20px;
      }
    }

    /* === ANIMASI TEKS === */
    @keyframes fadeInLeft {
      from { opacity: 0; transform: translateX(-50px); }
      to { opacity: 1; transform: translateX(0); }
    }

    @keyframes fadeInRight {
      from { opacity: 0; transform: translateX(50px); }
      to { opacity: 1; transform: translateX(0); }
    }

    @keyframes floatUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* === ANIMASI ICON TERBANG === */
    .icon {
      position: absolute;
      width: 40px;
      opacity: 0.6;
      animation: flyUp 10s infinite linear;
      z-index: 1;
    }

    @keyframes flyUp {
      0% {
        transform: translateY(100vh) rotate(0deg);
        opacity: 0;
      }
      50% {
        opacity: 0.8;
      }
      100% {
        transform: translateY(-150px) rotate(360deg);
        opacity: 0;
      }
    }

    .icon:nth-child(1) { left: 10%; animation-delay: 0s; }
    .icon:nth-child(2) { left: 30%; animation-delay: 2s; }
    .icon:nth-child(3) { left: 55%; animation-delay: 4s; }
    .icon:nth-child(4) { left: 80%; animation-delay: 1s; }
  </style>
</head>
<body>

  <!-- ICON TERBANG -->
  <img src="assets/images/icon-robot.png" class="icon" style="top: 110%;" />
  <img src="assets/images/icon-chip.png" class="icon" style="top: 115%;" />
  <img src="assets/images/icon-cpu.png" class="icon" style="top: 120%;" />
  <img src="assets/images/icon-ai.png" class="icon" style="top: 125%;" />

  <div class="container">
    <div class="content-box">
      <div class="text-section">
        <h2>Dampak Buruk Penggunaan AI</h2>
        <p>
          Meskipun AI memberikan banyak manfaat, namun penggunaannya yang tidak tepat juga bisa menimbulkan risiko. Beberapa dampak negatif dari AI antara lain:
        </p>
        <ul>
          <li>Pengangguran akibat otomatisasi pekerjaan.</li>
          <li>Penyebaran informasi palsu melalui deepfake.</li>
          <li>Kekhawatiran tentang pelanggaran privasi data pengguna.</li>
          <li>Diskriminasi algoritmik karena bias dalam data latih.</li>
          <li>Ketergantungan berlebihan terhadap teknologi.</li>
        </ul>

        <a href="slide3.php" class="btn-nav">⬅ Kembali</a>
        <a href="slide5.php" class="btn-nav">Lanjut ➡</a>
      </div>

      <div class="video-section">
        <video controls>
          <source src="assets/vidieos/vidio3.mp4" type="video/mp4">
          Browser Anda tidak mendukung video ini.
        </video>
      </div>
    </div>
  </div>

</body>
</html>
