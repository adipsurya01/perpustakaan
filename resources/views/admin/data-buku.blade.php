@extends('template.app')


@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Data Buku</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('content')


    {{-- tabel aksi --}}
    <div class="container">
        <div class="card">
            <h5 style="margin:20px ">DATA BUKU</h5>
            <div class="d-grid gap-2 d-md-block" style="margin-left:20px">
                <a class="btn btn-outline-light" href="/tambah-buku" role="button"style="background-color: #000851">Tambah Buku</a>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Stok</th>
                        <th>Jumlah Halaman</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <th>1</th>
                        <td>Kancil dan Rusa</td>
                        <td>Adip</td>
                        <td>Universitas Negeri Jakarta</td>
                        <td>80</td>
                        <td>100</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection