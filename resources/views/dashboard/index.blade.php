<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f7f9fc;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2d3e50;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        .content {
            margin-left: 250px;
            padding: 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-size: 30px;
            margin: 0;
        }

        .dashboard-cards {
            display: flex;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 200px;
            text-align: center;
            flex-grow: 1;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card h3 {
            font-size: 24px;
            color: #333;
        }

        .card p {
            font-size: 18px;
            color: #777;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#">Data Buku</a></li>
            <li><a href="#">Data Siswa</a></li>
            <li><a href="#">Peminjaman Buku</a></li>
            <li><a href="#">Pengembalian Buku</a></li>
            <li><a href="#">Report Pinjaman</a></li>
            <li><a href="#">Report Data Siswa</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="header">
            <h1>Selamat Datang di Perpustakaan Digital</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-logout">Logout</button>
            </form>
        </div>

        <div class="dashboard-cards">
            <div class="card">
                <h3>Data Buku</h3>
                <p>150 Buku Tersedia</p>
            </div>
            <div class="card">
                <h3>Data Siswa</h3>
                <p>80 Siswa Terdaftar</p>
            </div>
            <div class="card">
                <h3>Peminjaman Buku</h3>
                <p>120 Buku Dipinjam</p>
            </div>
            <div class="card">
                <h3>Pengembalian Buku</h3>
                <p>30 Buku Dikembalikan</p>
            </div>
        </div>

        <div class="footer">
            &copy; 2024 Perpustakaan Digital. Didi Hertanto.
        </div>
    </div>
</body>
</html>

