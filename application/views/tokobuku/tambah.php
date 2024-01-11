<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
                    <div class="card-header">
                        Form Tambah Data Buku
                    </div>
                    <div class="card-body">
                        <?php if( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert">
                             <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?>
                        <form action="" method="post">
                         <div class="form-group">
                            <label for="judulbuku">Judul Buku</label>
                            <input type="text" name="judulbuku" class="form-control" id="judulbuku" >
                            <small class="form-text text-danger"><?= form_error('judulbuku') ?></small>
                        </div>
                         <div class="form-group">
                            <label for="penerbitbuku">Penerbit Buku</label>
                            <input type="text" name="penerbitbuku"class="form-control" id="penerbitbuku" >
                            <small class="form-text text-danger"><?= form_error('penerbitbuku') ?></small>
                        </div>
                        <div class="form-group">
                                    <label for="genrebuku">Genre Buku</label>
                                    <select class="form-control" id="genrebuku"
                                    name="genrebuku">
                                    <option value="Novel">Novel</option>
                                    <option value=Cerpen>Cerpen</option>
                                    <option value=Komik>Komik</option>
                                    <option value=Pendidikan>Pendidikan</option>
                                    <option value=Misteri>Misteri</option>
                        </select>
                            </div>
                        <div class="form-group">
                            <label for="hargabuku">Harga Buku</label>
                            <input type="text" name="hargabuku"class="form-control" id="hargabuku" >
                            <small class="form-text text-danger"><?= form_error('hargabuku') ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary
                        float-end mt-3">Tambah Data</button>
                    </form>
                </div>
            </div>
            
            
        </div>