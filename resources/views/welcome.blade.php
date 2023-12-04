@extends('template.app')


@section('header')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('script')
    <script>
        Alpine.data("data", () => ({
            books: [],
            search: "",
            modalData: {
                "title": "",
                "author": "",
                "description": "",
                "published": "",
                "publisher": "",
                "pages": 0,
                "isbn": 0,
                "stock": 0,
                "picture": ""
            },
            init() {
                fetch("http://0.0.0.0:3030/books", {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json"
                    },
                }).then(res => res.json()).then(res => {
                    this.books = res.data
                })
            },
            formatYear(data) {
                return new Date(data).getFullYear()
            },
            formatDate(date) {
                let d = new Date(date)
                let dt = d.getDate() < 10 ? `0${d.getDate()}` : d.getDate();
                let m = d.getMonth() < 10 ? `0${d.getMonth()+1}` : d.getMonth() + 1;
                return `${d.getFullYear()}-${m}-${dt}`
            },
            filter(data) {
                return data.title.toLowerCase().includes(this.search.toLowerCase()) || data.author.toLowerCase()
                    .includes(this.search.toLowerCase());
            },
            showModal(data) {
                this.modalData = data
                this.modalData.published = this.formatDate(this.modalData.published)
                $("#modal-detail").modal('toggle')
            }
        }))
    </script>
@endsection

@section('content')
    {{-- tabel aksi --}}
    <div class="container">
        <div class="row">
            <div class="col-12 pb-5">
                <input type="text" class="form-control" placeholder="Cari buku" x-model="search">
            </div>
            <template x-for="b in books">
                <template x-if="filter(b)">
                    <div class="col-3 p-3 pb-5">
                        <a href="javascript:;" x-on:click="showModal(b)" style="color: unset !important">
                            <img x-bind:src="`http://0.0.0.0:3030/${b.picture}`"
                                style="width: 100%; height: 325px; object-fit: cover; border-radius: .375rem;">
                            <div class="pt-2">
                                <h5 class="mb-0 text-uppercase text-bold"
                                    style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;"
                                    x-html="b.title"></h5>
                                <div style="display: flex; justify-content: space-between;">
                                    <span style="font-weight: 500; font-size: 10pt;" x-html="`Author: ${b.author}`"></span>
                                    <span style="font-weight: 500; font-size: 10pt;"
                                        x-html="formatYear(b.published)"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </template>
            </template>
        </div>
    </div>
    <div class="modal fade" id="modal-detail" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Buku</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row justify-content-center">
                        <img x-bind:src="`http://0.0.0.0:3030/${modalData.picture}`"
                                style="width: 50%; height: 325px; object-fit: cover; border-radius: .375rem;">
                    </div>
                    <div class="mb-3 row">
                        <label for="inputJudulBuku" class="col-sm-4 col-form-label">Judul Buku</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" placeholder="Masukkan Judul Buku" id="inputJudulBuku"
                                x-model="modalData.title">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPenerbit" class="col-sm-4 col-form-label">Penerbit</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" placeholder="Masukkan Nama Penerbit"
                                id="inputPenerbit" x-model="modalData.publisher">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPengarang" class="col-sm-4 col-form-label">Pengarang</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" placeholder="Masukkan Nama Pengarang"
                                id="inputPengarang" x-model="modalData.author">
                        </div>
                    </div>
                    <div class="mb-3 row ">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Tanggal Terbit</label>
                        <div class="col-sm-8">
                            <input disabled type="date" class="form-control" placeholder="Tanggal Terbit" id="inputTahunTerbit"
                                x-model="modalData.published">
                        </div>
                    </div>
                    <div class="mb-3 row ">
                        <label for="inputIsbn" class="col-sm-4 col-form-label">ISBN</label>
                        <div class="col-sm-8">
                            <input disabled type="number" class="form-control" placeholder="Masukkan ISBN" id="inputIsbn"
                                x-model="modalData.isbn">
                        </div>
                    </div>
                    <div class="mb-3 row ">
                        <label for="inputJumlahBuku" class="col-sm-4 col-form-label">Jumlah Buku</label>
                        <div class="col-sm-8">
                            <input disabled type="number" class="form-control" placeholder="Masukkan Jumlah Buku"
                                id="inputJumlahBuku" x-model="modalData.stock">
                        </div>
                    </div>
                    <div class="mb-3 row ">
                        <label for="inputJumlahBuku" class="col-sm-4 col-form-label">Jumlah Halaman</label>
                        <div class="col-sm-8">
                            <input disabled type="number" class="form-control" placeholder="Masukkan Jumlah Buku"
                                id="inputJumlahBuku2" x-model="modalData.pages">
                        </div>
                    </div>
                    <div class="mb-3 row ">
                        <label for="inputDeskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea disabled class="form-control" placeholder="Masukkan Deskripsi" id="inputDeskripsi" x-model="modalData.description"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.content -->
@endsection
