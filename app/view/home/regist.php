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
                echo '<a href="home/login">Login</a>';
              } else if ($_SESSION['logged_in'] === true) {
                echo '<a href="home/profile" class="active">Profil<img style="width: 10%; border-radius: 50%;" src="profile.png" alt=""></a>';
              }
            ?>
        </nav>
</header>
<div class="container"> 
<div class="wrapper">
    <form action="" method="post">
      <h1>Register</h1>
      <div class="input-box">
        <input type="text" placeholder="Nama" required name="nama">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Username" required name="username">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required name="password">
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <button type="submit" class="btn" name="submit">Register</button>
      <div class="register-link">
        <p>Already have an account? <a href="../home/login">Login</a></p>
      </div>
    </form>
  </div>
</div>