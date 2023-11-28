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

@section("script")
    <script>
        Alpine.data("data", () => ({
            books: [],
            init() {
                fetch("http://localhost:3030/books", {
                    method: "GET",
                    headers: {
                        "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjY1NWFmYTQ3NzFmYjJhNDY1YTdhY2FhYiIsInJvbGUiOiJhZG1pbiIsImlhdCI6MTcwMTE0ODQ5MSwiZXhwIjoxNzAxMjM0ODkxfQ.MwDVsNjPhC3SGlWM9CgLlZJz4Of-jPgexgRa_JokxEg"
                    }
                }).then(data => data.json()).then(data => this.books = data.data)
            },
            edit(data) {
                console.log("edit", data)
            },
            delete(data) {
                console.log("delete", data)
            }
        }))
    </script>
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
                        <template x-for="b in books">
                            <tr>
                                <td x-html="b.id"></td>
                                <td x-html="b.title"></td>
                                <td x-html="b.author"></td>
                                <td x-html="b.publisher"></td>
                                <td x-html="b.stock"></td>
                                <td x-html="b.pages"></td>
                                <td>
                                    <a href="javascript:;" class="btn btn-primary" x-on:click="edit(b)">Edit</a>
                                    <a href="javascript:;" class="btn btn-danger" x-on:click="delete(b)">Hapus</a>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection