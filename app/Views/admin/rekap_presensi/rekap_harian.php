<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<form class="row g-3">
    <div class="col-auto">
        <input type="date" class="form-control" name="filter_tanggal">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Tampilkan</button>
    </div>

    <div class="col-auto">
        <button type="submit" name="excel" class="btn btn-success mb-3">Export Excel</button>
    </div>
</form>

<span>Menampilkan data:
    <?php if ($tanggal) : ?>
        <?= date('d F Y', strtotime($tanggal)) ?>
    <?php else : ?>
        <?= date('d F Y') ?>
    <?php endif; ?>
</span>
<table class="table table-striped table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Pegawai</th>
        <th>Tanggal</th>
        <th>Jam Masuk </th>
        <th>Foto Masuk </th>
        <th>Jam Keluar</th>
        <th>Foto Keluar </th>
        <th>Total Jam Kerja</th>
        <th>Total Keterlambatan</th>
    </tr>

    <?php if ($rekap_harian) : ?>

        <?php $no = 1;
        foreach ($rekap_harian as $rekap) : ?>
            <?php
            //menghitung jumlah jam kerja
            $timestamp_jam_masuk = strtotime($rekap['tanggal_masuk'] . $rekap['jam_masuk']);
            $timestamp_jam_keluar = strtotime($rekap['tanggal_keluar'] . $rekap['jam_keluar']);
            $selisih = $timestamp_jam_keluar - $timestamp_jam_masuk;
            $jam = floor($selisih / 3600);
            $selisih -= $jam * 3600;
            $menit = floor($selisih / 60);

            //menghitung total jam keterlambatan

            $jam_masuk_real = strtotime($rekap['jam_masuk']);
            $jam_masuk_kantor = strtotime($rekap['jam_masuk_kantor']);
            $selisih_terlambat = $jam_masuk_real - $jam_masuk_kantor;
            $jam_terlambat = floor($selisih_terlambat / 3600);
            $selisih_terlambat -= $jam_terlambat * 3600;
            $menit_terlambat = floor($selisih_terlambat / 60);


            // dd($selisih);
            ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $rekap['nama'] ?></td>
                <td><?= date('d F Y', strtotime($rekap['tanggal_masuk'])) ?></td>
                <td><?= $rekap['jam_masuk'] ?></td>
                <td>
                    <a class="badge bg-primary" href="<?= base_url('uploads/' . $rekap['foto_masuk']) ?>">Download</a>
                </td>
                <td><?= $rekap['jam_keluar'] ?></td>
                <td>
                    <a class="badge bg-primary" href="<?= base_url('uploads/' . $rekap['foto_keluar']) ?>">Download</a>
                </td>
                <td>
                    <?php if ($rekap['jam_keluar'] == '00:00:00') : ?>
                        0 Jam 0 Menit
                    <?php else : ?>
                        <?= $jam . ' Jam ' . $menit . ' Menit ' ?>
                    <?php endif; ?>
                </td>

                <td>
                    <?php if ($jam_terlambat < 0 || $menit_terlambat < 0) : ?>
                        <span class="btn btn-success">On Time</span>
                    <?php else : ?>
                        <?= $jam_terlambat . ' Jam ' . $menit_terlambat . ' Menit ' ?>
                    <?php endif; ?>
                </td>
            </tr>

        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="9">Data tidak tersedia</td>
        </tr>
    <?php endif; ?>
</table>

<?= $this->endSection() ?>