<div class="col-4" style="border: 1px solid lightgray; border-radius: 10px; padding: 10px;">
    <h3 style="text-align: center; background-color: lightblue; border-radius: 10px; color: white; padding: 10px;">Input
        Barang</h3>
    <form method="post" action="<?php echo "proses_barang.php?aksi=tambah"; ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" name="kd_barang" class="form-control" placeholder="Masukkan Kode Barang">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nm_barang" class="form-control" placeholder="Masukkan Nama Barang">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Barang</label>
            <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Barang">
        </div>

        <div class="mb-3">
            <label class="form-label">Stok Barang</label>
            <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok Barang">
        </div>

        <div class="mb-3">
            <label class="form-label">Distributor</label>
            <select name="distributor" class="form-control">
                <?php
                foreach ($data_distributor as $row) {
                ?>
                <option value="<?php echo $row['kd_distributor'] ?>"><?php echo $row['nm_distributor'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan Barang</label>
            <textarea class="form-control" name="ket" rows="3" placeholder="Masukkan Keterangan Barang"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Upload Foto</label>
            <input type="file" name="foto" class="form-control" placeholder="Upload Foto">
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-primary" name="proses" value="Simpan Data">
            <input type="reset" class="btn btn-secondary" name="reset" value="Reset">
        </div>

    </form>

</div>