<div class="container mt-5">
  <div class="row card col-lg-6">
    <div class="card-body ">
      <table class="table">
        <tr>
          <th scope="row">Nama Pemesan</th>
          <td><?= $data['tamu']['nama_pemesan'] ?></td>
        </tr>
        <tr>
          <th scope="row">Email</th>
          <td><?= $data['tamu']['email'] ?></td>
        </tr>
        <tr>
          <th scope="row">Phone</th>
          <td><?= $data['tamu']['phone'] ?></td>
        </tr>
        <tr>
          <th scope="row">Nama Tamu</th>
          <td><?= $data['tamu']['nama_tamu'] ?></td>
        </tr>
        <tr>
          <th scope="row">Tipe Fasilitas</th>
          <td><?= $data['tamu']['tipe_fasilitas'] ?></td>
        </tr>
        <tr>
          <th scope="row">Check In</th>
          <td><?= $data['tamu']['check_in'] ?></td>
        </tr>
        <tr>
          <th scope="row">Check Out</th>
          <td><?= $data['tamu']['check_out'] ?></td>
        </tr>
        <tr>
          <th scope="row">Jumlah kamar</th>
          <td><?= $data['tamu']['total_kamar'] ?></td>
        </tr>
        <tr>
          <th scope="row">Status Pemesan</th>
          <td><?= $data['tamu']['status_pemesanan'] ?></td>
        </tr>
        </tbody>
      </table>

      <a href="<?= BASEURL ?>/resepsionis" class="card-link">Kembali</a>
    </div>
  </div>
</div>