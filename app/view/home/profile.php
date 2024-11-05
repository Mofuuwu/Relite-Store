<style>
  .logo-profile img {
    border-radius: 50%;
    width: 50px;
    margin: 20px 0;
  }
  .wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .title {
    margin: 5px 0;
  }
  hr {
    background-color: rgba(255, 255, 255, .2);
    width: 100%;
  }
  .logout {
    outline: none;
    border: none;
    margin: 10px 0;
    border-radius: 10px;
    padding: 10px;
    width: 100%;font-weight: 600;
    color: #fff;
    background-color: #f4b446;
    text-align: center;
  }
</style>
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
            <a href="../home/allgame" >Akun Game</a>
            <?php 
              if($_SESSION['logged_in'] === false) {
                echo '<a href="home/login" class="active">Login</a>';
              } else if ($_SESSION['logged_in'] === true) {
                echo '<a href="" class="active">Profil<img style="width: 10%; border-radius: 50%;" src="profile.png" alt=""></a>';
              }
            ?>
        </nav>
</header>
<div class="container">  
  <div class="wrapper">
    <h2 >Selamat Datang <?= $_SESSION['nama'] ?></h2>
    <div class="logo-profile">
      <img src="<?= BASE_URL ?>/assets/profile.png" alt="">
    </div>
    

    <h5 class="title">Saldo Akun : <span style="background-color: green; padding:2px 5px; border-radius:5px;"><?= $_SESSION['saldo_akun'] ?></span></h5>
    <h5 class="title">Member : <span style="background-color:rgba(255, 255, 255, .2); padding:2px 5px; border-radius:5px;"><?= $_SESSION['member'] ?></span></h5>
    <h5 class="title">Total Order : <span style="background-color:red; padding:2px 5px; border-radius:5px;"><?= $_SESSION['total_order'] ?></span></h5>
    <a class="logout" href="<?= BASE_URL ?>home/logout">Logout</a>
  </div>
</div>