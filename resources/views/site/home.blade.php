<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RSHP Universitas Airlangga - Home</title>
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
    <img src="../logo.png" alt="Logo RSHP" width="100">
    <h1>Rumah Sakit Hewan Pendidikan Universitas Airlangga</h1>
    <p><i>Melayani dengan keilmuan, kasih sayang, dan profesionalisme</i></p>
  </header>

  <!-- NAVIGASI -->
<nav>
    <ul>
        <li><a href="/home" class="active">Home</a></li>
        <li><a href="/struktur">Struktur Organisasi</a></li>
        <li><a href="/layanan">Layanan Umum</a></li>
        <li><a href="/visi-misi">Visi Misi & Tujuan</a></li>
        <li><a href="/login" class="login-btn">Login</a></li>
    </ul>
</nav>


  <main>
    <h2>Selamat Datang di RSHP Universitas Airlangga</h2>
    <p>
      <strong>Rumah Sakit Hewan Pendidikan (RSHP) Universitas Airlangga</strong> merupakan rumah sakit hewan pendidikan pertama di Indonesia Timur yang menyediakan pelayanan kesehatan hewan berbasis ilmiah.
    </p>

    <img src="../rshp.jpg" alt="Gedung RSHP" width="400" style="display:block; margin:auto;">

    <h3>Pelayanan yang Tersedia</h3>
    <ul>
      <li>Pemeriksaan umum dan konsultasi</li>
      <li>Vaksinasi dan sterilisasi</li>
      <li>Bedah dan rawat inap</li>
      <li>Konsultasi nutrisi dan perilaku hewan</li>
    </ul>

    <h3>Jadwal Layanan</h3>
    <table border="1" cellpadding="8">
      <tr>
        <th>Hari</th>
        <th>Waktu</th>
        <th>Layanan</th>
      </tr>
      <tr>
        <td>Senin - Jumat</td>
        <td>08.00 - 16.00</td>
        <td>Pemeriksaan Umum</td>
      </tr>
      <tr>
        <td>Sabtu</td>
        <td>08.00 - 12.00</td>
        <td>Vaksinasi & Konsultasi</td>
      </tr>
    </table>
  </main>

  <footer>
    <p>&copy; 2025 RSHP Universitas Airlangga | 
      <a href="https://rshp.unair.ac.id" target="_blank">Situs Resmi RSHP</a>
    </p>
  </footer>
</body>
</html>

