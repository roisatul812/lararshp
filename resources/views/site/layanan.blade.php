<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layanan Umum - RSHP Unair</title>
      <style>
        /* Reset dasar */
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f6fa;
        }

        header {
        text-align: center;
        background-color: #cce5ff;
        padding: 20px;
        border-bottom: 2px solid #004080;
        }

        nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        background-color: #004080;
        display: flex;
        justify-content: center;
        }

        nav ul li {
        margin: 0 15px;
        }

        nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        padding: 10px 15px;
        display: inline-block;
        }

        nav ul li a:hover, .active {
        background-color: #0066cc;
        border-radius: 5px;
        }

        main {
        padding: 25px;
        background-color: white;
        margin: 20px auto;
        max-width: 900px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 8px;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        }

        table th {
        background-color: #e0efff;
        }

        footer {
        text-align: center;
        background-color: #cce5ff;
        padding: 10px;
        border-top: 2px solid #004080;
        margin-top: 30px;
        }
    </style>
</head>
<body>
  <header>
    <h1>Layanan Umum RSHP Universitas Airlangga</h1>
  </header>

<nav>
    <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/struktur">Struktur Organisasi</a></li>
        <li><a href="/layanan" class="active">Layanan Umum</a></li>
        <li><a href="/visi-misi">Visi Misi & Tujuan</a></li>
        <li><a href="/login" class="login-btn">Login</a></li>
    </ul>
</nav>


  <main>
    <h2>Daftar Layanan Umum</h2>
    <ol>
      <li>Pemeriksaan Kesehatan Hewan</li>
      <li>Vaksinasi dan Sterilisasi</li>
      <li>Perawatan Pasca Operasi</li>
      <li>Konsultasi Gizi dan Perilaku</li>
      <li>Bedah Minor dan Mayor</li>
    </ol>

    <h3>Tarif Pelayanan (Contoh)</h3>
    <table border="1" cellpadding="8">
      <tr><th>Layanan</th><th>Harga</th></tr>
      <tr><td>Pemeriksaan Umum</td><td>Rp 75.000</td></tr>
      <tr><td>Vaksinasi Rabies</td><td>Rp 50.000</td></tr>
      <tr><td>Sterilisasi Kucing</td><td>Rp 350.000</td></tr>
    </table>
  </main>

  <footer>
    <p>&copy; 2025 RSHP Universitas Airlangga</p>
  </footer>
</body>
</html>
