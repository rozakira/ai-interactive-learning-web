<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Kuis</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(to bottom right, #d0eaff, #ffffff);
      overflow: hidden;
    }

    .result-container {
      background-color: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
      text-align: center;
      width: 90%;
      max-width: 600px;
      animation: popIn 0.8s ease-out;
      position: relative;
    }

    h1 {
      font-size: 32px;
      margin-bottom: 20px;
      color: #007acc;
      animation: floatText 2s ease-in-out infinite;
    }

    .score {
      font-size: 26px;
      margin: 20px 0;
      color: #333;
    }

    .message {
      font-size: 22px;
      margin-top: 10px;
      color: #555;
    }

    .emoji {
      font-size: 50px;
      margin-top: 15px;
      animation: bounce 1s ease infinite;
    }

    a.button {
      display: inline-block;
      margin: 20px 10px 0 10px;
      text-decoration: none;
      padding: 12px 24px;
      background-color: #007acc;
      color: white;
      border-radius: 10px;
      transition: background-color 0.3s, transform 0.3s;
    }

    a.button:hover {
      background-color: #005fa3;
      transform: scale(1.05);
    }

    @keyframes popIn {
      0% {
        transform: scale(0.5);
        opacity: 0;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes bounce {
      0%, 100% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-10px);
      }
    }

    @keyframes floatText {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-5px);
      }
    }
  </style>
</head>
<body>

<?php
$jawaban_benar = 0;

// Cek jawaban
if ($_POST['q1'] == 'b') $jawaban_benar++;
if ($_POST['q2'] == 'b') $jawaban_benar++;
if ($_POST['q3'] == 'a') $jawaban_benar++;
if ($_POST['q4'] == 'b') $jawaban_benar++;
if ($_POST['q5'] == 'b') $jawaban_benar++;
if ($_POST['q6'] == 'c') $jawaban_benar++;

// Tentukan pesan & emotikon
if ($jawaban_benar == 6) {
    $pesan = "Luar biasa! Kamu benar semua!";
    $emoji = "🎉🤖✨";
} elseif ($jawaban_benar >= 4) {
    $pesan = "Bagus! Kamu sudah cukup paham.";
    $emoji = "😊👍";
} elseif ($jawaban_benar >= 2) {
    $pesan = "Masih bisa lebih baik, tetap semangat!";
    $emoji = "😅💡";
} else {
    $pesan = "Yuk belajar lagi, semangat!";
    $emoji = "😢📚";
}
?>

<div class="result-container">
  <h1>Hasil Kuis Kamu</h1>
  <div class="score">Kamu menjawab benar <strong><?= $jawaban_benar; ?>/6</strong> soal</div>
  <div class="message"><?= $pesan; ?></div>
  <div class="emoji"><?= $emoji; ?></div>
  
  <a class="button" href="kuis.php">🔁 Ulangi Kuis</a>
  <a class="button" href="index.php">🏠 Halaman Awal</a>
</div>

</body>
</html>
