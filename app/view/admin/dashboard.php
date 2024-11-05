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
			<li class="active">
				<a href="<?= BASE_URL ?>admin/dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
                <a href="<?= BASE_URL ?>admin/produk">
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
					<h1>Dashboard</h1>
				</div>
				<a href="<?= BASE_URL ?>admin/logout" class="btn-download">
					<span class="text">Logout</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3><?= $data['orderCount'] ?></h3>
						<p>Total Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
                        <h3><?= $data['userCount'] ?></h3>
						<p>User Terdaftar</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
                        <h3>IDR <?= $data['total_pendapatan']['total_keuntungan'] ?></h3>
						<p>Total Pendapatan</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
                                <th>Game</th>
								<th>Data Akun</th>
                                <th>Item</th>
                                <th>Total</th>
                                <th>Payment</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
                            <?php foreach($data['transaksi'] as $transaksi) : ?>
							<tr>
								<td>
                                    <img src="<?= BASE_URL ?>/assets/profile.png" alt="">
									<p><?= $transaksi['username_pembeli'] ?></p>
								</td>
                                <td><?= $transaksi['nama_game'] ?></td>
								<td><?= $transaksi['data_akun'] ?></td>
                                <td><?= $transaksi['nama_item'] ?></td>
                                <td><?= $transaksi['total_harga'] ?></td>
                                <td><?= $transaksi['metode_pembayaran'] ?></td>
                                <td><?= $transaksi['tanggal_transaksi'] ?></td>
								<td><span class="status <?php if($transaksi['status_pembayaran'] === "Dibayar")  {
                                    echo "completed";
                                } else if ($transaksi['status_pembayaran'] === "Pending") {
                                    echo "pending";
                                } else {
                                    echo "pending";
                                } ?>"><?= $transaksi['status_pembayaran'] ?></span></td>
							</tr>
                            <?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="<?= BASE_URL ?>js/dashboard.js">
    </script>
</body>
</html>