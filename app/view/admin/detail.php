<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= "ID ITEM : " . $data['item']['id_item']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= "NAMA GAME : " . $data['item']['nama_game']; ?></h6>
        <p class="card-text"><?= "NAMA ITEM : " . $data['item']['nama_item']; ?></p>
        <p class="card-text"><?= "HARGA ITEM : " .  $data['item']['harga_final']; ?></p>
        <a href="<?= BASE_URL; ?>admin" class="card-link">Kembali</a>
      </div>
    </div>

</div>