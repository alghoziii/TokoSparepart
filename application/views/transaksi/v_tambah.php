<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h3>Tambah Data Transaksi Barang</h3>
        <hr>

        <!-- form tambah barang -->
        <form method="post" action="<?= base_url('transaksi/tambah_aksi'); ?>">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" value="<?= set_value('nama_barang'); ?>">
                <small><span class="text-danger"><i><?= form_error('nama_barang'); ?></i></span></small>
            </div>
            <div class="form-group">
                <label>No Barang</label>
                <input type="text" name="id_barang" class="form-control" value="<?= set_value('id_barang'); ?>">
                <small><span class="text-danger"><i><?= form_error('id_barang'); ?></i></span></small>
            </div>
            <div class="form-group">
                <label>Harga Barang</label>
                <input type="text" name="harga_satuan" class="form-control" value="<?= set_value('harga_satuan'); ?>">
                <small><span class="text-danger"><i><?= form_error('satuan'); ?></i></span></small>
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="text" name="jumlah" class="form-control" value="<?= set_value('jumlah'); ?>">
                <small><span class="text-danger"><i><?= form_error('jumlah'); ?></i></span></small>
            </div>


            <button type="submit" class="btn btn-primary">Simpan Data</button>
            <a href="<?= base_url('transaksi'); ?>" class="btn btn-danger">Batal/Kembali</a>
        </form>

    </div>
</main>