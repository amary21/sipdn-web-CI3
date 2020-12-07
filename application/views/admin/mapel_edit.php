<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <i class="fas fa-book-open mr-3"></i>Form Update Data Mata Pelajaran
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama_mapel">Nama Mata Pelajaran</label>
                    <input type="text" name="nama_mapel" id="nama_mapel" placeholder="Masukan Nama Mata Pelajaran" class="form-control" value="<?php echo $mapel['nama_mapel']; ?>">
                    <?php echo form_error('nama_mapel', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" id="level" name="level">
                        <?php foreach ($level as $lv) : ?>
                            <?php if ($lv == $mapel['level']) : ?>
                                <option value="<?php echo $lv ?>" selected><?php echo $lv ?></option>
                            <?php else : ?>
                                <option value="<?php echo $lv ?>"><?php echo $lv ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('level', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label for="jum_tema">Jumlah Tema</label>
                    <input type="number" name="jum_tema" id="jum_tema" placeholder="Masukan Jumlah Tema" class="form-control" value="<?php echo $mapel['jum_tema'] ?>">
                    <?php echo form_error('jum_tema', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary ml-1">Reset</button>
            </form>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->