<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas</title>
    <meta name="title" content="GlowKoang - Aktivitas">
<meta name="description" content="Temukan berbagai aktivitas menarik dan acara yang diselenggarakan oleh GlowKoang. Ikuti kami untuk update terbaru mengenai promosi, workshop kecantikan, dan acara komunitas yang menginspirasi. Bergabunglah dengan kami untuk merayakan kecantikan alami dan berbagi pengalaman!">

 <!-- Canonical Tag -->
 <link rel="canonical" href="<?= current_url() ?>">
    <style>
    /* Masukkan CSS Anda di sini */
    body {
    margin: 0;
    font-family: 'Petrona', sans-serif;
    padding-top: 60px; /* Adjusted to avoid content hiding behind the navbar */
}

         /* Navbar styling */
         .navbar {
            width: 100%;
            height: 60px;
            position: fixed; /* Navbar tetap berada di atas */
            top: 0;
            left: 0;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding-right: 20px;
        }

        /* Navbar link styling */
        .navbar a {
            margin-left: 20px;
            font-size: 20px;
            font-family: 'Poppins', sans-serif;
            color: black;
            text-decoration: none;
        }

        .navbar a:hover {
            color: #FF7B00;
        }

        /* Dropdown button styling */
        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 20px;
        }

        .dropdown button {
            font-size: 20px;
            font-family: 'Poppins', sans-serif;
            color: black;
            background-color: white;
            border: none;
            cursor: pointer;
        }

        /* Dropdown content styling */
.dropdown-content {
    display: none;
    position: absolute;
    right: 0; /* Geser dropdown ke kiri dari sisi kanan */
    background-color: white;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    min-width: 120px; /* Atur lebar minimum dropdown supaya tidak mepet */
    padding: 12px 0; /* Tambahkan padding pada konten dropdown */
}

