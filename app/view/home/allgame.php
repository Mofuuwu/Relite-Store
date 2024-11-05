<header class="header">
        <div class="logo" style="display: flex;">
            <img src="../../public/assets/icon-relite.png" alt="">
            <h2>elite Store</h2>
        </div>
        <input type="checkbox" id="menu-check">
        <label for="menu-check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
        
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <nav class="navbar">
            <a href="../home" >Home</a>
            <a href="ctr">Cek Transaksi</a>
            <a href="../home/allgame" class="active">Akun Game</a>
            <?php 
              if($_SESSION['logged_in'] === false) {
                echo '<a href="home/login">Login</a>';
              } else if ($_SESSION['logged_in'] === true) {
                echo '<a href="../home/profile">Profil<img style="width: 10%; border-radius: 50%;" src="profile.png" alt=""></a>';
              }
            ?>
        </nav>
</header>

<div class="allgame-wrapper">
        <div class="wrapper-content">
            <p class="judul space">Rekomendasi <span style="color: #f4b446;">Admin</span></p>
            <!-- <p class="sub-judul space"> Enhance your gaming experience directly by purchasing accounts from multiple sellers!</p> -->
            <div class="line-block">
                <div class="line space"></div>
                <div class="block"></div>
            </div>
        </div>
        <div class="allgame-container">
        
            <div class="gm-row">
                <div class="gm-card">
                    <div class="gmc-img">
                        <img src="<?= BASE_URL ?>image/gameshop/genshin1.jpg" alt="">
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
                        <img src="<?= BASE_URL ?>image/gameshop/ml1.jpg" alt="">
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
                        <img src="<?= BASE_URL ?>image/gameshop/ml2.jpg" alt="">
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
                        <img src="<?= BASE_URL ?>image/gameshop/genshin2.jpg" alt="">
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
                        <img src="<?= BASE_URL ?>image/gameshop/ml4.jpg" alt="">
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
                        <img src="<?= BASE_URL ?>image/gameshop/ml5.jpg" alt="">
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
                        <img src="<?= BASE_URL ?>image/gameshop/ml3.jpg" alt="">
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
                        <img src="<?= BASE_URL ?>image/gameshop/genshin3.jpg" alt="">
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
        </div>


        <div class="bg-blackbrown">
            <div class="wrapper-content">
                <p class="judul space">Ramah <span style="color: #f4b446;">Kantong</span></p>
                <!-- <p class="sub-judul space"> Enhance your gaming experience directly by purchasing accounts from multiple sellers!</p> -->
                <div class="line-block">
                    <div class="line space"></div>
                    <div class="block"></div>
                </div>
            </div>
            <div class="allgame-container">
            
                <div class="gm-row">
                    <div class="gm-card">
                        <div class="gmc-img">
                            <img src="<?= BASE_URL ?>image/gameshop/genshin1.jpg" alt="">
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
                            <img src="<?= BASE_URL ?>image/gameshop/ml1.jpg" alt="">
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
                            <img src="<?= BASE_URL ?>image/gameshop/ml2.jpg" alt="">
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
                            <img src="<?= BASE_URL ?>image/gameshop/genshin2.jpg" alt="">
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
                            <img src="<?= BASE_URL ?>image/gameshop/ml4.jpg" alt="">
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
                            <img src="<?= BASE_URL ?>image/gameshop/ml5.jpg" alt="">
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
                            <img src="<?= BASE_URL ?>image/gameshop/ml3.jpg" alt="">
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
                            <img src="<?= BASE_URL ?>image/gameshop/genshin3.jpg" alt="">
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
            </div>
        </div>
</div>