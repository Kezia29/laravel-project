
@extends('template.index')

@section('title', 'Home')

@section('content')

<!-- Content Wrapper. Contains page content --> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Customer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Customer</li> 
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/customer" method="POST">
                @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id">Kode</label>
                            <input type="text" class="form-control" name="id" placeholder="Kode">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="address">Password</label>
                            <input type="text" class="form-control" name="address" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectRounded">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="1">
                                <label class="form-check-label" for="gender">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="2">
                                <label class="form-check-label" for="gender">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectRounded0">Status</label>
                            <select name="status" class="custom-select rounded-0">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
<!--/.content -->
</div>
@endsection