<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tiket Wisata Jember 💜🌸</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #d8b4fe, #f472b6, #c084fc);
      background-size: 400% 400%;
      animation: gradientFlow 12s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
    }

    @keyframes gradientFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Sparkling blink */
    .sparkle {
      position: absolute;
      width: 4px;
      height: 4px;
      background: rgba(255,255,255,0.9);
      border-radius: 50%;
      animation: blink 2s infinite ease-in-out alternate;
      pointer-events: none;
    }

    @keyframes blink {
      0%, 100% { opacity: 0.2; transform: scale(0.8); }
      50% { opacity: 1; transform: scale(1.3); }
    }

    /* Container tiket */
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      z-index: 10;
      padding: 2rem;
    }

    .card {
      width: 260px;
      height: 300px;
      border-radius: 25px;
      background: linear-gradient(160deg, rgba(255,192,203,0.3), rgba(192,128,252,0.25));
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      backdrop-filter: blur(10px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      overflow: hidden;
      text-align: center;
      color: #fff;
      position: relative;
    }

    .card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 20px 40px rgba(0,0,0,0.25);
    }

    .card h3 {
      margin-top: 25px;
      font-size: 1.5em;
      background: linear-gradient(90deg, #ff9ecb, #c084fc);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .card p {
      font-size: 1em;
      margin: 10px 20px;
      color: #ffe6f2;
    }

    .card button {
      background: linear-gradient(90deg, #f472b6, #c084fc);
      border: none;
      color: #fff;
      border-radius: 25px;
      padding: 10px 25px;
      cursor: pointer;
      margin-top: 15px;
      transition: all 0.3s ease;
    }

    .card button:hover {
      transform: scale(1.08);
      background: linear-gradient(90deg, #c084fc, #f472b6);
      box-shadow: 0 0 10px rgba(255,255,255,0.4);
    }

    /* emoji floating */
    .emoji {
      position: absolute;
      font-size: 1.8em;
      opacity: 0.8;
      animation: float 6s infinite ease-in-out alternate;
      pointer-events: none;
    }

    @keyframes float {
      0% { transform: translateY(0px) rotate(0deg); }
      100% { transform: translateY(-25px) rotate(10deg); }
    }

  </style>
</head>
<body>

  <!-- Sparkling blink -->
  <script>
    // bintang blink putih
    for (let i = 0; i < 70; i++) {
      const s = document.createElement('div');
      s.className = 'sparkle';
      s.style.top = Math.random() * 100 + '%';
      s.style.left = Math.random() * 100 + '%';
      s.style.animationDelay = (Math.random() * 2) + 's';
      document.body.appendChild(s);
    }

    // emoji mengapung
    const emojis = ['🌸','💖','🌊','🐚','🪸','🏖️','🐬','⭐','💗','🌺'];
    for (let i = 0; i < 20; i++) {
      const e = document.createElement('div');
      e.className = 'emoji';
      e.textContent = emojis[Math.floor(Math.random() * emojis.length)];
      e.style.top = Math.random() * 100 + '%';
      e.style.left = Math.random() * 100 + '%';
      e.style.animationDelay = (Math.random() * 5) + 's';
      document.body.appendChild(e);
    }
  </script>

  <!-- kartu tiket -->
  <div class="container">
    <div class="card">
      <h3>Papuma Beach 🌊💗</h3>
      <p>Tiket Masuk: Rp15.000</p>
      <p>✨ Nikmati deburan ombak lembut dan pasir putih romantis 💕</p>
      <button>💞 Beli Tiket</button>
    </div>

    <div class="card">
      <h3>Watu Ulo </h3>
      <p>Tiket Masuk: Rp10.000</p>
      <p>🌸 Penuh kisah legenda dan panorama yang memikat hati 💫</p>
      <button>🌷 Beli Tiket</button>
    </div>

    <div class="card">
      <h3>Pancer Puger 🐚🏖️</h3>
      <p>Tiket Masuk: Rp12.000</p>
      <p>🌅 Tempat terbaik menyaksikan matahari tenggelam di ufuk cinta 💜</p>
      <button>💖 Beli Tiket</button>
    </div>
  </div>

</body>
</html>
