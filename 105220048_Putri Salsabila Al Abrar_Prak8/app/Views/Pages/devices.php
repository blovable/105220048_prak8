<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
        <div class="container">
            <div class="row">
                <div class="col">

                    <h1>Daftar Barang</h1>
                    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Device_name</th>
      <th scope="col">Merk</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Arduino_Uno_-_R3.jpg/220px-Arduino_Uno_-_R3.jpg"></td>
      <td>Arduino</td>
      <td>Genuino</td>
      <td>19</td>
      <td>1</td>
      <td><button type="button" class="btn btn-success">Details</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdah5HJ6Z5fAdHV19viQDsUec767UyvzLXEQ&usqp=CAU"></td>
      <td>Komputer</td>
      <td>Samsung</td>
      <td>20</td>
      <td>1</td>
      <td><button type="button" class="btn btn-success">Details</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img src="data:image/jpeg;base64,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EBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQERED//2Q=="></td>
      <td>Projector</td>
      <td>Canon</td>
      <td>2</td>
      <td>0</td>
      <td><button type="button" class="btn btn-success">Details</button></td>

    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>