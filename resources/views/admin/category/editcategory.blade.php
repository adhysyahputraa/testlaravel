@extends('layouts.templates')

@section('konten')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Category</h1>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="/category/{{ $category -> id }}" id="form_validation" method="post">
                  @method('patch')
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">NIP</label>
                    <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" value="{{ $category->name }}" placeholder="Masukan NIP">
                    @error('name')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                  </div>
                </div>
                <!-- /.card-body -->
                  <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a  href="/category"><button type="button" class="btn btn-danger">Batal</button></a>
              </div>
            </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection