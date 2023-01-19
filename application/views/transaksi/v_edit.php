<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h3>Edit Data Barang</h3>
        <hr>
        <?php foreach ($transaksi as $row) { ?>
            <!-- form tambah barang -->
            <form method="post" action="<?= base_url('transaksi/edit_aksi'); ?>">
                <input type="hidden" name="id" value="<?= $row->id_transaksi; ?>">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="<?= $row->nama_barang; ?>">
                </div>
                <div class="form-group">
                    <label>Nomor Barang</label>
                    <input type="text" disabled name="id_barang" class="form-control" value="<?= $row->id_barang; ?> ">
                </div>
                <div class="form-group">
                    <label>Harga barang</label>
                    <input type="text" name="harga_satuan" class="form-control" value="<?= $row->harga_satuan; ?>">
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" value="<?= $row->jumlah; ?>">
                </div>


                <button type="submit" class="btn btn-primary">Update Data</button>
                <a href="<?= base_url('transaksi'); ?>" class="btn btn-danger">Batal/Kembali</a>
            </form>
        <?php } ?>
    </div>
</main>