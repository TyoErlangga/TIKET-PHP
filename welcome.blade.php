<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistem Tiket Wisata</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

:root {
    --bg-dark: linear-gradient(135deg, #ec4899, #8b5cf6);
    --bg-light: linear-gradient(135deg, #fce7f3, #ede9fe);
    --text-dark: #fff7fc;
    --text-light: #3b0764;
    --accent: #f472b6;
    --btn-dark: linear-gradient(135deg, #f472b6, #c084fc);
    --btn-light: linear-gradient(135deg, #f9a8d4, #c084fc);
}

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    height: 100vh;
    background: var(--bg-dark);
    color: var(--text-dark);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    position: relative;
    opacity: 0;
    animation: fadeInPage 1.5s ease forwards;
}

@keyframes fadeInPage {
    from { opacity: 0; transform: scale(1.02); }
    to { opacity: 1; transform: scale(1); }
}

.fade-out {
    animation: fadeOutPage 0.8s ease forwards;
}
@keyframes fadeOutPage {
    from { opacity: 1; transform: scale(1); }
    to { opacity: 0; transform: scale(0.97); }
}

/* 🌸❤️ Background Emoji Grid */
.emoji-bg {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
    grid-auto-rows: 60px;
    justify-items: center;
    align-items: center;
    font-size: 26px;
    opacity: 0.12;
    user-select: none;
    z-index: 0;
}

/* ✨ Sparkle effect */
.sparkle {
    position: absolute;
    width: 6px;
    height: 6px;
    background: white;
    border-radius: 50%;
    box-shadow: 0 0 10px white;
    opacity: 0;
    animation: blink 3s infinite ease-in-out;
}
@keyframes blink {
    0%, 100% { opacity: 0; transform: scale(0.8); }
    50% { opacity: 1; transform: scale(1.3); }
}

/* Card */
.card {
    position: relative;
    z-index: 2;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 25px;
    backdrop-filter: blur(22px);
    padding: 60px 65px;
    text-align: center;
    width: 420px;
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.3);
    transition: all 0.4s ease;
}
.card:hover {
    transform: scale(1.03);
    box-shadow: 0 12px 40px rgba(236, 72, 153, 0.45);
}

h1 {
    font-size: 30px;
    margin-bottom: 15px;
    color: var(--accent);
}
p {
    color: #fde8f5;
    margin-bottom: 25px;
}
.accent {
    color: var(--accent);
    font-weight: 600;
}

/* Buttons */
.btn {
    display: block;
    margin: 10px auto;
    padding: 14px 25px;
    background: var(--btn-dark);
    border-radius: 10px;
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 4px 14px rgba(139, 92, 246, 0.3);
    width: 260px;
}
.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(236, 72, 153, 0.5);
}

footer {
    margin-top: 25px;
    font-size: 13px;
    color: #fbcfe8;
}

/* Toggle Theme */
.toggle-btn {
    position: absolute;
    top: 20px; right: 20px;
    background: rgba(255,255,255,0.25);
    border: none;
    border-radius: 30px;
    width: 50px; height: 50px;
    cursor: pointer;
    font-size: 22px;
    color: white;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    z-index: 10;
}
.toggle-btn:hover {
    transform: scale(1.08);
}

/* Light Mode */
body.light {
    background: var(--bg-light);
    color: var(--text-light);
}
body.light .card {
    background: rgba(255, 255, 255, 0.85);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}
body.light h1, body.light p { color: var(--text-light); }
body.light .btn {
    background: var(--btn-light);
    color: #3b0764;
}
body.light .toggle-btn {
    background: rgba(0,0,0,0.1);
    color: #3b0764;
}
</style>
</head>
<body>
    <button class="toggle-btn" id="themeToggle">🌙</button>

    <div class="emoji-bg" id="emojiBackground"></div>

    <div class="card">
        <h1>🎟️ <span class="accent">Sistem Tiket Wisata</span></h1>
        <p>Pilih destinasi wisata untuk melihat harga tiket:</p>

        <a href="{{ url('/tiket/Papuma/20000') }}" class="btn">Tiket Papuma — Rp 20.000</a>
        <a href="{{ url('/tiket/WatuUlo/15000') }}" class="btn">Tiket Watu Ulo — Rp 15.000</a>
        <a href="{{ url('/tiket/PancerPuger/10000') }}" class="btn">Tiket Pancer Puger — Rp 10.000</a>

        <footer>© 2025 <span class="accent">Sistem Tiket Wisata</span></footer>
    </div>

<script>
// 🌸❤️ Generate Emoji Grid Background
const emojiContainer = document.getElementById('emojiBackground');
const emojis = ['🌸','🌺','🌷','💮','🌼','💖','💗','💘','💞','💕'];
const columns = Math.floor(window.innerWidth / 60);
const rows = Math.floor(window.innerHeight / 60);
for (let i = 0; i < columns * rows; i++) {
    const span = document.createElement('span');
    span.textContent = emojis[Math.floor(Math.random() * emojis.length)];
    emojiContainer.appendChild(span);
}

// ✨ Sparkles (white blinking light)
for (let i = 0; i < 30; i++) {
    const sparkle = document.createElement('div');
    sparkle.classList.add('sparkle');
    sparkle.style.left = `${Math.random() * 100}%`;
    sparkle.style.top = `${Math.random() * 100}%`;
    sparkle.style.animationDelay = `${Math.random() * 5}s`;
    sparkle.style.animationDuration = `${2 + Math.random() * 3}s`;
    document.body.appendChild(sparkle);
}

// 🌙 Toggle Theme
const toggle = document.getElementById('themeToggle');
toggle.addEventListener('click', () => {
    document.body.classList.toggle('light');
    toggle.textContent = document.body.classList.contains('light') ? '🌞' : '🌙';
});

// ✨ Fade Transition for Links
document.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", e => {
        e.preventDefault();
        document.body.classList.add("fade-out");
        setTimeout(() => window.location = link.href, 600);
    });
});
</script>
</body>
</html>
