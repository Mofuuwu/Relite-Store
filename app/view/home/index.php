<?php

if (isset($_SESSION['warning_message'])) {
    echo '<script>alert("' . $_SESSION['warning_message'] . '")</script>';
    unset($_SESSION['warning_message']); 
}
?>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<header class="header">
        <div class="logo" style="display: flex;">
            <img src="../public/assets/icon-relite.png" alt="">
            <h2>elite Store</h2>
        </div>
        <input type="checkbox" id="menu-check">
        <label for="menu-check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="../public/home/ctr" >Cek Transaksi</a>
            <a href="../public/home/allgame" >Akun Game</a>
            <?php 
              if($_SESSION['logged_in'] === false) {
                echo '<a href="home/login">Login</a>';
              } else if ($_SESSION['logged_in'] === true) {
                echo '<a href="home/profile">Profil<img style="width: 10%; border-radius: 50%;" src="profile.png" alt=""></a>';
              }
            ?>
        </nav>
</header>
<div class="bg-event" id="tranding">
    <div class="container-event">
    <div class="wrapper-content" id="home" style="padding: 0;">
            <p class="judul space">Latest <span style="color: #f4b446;">Event</span></p>
            <!-- <p class="sub-judul space">Unleash your gaming potential with Relite Store. Dominate leaderboards and gain a competitive edge! Power up your arsenal, unlock exclusive items, and elevate your gaming experience with a few taps.</p> -->
            <div class="line-block">
                <div class="line space"></div>
                <div class="block"></div>
            </div>
        </div>
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../public/assets/event/mlxaot.jpg" alt="Tranding">
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../public/assets/event/starnov.jpg" alt="Tranding">
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../public/assets/event/foligrel.jpg" alt="Tranding">
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="../public/assets/event/newxianyun.jpg" alt="Tranding">
              </div>
            </div>
            <!-- Slide-end -->
        </div>
    </div>
</div>
</div>

<div class="bg-blackbrown" style="border-radius: 25px; margin-top: -1.5%;">
        <div class="wrapper-content" id="home" >
            <p class="judul space">Find Your <span style="color: #f4b446;">Game</span></p>
            <!-- <p class="sub-judul space">Unleash your gaming potential with Relite Store. Dominate leaderboards and gain a competitive edge! Power up your arsenal, unlock exclusive items, and elevate your gaming experience with a few taps.</p> -->
            <div class="line-block">
                <div class="line space"></div>
                <div class="block"></div>
            </div>
        </div>
        <div class="container-nav-page">
            <a class="nav-page padding-box" onclick="tampilkanGame()" id="nav-game">Game</a>
            <a class="nav-page padding-box" onclick="tampilkanAplikasi()" id="nav-apk">Aplikasi</a>
            <a href="#promo" class="nav-page padding-box nav-hide">Promo</a>
            <a href="#footer" class="nav-page padding-box nav-hide">Tentang</a>
            <a id="search-game" class="nav-page add-width nav-hide" style="width: 45%;" ><input id="search-input" type="text" placeholder="Search"></a>
        </div>
        <div class="card-container" id="game"> <!-- data-aos="fade-up" data-aos-duration="900" data-aos-offset="0" -->
            <?php 
                foreach ($data['game'] as $game) :
            ?>
            <a class="card" href="<?= URL_ORDER . 'game' . '/' . $game['id_game'] ?>">
                <img src="../public/assets/ICON/<?= $game['icon_game']; ?>" alt="">
                <h2><?= $game['nama_game'] ?></h2>
                <h3><?= $game['nama_game'] ?></h3>
                <div class="bg-card"></div>
            </a>
            <?php
                endforeach;
            ?>
        </div>

        <div class="card-container" id="aplikasi">
            <a class="card" href="../public/order/netflik">
                <img src="../public/assets/ICON/netflix.png" alt="">
                <h2>Netflik Premium</h2>
                <div class="bg-card"></div>
            </a>
            <a class="card" href="../public/order/spotify">
                <img src="../public/assets/ICON/spotify.png" alt="">
                <h2>Spotify Premium</h2>
                <div class="bg-card"></div>
            </a>
            <a class="card" href="../public/order/steam">
                <img src="../public/assets/ICON/steam.jpg" alt="" style="background-color: white;">
                <h2>Voucher Steam</h2>
                <div class="bg-card"></div>
            </a>
            <a class="card" href="../public/order/youtube">
                <img src="../public/assets/ICON/yt.png" alt="">
                <h2>Youtube Premium</h2>
                <div class="bg-card"></div>
            </a>
        </div>
