<?php
    $conn = mysqli_connect("localhost", "root", "", "relite_store");
    $id = 1;

    $query = "SELECT * FROM game WHERE id_game = '$id'";
    $gameResult = mysqli_query($conn, $query);
    $games = mysqli_fetch_assoc($gameResult);
    // var_dump($games);

    $query2 = "SELECT * FROM data_login WHERE id_game = '$id'";
    $loginTypeResult = mysqli_query($conn, $query2);
    $loginTypes = mysqli_fetch_all($loginTypeResult, MYSQLI_ASSOC);
    // var_dump($loginTypes);

    $queryMembership = "SELECT * FROM item WHERE id_game = '$id' AND tipe_item = 'membership'";
    $membershipResult = mysqli_query($conn, $queryMembership);
    $membershipItems = mysqli_fetch_all($membershipResult, MYSQLI_ASSOC);

    // Dapatkan item Diamond
    $queryDiamond = "SELECT * FROM item WHERE id_game = '$id' AND tipe_item = 'diamond'";
    $diamondResult = mysqli_query($conn, $queryDiamond);
    $diamondItems = mysqli_fetch_all($diamondResult, MYSQLI_ASSOC);

    $queryOther = "SELECT * FROM item WHERE id_game = '$id' AND tipe_item = 'other'";
    $otherResult = mysqli_query($conn, $queryOther);
    $otherItems = mysqli_fetch_all($otherResult, MYSQLI_ASSOC);
    $otherValidation = mysqli_affected_rows($conn);
    // var_dump($otherValidation);

    $queryEwallet = "SELECT * FROM payment WHERE payment_type = 'E-Wallet'";
    $ewalletResult = mysqli_query($conn, $queryEwallet);
    $ewallets = mysqli_fetch_all($ewalletResult, MYSQLI_ASSOC);
    // var_dump($ewallets);

    $queryBank = "SELECT * FROM payment WHERE payment_type = 'Transfer Bank'";
    $bankResult = mysqli_query($conn, $queryBank);
    $banks = mysqli_fetch_all($bankResult, MYSQLI_ASSOC);
    // var_dump($banks);
?>
<script>
    function updateTotal() {
        let selectedRadio = document.querySelector('input[name="selected_item"]:checked');
        if (selectedRadio) {
            let selectedItemPrice = selectedRadio.value;

            // Update total harga pada setiap metode pembayaran E-Wallet
            <?php foreach ($ewallets as $ewallet) : ?>
                document.getElementById('total_price_ewallet_<?= $ewallet['payment_id'] ?>').innerText = 'IDR ' + selectedItemPrice;
            <?php endforeach; ?>
        }
    }
