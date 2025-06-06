<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('admin/data_pegawai/create') ?>" class="btn btn-primary"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.2464 6.12708C10.8322 6.12708 10.4964 6.46286 10.4964 6.87708V10.7502H6.6233C6.20909 10.7502 5.8733 11.086 5.8733 11.5002C5.8733 11.9144 6.20909 12.2502 6.6233 12.2502H10.4964V16.124C10.4964 16.5382 10.8322 16.874 11.2464 16.874C11.6607 16.874 11.9964 16.5382 11.9964 16.124V12.2502H15.8703C16.2845 12.2502 16.6203 11.9144 16.6203 11.5002C16.6203 11.086 16.2845 10.7502 15.8703 10.7502H11.9964V6.87708C11.9964 6.46286 11.6607 6.12708 11.2464 6.12708Z" fill="#323544" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 11.4989C2 6.39126 6.14154 2.25098 11.25 2.25098C16.3585 2.25098 20.5 6.39126 20.5 11.4989C20.5 13.7836 19.6714 15.8747 18.2983 17.4883L21.7791 20.9695C22.072 21.2624 22.072 21.7372 21.7791 22.0301C21.4862 22.323 21.0113 22.323 20.7184 22.0301L17.2372 18.5486C15.6237 19.9197 13.5334 20.7469 11.25 20.7469C6.14154 20.7469 2 16.6066 2 11.4989ZM11.25 3.75098C6.96962 3.75098 3.5 7.22003 3.5 11.4989C3.5 15.7779 6.96962 19.2469 11.25 19.2469C15.5304 19.2469 19 15.7779 19 11.4989C19 7.22003 15.5304 3.75098 11.25 3.75098Z" fill="#323544" />
    </svg>Tambah Data</a>

<table class="table table-striped" id="datatables">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Lokasi Presensi</th>
            <th>Aksi</th>

        </tr>
    </thead>

    <tbody>
        <?php $no = 1;
        foreach ($pegawai as $peg) : ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $peg['nip'] ?></td>
                <td><?= $peg['nama'] ?></td>
                <td><?= $peg['jabatan'] ?></td>
                <td><?= $peg['lokasi_presensi'] ?></td>
                <td>
                    <a href="<?= base_url('admin/data_pegawai/detail/' . $peg['id']) ?>" class="badge bg-primary">Detail</a>
                    <a href="<?= base_url('admin/data_pegawai/edit/' . $peg['id']) ?>" class="badge bg-primary">Edit</a>
                    <a href="<?= base_url('admin/data_pegawai/delete/' . $peg['id']) ?>" class="badge bg-danger tombol-hapus">Hapus</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>