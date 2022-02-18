<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="d-block w-100" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
        </svg>
      </div>
      <div class="carousel-item">
        <svg class="d-block w-100" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
        </svg>
      </div>
      <div class="carousel-item">
        <svg class="d-block w-100" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
        </svg>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="d-flex justify-content-around">
    <div class="p-2">Check In</div>
    <div class="p-2">Check Out</div>
    <div class="p-2">Jumlah Kamar</div>
    <div class="p-2"> </div>
  </div>
  <div class="d-flex">
    <div class="p-2 pt-0">
      <form>
        <div class="input-group date">
          <input type="text" class="form-control datepickerCheckIn" id="datepickerCheckIn" name="datepickerCheckIn" autocomplete="off">
          <span class="input-group-append">
            <span class="input-group-text bg-white d-block">
              <i class="fa fa-calendar"></i>
            </span>
          </span>
        </div>
      </form>
    </div>
    <div class="p-2 pt-0">
      <form>
        <div class="input-group date">
          <input type="text" class="form-control" id="datepickerCheckOut" name="datepickerCheckOut" autocomplete="off">
          <span class="input-group-append">
            <span class="input-group-text bg-white d-block">
              <i class="fa fa-calendar"></i>
            </span>
          </span>
        </div>
      </form>
    </div>
    <div class="p-2 pt-0">
      <input type="text" class="form-control" id="jumlah-kamar" name="jumlah-kamar" aria-describedby="emailHelp">
    </div>
    <div class="p-2 pt-0">
      <button type="button" class="btn btn-primary klikForDatePesan" data-bs-toggle="modal" data-bs-target="#idModal">Pesan</button>
    </div>
  </div>
  
  <!-- alert -->
  <div class="pt-4">
    <?php Flasher::flash(); ?>
  </div>

  <div>
    <h1 class="text-center mt-4">Tentang Kami</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quis facilis asperiores a officia harum, dicta iusto aperiam excepturi nisi animi quia necessitatibus quasi officiis soluta dolorum illo esse id repellendus qui accusantium. Nam eligendi accusamus qui similique cupiditate tempora ea, ad sed deserunt? Voluptatum officia omnis voluptates vero quibusdam vitae recusandae cum quas, iure molestiae dignissimos? Fugit, laboriosam soluta! Ipsam, accusantium sed! Cumque, blanditiis deleniti! Debitis fugiat voluptates accusantium laboriosam ad eius deleniti ipsam recusandae hic nulla nam neque, facere ex, obcaecati minus dolorem voluptas, magni mollitia ipsum corporis natus quia? Magnam culpa, aspernatur illo, doloribus possimus velit pariatur repudiandae alias neque modi nulla excepturi vero adipisci ratione magni corporis facere laboriosam nam perferendis. Repudiandae fugit magnam optio commodi libero incidunt soluta, deleniti suscipit quo non rem sequi officia corporis laborum illum repellat quae ullam nam ea! Maxime asperiores autem sunt maiores delectus quia quam dolorem eaque optio, ipsum quaerat ullam eveniet accusamus blanditiis, natus repudiandae corporis eos adipisci magni quidem in minus aut. Nulla ut atque quam ducimus optio assumenda velit asperiores, deserunt nesciunt. Nostrum, suscipit repudiandae! Necessitatibus, veritatis totam nam perspiciatis quos omnis vero accusamus esse fuga officiis est voluptate eos quo at inventore delectus velit ea!</p>
  </div>
</div>

<!-- Modal Start -->
<div class="modal fade" id="idModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Form Pemesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/pemesanan/tambah" method="post">

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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary klikForDateKonfirmasi">Konfirmasi Pemesanan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

<script type="text/javascript">
  $(function() {
    $('#datepickerCheckIn').datepicker();
  });
  $(function() {
    $('#datepickerCheckOut').datepicker();
  });
</script>