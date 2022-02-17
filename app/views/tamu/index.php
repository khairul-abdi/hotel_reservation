<div class="container mt-5">
  <div class="d-flex justify-content-between">
    <div class="p-2">
      <form>
        <div class="input-group date" id="datepicker">
          <input type="text" class="form-control">
          <span class="input-group-append">
            <span class="input-group-text bg-white d-block">
              <i class="fa fa-calendar"></i>
            </span>
          </span>
        </div>
      </form>
    </div>
    <div class="p-2">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  <table class="table table-striped table-hover">
    <thead>
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
          <td>Aksi</td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
  $(function() {
    $('#datepicker').datepicker();
  });
</script>