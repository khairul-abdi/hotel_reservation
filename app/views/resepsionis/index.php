<div class="container mt-5">
  <!-- alert -->
  <div class="pt-4">
    <?php Flasher::flash(); ?>
  </div>

  <div class="pb-2 d-flex justify-content-between">
    <div class="p-2">
      <form  action="<?= BASEURL; ?>/resepsionis/caribydate" method="post" class="d-flex">
        <div class="input-group date" id="datepicker">
          <input type="text" class="form-control" name="keyword" id="keyword" autocomplete="off">
          <span class="input-group-append">
            <span class="input-group-text bg-white d-block">
              <i class="fa fa-calendar"></i>
            </span>
          </span>
          <button class="btn btn-outline-primary" type="submit" id="tombolCariByDate">Cari tanggal</button>
        </div>
      </form>
    </div>
    <div class="p-2">
      <form action="<?= BASEURL; ?>/resepsionis/cari" method="post" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Cari nama tamu..." aria-label="Search" name="keyword" id="keyword" autocomplete="off">
        <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
      </form>
    </div>
  </div>
  <div>
    <div class="p-2">
      <form class="d-flex">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#idModalResepsionis">Tambah Pesan</button>
      </form>
    </div>
  </div>
  <table class="table table-striped table-hover">
    <thead class="text-center">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Tamu</th>
        <th scope="col">Tanggal Check In</th>
        <th scope="col">Tanggal Check Out</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['tamu'] as $key => $tamu) : ?>
        <tr>
          <th scope="row"><?= $key += 1 ?></th>
          <td><?= $tamu['nama_tamu']; ?></td>
          <td><?= $tamu['check_in']; ?></td>
          <td><?= $tamu['check_out']; ?></td>
          <td><?= $tamu['status_pemesanan']; ?></td>
          <td class="d-flex justify-content-evenly">
            <a href="<?= BASEURL; ?>/resepsionis/detail/<?= $tamu['id'] ?>" class="btn btn-info btn-sm" data-bs-target="#exampleModal">Detail</a>
            <a href="<?= BASEURL; ?>/resepsionis/ubah/<?= $tamu['id'] ?>" class="btn btn-primary btn-sm tampilModalUbah" data-bs-toggle="modal" data-bs-target="#idModalResepsionis" data-id="<?= $tamu['id']; ?>">Ubah</a>
            <a href="<?= BASEURL; ?>/resepsionis/hapus/<?= $tamu['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<!-- Modal Start -->
<div class="modal fade" id="idModalResepsionis" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Form Pemesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/resepsionis/tambahByResepsionis" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-1">
            <label for="nama-pemesanan" class="col-form-label">Nama Pemesanan:</label>
            <input type="text" class="form-control" id="nama-pemesanan" name="nama-pemesanan">
          </div>

          <div class="mb-1">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="mb-1">
            <label for="no-hp" class="col-form-label">No. Handphone:</label>
            <input type="text" class="form-control" id="no-hp" name="no-hp">
          </div>

          <div class="mb-1">
            <label for="nama-tamu" class="col-form-label">Nama Tamu:</label>
            <input type="text" class="form-control" id="nama-tamu" name="nama-tamu">
          </div>

          <div class="mb-1">
            <label for="tipe-kamar" class="col-form-label">Tipe Kamar:</label>
            <select class="form-select mb-3" aria-label=".form-select-lg example" id="tipe-kamar" name="tipe-kamar">
              <option selected>Pilih tipe kamar</option>
              <option value="deluxe">Tipe Deluxe</option>
              <option value="superior">Tipe Superior</option>
            </select>
          </div>

          <div class="mb-1">
            <label for="check-in" class="col-form-label">Check In:</label>
            <div class="input-group date">
              <input type="text" class="form-control" id="check-in" name="check-in" autocomplete="off">
              <span class="input-group-append">
                <span class="input-group-text bg-white d-block">
                  <i class="fa fa-calendar"></i>
                </span>
              </span>
            </div>
          </div>

          <div class="mb-1">
            <label for="check-out" class="col-form-label">Check Out:</label>
            <div class="input-group date">
              <input type="text" class="form-control" id="check-out" name="check-out" autocomplete="off">
              <span class="input-group-append">
                <span class="input-group-text bg-white d-block">
                  <i class="fa fa-calendar"></i>
                </span>
              </span>
            </div>
          </div>

          <div class="mb-1">
            <label for="jumlah-kamar" class="col-form-label">Jumlah Kamar:</label>
            <input type="text" class="form-control" id="jumlah-kamar" name="jumlah-kamar">
          </div>

          <div class="mb-1">
            <label for="status-pemesanan" class="col-form-label">Status Pemesanan:</label>
            <select class="form-select mb-3" aria-label=".form-select-lg example" id="status-pemesanan" name="status-pemesanan">
              <option selected>Status Pemesanan</option>
              <option value="terima">Terima</option>
              <option value="proses">Proses</option>
              <option value="selesai">Selesai</option>
              <option value="batal">Batal</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Modal End -->


<script type="text/javascript">
  $(function() {
    $('#datepicker').datepicker();
  });
  $(function() {
    $('#check-in').datepicker();
  });
  $(function() {
    $('#check-out').datepicker();
  });
</script>