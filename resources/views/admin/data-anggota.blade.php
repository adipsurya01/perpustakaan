@extends('template.app')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Data Anggota</h1>
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

@section("script")
    <script>
        Alpine.data("data", () => ({
            
            members: [],
            init() {
                const aksestoken = localStorage.getItem('aksestoken');
                fetch("http://localhost:3030/members", {
                    method: "GET",
                    headers: {
                        "Authorization": "Bearer "+ aksestoken 
                    }
                }).then(data => data.json()).then(data => this.members = data.data)
            },
            edit(data) {
                console.log("edit", data._id)
                location.href = `/update-anggota/${data._id}`
            },
            delete(data) {
                console.log("delete", data)
            }
        }))
    </script>
@endsection

@section('content')
    {{-- tabel aksi --}}
    <div class="container" style="" x-data="data">
        <div class="card">
            <h5 style="margin:20px ">DATA ANGGOTA</h5>
            <div class="d-grid gap-2 d-md-block" style="margin-left:20px">
                <a class="btn btn-outline-light" href="/tambah-anggota" role="button" style="background-color: #000851">Tambah Anggota</a>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <th>1</th>
                        <td>Adip Idi Surya</td>
                        <td>adip@gmail.com</td>
                        <td>08123456789</td>
                        <td>Jl. Raya Bogor</td>
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