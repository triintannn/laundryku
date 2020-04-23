<!-- Main content -->
<section class="content">
  <div class="container-fluid">
  <div class="row">

    <section class="col-lg-12 connectedSortable">
    <a href="{{ url('admin/outlet/form') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data</h3>
      </div>

      <table class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($outlet as $o)
      <tr>
        <td>{{$o->nama}}</td>
        <td>{{$o->alamat}}</td>
        <td>{{$o->tlp}}</td>
        <td>
          <a href="/admin/outlet/edit/{{ $o->id }}">Edit</a>        |
          <a href="/admin/outlet/hapus/{{ $o->id }}">Hapus</a>
        </td>
        </tr>
      @endforeach
      </tbody>
      </table>
    </div>
    </section>
  </div>
  </div>
</section>
<!-- /.content -->