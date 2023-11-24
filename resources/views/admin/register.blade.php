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
            .divider:after,
            .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            box-shadow: #18c8d4
            }
            .h-custom {
            height: calc(100% - 73px);
            
            }
    </style>
  </head>
  <body>
    <section class="vh-100">
        <div class="container-fluid h-custom">  
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://img.freepik.com/free-vector/female-smiling-librarian-standing-counter-book-shelf-paper-flat-vector-illustration-city-library-knowledge_74855-8364.jpg?w=740&t=st=1700819797~exp=1700820397~hmac=3b31a8a3fe7282691e2f60472960dc9bf9b2650348808e555c54dbb0ca84c2db"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form>
                <div class="d-flex flex-row align-items-center justify-content-center justify-content mt-3">
                    <p>
                      <h2>DAFTAR</h2>
                  </p>
                  </div>
      
                <!-- Email input -->
                <div class="form-outline mb-1">
                    <div class="col">
                        <label class="form-label" for="form3Example3">Alamat Email</label>
                      <input type="text" class="form-control" placeholder="Masukkan Alamat Email" aria-label="First name">
                    </div>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-1">
                    <div class="col">
                        <label class="form-label" for="form3Example3">Nama Lengkap</label>
                      <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" aria-label="First name">
                    </div>
                    <div class="col mt-1">
                        <label class="form-label" for="form3Example3">Nomor Telepon</label>
                      <input type="text" class="form-control" placeholder="Masukkan Nomor Telepon" aria-label="Last name">
                    </div>
                  </div>

                  <div class="form-outline mb-1">
                    <div class="col">
                        <label class="form-label" for="form3Example3">Password</label>
                      <input type="text" class="form-control" placeholder="Masukkan Password" aria-label="First name">
                    </div>
                </div>

                <div class="form-outline mb-1">
                    <div class="col">
                        <label class="form-label" for="form3Example3">Konfirmasi Password</label>
                      <input type="text" class="form-control" placeholder="Masukkan Konfirmasi Password" aria-label="First name">
                    </div>
                </div>
      
                
                    
                  <!-- Checkbox -->
                  {{-- <div class="d-flex justify-content-between align-items-center">
                  <div class="form-check mb-0">
                  </div>
                  <a href="#!" class="link-primary">Lupa password?</a>
                </div> --}}
      
                <div class="text-center text-lg-start mt-2 pt-2 mt-8">
                  <button type="button" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Daftar</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Sudah mempunyai akun? <a href="#!"
                      class="link-primary">Masuk sekarang</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
      </section>

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


