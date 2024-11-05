<?php
    // var_dump($data['data_login']);
    $id = $data['id'];
    $games = $data['games'];
    $loginDatas = $data['data_login'];

    $membershipItems = $data['membership'];
    $diamondItems = $data['diamond'];

    
    $otherItems = $data['other'];
    $otherValidation = $data['other_validation'];

    $ewallets = $data['e-wallet'];
    $banks = $data['bank'];
    function RandomString($n) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
     
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
     
        return $randomString;
    }
?>
<script>
    function updateTotal() {
        let selectedRadio = document.querySelector('input[name="nominal"]:checked');
        if (selectedRadio) {
            let selectedItemPrice = parseFloat(selectedRadio.value);

            // Format harga dengan mata uang IDR
            let formattedPrice = selectedItemPrice.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });

            // Update total harga pada setiap metode pembayaran E-Wallet
            <?php foreach ($ewallets as $ewallet) : ?>
                document.getElementById('total_price_ewallet_<?= $ewallet['payment_id'] ?>').innerText = formattedPrice;
            <?php endforeach; ?>
            <?php foreach ($banks as $bank) : ?>
                document.getElementById('total_price_ewallet_<?= $bank['payment_id'] ?>').innerText = formattedPrice;
            <?php endforeach; ?>
            document.getElementById('nama_item').value = selectedRadio.id;
        }
    }
    
    
