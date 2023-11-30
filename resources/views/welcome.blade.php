<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gizi.css">
    <title>GiziGuard</title>
    <style>/* gizi.css */

/* Navigasi Bar */
nav {
    padding: 10px;
    display: flex;
    align-items: center;
    font-family: 'Josefin Sans', sans-serif;
    background-color:white;
    color: rgb(0, 0, 0);
}


nav ul {
    list-style-type: none;
    text-align: center;
    padding: 10;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

nav a {
    text-decoration: none;
    color: #000000;
}

nav {
    background-color: white;
    padding: 10px;
    display: flex;
    align-items: center;
}

.navbar-logo {
    width: 80px; /* Sesuaikan ukuran gambar sesuai kebutuhan */
    height: auto; /* Mempertahankan rasio aspek gambar */
    margin-right: 900px; /* Jarak antara gambar dan elemen lain di navbar */
    align-items: left;
}

.btn {
    background-color: #FFC436;
    color: #000000;
    padding: 5px 10px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
}

/* Header */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30-px;
    background-color: #FFF0CD;
}

header .left {
    flex: 30;
}

header .right {
    flex: 30;
}

/* Thumbnails */
.thumbnails {
    display: flex;
    justify-content: space-between;
    padding: 10px;
}

.thumbnail {
    flex: 1;
    text-align: center;
}

.thumbnail img {
    width: 50%;
}

/* Style the image grid section */
.image-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.image-row {
    display: flex;
    margin: 10px 0;
}

.image-row img {
    max-width: 32%;
    margin: 0 10px;
}


/* Footer */
footer {
    background-color: #F6F1ED;
    color: rgb(0, 0, 0);
    text-align: center;
    padding: 10px;
}
</style>
</head>
<body>
    <!-- Navigasi Bar -->
    <nav class="hero">
        <link rel="stylesheet" href="LOGO GIZI GUARD.png">
        <img src="{{asset('assets/LOGO GIZI GUARD.jpg')}}" alt="Logo" class="navbar-logo">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Food</a></li>
            <li><a href="#">Place</a></li>
            <li><a href="#">GiziGuard</a></li>
        </ul>
    </nav>
    </body>

<!-- Header -->
<header>
    <div class="left" style="padding: 5px;">
        <h1>GiziGuard</h1>
        <p style="padding: 5px;">"GiziGuard" adalah solusi holistik yang mencakup seluruh siklus hidup pangan, mulai dari produksi hingga konsumsi, Melibatkan keamanan pangan dan aspek gizi. Secara khusus, "GiziGuard" memadukan teknologi canggih, kebijakan berkelanjutan, dan pendekatan berbasis data untuk memastikan bahwa setiap langkah dalam rantai pasok pangan berkontribusi pada kesehatan masyarakat dan pelestarian lingkungan.</p>
        <a href="#" class="btn">Terima kasih telah mengunjungi Web kami.</a>
    </div>
    <div class="right">
        <img src="{{asset('assets/kul.jpg')}}" alt="Header Image" width: 30px;>
    </div>
</header>

<!-- Layout 8 Thumbnail Deskripsi -->
<section class="thumbnails">
    <div class="thumbnail">
        <img src="{{asset('assets/gado gado.png')}}" alt="Thumbnail 1">
        <p>Gado Gado</p>
    </div>
    <div class="thumbnail">
        <img src="{{asset('assets/cahkangkung.jpg')}}" alt="Thumbnail 2">
        <p>Tumis Kangkung</p>
    </div>
    <div class="thumbnail">
            <img src="{{asset('assets/rujak.jpg')}}" alt="Thumbnail 3">
            <p>Rujak Buah</p>
        </div>
        
        <!-- Lanjutkan dengan thumbnail lainnya -->
    </section>
  
   <section class="thumbnails">
        <div class="thumbnail">
            <img src="{{asset('assets/sayurasem.jpg')}}" alt="Thumbnail 4">
            <p>Sayur Asem</p>
        </div>
        <div class="thumbnail">
            <img src="{{asset('assets/pecel.jpg')}}" alt="Thumbnail 5">
            <p>Pecel</p>
        </div>
        <div class="thumbnail">
            <img src="{{asset('assets/rendang.jpg')}}" alt="Thumbnail 6">
            <p>Rendang</p>
        </div>
        <!-- Lanjutkan dengan thumbnail lainnya -->
    </section>

    <!-- Layout Tiga Baris Gambar -->
    <section class="image-grid">
    <div class="image-row">
            <img src="{{asset('assets/heal.jpg')}}" alt="Gambar 1">
            <img src="{{asset('assets/IMG.jpg')}}" alt="Gambar 2">
            <img src="{{asset('assets/kulin.jpg')}}" alt="Gambar 3">
        </div>
        
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 by Team GiziGuard</p>
    </footer>
</body>
</html>