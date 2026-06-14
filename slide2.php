<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Slide 2 - Penjelasan Melalui Narasi</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom right, #d0f2ff, #ffffff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }

    .hero {
      background: white;
      padding: 30px;
      border-radius: 14px;
      box-shadow: 0 4px 18px rgba(0, 0, 0, 0.2);
      max-width: 700px;
      width: 90%;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    .hero h1 {
      font-size: 26px;
      margin-bottom: 10px;
      animation: fadeInUp 1.2s ease-out forwards;
    }

    .hero p {
      font-size: 15px;
      margin-bottom: 15px;
      color: #333;
      animation: fadeInUp 1.6s ease-out forwards;
    }

    .hero img {
      width: 100%;
      max-width: 400px;
      border-radius: 10px;
      margin-bottom: 15px;
      animation: fadeInUp 2s ease-out forwards;
    }

    audio {
      width: 100%;
      max-width: 400px;
      animation: fadeInUp 2.4s ease-out forwards;
    }

    .start-btn {
      background-color: #4da3ff;
      color: white;
      padding: 10px 18px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
      margin: 5px;
      animation: fadeInUp 2.6s ease-out forwards;
      display: inline-block;
    }

    .start-btn:hover {
      background-color: #2f8be0;
    }

    /* Animasi teks */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Robot floating animation */
    .robot-float {
      position: absolute;
      font-size: 25px;
      animation: floatRobot 8s infinite linear;
      opacity: 0.7;
    }

    .robot1 { top: 20%; left: -5%; animation-delay: 0s; }
    .robot2 { top: 50%; left: -10%; animation-delay: 2s; }
    .robot3 { top: 70%; left: -7%; animation-delay: 4s; }

    @keyframes floatRobot {
      0% { transform: translateX(0) rotate(0deg); }
      100% { transform: translateX(120vw) rotate(360deg); }
    }
  </style>
</head>
<body>

  <!-- Robot animasi beterbangan -->
  <div class="robot-float robot1">🤖</div>
  <div class="robot-float robot2">👾</div>
  <div class="robot-float robot3">⚙️</div>

  <div class="hero">
    <h1>Mengapa AI Penting dalam Kehidupan Kita?</h1>
    <p>Dengarkan narasi singkat berikut untuk memahami pentingnya AI dalam berbagai sektor.</p>

    <img src="assets/images/gambar2.png" alt="AI Image 2">

    <audio controls>
      <source src="assets/audio/narasi1.mp3" type="audio/mpeg">
      Browser Anda tidak mendukung pemutar audio.
    </audio>

    <div style="margin-top: 15px;">
      <a href="slide1.php" class="start-btn">⬅ Kembali</a>
      <a href="slide3.php" class="start-btn">Lanjut ➡</a>
    </div>
  </div>

</body>
</html>