</script>
<?php
if (!empty($_POST['order'])) {
    $nama_item = $_POST['nama_item'];
} else {
    $nama_item = "";
}
?>
    <div class="back-wrapper">
        <div class="back-container">
            <a href="<?= BASE_URL ?>" class="back-button"><ion-icon name="arrow-back-outline"></ion-icon></a>
        </div>
    </div>    
    <div class="bg-decoration" style="background-image: url(http://localhost/relitestore/public/assets/Bg-Style/<?= $games['bg_game'] ?> );"></div>
    <div class="header-game">
        <div class="game-icon"><img src="<?= BASE_URL?>/assets/ICON/<?= $games['icon_game'] ?>" alt=""></div>
        <div class="content-game">
            <p class="game-title"><?= $games['nama_game'] ?></p>
            <p class="dev-title"> <?= $games['dev_game'] ?></p>
        </div>
    </div>
    <div class="content">
        <div class="instruction">
            <h2>How to Buy?</h2>
            <h3>Langkah langkah Top up <?= $games['nama_game'] ?> :</h3>
            <p>1. Masukkan data akun seperti id atau server</p>
            <p>2. Pilih jumlah item yang diinginkan</p>
            <p>3. Pilih metode pembayaran yang diinginkan</p>
            <p>4. Masukkan nomor Whatsapp Anda yang AKTIF dengan benar</p>
            <p>5. Klik Order Now dan selesaikan pembayaran</p>
            <p>6. Silahkan menunggu, Item akan masuk secara otomatis ke akun Anda</p>
        </div>

        <form class="form-account" oninput="updateTotal()" action="<?= BASE_URL ?>order/ordered" method="post">
        <input type="hidden" name="order_id" value="TRX<?= RandomString(10); ?>">
        <input type="hidden" name="status_pembayaran" value="Belum Dibayar">
        <input type="hidden" name="nama_game" value="<?= $games['nama_game'] ?>">
        <input type="hidden" name="nama_item" id="nama_item" value="<?= $nama_item ?>">
        <input type="hidden" name="username" value="<?php 
            if($_SESSION['logged_in'] === true) {
                echo $_SESSION['nama'];
            } else if ($_SESSION['logged_in'] === false) {
                echo "USER " . RandomString(10);
            }
        ?>">
            <div class="account-data box">
                <div class="header"><span class="h-number">1</span><p>Enter Your Account Data</p></div>
                <div class="data">
                    <?php foreach($loginDatas as $loginData) : ?>
                    <div class="data-card">
                        <label><?= $loginData['data_login'] ?></label><br>
                        <input type="text" placeholder="<?= $loginData['placeholder'] ?>" name="<?= $loginData['data_login'] ?>" required>
                    </div>
                    <?php endforeach ; ?>
                </div>
            </div>
            <div class="nominal box">
                <div class="header"><span class="h-number">2</span> <p>Enter a nominal you want to Buy</p></div>
                <div class="data">
                <?php if($membershipItems) : ?>
                    <div class="content-card-header"><?= "Membership" ?></div>
                    <?php foreach($membershipItems as $membershipItem) :?>
                        
                        <input type="radio" class="hidden" name="nominal" id="<?= $membershipItem['nama_item'] ?>" value="<?= $membershipItem['harga_final'] ?>">
                        <label class="content-card" for="<?= $membershipItem['nama_item'] ?>">
                            <div class="title"><?= $membershipItem['nama_item'] ?></div>
                            <?php if($membershipItem['promo'] > 0) : ?>
                                <p class="starting-price">IDR <?= number_format($membershipItem['harga_awal'], 0, ',', '.') ?></p>
                                <p class="price">IDR <?= number_format($membershipItem['harga_final'], 0, ',', '.') ?></p>
                            <?php else : ?>
                                <p class="price">IDR <?= number_format($membershipItem['harga_final'], 0, ',', '.') ?></p>
                            <?php endif; ?>
                        </label>
                    <?php endforeach; ?>
                <?php endif; ?>

                    <div class="content-card-header"><?= "Item" ?></div>
                    <?php foreach($diamondItems as $diamondItem) :?>
                        
                        <input type="radio" class="hidden" name="nominal" id="<?= $diamondItem['nama_item'] ?>" value="<?= $diamondItem['harga_final'] ?>">
                        <label class="content-card" for="<?= $diamondItem['nama_item'] ?>">
                            <div class="title"><?= $diamondItem['nama_item'] ?></div>
                            <?php if($diamondItem['promo'] > 0) : ?>
                                <p class="starting-price">IDR <?= number_format($diamondItem['harga_awal'], 0, ',', '.') ?></p>
                                <p class="price">IDR <?= number_format($diamondItem['harga_final'], 0, ',', '.') ?></p>
                            <?php else : ?>
                                <p class="price">IDR <?= number_format($diamondItem['harga_final'], 0, ',', '.') ?></p>
                            <?php endif; ?>
                        </label>
                    <?php endforeach; ?>

                    <?php if($otherValidation > 0) : ?>
                        <div class="content-card-header"><?= "Lainnya" ?></div>
                        <?php foreach($otherItems as $otherItem) :?>
                            
                            <input type="radio" class="hidden" name="nominal" id="<?= $otherItem['nama_item'] ?>" value="<?= $otherItem['harga_final'] ?>">
                            <label class="content-card" for="<?= $otherItem['nama_item'] ?>">
                                <div class="title"><?= $otherItem['nama_item'] ?></div>
                                <?php if($otherItem['promo'] > 0) : ?>
                                    <p class="starting-price">IDR <?= number_format($otherItem['harga_awal'], 0, ',', '.') ?></p>
                                    <p class="price">IDR <?= number_format($otherItem['harga_final'], 0, ',', '.') ?></p>
                                <?php else : ?>
                                    <p class="price">IDR <?= number_format($otherItem['harga_final'], 0, ',', '.') ?></p>
                                <?php endif; ?>
                            </label>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="payment-container">
                <div class="header"><span class="h-number">3</span><p>Select A Payment Method</p></div>
                <div class="payment-method ewallet">
                    <div class="payment-header">
                        <p><?= "E-Wallet" ?></p>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="payment-card-container">
                        <?php foreach ($ewallets as $ewallet) : ?>
                        <label class="payment-card" for="<?= $ewallet['payment_name'] ?>">
                        <input type="radio" name="payment_method" value="<?= $ewallet['payment_name'] ?>" id="<?= $ewallet['payment_name'] ?>" class="hidden">
                            <div class="paycard">
                                <p for="<?= $ewallet['payment_name'] ?>" class="pay-provider"><?= $ewallet['payment_name'] ?></p>
                                <p for="<?= $ewallet['payment_name'] ?>" class="pay-otomatis"><?= $ewallet['payment_method'] ?></p>
                                <div class="pay-price" id="total_price_ewallet_<?= $ewallet['payment_id'] ?>">IDR 0</div>
                            </div>
                            <div class="paycard">
                                <img class="pay-provider-icon" src="<?= BASE_URL ?>/assets/Provider/<?= $ewallet['payment_icon'] ?>">
                            </div>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="payment-method ewallet">
                    <div class="payment-header">
                        <p><?= "Transfer Bank" ?></p>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="payment-card-container">
                        <?php foreach ($banks as $bank) : ?>
                        <label for="<?= $bank['payment_name'] ?>" class="payment-card">
                        <input type="radio" name="payment_method" value="<?= $bank['payment_name'] ?>" id="<?= $bank['payment_name'] ?>" class="hidden">
                            <div class="paycard">
                                <p class="pay-provider"><?= $bank['payment_name'] ?></p>
                                <p class="pay-otomatis"><?= $bank['payment_method'] ?></p>
                                <div class="pay-price" id="total_price_ewallet_<?= $bank['payment_id'] ?>">IDR 0</div>
                            </div>
                            <div class="paycard">
                                <img class="pay-provider-icon" src="<?= BASE_URL ?>/assets/Provider/<?= $bank['payment_icon'] ?>">
                            </div>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="whatsapp-verif">
            <div class="header"><span class="h-number">4</span><p>Whatsapp Number</p></div>
                <div class="whatsapp-container">
                    <div class="no-whatsapp-content">
                        <input type="text" placeholder="Nomor Whatsapp" name="no_wa" id="no_wa" required>
                    </div>
                </div>
            </div>
            
            <div class="order-submit">
                <ion-icon name="cart-outline"></ion-icon><input type="submit" value="Order" name="order" id="order">
            </div>
        </form>
    </div>
   