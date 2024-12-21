<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Perpustakaan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    background-color: #f7f7f7;
    display: flex;
    flex-direction: column;
    height: 100vh;
}

header {
    background: linear-gradient(135deg, #007bff, #6c63ff);
    padding: 60px 0;
    color: white;
    text-align: center;
    position: relative;
}

header h1 {
    font-size: 48px;
    margin-bottom: 15px;
}

header p {
    font-size: 20px;
    margin-top: 0;
    font-weight: 300;
}

header img {
    position: absolute;
    top: 20px;
    right: 20px;
    max-width: 180px;
    opacity: 0.8;
}

.main-content {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60vh;
    padding: 30px;
    flex-grow: 1;
}

.card {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    padding: 40px;
    width: 100%;
    max-width: 400px;
    text-align: center;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
}

.card h2 {
    font-size: 32px;
    color: #333;
    margin-bottom: 20px;
}

.card p {
    font-size: 16px;
    color: #555;
}

.cta-button {
    background-color: #6c63ff;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    text-decoration: none;
    font-size: 18px;
    margin-top: 25px;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #5a52e0;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px 0;
    width: 100%;
}


    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Selamat Datang di Perpustakaan Digital</h1>
        <p>Temukan berbagai buku dengan mudah dan cepat!</p>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <div class="card">
            <h2>Gabung Sekarang</h2>
            <p>Bergabunglah untuk mengakses koleksi buku kami dan nikmati pengalaman membaca yang lebih baik.</p>
            <a href="{{ route('register') }}" class="cta-button">Daftar Sekarang</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Perpustakaan Digital. All rights reserved.
    </footer>

</body>
</html>
