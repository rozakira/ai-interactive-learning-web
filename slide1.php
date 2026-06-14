<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Slide 1 - Pengenalan AI</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom right, #d6f1ff, #cceeff);
      overflow-x: hidden;
    }

    .container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      position: relative;
      z-index: 1;
    }

    .card {
      background-color: #ffffff;
      border-radius: 15px;
      padding: 30px;
      max-width: 900px;
      width: 100%;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
      animation: fadeInUp 1s ease forwards;
      position: relative;
      z-index: 2;
    }

    .card h1 {
      font-size: 2.4em;
      color: #005f99;
      margin-bottom: 15px;
      animation: bounceIn 1.2s ease forwards;
      text-shadow: 0 0 8px #99e6ff;
    }

    .card p {
      font-size: 1.1em;
      color: #333;
      margin-bottom: 25px;
      animation: fadeIn 1.5s ease 0.4s forwards;
      opacity: 0;
    }

    .image-row {
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
      margin-bottom: 25px;
    }

    .image-row img {
      width: 200px;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transform: scale(0);
      animation: zoomIn 0.6s ease forwards;
    }

    .image-row img:nth-child(2) { animation-delay: 0.3s; }
    .image-row img:nth-child(3) { animation-delay: 0.6s; }

    .btn-group {
      margin-top: 10px;
    }

    .start-btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 0 10px;
      background-color: #007acc;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: background 0.3s ease;
      animation: fadeInUp 1s ease 1.2s forwards;
      opacity: 0;
    }

    .start-btn:hover {
      background-color: #005f99;
    }

    /* Animations */
    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    @keyframes zoomIn {
      0% { opacity: 0; transform: scale(0.5); }
      100% { opacity: 1; transform: scale(1); }
    }

    @keyframes bounceIn {
      0% { opacity: 0; transform: scale(0.3); }
      50% { opacity: 1; transform: scale(1.05); }
      70% { transform: scale(0.9); }
      100% { transform: scale(1); }
    }

    /* Robot particle animation */
    .robot-particle {
      position: absolute;
      font-size: 24px;
      opacity: 0.7;
      animation: floatRobot 20s linear infinite;
    }

    .robot1 { top: 10%; left: -10%; animation-delay: 0s; }
    .robot2 { top: 40%; left: -8%; animation-delay: 4s; }
    .robot3 { top: 70%; left: -12%; animation-delay: 8s; }

    @keyframes floatRobot {
      0% { transform: translateX(0) rotate(0deg); }
      100% { transform: translateX(120vw) rotate(360deg); }
    }

    @media (max-width: 768px) {
      .image-row {
        flex-direction: column;
        align-items: center;
      }

      .image-row img {
        width: 80%;
      }
    }
  </style>
</head>
<body>

  <!-- 🔊 Audio otomatis -->
  <audio autoplay hidden>
    <source src="assets/audio/audio2.mp3" type="audio/mpeg">
    Browser Anda tidak mendukung audio.
  </audio>

  <!-- ✨ Robot Animasi -->
  <div class="robot-particle robot1">🤖</div>
  <div class="robot-particle robot2">⚙️</div>
  <div class="robot-particle robot3">👾</div>

  <div class="container">
    <div class="card">
      <h1>Apa Itu Artificial Intelligence (AI)?</h1>
      <p>
        Artificial Intelligence atau Kecerdasan Buatan adalah cabang ilmu komputer yang berfokus pada pembuatan sistem 
        yang dapat meniru kecerdasan manusia, seperti berpikir, belajar, dan mengambil keputusan.
      </p>

      <div class="image-row">
        <img src="assets/images/gambar1.png" alt="AI 1">
        <img src="assets/images/gambar2.png" alt="AI 2">
        <img src="assets/images/gambar3.png" alt="AI 3">
      </div>

      <div class="btn-group">
        <a href="index.php" class="start-btn">⬅ Kembali</a>
        <a href="slide2.php" class="start-btn">Lanjut ➡</a>
      </div>
    </div>
  </div>

</body>
</html>
