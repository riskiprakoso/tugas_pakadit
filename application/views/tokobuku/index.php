<div class="container">
    <?php if ( $this->session->flashdata('flash') ) : ?>
    <div class="div row mt-3">
    <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Buku <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>tokobuku/tambah" class="btn btn-primary">Tambah Data Buku</a>
        </div>
    </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Data Buku .." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Daftar Buku</h3>
        <?php if( empty($tokobuku) ) : ?>
                <div class="alert alert-success" role="alert">
                    data Buku tidak ditemukan.
                </div>
            <?php endif; ?>
        <ul class="list-group">
            <?php foreach ($buku as $bk):?>
                <li class="list-group-item"><?= $bk['Judul_Buku'] ?>
                    <a href="<?= base_url(); ?>tokobuku/hapus/<?= $bk['No']; ?>"  
                onclick="return confirm('yakin?');"><span class="badge bg-danger float-end">hapus</span></a>
                    <a href="<?= base_url(); ?>tokobuku/ubah/<?= $bk['No']; ?>"  
                ><span class="badge bg-success float-end mr-2">ubah</span></a>
                    <a href="<?= base_url(); ?>tokobuku/detail/<?= $bk['No']; ?>"  
                ><span class="badge bg-primary float-end mr-2">detail</span></a>
            </li>
            <?php endforeach;?>
        </ul>
        </div>
        
    </div>

</div>