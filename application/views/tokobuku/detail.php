<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Detail Data Buku
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $detailbuku['Judul_Buku'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $detailbuku['Penerbit_Buku'];?></h6>
                <p class="card-text"><?= $detailbuku['Genre_Buku']; ?></p>
                <p class="card-text"><?= $detailbuku['Harga_Buku']; ?></p>
                <a href="<?= base_url(); ?>tokobuku" class="btn btn-primary">Kembali</a>
            </div>
        </div>

        </div>
    </div>
</div>