<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="<?= BASE_URL ?>css/dashboard.css">

	<title>ReliteStore - Admin Panel</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand" style="display:flex; justify-content: center; align-items:flex-end;">
			<span class="text"> ReliteStore - Admin</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="<?= BASE_URL ?>admin/dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
          <a href="<?= BASE_URL ?>admin/index">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Produk</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<!-- <nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav> -->
		<!-- NAVBAR -->

		<!-- MAIN -->
        
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Produk</h1>
					<!-- <ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul> -->
				</div>
				<a href="<?= BASE_URL ?>admin/logout" class="btn-download">
					<span class="text">Logout</span>
				</a>
			</div>
      <ul class="box-info">
				<li>
					<img src="<?= BASE_URL ?>assets/ICON/mlbb.jpg" class="logo-game" ></img>
					<span class="text">
						<h3>Mobile Legends</h3>
						<a href="">Edit Harga</a>
					</span>
				</li>
				<li>
          <img src="<?= BASE_URL ?>assets/ICON/freefire.jpg" class="logo-game" ></img>
					<span class="text">
            <h3>Free Fire</h3>
						<a href="">Edit Harga</a>
					</span>
				</li>
				<li>
        <img src="<?= BASE_URL ?>assets/ICON/genshin.jpg" class="logo-game" ></img>
					<span class="text">
            <h3>Genshin Impact</h3>
						<a href="">Edit Harga</a>
					</span>
				</li>
			</ul>

			


			<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    
    
    <?php
    function compareByName($a, $b) {
        return strcmp($a['nama_game'], $b['nama_game']);
    }
    usort($data['item'], 'compareByName');
    ?>
    <div class="row" style="margin-top:40px;">
        <div class="col-lg-6">
          <h3>Semua Produk</h3>
		  <div class="row mb-3" style="margin-top:10px;">
	  
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal" style="margin-right:20px; margin-left:20px;">
          Tambah Data Item
        </button>


		<form action="<?= BASE_URL; ?>admin/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari item.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
    </div>
          <ul class="list-group">
            <?php foreach( $data['item'] as $item ) : ?>
              <li class="list-group-item">
                  <?= $item['nama_game'] ?> | <?= $item['nama_item'] ?>
                  <a href="<?= BASE_URL; ?>admin/hapus/<?= $item['id_item']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= BASE_URL; ?>admin/ubah/<?= $item['id_item']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $item['id_item']; ?>">ubah</a>
                  <a href="<?= BASE_URL; ?>admin/detail/<?= $item['id_item']; ?>" class="badge badge-primary float-right">detail</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASE_URL; ?>admin/tambah" method="post">
          <input type="hidden" name="id" id="id">

          <div class="form-group">
            <label for="nama_game">Pilih Game</label>
            <select class="form-control" id="nama_game" name="nama_game">
              <?php foreach($data['game'] as $game) : ?>
                <option value="<?= $game['nama_game'] ?>"><?= $game['nama_game'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="nama_item">Nama Item</label>
            <input type="text" class="form-control" id="nama_item" name="nama_item" autocomplete="off" required placeholder="10 Diamonds">
          </div>

          <div class="form-group">
            <label for="harga_awal">Harga</label>
            <input type="number" class="form-control" id="harga_awal" name="harga_awal" autocomplete="off" placeholder="10000">
          </div>

          <div class="form-group">
            <label for="promo">Promo</label>
            <input type="text" class="form-control" id="promo" name="promo" placeholder="kosongkan bila tidak ada promo">
          </div>
          <div class="form-group">
            <label for="nama_game">Tipe Item</label>
            <select class="form-control" id="tipe_item" name="tipe_item">
                <option value="Diamond">Diamond</option>
                <option value="Membership">Membership</option>
                <option value="Other">Lainnya</option>
            </select>
          </div>

          

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah item</button>
        </form>
      </div>
    </div>
  </div>
</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="<?= BASE_URL ?>js/dashboard.js">
    </script>
</body>
</html>