</div>


    <div class="wrapper-content" id="promo">
        <p class="judul space">Flash <span style="color: #f4b446;">Sale</span></p>
        <!-- <p class="sub-judul space">Gear up for an electrifying gaming experience with our exclusive Flash Sale on top-up games!</p> -->
        <div class="line-block">
            <div class="line space"></div>
            <div class="block"></div>
        </div>
    </div>
    <div class="wrapper-promo">
        <div class="container-promo">
                <?php foreach($data['item'] as $item) : ?>
                    <?php if($item['promo'] > 0) : ?>
                        <?php foreach ($data['game'] as $game) : ?>
                            <?php if($game['id_game'] == $item['id_game']) : ?>
                                <a class="card-promo" href="../public/order/game/<?= $game['id_game'] ?>">
                                    <img class="img-card-promo" src="<?= BASE_URL ?>assets/ICON/<?= $game['icon_game']?>"></img>
                                    <div class="content-card-promo">
                                        <p class="title spacing-content-card-promo"><?=  $item['nama_item'] ?></p>
                                        <p class="actual-price spacing-content-card-promo">Rp <?= number_format($item['harga_awal'], 0, ',', '.') ?></p>
                                        <p class="discount-price spacing-content-card-promo">Rp <?= number_format($item['harga_final'], 0, ',', '.') ?></p>
                                    </div>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
        </div>
        <span><ion-icon class="icon-size" name="chevron-down-outline"></ion-icon></span>
    </div>
    <div class="bg-blackbrown">
        <div class="wrapper-content">
            <p class="judul space">Game <span style="color: #f4b446;">Market</span></p>
            <!-- <p class="sub-judul space"> Enhance your gaming experience directly by purchasing accounts from multiple sellers!</p> -->
            <div class="line-block">
                <div class="line space"></div>
                <div class="block"></div>
            </div>
        </div>
        <div class="gamemarket-container">
            <!-- <h3 class="gm-h"><span style="color:#f4b446;">Rekomendasi</span> Akun</h3> -->
            <div class="gm-row">
                <div class="gm-card">
                    <div class="gmc-img">
                        <img src="../public/image/gameshop/genshin1.jpg" alt="">
                    </div>
                    <div class="gmc-content">
                        <h3 class="gmc-nama">Genshin Impact</h3>
                        <p class="gmc-desc"><ion-icon name="information-circle-outline"></ion-icon> Ar 60, B5 Kazuha Raiden...</p>
                        <p class="gmc-price"><ion-icon name="card-outline"></ion-icon> IDR 300.000</p>
                        <div class="gmc-bottom">
                            <button onclick="displayAccountGame();" onclick="displayAccountGame();" class="gmc-info"><ion-icon name="information-circle-outline"></ion-icon></button>
                            <a class="gmc-wa"><ion-icon name="logo-whatsapp"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="gm-card">
                    <div class="gmc-img">
                        <img src="../public/image/gameshop/ml1.jpg" alt="">
                    </div>
                    <div class="gmc-content">
                        <h3 class="gmc-nama">Mobile Legends</h3>
                        <p class="gmc-desc"><ion-icon name="information-circle-outline"></ion-icon>Collector Franco, Epic Lan...</p>
                        <p class="gmc-price"><ion-icon name="card-outline"></ion-icon> IDR 500.000</p>
                        <div class="gmc-bottom">
                            <button onclick="displayAccountGame();" class="gmc-info"><ion-icon name="information-circle-outline"></ion-icon></button>
                            <a class="gmc-wa"><ion-icon name="logo-whatsapp"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="gm-card">
                    <div class="gmc-img">
                        <img src="../public/image/gameshop/ml2.jpg" alt="">
                    </div>
                    <div class="gmc-content">
                        <h3 class="gmc-nama">Mobile Legends</h3>
                        <p class="gmc-desc"><ion-icon name="information-circle-outline"></ion-icon>Epic Hanabi, Zilong, WR 80...</p>
                        <p class="gmc-price"><ion-icon name="card-outline"></ion-icon> IDR 120.000</p>
                        <div class="gmc-bottom">
                            <button onclick="displayAccountGame();" class="gmc-info"><ion-icon name="information-circle-outline"></ion-icon></button>
                            <a class="gmc-wa"><ion-icon name="logo-whatsapp"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="gm-card">
                    <div class="gmc-img">
                        <img src="../public/image/gameshop/genshin2.jpg" alt="">
                    </div>
                    <div class="gmc-content">
                        <h3 class="gmc-nama">Genshin Impact</h3>
                        <p class="gmc-desc"><ion-icon name="information-circle-outline"></ion-icon> Ar 58, Duo Archon, B5 Mel...</p>
                        <p class="gmc-price"><ion-icon name="card-outline"></ion-icon> IDR 200.000</p>
                        <div class="gmc-bottom">
                            <button onclick="displayAccountGame();" class="gmc-info"><ion-icon name="information-circle-outline"></ion-icon></button>
                            <a class="gmc-wa"><ion-icon name="logo-whatsapp"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="gm-card">
                    <div class="gmc-img">
                        <img src="../public/image/gameshop/ml4.jpg" alt="">
                    </div>
                    <div class="gmc-content">
                        <h3 class="gmc-nama">Mobile Legends</h3>
                        <p class="gmc-desc"><ion-icon name="information-circle-outline"></ion-icon>Legend Gussion, Skin Banyak</p>
                        <p class="gmc-price"><ion-icon name="card-outline"></ion-icon> IDR 800.000</p>
                        <div class="gmc-bottom">
                            <button onclick="displayAccountGame();" class="gmc-info"><ion-icon name="information-circle-outline"></ion-icon></button>
                            <a class="gmc-wa"><ion-icon name="logo-whatsapp"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="gm-card">
                    <div class="gmc-img">
                        <img src="../public/image/gameshop/ml5.jpg" alt="">
                    </div>
                    <div class="gmc-content">
                        <h3 class="gmc-nama">Mobile Legends</h3>
                        <p class="gmc-desc"><ion-icon name="information-circle-outline"></ion-icon> Epic Bane, Martis Zodiak</p>
                        <p class="gmc-price"><ion-icon name="card-outline"></ion-icon> IDR 320.000</p>
                        <div class="gmc-bottom">
                            <button onclick="displayAccountGame();" class="gmc-info"><ion-icon name="information-circle-outline"></ion-icon></button>
                            <a class="gmc-wa"><ion-icon name="logo-whatsapp"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="gm-card">
                    <div class="gmc-img">
                        <img src="../public/image/gameshop/ml3.jpg" alt="">
                    </div>
                    <div class="gmc-content">
                        <h3 class="gmc-nama">Mobile Legends</h3>
                        <p class="gmc-desc"><ion-icon name="information-circle-outline"></ion-icon> Stun Selena</p>
                        <p class="gmc-price"><ion-icon name="card-outline"></ion-icon> IDR 400.000</p>
                        <div class="gmc-bottom">
                            <button onclick="displayAccountGame();" class="gmc-info"><ion-icon name="information-circle-outline"></ion-icon></button>
                            <a class="gmc-wa"><ion-icon name="logo-whatsapp"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="gm-card">
                    <div class="gmc-img">
                        <img src="../public/image/gameshop/genshin3.jpg" alt="">
                    </div>
                    <div class="gmc-content">
                        <h3 class="gmc-nama">Genshin Impact</h3>
                        <p class="gmc-desc"><ion-icon name="information-circle-outline"></ion-icon> Trio Archon + Kazuha, Sign...</p>
                        <p class="gmc-price"><ion-icon name="card-outline"></ion-icon> IDR 230.000</p>
                        <div class="gmc-bottom">
                            <button class="gmc-info"><ion-icon name="information-circle-outline"></ion-icon></button>
                            <a class="gmc-wa"><ion-icon name="logo-whatsapp"></ion-icon></a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gm-seeall">
                <a href="../public/home/allgame" class="gm-button">See More</a>
            </div>
        </div>
    </div>
    <div class="gm-see-game-wrapper">
        <div class="gm-see-game-container">
            <div class="gmsg-close">
                <p>Genshin Impact</p>
                <ion-icon onclick="closeAccountGame();" name="close-outline"></ion-icon>
            </div>
            <div class="gmsg-photo-container">
                <div class="gmsg-photo photo">
                    <img src="../public/image/Gameshop/genshin1.jpg" alt="">
                </div>
                <div class="gmsg-photo photo">
                    <img src="../public/image/Gameshop/genshin2.jpg" alt="">
                </div>
                <div class="gmsg-photo photo">
                    <img src="../public/image/Gameshop/genshin3.jpg" alt="">
                </div>
                <div class="gmsg-photo photo">
                    <img src="../public/image/Gameshop/genshin1.jpg" alt="">
                </div>
                <div class="gmsg-photo photo">
                    <img src="../public/image/Gameshop/genshin2.jpg" alt="">
                </div>
                <div class="gmsg-photo photo">
                    <img src="../public/image/Gameshop/genshin3.jpg" alt="">
                </div>
            </div>
            <div class="gmsg-writer">
                <img class="gmsg-w-icon" src="../public/image/userprofile/2.jpg">
                <div class="gmsg-w-row">
                    <div class="gmsg-w-user">
                        Admin
                    </div>
                    <div class="gmsg-w-date">
                        2024-02-16
                    </div>
                </div>
            </div>
            <div class="gmsg-row">
                <div class="gmsg-heading">
                    <p class="gmsg-h-price">IDR 230.000</p> <span class="gmsg-chat-owner"><ion-icon name="logo-whatsapp"></ion-icon></span>
                </div>
                <div class="gmsg-head">
                    <!-- <p class="gmsg-h-title">
                        Game : Genshin Impact
                    </p> -->
                    <!-- <p class="gmsg-h-price">
                        IDR 230.000
                    </p> -->
                    <article class="gmsg-h-desc">
                        Adventure Rank 60, Chara B5 = Ayato, Kazuhak Raiden Shogun, Ladang Primo Masih Banyak, Blessing Sisa 20 hari
                        Adventure Rank 60, Chara B5 = Ayato, Kazuhak Raiden Shogun, Ladang Primo Masih Banyak, Blessing Sisa 20 hari
                        Adventure Rank 60, Chara B5 = Ayato, Kazuhak Raiden Shogun, Ladang Primo Masih Banyak, Blessing Sisa 20 hari
                        Adventure Rank 60, Chara B5 = Ayato, Kazuhak Raiden Shogun, Ladang Primo Masih Banyak, Blessing Sisa 20 hari
                        Adventure Rank 60, Chara B5 = Ayato, Kazuhak Raiden Shogun, Ladang Primo Masih Banyak, Blessing Sisa 20 hari
                        Adventure Rank 60, Chara B5 = Ayato, Kazuhak Raiden Shogun, Ladang Primo Masih Banyak, Blessing Sisa 20 hari
                    </article>
                </div>
            </div>
            
            <!-- <p class="gmsg-p-heading">Spesifikasi Akun</p> -->
        </div>
    </div>
    
        <div class="wrapper-content">
            <p class="judul space">Other <span style="color: #f4b446;">Services</span></p>
            <!-- <p class="sub-judul space"> Pay instantly. Get instant delivery. Legal and reliable. Relite Store offers three game-changing benefits. Enjoy seamless gaming without distractions.</p> -->
            <div class="line-block">
                <div class="line space"></div>
                <div class="block"></div>
            </div>
        </div>
        <div class="container-card-why" >
            <a class="card-why" href="https://api.whatsapp.com/send?phone=6287833060396&text=Halo%20min,%20saya%20mau%20rekber.">
                <img src="../public/image/tr.jpg" alt="">
            <!-- <ion-icon class="icon-why" name="wifi-outline"></ion-icon> -->
                <p class="judul-kecil">Rekber Admin</p>
                <p class="sub-judul-kecil">Buat transaksi jual belimu makin aman dengan rekber menggunakan Relite Store</p>
            </a>
            <a class="card-why" href="https://api.whatsapp.com/send?phone=6287833060396&text=Halo%20min,%20saya%20mau%20post%20akun.">
                <img src="../public/image/post.jpg" alt="">
                <!-- <ion-icon class="icon-why" name="flash-outline"></ion-icon> -->
                <p class="judul-kecil">Post Akun</p>
                <p class="sub-judul-kecil">Mau jual akun tapi lama ga laku laku? bisa dong titip ke kami</p>
            </a>
            <a class="card-why" href="https://api.whatsapp.com/send?phone=6287833060396&text=Halo%20min,%mau%dong%jasa%tambah%followers%nya.">
                <img src="../public/image/suntikfolls.jpg" alt="">
                <!-- <ion-icon class="icon-why" name="shield-checkmark-outline"></ion-icon> -->
                <p class="judul-kecil">Tambah Followers Sosial Media</p>
                <p class="sub-judul-kecil">Bikin bagus akunmu dengan mempunyai banyak followers</p>
            </a>
        </div>

    <div class="bg-blackbrown">
        <div class="wrapper-content">
            <p class="judul space">Our <span style="color: #f4b446;">Testimoni</span></p>
            <!-- <p class="sub-judul space">Some trusted ratings from our costumers</p> -->
            <div class="line-block">
                <div class="line space"></div>
                <div class="block"></div>
            </div>
        </div>
        <div class="comment-wrapper">
            <div class="comment-container">
                <h3><span style="color:#f4b446">Recent </span>Comment :</h3>
                <hr>
                <?php for($i = 0; $i < 3; $i++ ) : ?>
                    <div class="user-comment-card">
                        <div class="user-logo"><img src="../public/image/user.jpg" alt=""></div>
                        <div class="comment-side">
                            <div class="comment-row">
                                <div class="user-name">
                                    <h4><?= $data['komentar'][$i]['nama'] ?></h4>
                                </div>
                                <div class="comment-date">
                                    <p>2024-01-24</p>
                                </div>
                            </div>
                            <div class="comment-column">
                                <p><?= $data['komentar'][$i]['isi_komentar'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                <div class="comment-see-all">
                    <button onclick="displayAllComment()">See All Testimoni<ion-icon name="caret-down-outline" style="margin-left: 5px;"></ion-icon> <!--<ion-icon name="arrow-down"></ion-icon>--></button>
                </div>
                <form class="comment-post" action="" method="post">
                    <input type="text" name="kirim_komentar" placeholder="kirim komentar"> 
                    <div class="comment-submit">
                        <button name="submit" type="submit"><ion-icon name="send"></ion-icon></button>
                    </div>
                </form>
            </div> 
        </div>
        <div class="comment-all-wrapper" id="comment-all">
            <div class="comment-all-container">
                <div class="comment-all-header">
                    <h3>All Testimoni</h3> <ion-icon onclick="hideAllComment()" name="close-outline"></ion-icon>
                </div>
                <div class="user-comment-card-container">
                    <?php foreach($data['komentar'] as $komentar) : ?>
                        <div class="user-comment-card">
                            <div class="user-logo"><img src="../public/image/user.jpg" alt=""></div>
                            <div class="comment-side">
                                <div class="comment-row">
                                    <div class="user-name">
                                        <h4><?= $komentar['nama'] ?></h4>
                                    </div>
                                    <div class="comment-date">
                                        <p>2024-01-24</p>
                                    </div>
                                </div>
                                <div class="comment-column">
                                    <p><?= $komentar['isi_komentar'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    

    <div class="footer-container" id="footer">
        <div class="footer-2">
            <div class="footer-brand">
                <img src="../public/assets/icon-relite.png" alt="">
                <h2 class="judul-kecil-tebal">Relite Store</h2>
            </div>
            <div class="brand-description">
                <p class="sub-judul-kecil">Relite Store is a window to the limitless world of gaming entertaiment. With our services, you can easily enhance your gaming experience. We provide fast and secure acces to a variety of popular games, so you can continue to indulge in your favourite gaming adventures.</p>
            </div>
        </div>
        <div class="footer-1">
            <h2 class="judul-kecil-tebal" style="margin-top: 8%;">Useful Links</h2>
            <div class="footer-useful-links">
                <ul>
                    <li><a class="footer-links" href="#home">Home</a></li>
                    <li><a class="footer-links" href="">Login</a></li>
                    <li><a class="footer-links" href="">Register</a></li>
                </ul>

            </div>
        </div>
        <div class="footer-1">
            <h2 class="judul-kecil-tebal" style="margin-top: 8%;">Contact Us</h2>
            <div class="contact-us">
                <a href=""><ion-icon name="logo-whatsapp"></ion-icon></a>
                <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
            </div>
        </div>
    </div>

    
  <script src="../public/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init(
        
    );
  </script>
  <script>
   let TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
    },
        autoplay: {
            delay: 3000,
            disableOnInteraction:false,
        },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });
  </script>