.dropdown-content a {
    padding: 12px 16px;
    display: block;
    font-family: 'Poppins', sans-serif;
    color: black;
    text-decoration: none;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

        /* Show dropdown on button click */
        .dropdown:hover .dropdown-content {
            display: block;
        }

      
        /*halaman beranda */
        .hero-section {
            position: relative;
            width: 100%;
            height: 826px;
            background-image: url('uploads/bg.png');
            background-size: cover;
            background-position: center;
        }
        .logo {
            position: absolute;
            top: 3px;
            left: 152px;
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 65px;
            height: 70px;
        }
        .logo span {
            font-size: 20px;
            margin-left: 10px;
            height: 25px;
        }

        .text-center {
            text-align: center;
            color: black;
            font-size: 1.2rem;
            line-height: 1.5;
            margin: 20px 0;
        }
          /* Footer Styles */
.footer {
    width: 1530px;
    height: 105px;
    position: absolute;
    left: 0;
    top: 1020px;
    background: rgba(222, 202, 182, 0.90);
    border-top: 1px solid rgba(255, 255, 255, 0.17);
}

.copyright-text {
    width: 443.35px;
    height: 19.50px;
    position: absolute;
    left: 320px;
    top: 39.25px;
    color: #FDFCE8;
    font-size: 13px;
    font-family: 'DM Sans', sans-serif;
    font-weight: 400;
    line-height: 19.50px;
    word-wrap: break-word;
}

.social-icons {
    position: absolute;
    top: 33px;
    left: 1218px;
    display: flex;
    gap: 10px;
}

.link {
    width: 32px;
    height: 32px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.link img {
    width: 100%;
    height: 100%;
    border-radius: 16px;
}
    </style>
</head>
<body>
  <!-- Navbar Section -->
<div class="navbar">
    <!-- Logo Section -->
    <div class="logo">
        <img src="uploads/logo.png" alt="Logo">
        <span>GlowKoang</span>
    </div>

    <!-- Navigation Links -->
    <div>
        <a href="#beranda">Beranda</a>
        <a href="#tentang">Tentang</a>
        <a href="#artikel">Artikel</a>
        <a href="#produk">Produk</a>
        <a href="#aktivitas">Aktivitas</a>
        <a href="#kontak">Kontak</a>

        <!-- Dropdown Bahasa -->
        <div class="dropdown">
            <button class="dropbtn">Bahasa ▼</button>
            <div class="dropdown-content">
                <a href="#">Indonesia</a>
                <a href="#">English</a>
            </div>
        </div>
    </div>
</div>
<script>
    // Fungsi untuk menampilkan dan menyembunyikan dropdown
    document.querySelector('.dropbtn').addEventListener('click', function() {
        var dropdownContent = document.querySelector('.dropdown-content');
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    // Menyembunyikan dropdown jika diklik di luar
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdownContent = document.querySelector('.dropdown-content');
            if (dropdownContent.style.display === 'block') {
                dropdownContent.style.display = 'none';
            }
        }
    }
</script>
<div class="Aktivitas" style="width: 1440px; height: 1072px; position: relative; background: white">
  <div class="Group65" style="width: 1440px; height: 231px; left: 0px; top: 87px; position: absolute">
    <img class="Image4" style="width: 1530px; height: 258px; left: 0px; top: -90px; position: absolute" alt="gambar background" src="uploads/Group 117.png" />
    <div class="Rectangle58" style="width: 1530px; height: 258px; left: 0px; top: -90px; position: absolute; background: rgba(0, 0, 0, 0.40)"></div>
</div>
</div>
<div class="Frame306" style="width: 876px; height: 37px; left: 510px; top: 19px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
    </div>
</div>
<div class="AktivitasGlowkoang" style="display: flex; justify-content: center; align-items: center; position: absolute; top: 25%; left: 50%; transform: translate(-50%, -50%); font-size: 35px; font-family: Poppins;">
    <span style="color: white;">Aktivitas &nbsp;</span><span style="color: #FF7B00;">GlowKoang</span>
</div><div class="Group103" style="width: 1361px; height: 494px; left: 40px; top: 423px; position: absolute">
    <div class="Rectangle72" style="width: 314px; height: 494px; left: 0px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
    <div class="Rectangle70" style="width: 306px; height: 494px; left: 721px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
    <div class="Rectangle73" style="width: 306px; height: 494px; left: 1055px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
    <img class="Aab93f910e6f016124db5586bf2" style="width: 200px; height: 285px; left: 767px; top: 27px; position: absolute" alt="gambar testi" src="uploads/testi.png" />
    <img class="Fa4842d167b8bee223fba7a7b97c25d81" style="width: 236px; height: 300px; left: 49px; top: 28px; position: absolute" alt="gambar uji" src="uploads/uji.png" />
    <div class="Testimoni" style="left: 74px; top: 341px; position: absolute; text-align: justify; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">TESTIMONI</div>
    <div class="Rectangle71" style="width: 335px; height: 494px; left: 344px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
    <div class="UjiKelayakanProduk" style="width: 311px; height: 49px; left: 357px; top: 345px; position: absolute; text-align: justify; color: black; font-size: 27px; font-family: Petrona; font-weight: 400; line-height: 30px; word-wrap: break-word">UJI KELAYAKAN PRODUK</div>
    <div class="Influencer" style="left: 788px; top: 341px; position: absolute; text-align: justify; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">INFLUENCER</div>
    <img class="F2456811df1ae74ff667976a1825eb591" style="width: 230px; height: 277px; left: 398px; top: 39px; position: absolute" alt="gambar influe" src="uploads/influe.png" />
    <img class="Cdcd0e8947fa3e57ce6d68a617dd5071" style="width: 231px; height: 265px; left: 1092px; top: 27px; position: absolute" alt="gambar promo" src="uploads/promo.png" />
    <div class="Promo" style="left: 1148px; top: 341px; position: absolute; text-align: justify; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">PROMO</div>
</div>
</div>
<!-- Footer -->
<div class="footer">
   <div class="copyright-text">
       Copyright © 2024 GlowKoang, Design by GlowKoang
   </div>

   <!-- Social Media Icons -->
   <div class="social-icons">
       <div class="link">
           <img src="uploads/link.png" alt="Icon 1">
       </div>
       <div class="link">
           <img src="uploads/twitter.png" alt="Icon 2">
       </div>
       <div class="link">
           <img src="uploads/instagram.png" alt="Icon 3">
       </div>
       <div class="link">
           <img src="uploads/youtube.png" alt="Icon 4">
       </div>
   </div>
</div>
</body>
</html>