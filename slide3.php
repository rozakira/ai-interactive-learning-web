<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Slide 3 - Contoh Penggunaan AI</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom right, #e0f7ff, #cceeff);
      overflow-x: hidden;
      position: relative;
    }

    .hero {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 30px;
      animation: fadeIn 1.5s ease forwards;
      position: relative;
      z-index: 2;
    }

    .white-box {
      background: white;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      max-width: 1100px;
      width: 100%;
      animation: floatUp 2s ease-out;
    }

    .hero h1 {
      font-size: 2em;
      color: #005f99;
      margin-bottom: 10px;
      animation: fadeInDown 1.2s ease;
    }

    .hero p {
      font-size: 1em;
      max-width: 800px;
      color: #333;
      margin: 15px auto 25px;
      animation: fadeInUp 1.2s ease;
    }

    .video-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-bottom: 25px;
    }

    .video-row video {
      width: 100%;
      max-width: 500px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      animation: zoomIn 1.5s ease;
    }

    .start-btn {
      display: inline-block;
      padding: 10px 18px;
      background-color: #007acc;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: transform 0.3s ease, background 0.3s ease;
      margin: 0 10px;
    }

    .start-btn:hover {
      background-color: #005f99;
      transform: scale(1.1);
    }

    @media (max-width: 768px) {
      .video-row {
        flex-direction: column;
        align-items: center;
      }
    }

    /* === ANIMATIONS === */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes zoomIn {
      from { opacity: 0; transform: scale(0.8); }
      to { opacity: 1; transform: scale(1); }
    }

    @keyframes floatUp {
      0% { transform: translateY(15px); opacity: 0; }
      100% { transform: translateY(0); opacity: 1; }
    }

    /* === Floating AI Icons === */
    .icon {
      position: absolute;
      width: 40px;
      opacity: 0.6;
      animation: flyUp 10s infinite linear;
      z-index: 0;
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

    .icon:nth-child(1) { left: 8%; animation-delay: 0s; }
    .icon:nth-child(2) { left: 35%; animation-delay: 3s; }
    .icon:nth-child(3) { left: 60%; animation-delay: 6s; }
    .icon:nth-child(4) { left: 85%; animation-delay: 1.5s; }
  </style>
</head>
<body>

  <!-- Floating AI Icons (pastikan file ada di folder yang benar) -->
  <img src="assets/images/icon-robot.png" class="icon" style="top: 100%;" />
  <img src="assets/images/icon-chip.png" class="icon" style="top: 110%;" />
  <img src="assets/images/icon-cpu.png" class="icon" style="top: 120%;" />
  <img src="assets/images/icon-ai.png" class="icon" style="top: 130%;" />

  <div class="hero">
    <div class="white-box">
      <h1>Manfaat Penggunaan AI</h1>
      <p>
        AI digunakan dalam berbagai aspek kehidupan seperti asisten virtual (contoh: Siri, Google Assistant), 
        rekomendasi film di Netflix, atau sistem navigasi seperti Google Maps.
      </p>

      <div class="video-row">
        <video controls>
          <source src="assets/vidieos/vidio1.mp4" type="video/mp4">
          Browser Anda tidak mendukung tag video.
        </video>
        <video controls>
          <source src="assets/vidieos/vidio2.mp4" type="video/mp4">
          Browser Anda tidak mendukung tag video.
        </video>
      </div>

      <div>
        <a href="slide2.php" class="start-btn">⬅ Kembali</a>
        <a href="slide4.php" class="start-btn">Lanjut ➡</a>
      </div>
    </div>
  </div>

</body>
</html>
