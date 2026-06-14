<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bukan Sihir, Ini Algoritma</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      overflow: hidden;
    }

    body {
      background: url('assets/images/gambar3.png') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      position: relative;
    }

    .hero {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px;
      z-index: 1;
      position: relative;
    }

    .hero h1 {
      font-size: 3em;
      margin-bottom: 10px;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
      animation: fadeInDown 1s ease forwards;
    }

    .hero p {
      font-size: 1.3em;
      margin-bottom: 30px;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
      opacity: 0;
      animation: fadeInUp 1s ease 0.5s forwards;
    }

    .start-btn {
      background-color: #007acc;
      color: #fff;
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 8px;
      font-size: 1em;
      font-weight: bold;
      transition: background 0.3s ease;
      opacity: 0;
      animation: fadeInUp 1s ease 1.2s forwards;
    }

    .start-btn:hover {
      background-color: #005f99;
    }

    /* Animasi teks */
    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translateY(-30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Bintang terbang (SVG animasi) */
    .stars {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      overflow: hidden;
      z-index: 0;
    }

    .star {
      position: absolute;
      width: 2px;
      height: 2px;
      background: white;
      border-radius: 50%;
      opacity: 0.8;
      animation: moveStar 10s linear infinite;
    }

    @keyframes moveStar {
      0% {
        transform: translateY(0) translateX(0);
        opacity: 0.8;
      }
      100% {
        transform: translateY(100vh) translateX(20px);
        opacity: 0;
      }
    }
  </style>
</head>
<body>

  <!-- 🔊 Audio otomatis -->
  <audio autoplay hidden>
    <source src="assets/audio/audio1.mp3" type="audio/mpeg">
    Browser Anda tidak mendukung audio.
  </audio>

  <!-- ⭐ Bintang-bintang -->
  <div class="stars">
    <!-- Generate multiple stars -->
    <script>
      for (let i = 0; i < 80; i++) {
        const star = document.createElement('div');
        star.classList.add('star');
        star.style.left = `${Math.random() * 100}%`;
        star.style.top = `${Math.random() * -100}%`;
        star.style.animationDuration = `${6 + Math.random() * 6}s`;
        star.style.opacity = `${0.5 + Math.random() * 0.5}`;
        document.querySelector('.stars').appendChild(star);
      }
    </script>
  </div>

  <header class="hero">
    <h1>Bukan Sihir, Ini Algoritma</h1>
    <p>Rahasia di Balik AI yang Kita Gunakan Tiap Hari</p>
    <a href="slide1.php" class="start-btn">Mulai Presentasi</a>
  </header>

</body>
</html>
