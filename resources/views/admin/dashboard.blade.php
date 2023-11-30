@extends('template.app')


@section('header')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" x-html="`Hallo, Selamat Datang ${localStorage.getItem('name')}`"></h1>
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

@section('script')
    <script>
        Alpine.data("data", () => ({
            role: localStorage.getItem("role"),
            members: [],
            books: [],
            borrows: [],
            returns: [],
            init() {
                let token = localStorage.getItem("token")
                this.getBooks(token)
                this.getBorrows(token)
                this.getMembers(token)
            },
            getBooks(token) {
                fetch("http://0.0.0.0:3030/books", {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${token}`
                    },
                }).then(res => res.json()).then(res => {
                    this.books = res.data
                })
            },
            getMembers(token) {
                fetch("http://0.0.0.0:3030/members", {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${token}`
                    },
                }).then(res => res.json()).then(res => {
                    for (let x of res.data)
                        if (x.role == 'member') this.members.push(x)
                })
            },
            getBorrows(token) {
                fetch("http://0.0.0.0:3030/borrows", {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${token}`
                    },
                }).then(res => res.json()).then(res => {
                    this.borrows = res.data
                    for (let x of res.data)
                        if (x.status == 'returned') this.returns.push(x)
                })
            }
        }))
    </script>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" style="text-align: left">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3 x-html="members.length">150</h3>
                            <p>Total Siswa</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3 x-html="books.length">53</h3>
                            <p>Total Buku</p>

                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3 x-html="borrows.length">44</h3>
                            <p>Pinjaman</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3 x-html="returns.length">65</h3>
                            <p>Pengembalian</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-swatchbook"></i>
                        </div>
                        {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->


        {{-- tabel aksi --}}
        <div class="container" style="margin-top:50px">
            <div class="card">
                <h5 style="margin:20px ">DATA ANGGOTA</h5>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                        </thead>
                        <tbody>
                            <template x-for="(x, i) in members">
                                <tr>
                                    <td x-html="i+1">1</td>
                                    <td x-html="x.fullname">Adip Idi Surya</td>
                                    <td x-html="x.email">adip@gmail.com</td>
                                    <td x-html="x.phone">08123456789</td>
                                    <td x-html="x.address">Jl. Raya Bogor</td>
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
