<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Warisan Budaya Subak Jatiluwih</title>

  <!--- custom css link -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
  href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
  rel="stylesheet">
</head>

<body id="top">

  <!--- #HEADER -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="" class="helpline-box">
          <div class="wrapper">
          </div>
        </a>

        <a href="index.php" class="logo">
          <img src="./assets/images/logo_jl.png" alt="Warisan Budaya Tabanan">
        </a>

        <div class="header-btn-group">

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>


    <nav class="navbar" data-navbar>

      <div class="navbar-top">

        <a href="#" class="logo">
          <img src="./assets/images/logo_jl_blue.png" alt="Tourly logo">
        </a>

        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>
      

      <ul class="navbar-list" >

        <li>
          <a href="index.php#home" class="navbar-link" data-nav-link>home</a>
        </li>

        <li>
          <a href="index.php#tentang" class="navbar-link" data-nav-link>tentang subak jatiluwih</a>
        </li>

        <li>
          <a href="index.php#hasil" class="navbar-link" data-nav-link>hasil subak jatiluwih</a>
        </li>

        <li>
          <a href="index.php#artikel" class="navbar-link" data-nav-link>artikel</a>
        </li>

        <li>
          <a href="index.php#galeri" class="navbar-link" data-nav-link>galeri</a>
        </li>

        <li>
          <a href="index.php#destinasi" class="navbar-link" data-nav-link>destinasi lainnya</a>
        </li>

      </ul>
      



    </nav>


    
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Artikel dan Berita <br>Terkini Subak Jatiluwih</h2>

          <p class="hero-text">
            Halaman artikel dan berita terkini yang membahas mengenai salah satu warisan budaya di Tabanan yaitu Subak Jatiluwih.
          </p>

        </div>
      </section>





      





    </div>
  </section>


  <section class="package" id="artikel" style="background: #f5f5f5;">
    <div class="container" >


      <ul class="package-list">
        <?php
        include "db_conn.php";
        $sql = "SELECT * FROM berita ORDER BY tanggal DESC";
        $row = $conn->prepare($sql);
        $row->execute();
        $hasil = $row->fetchAll();
        foreach($hasil as $data){
          ?>


          <li>
            <div class="package-card" style="box-shadow: 10px 10px #f5f5f5">

              <figure class="card-banner">
                <img src="<?= "http://localhost/subak_jatiluwih/uploads/".$data['gambar']?>">
              </figure>

              <div class="card-content">
                <p class="card-text" style="padding-bottom: 10px;">
                  <?php echo date('d F Y', strtotime($data['tanggal'])); ?>
                </p>
                <h3 class="h3 card-title"><?php echo $data['judul'] ?></h3>

                <p class="card-text">
                 <?php echo $data['kategori'] ?> - <?php echo $data['ringkasan'] ?>
               </p>

             </div>

             <div class="card-price">

              <div class="wrapper">

                <button class="btn btn-secondary"><a href="halaman_detail_artikel.php?id=<?php echo $data['id']; ?>" style="text-decoration: none; color: white;"> Lihat Artikel</a></button>

              </div>

            </div>
          </li>
        <?php } ?>

      </ul>

    </div>
  </section>

      <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container" style="max-width:70%; margin-left: 20%;">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo_jl.png" alt="Jatiluwih Logo">
          </a>

          <p class="footer-text" style="padding-top: 15px;">
            Subak Jatiluwih adalah destinasi wisata yang terkenal dengan keindahan sawah terasering dengan 
            suasana alam yang asri, udara sejuk, dan pemandangan yang memukau.
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Kontak Kami</h4>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+01 (123) 4567 90</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:info.tourly.com" class="contact-link">info.jatiluwih.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address><a href="https://goo.gl/maps/shTXqF64GMmvozDH6" class="contact-link">Jatiluwih, Kabupaten Tabanan, Bali</a></address>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 <a href="">subak jatiluwih</a>
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Kelompok 5</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>




  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
<!-- var(--united-nations-blue) -->