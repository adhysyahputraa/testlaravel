@extends('layouts.templates')

@section('konten')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @elseif (session('statusedit'))
                <div class="alert alert-info">
                    {{ session('statusedit') }}
                </div>
            @elseif (session('statushapus'))
                <div class="alert alert-danger">
                    {{ session('statushapus') }}
                </div>
            @endif
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Data Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/category/create" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>  Tambah Data</a><br/><br/>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Is Publish</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ( $category ?? '' as $c )
                  <tr>
                    <td>{{ $loop -> iteration}}</td>
                    <td>{{ $c -> id}}</td>
                    <td>{{ $c -> name}}</td>
                    <td>{{ $c -> is_publish}}</td>
                    <td>{{ $c -> created_at}}</td>
                    <td>{{ $c -> updated_at}}</td>
                    <td>
                      <form action="/category/{{ $c->id }}" method="post" onsubmit="return confirm('Apakah Anda Yakin Akan Menghapus Data {{ $c->name }} ?')">
                      <a href="/category/{{ $c -> id }}/edit" class="btn btn-warning btn-xs waves-effect">Edit</a>
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-xs waves-effect">Hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- <a href="/category/create" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>  Tambah Data</a> -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection