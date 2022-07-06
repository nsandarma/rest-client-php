<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="text" name="no" value="<?= $mahasiswa['no']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" value="<?= $mahasiswa['nim']; ?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="hasil_kerja">Instansi</label>
                            <input type="text" name="instansi" class="form-control" id="instansi" value="<?= $mahasiswa['instansi']; ?>">
                            <small class="form-text text-danger"><?= form_error('instansi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="hasil_kerja">Hasil Kerja</label>
                            <input type="text" name="hasil_kerja" class="form-control" id="hasil_kerja" value="<?= $mahasiswa['hasil_kerja']; ?>">
                            <small class="form-text text-danger"><?= form_error('hasil_kerja'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>