<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistem Tiket Wisata</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

:root {
    /* Pink–Ungu Modern Theme */
    --bg-dark: radial-gradient(circle at top left, #8b5cf6, #be185d);
    --bg-light: radial-gradient(circle at top left, #fce7f3, #ede9fe);
    --text-dark: #fdf4ff;
    --text-light: #3b0764;
    --accent: #f472b6;
    --btn-dark: linear-gradient(135deg, #ec4899, #8b5cf6);
    --btn-light: linear-gradient(135deg, #f9a8d4, #c084fc);
}

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    height: 100vh;
    background: var(--bg-dark);
    color: var(--text-dark);
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.8s ease;
    position: relative;
    opacity: 0;
    animation: fadeInPage 1.2s ease forwards;
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
    to { opacity: 0; transform: scale(0.98); }
}

/* Bokeh background */
.bokeh {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    overflow: hidden;
    z-index: 0;
    pointer-events: none;
}
.bokeh span {
    position: absolute;
    display: block;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255,255,255,0.3), transparent 70%);
    animation: drift 18s linear infinite;
}
@keyframes drift {
    0% { transform: translateY(100vh) scale(0.6); opacity: 0.6; }
    50% { opacity: 0.8; }
    100% { transform: translateY(-10vh) scale(1.1); opacity: 0; }
}

/* Card */
.card {
    position: relative;
    z-index: 1;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 22px;
    backdrop-filter: blur(22px);
    padding: 55px 60px;
    text-align: center;
    width: 420px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    transition: all 0.5s ease;
}
.card:hover {
    transform: scale(1.03);
    box-shadow: 0 12px 35px rgba(236,72,153,0.4);
}

h1 { font-size: 28px; margin-bottom: 10px; color: var(--accent); }
p { color: #fde8f5; margin-bottom: 25px; }
.accent { color: var(--accent); font-weight: 600; }

.btn {
    display: block;
    margin: 10px auto;
    padding: 12px 25px;
    background: var(--btn-dark);
    border-radius: 10px;
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(139,92,246,0.3);
    width: 260px;
}
.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(236,72,153,0.4);
}

footer { margin-top: 25px; font-size: 13px; color: #fbcfe8; }

/* Toggle Button */
.toggle-btn {
    position: absolute;
    top: 20px; right: 20px;
    background: rgba(255,255,255,0.2);
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
    transform: scale(1.05);
}

/* Light Mode */
body.light {
    background: var(--bg-light);
    color: var(--text-light);
}
body.light .card {
    background: rgba(255, 255, 255, 0.7);
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

    <div class="bokeh">
        <span style="left:10%; width:80px; height:80px; animation-delay:0s; animation-duration:20s;"></span>
        <span style="left:25%; width:60px; height:60px; animation-delay:3s; animation-duration:18s;"></span>
        <span style="left:45%; width:100px; height:100px; animation-delay:6s; animation-duration:22s;"></span>
        <span style="left:65%; width:70px; height:70px; animation-delay:2s; animation-duration:17s;"></span>
        <span style="left:80%; width:90px; height:90px; animation-delay:5s; animation-duration:21s;"></span>
    </div>

    <div class="card">
        <h1>🎟️ <span class="accent">Sistem Tiket Wisata</span></h1>
        <p>Pilih destinasi wisata untuk melihat harga tiket:</p>

        <a href="{{ url('/tiket/Papuma/20000') }}" class="btn">Tiket Papuma — Rp 20.000</a>
        <a href="{{ url('/tiket/WatuUlo/15000') }}" class="btn">Tiket Watu Ulo — Rp 15.000</a>
        <a href="{{ url('/tiket/PancerPuger/10000') }}" class="btn">Tiket Pancer Puger — Rp 10.000</a>

        <footer>© 2025 <span class="accent">Sistem Tiket Wisata</span></footer>
    </div>

<script>
    // Fade Transition
    document.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", e => {
            e.preventDefault();
            document.body.classList.add("fade-out");
            setTimeout(() => window.location = link.href, 600);
        });
    });

    // Theme Toggle
    const toggle = document.getElementById("themeToggle");
    toggle.addEventListener("click", () => {
        document.body.classList.toggle("light");
        toggle.textContent = document.body.classList.contains("light") ? "🌞" : "🌙";
    });
</script>
</body>
</html>
