<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <style>
          .card{
            height: 480px;
            border-radius: 20px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
          }
          
          .login-start{
          margin-top: 50px;
          }
          .card-title{
            font-size: 40px;

          }

          .form-login{
            margin-bottom: 10px;
            font-size: 15px;
            margin-top: 10px;
          }

          .form-check{
            margin-left: 150px;
            margin-bottom: 30px;
          }

          .daftar{
            margin-top: 20px;
          }

          .row{
            margin-right: 50px;
          }

          .btn-primary{
            background-color: rgb(23, 177, 224);
            border-radius: 20px;
          }
      
          .social-icons {
          display: flex;
          }

          .social-icon {
            font-size: 20px;
            margin: 0 10px;
            border:  #d1cbcb; /* Warna border abu-abu */
            padding: 8px;
           
          }

          .facebook {
            color: #1877f2; /* Warna Facebook */
          }

          .google {
            color: #ea4335; /* Warna Google */
          }

          .instagram {
            color: #bc2a8d; /* Warna Instagram */
          }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-md-center">
      </div>
      <div class="row">
        <div class="col">
          <div class="card-kiri" style="width: 40rem;">
            {{-- <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dbl.id%2Fs%2Fprofile%2F7513%2Fsman-1-bogor&psig=AOvVaw0d2CWunuHMPoqwIh9RNT2S&ust=1700990023594000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCKDrwf7o3oIDFQAAAAAdAAAAABAE" class="card-img-top" alt="..."> --}}
            <div class="card-body" style="text-align: center">
              <h1 class="card-title-kiri" style="margin-top: 80px">Masuk Ke Aplikasi <span style="color: rgb(23, 177, 224)">SIPUS</span></h1>
              <p class="card-text-kiri" style="font-size: 15px">Masuk ke aplikasi SIPUS untuk mengecek dan melihat daftar buku yang tersedia di perpustakaan SMAN 1 KOTA BOGOR</p>
            </div>
            <img src="{{asset('assets/img/logo.png')}}" style="margin-left: 190px" width="40%" alt="">
          </div>
        </div>
        <div class="col-md-auto">
          <div class="login-start">
            <div class="card" style="width: 20rem;">
              <div class="card-body">
                <h5 class="card-text">Selamat Datang di <span style="color:rgb(23, 177, 224) ">SIPUS</span></h5>
                <p class="card-title">Masuk</p>

                <div class="social-icons">
                  <div class="social-icon facebook">
                    <i class="fab fa-facebook-f"></i>
                  </div>
                  <div class="social-icon google" style="margin-left: 70px">
                    <i class="fab fa-google"></i>
                  </div>
                  <div class="social-icon instagram" style="margin-left: 70px">
                    <i class="fab fa-instagram"></i>
                  </div>
                </div>

                <form>
                  <div class="form-login">
                    <label for="exampleInputEmail1" class="form-label">Masukkan Alamat Email</label>
                    <input type="email" class="form-control" placeholder="Username atau Alamat Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                  </div>
                  <div class="form-login">
                    <label for="exampleInputPassword1" class="form-label">Masukkan Password Anda</label>
                    <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lupa Password</label>
                  </div>
                  <div class="d-grid gap-2 col-12 mx-auto">
                    <button class="btn btn-primary" type="button">Masuk</button>
                  </div>
                  <div class="daftar">
                    <p>Belum punya akun? <a href="#">Daftar</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


