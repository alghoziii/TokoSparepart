<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h3>Data Transaksi Barang</h3>
        <hr>
        <a href="<?= base_url('transaksi/tambah'); ?>" class="btn btn-primary" style="margin-bottom: 10px">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>No Barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($transaksi as $row) { ?>
                    <tr>
                        <td class="text-center"><?= $no; ?></td>
                        <td><?= $row->nama_barang; ?></td>
                        <td><?= $row->id_barang; ?></td>
                        <td><?= $row->harga_satuan; ?></td>
                        <td><?= $row->jumlah; ?></td>
                        <td><?= $row->harga_satuan * $row->jumlah; ?></td>
                        <td>
                            <a href="<?= base_url('transaksi/hapus/') . $row->id_transaksi; ?>" class="btn btn-danger" onclick="return confirm('Apakah kamu ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</main>