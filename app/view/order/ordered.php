
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Selesai</title>
    <style>
        body {
            background-color: #0d122f;
            font-family: 'poppins', sans-serif;
        }
        body::-webkit-scrollbar {
            display: none;
        }
        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #0d122f;
        }
        .box {
            box-shadow: 0px 0px 8px black;
            background-color: #0d1748;
            color: #fff;
            width: 60%;
            height: auto;
            padding: 2% 0;
            border-radius: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .header {
            font-size: 20px;
            font-weight: 600;
        }
        .box a {
            background-color: green;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <!-- <?php var_dump($_POST) ?> -->
            <p class="header">Selamat, Pesanan Anda Telah Berhasil Diproses</p>
            <hr style="color:white; width:90%;">
            <div class="box-2">
            <p>Detail Pesanan :</p>
            <p>Order ID : <?= $_POST['order_id'] ?></p>
            <p>Nama Game : <?= $_POST['nama_game'] ?></p>
            <p>Nama Item : <?= $_POST['nama_item'] ?></p>
            <p>Data Akun : <?php if(isset($_POST['SERVER'])) {
                echo $_POST['ID'] . "(" . $_POST['SERVER'] . ")";
            } else {
                echo $_POST['ID'];
            } ?></p>
            <p>Nominal : <?= $_POST['nominal'] ?></p>
            <p>Metode Pembayaran : <?= $_POST['payment_method'] ?></p>
            <p>Status Pembayaran : <?= $_POST['status_pembayaran'] ?></p>
            </div>
            <hr style="color:white; width:90%;">
            <a href="../">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>