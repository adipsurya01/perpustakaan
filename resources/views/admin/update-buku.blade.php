@extends('template.app')

@section('header')
<!-- Content Header (Page header) -->

< div class = "content-header" > <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Buku</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="#">Beranda</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection @section("script")
<script>
// Mendapatkan URL saat ini
const currentUrl = window.location.href;

// Membuat objek URL dari URL saat ini
const url = new URL(currentUrl);

// Mengambil nilai parameter "name" dari URL
const nameParam = url
    .searchParams
    .get('id');

Alpine.data("data", () => ({
    books: [],
    init() {
        const aksestoken = localStorage.getItem('aksestoken');
        fetch(`http://localhost:3030/books/{{ $id }}`, {
            method: "PUT",
            headers: {
                "Authorization": "Bearer " + aksestoken
            }
        })
            .then(data => data.json())
            .then(data => this.books = data.data)
    }
}))
</script>
@endsection @section('content')
<div class="container" style="">
<div class="card">
    <h5 style="margin:20px ">UPDATE DATA BUKU</h5>
    <div class="mb-3 row m-3">
        <label for="inputJudulBuku" class="col-sm-2 col-form-label">Judul Buku</label>
        <div class="col-sm-8">
            <input
                type="text"
                x-html="title"
                class="form-control"
                placeholder="Masukkan Judul Buku"
                
                id="inputJudulBuku"></div>
        </div>
        <div class="mb-3 row m-3">
            <label for="inputKategori" class="col-sm-2 col-form-label">Kategori Buku</label>
            <div class="col-sm-8">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Masukkan Kategori Buku"
                    id="inputKategori"></div>
            </div>
            <div class="mb-3 row m-3">
                <label for="inputPenerbit" class="col-sm-2 col-form-label">Panerbit</label>
                <div class="col-sm-8">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Masukkan Nama Penerbit"
                        id="inputPenerbit"></div>
                </div>
                <div class="mb-3 row m-3">
                    <label for="inputPengarang" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-8">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Masukkan Nama Pengarang"
                            id="inputPengarang"></div>
                    </div>
                    <div class="mb-3 row m-3 ">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tahun Terbit</label>
                        <div class="col-sm-8">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Masukkan Tahun Terbit"
                                id="inputTahunTerbit"></div>
                        </div>
                        <div class="mb-3 row m-3 ">
                            <label for="inputIsbn" class="col-sm-2 col-form-label">ISBN</label>
                            <div class="col-sm-8">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Masukkan ISBN"
                                    id="inputIsbn"></div>
                            </div>
                            <div class="mb-3 row m-3 ">
                                <label for="inputJumlahBuku" class="col-sm-2 col-form-label">Jumlah Buku</label>
                                <div class="col-sm-8">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Masukkan Jumlah Buku"
                                        id="inputJumlahBuku"></div>
                                </div>
                                <div class="mb-3 row m-3 ">
                                    <label for="inputDeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-8">
                                        <textarea
                                            class="form-control"
                                            placeholder="Masukkan Deskripsi"
                                            id="inputDeskripsi"></textarea>
                                    </div>
                                </div>

                                <div class="d-grid gap-2 d-md-block p-3" style="margin-left: 182px; gap:50px">
                                    <button class="btn btn-primary" type="button">Tambah</button>
                                    <button class="btn btn-danger" type="button">Batal</button>
                                </div>

                                @endsection