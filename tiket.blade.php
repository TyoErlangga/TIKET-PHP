<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Informasi Tiket Wisata</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #fdf2f8, #e0e7ff);
    color: #1e293b;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.card {
    background: white;
    padding: 40px 60px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    text-align: center;
    max-width: 400px;
}

h2 {
    color: #4338ca;
    margin-bottom: 20px;
}

p {
    font-size: 18px;
    margin: 8px 0;
}

.harga {
    color: #16a34a;
    font-weight: 600;
}

a {
    display: inline-block;
    margin-top: 25px;
    background: linear-gradient(135deg, #3b82f6, #6366f1);
    color: white;
    text-decoration: none;
    padding: 12px 25px;
    border-radius: 10px;
    transition: 0.3s ease;
}

a:hover {
    transform: scale(1.05);
}
</style>
</head>
<body>

    <div class="card">
        <h2>Informasi Tiket Wisata</h2>
        <p>Tempat Wisata: <b>{{ $tempat }}</b></p>
        <p>Harga Tiket: <span class="harga">Rp {{ number_format($harga, 0, ',', '.') }}</span></p>
        <a href="{{ url('/') }}">⬅️ Kembali ke Halaman Utama</a>
    </div>

</body>
</html>
