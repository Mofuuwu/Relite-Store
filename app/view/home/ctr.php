
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
            <a href="ctr" class="active">Cek Transaksi</a>
            <a href="../home/allgame" >Akun Game</a>
            <?php 
              if($_SESSION['logged_in'] === false) {
                echo '<a href="home/login">Login</a>';
              } else if ($_SESSION['logged_in'] === true) {
                echo '<a href="../home/profile">Profil<img style="width: 10%; border-radius: 50%;" src="profile.png" alt=""></a>';
              }
            ?>
        </nav>
    </header>
    <div class="relbg">
        <div class="check-invoice-container">
            <h2>Check your order with <span>Invoice Number</span></h2>
            <p>Your order is not registered even though you are sure you have ordered? Please wait 1-5 minutes. But if the order still hasn't appeared, you can contact us.</p>
            <div class="check-invoice">
                <input type="text" placeholder="TRX**************" name="check-invoice"><button>Check</button>
            </div>
        </div>
    </div>
<div class="bg-blackbrown">
    <div class="last-transaction-container">
        <h2 class="lt-header">10 Last <span>Transaction</span></h2>
        <p class="lt-desc">You can see 10 last transaction of all user here </p>
        <table class="lt-table">
            <tr>
                <th>Date</th>
                <th>Invoice</th>
                <th>No</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>17-10-2023</td>
                <td>TRX********126</td>
                <td>083******213</td>
                <td>Rp 3.000</td>
                <td><p class="status-success">Success</p></td>
            </tr>
            <tr>
                <td>17-10-2023</td>
                <td>TRX********123</td>
                <td>083******228</td>
                <td>Rp 56.000</td>
                <td><p class="status-pending">Pending</p></td>
            </tr>
            <tr>
                <td>17-10-2023</td>
                <td>TRX********114</td>
                <td>085******154</td>
                <td>Rp 39.000</td>
                <td><p class="status-success">Success</p></td>
            </tr>
            <tr>
                <td>17-10-2023</td>
                <td>TRX********111</td>
                <td>087******064</td>
                <td>Rp 77.000</td>
                <td><p class="status-success">Success</p></td>
            </tr>
            <tr>
                <td>17-10-2023</td>
                <td>TRX********189</td>
                <td>087******767</td>
                <td>Rp 98.000</td>
                <td><p class="status-success">Success</p></td>
            </tr>
            <tr>
                <td>17-10-2023</td>
                <td>TRX********153</td>
                <td>087******109</td>
                <td>Rp 238.000</td>
                <td><p class="status-success">Success</p></td>
            </tr>
            <tr>
                <td>17-10-2023</td>
                <td>TRX********176</td>
                <td>081******198</td>
                <td>Rp 9.000</td>
                <td><p class="status-success">Success</p></td>
            </tr>
            <tr>
                <td>17-10-2023</td>
                <td>TRX********196</td>
                <td>085******543</td>
                <td>Rp 16.000</td>
                <td><p class="status-success">Success</p></td>
            </tr>
            <tr>
                <td>17-10-2023</td>
                <td>TRX********135</td>
                <td>085******332</td>
                <td>Rp 54.000</td>
                <td><p class="status-success">Success</p></td>
            </tr>
            <tr>
                <td>17-10-2023</td>
                <td>TRX********165</td>
                <td>087******347</td>
                <td>Rp 33.000</td>
                <td><p class="status-success">Success</p></td>
            </tr>
            

        </table>
    </div>
</div>
    <div class="footer-container" id="footer">
        <div class="footer-2">
            <div class="footer-brand">
                <img src="../../public/assets/icon-relite.png" alt="">
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
                    <li><a class="footer-links" href="../public/home.html#home">Home</a></li>
                    <li><a class="footer-links" href="../user/login.html">Login</a></li>
                    <li><a class="footer-links" href="../user/login.html">Register</a></li>
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
