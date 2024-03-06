<!DOCTYPE html>
<html>

<head>
  <title>Halaman staff</title>
</head>

<body>
  <?php
  session_start();


  if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
  }

  ?>
  <h1>Halaman Admin</h1>

  <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu Sekolah</title>
  </head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: rgb(241, 249, 242);
    }

    header {
      background-color: rgb(199, 211, 248);
      color: black;
      text-align: center;
      padding: 10px;
    }

    nav {
      background-color: rgb(171, 198, 238);
      color: rgb(255, 255, 255);
      padding: 15px;
      text-align: center;
    }

    section {
      max-width: 2000px;
      margin: 20px auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(236, 233, 233, 0.1);
    }

    .dashboard-item {
      margin-bottom: 40px;
      padding: 10px;
      background-color: rgb(250, 197, 216);
      border-radius: 8px;
    }

    li {
      text-align: left;
    }

    body {
      text-align: center;
    }

    table {
      margin: auto;
      border-collapse: collapse;
      width: 100%;
      /* Lebar tabel */
    }

    th,
    td {
      border: 1px solid black;
      padding: 8px;
    }

    body {
      position: relative;
    }

    body {
      margin: 0;
      padding: 0;
      position: relative;
    }

    .logo {
      position: absolute;
      top: 10px;
      left: 100px;
      width: 100px;
      height: auto;
    }

    @keyframes marquee {
      from {
        transform: translateX(100%);
      }

      to {
        transform: translateX(-100%);
      }
    }

    .moving-text {
      display: inline-block;
      white-space: nowrap;
      overflow: hidden;
      animation: marquee 5s linear infinite;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }

    main {
      flex: 1;
    }

    footer {
      background-color: #FFE048;
      color: #fff;
      text-align: center;
      padding: 10px;
      margin: 250px;

    }

  
    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }
  </style>

  <body>
    <header>
      <img src="" alt="Logo" class="logo">
      <h2>SMK NEGERI 5 KOTA BEKASI</h2>
      <h1>REKAYASA PERANGKAT LUNAK</h1>
      <img src="" alt="Logo" class="logo">
      <nav>
        <a href="#" id="home-link">Home</a> |
        <a href="#" id="courses-link">Mata Pelajaran</a> |
        <a href="#" id="gurus-link">Data Guru</a> |
        <a href="#" id="siswas-link">Data Siswa</a> |
        <a href="#" id="jadwals-link">Jadwal Pelajaran</a> |
      </nav>
      <section id="home" class="dashboard-item">
        <marquee behavior="scroll" direction="left">
          <h2>Selamat Datang di Dashboard Jurusan RPL SMK Negeri 5 Kota Bekasi</h2>
        </marquee>
        <p>
          Ini adalah tampilan utama dari dashboard jurusan Rekayasa Perangkat
          Lunak (RPL).
        </p>
        <img src="" alt="Foto Jurusan RPL" style="width: 100%; max-width: 500px;">
      </section>
      <section id="courses" class="dashboard-item" style="display: none">
        <h2>Mata Pelajaran RPL</h2>
        <ul>
          <li>Pemograman Dasar (PD)</li>
          <li>Basis Data (BD)</li>
          <li>Dasar Desain Grafis (DDG)</li>
          <li>Informatika</li>
          <li>Internet Of Thinks (IOT)</li>
          <li>Pemrograman Berbasis Object (PBO)</li>
          <li>Produk Kreatif dan Kewirausahaan (PKK)</li>
          <li>Pemrograman Web dan Perangkat Bergerak (PWEB)</li>
        </ul>
      </section>
      <section id="events" class="dashboard-item" style="display: none">
        <h2>Event Jurusan RPL</h2>
        <p>Belum ada event terbaru.</p>
      </section>
      <section id="gurus" class="dashboard-item" style="display: none">
        <h2>DATA GURU PRODUKTIF JURUSAN RPL</h2>

      </section>
      <section id="siswas" class="dashboard-item" style="display: none">
        <h2>DATA SISWA PROGRAM KEAHLIAN RPL</h2>
      </section>
      <section id="jadwals" class="dashboard-item" style="display: none">
        <h2>JADWAL MATA PELAJARAN</h2>
        <h1>XII RPL SAMSUNG</h1>

        <body>
          <table border="1">
            <thead>
              <tr>
                <th>HARI</th>
                <th>MATA PELAJARAN</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>SENIN</td>
                <td>Pemograman Web & Matematika</td>
              </tr>
              <tr>
                <td>SELASA</td>
                <td>PEMOGRAMAN BERBASIS OBJEK & BAHASA INDONESIA</td>
              </tr>
              <tr>
                <td>RABU</td>
                <td>PENDIDIKAN KEWARGANEGARAAN & PRODUK KREATIF KEWIRAUSAHAAN</td>
              </tr>
              <tr>
                <td>KAMIS</td>
                <td>PEMOGRAMAN WEB & BAHASA INGGRIS & BASIS DATA</td>
              </tr>
              <tr>
                <td>JUM'AT</td>
                <td>BAHASA INGGRIS & PEMOGRAMAN WEB & PABP & HHPS</td>
              </tr>
            </tbody>
          </table>
        </body>
      </section>

      <script>
        const homeLink = document.getElementById("home-link");
        const coursesLink = document.getElementById("courses-link");
        const eventsLink = document.getElementById("events-link");
        const gurusLink = document.getElementById("gurus-link");
        const siswasLink = document.getElementById("siswas-link");
        const jadwalsLink = document.getElementById("jadwals-link");

        const homeSection = document.getElementById("home");
        const coursesSection = document.getElementById("courses");
        const eventsSection = document.getElementById("events");
        const gurusSection = document.getElementById("gurus");
        const siswasSection = document.getElementById("siswas");
        const jadwalsSection = document.getElementById("jadwals");

        homeLink.addEventListener("click", function() {
          homeSection.style.display = "block";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        coursesLink.addEventListener("click", function() {
          homeSection.style.display = "none";
          tentangsSection.style.display = "none";
          coursesSection.style.display = "block";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        eventsLink.addEventListener("click", function() {
          homeSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "block";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        eventsLink.addEventListener("click", function() {
          homeSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "block";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        gurusLink.addEventListener("click", function() {
          homeSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "block";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        siswasLink.addEventListener("click", function() {
          homeSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "block";
          jadwalsSection.style.display = "none";
        });

        jadwalsLink.addEventListener("click", function() {
          homeSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "block";
        });
      </script>
    </header>
  </body>

  </html>
  <a href="logout.php">LOGOUT</a>

  <br />
  <br />
</body>

</html>