</script>
<div class="back-wrapper">
        <div class="back-container">
            <a href="../../public/index#home" class="back-button"><ion-icon name="arrow-back-outline"></ion-icon></a>
        </div>
    </div>    
    <div class="bg-decoration" style="background-image: url(../../public/assets/Bg-Style/<?= $games['bg_game'] ?> );"></div>
    <div class="header-game">
        <div class="game-icon"><img src="../../public/assets/ICON/<?= $games['icon_game'] ?>" alt=""></div>
        <div class="content-game">
            <p class="game-title"><?= $games['nama_game'] ?></p>
            <p class="dev-title"> <?= $games['dev_game'] ?></p>
        </div>
    </div>
    <div class="content">
        <div class="instruction">
            <h2>How to Buy?</h2>
            <h3>Langkah langkah Top up <?= $games['nama_game'] ?> :</h3>
            <p>1. Masukkan data akun</p>
            <p>2. Pilih item yang diinginkan</p>
            <p>3. Pilih metode pembayaran yang diinginkan</p>
            <p>4. Masukkan nomor Whatsapp Anda yang AKTIF dengan benar</p>
            <p>5. Klik Order Now dan selesaikan pembayaran</p>
            <p>6. Silahkan menunggu, item akan masuk secara otomatis ke akun Anda</p>
        </div>

        <form class="form-account" oninput="updateTotal()">
            <div class="account-data box">
                <div class="header">Enter Your Account Data</div>
                <div class="data">
                    <?php foreach($loginTypes as $loginType) : ?>
                    <div class="data-card">
                        <label><?= $loginType['data_login'] ?></label><br>
                        <input type="text" placeholder="<?= $loginType['placeholder'] ?>">
                    </div>
                    <?php endforeach ; ?>
                </div>
            </div>
            <div class="nominal box">
                <div class="header">Enter a nominal you want to Buy</div>
                <div class="data">
                        <div class="content-card-header"><?= "Membership" ?></div>
                        <?php foreach($membershipItems as $membershipItem) :?>
                            <input type="radio" class="hidden" name="selected_item" id="<?= $membershipItem['nama_item'] ?>" value="<?= $membershipItem['harga_item'] ?>">
                                <label class="content-card" for="<?= $membershipItem['nama_item'] ?>">
                                        <div class="title"><?= $membershipItem['nama_item'] ?></div>
                                        <div class="price">IDR <?= $membershipItem['harga_item'] ?></div>
                                </label>
                        <?php endforeach; ?>

                        <div class="content-card-header"><?= "Diamond" ?></div>
                        <?php foreach($diamondItems as $diamondItem) :?>
                            <input type="radio" class="hidden" name="selected_item" id="<?= $diamondItem['nama_item'] ?>" value="<?= $diamondItem['harga_item'] ?>">
                                <label class="content-card" for="<?= $diamondItem['nama_item'] ?>">
                                        <div class="title"><?= $diamondItem['nama_item'] ?></div>
                                        <div class="price">IDR <?= $diamondItem['harga_item'] ?></div>
                                </label>
                        <?php endforeach; ?>

                        <?php if($otherValidation > 0) : ?>
                            <div class="content-card-header"><?= "Lainnya" ?></div>
                            <?php foreach($otherItems as $otherItem) :?>
                                <input type="radio" class="hidden" name="selected_item" id="<?= $otherItem['nama_item'] ?>" value="<?= $otherItem['harga_item']?>">
                                    <label class="content-card" for="<?= $otherItem['nama_item'] ?>">
                                            <div class="title"><?= $otherItem['nama_item'] ?></div>
                                            <div class="price"><?= $otherItem['harga_item'] ?></div>
                                    </label>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </div>
            </div>
            <div class="payment-container">
                <div class="header">Pilih Metode Pembayaran</div>
                <div class="payment-method ewallet">
                    <div class="payment-header">
                        <p><?= "E-Wallet" ?></p>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="payment-card-container">
                        <?php foreach ($ewallets as $ewallet) : ?>
                        <div class="payment-card">
                            <div class="paycard">
                                <p class="pay-provider"><?= $ewallet['payment_name'] ?></p>
                                <p class="pay-otomatis"><?= $ewallet['payment_method'] ?></p>
                                <div class="pay-price" id="total_price_ewallet_<?= $ewallet['payment_id'] ?>">IDR 0</div>
                            </div>
                            <div class="paycard">
                                <img class="pay-provider-icon" src="../assets/Provider/<?= $ewallet['payment_icon'] ?>">
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="payment-method trxbank">
                    <div class="payment-header">
                        <p>Transfer Bank</p>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="payment-card-container">
                        <div class="payment-card">
                            <div class="paycard">
                                <p class="pay-provider">Bca</p>
                                <p class="pay-otomatis">Otomatis</p>
                                <p class="pay-price">Rp 55.000</p>
                            </div>
                            <div class="paycard">
                                <img class="pay-provider-icon" src="../assets/Provider/gopay.png">
                            </div>
                        </div>
                        <div class="payment-card">
                            <div class="paycard">
                                <p class="pay-provider">Bri</p>
                                <p class="pay-otomatis">Otomatis</p>
                                <p class="pay-price">Rp 55.000</p>
                            </div>
                            <div class="paycard">
                                <img class="pay-provider-icon" src="../assets/Provider/bri.png">
                            </div>
                        </div>
                        <div class="payment-card">
                            <div class="paycard">
                                <p class="pay-provider">Mandiri</p>
                                <p class="pay-otomatis">Otomatis</p>
                                <p class="pay-price">Rp 55.000</p>
                            </div>
                            <div class="paycard">
                                <img class="pay-provider-icon" src="../assets/Provider/mandiri.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="whatsapp-verif">
            <div class="header">Nomor Whatsapp (Opsional)</div>
                <div class="whatsapp-container">
                    <div class="no-whatsapp-content">
                        <input type="text" placeholder="Nomor Whatsapp">
                    </div>
                </div>
            </div>
            
            <div class="order-submit">
                <ion-icon name="cart-outline"></ion-icon><input type="submit" value="Order" >
            </div>
        </form>
    </div>
    