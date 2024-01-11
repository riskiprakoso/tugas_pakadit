<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
                    <div class="card-header">
                        Form Ubah Data Buku
                    </div>
                    <div class="card-body">
                        <?php if( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert">
                             <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?>
                        <form action="" method="post">
                            <input type="hidden" name="judulbuku" value="<?= $tokobuku['Judul_Buku'];
                            ?>">
                         <div class="form-group">
                            <label for="judulbuku">Judul Buku</label>
                            <input type="text" name="judulbuku" class="form-control" id="judulbuku" value="<?= $tokobuku['Judul_Buku']; ?>">
                            <small class="form-text text-danger"><?= form_error('judulbuku') ?></small>
                        </div>
                         <div class="form-group">
                            <label for="penerbitbuku">Penerbit Buku</label>
                            <input type="text" name="penerbitbuku"class="form-control" id="penerbitbuku" value="<?= $tokobuku['Genre_Buku']; ?>" >
                            <small class="form-text text-danger"><?= form_error('penerbitbuku') ?></small>
                        </div>
                        <div class="form-group">
                                    <label for="genrebuku">Genre Buku</label>
                                    <select class="form-control" id="genrebuku"
                                    name="genrebuku">
                                <?php foreach($genrebuku as $g ) : ?>
                                <?php if( $g == $tokobuku['genrebuku'] ) : ?>
                                    <option value="<?= $g; ?>" selected><?= $g; ?>
                                    </option>
                                <?php else : ?>
                                    <option value="<?= $g; ?>"><?= $g; ?>
                                    </option>
                                <?php endif; ?>

                                    <?php endforeach; ?>
                        </select>
                            </div>
                        <div class="form-group">
                            <label for="hargabuku">Harga Buku</label>
                            <input type="text" name="hargabuku"class="form-control" id="hargabuku" value="<?= $tokobuku['Harga_Buku']; ?>">
                            <small class="form-text text-danger"><?= form_error('hargabuku') ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary
                        float-end mt-3">Ubah Data</button>
                    </form>
                </div>
            </div>
            
            
        </div>