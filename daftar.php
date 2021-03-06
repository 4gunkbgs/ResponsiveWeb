<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Form Registrasi</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link rel="icon" href="img/1.png" type="image/png" />
</head>

<body class="bg-light">
    <div class="container-fluid">
        <!-- Navbar 1-->
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark col">
                <div class="navbar-brand">
                    <img src="img/1.png" alt="" />
                </div>
                <div class="navbar-nav mr-auto">
                    <div class="navbar-brand">
                        <h3>ST. Dharma Duta</h3>
                        <h4>Banjar Delod Rurung</h4>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Akhir Container -->
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="bg-white form-container" id="formDaftar">
                    <h2>Form Registrasi</h2>
                    <br />
                    <div class="form-group">
                        <label for="namalengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namalengkap" placeholder="Masukkan Nama Lengkap" name="nama" required />
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" required />
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email" required />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" required />
                        <small id="valkurang"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ulangi Password</label>
                        <input type="password" class="form-control" id="ulangpassword" placeholder="Password" required />
                        <small id="valpass"></small>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary btn-block daftar-btn">
                        Daftar
                    </button>
                </form>
            </div>
        </div>
        <!-- Akhir Container -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalberhasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-berhasil">SUKSES!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="modal-text"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-->
    <hr />
    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
                <p>&copy AgungB 2021</p>
            </div>
            <div class="sosial col-lg-3">
                <a href="#"><i class="fab fa-instagram mr-4"></i></a>
                <a href="#"><i class="fab fa-facebook mr-4"></i></a>
                <a href="#"><i class="far fa-envelope-open mr-4"></i></a>
                <a href="#"><i class="fab fa-discord mr-4"></i></a>
            </div>
        </div>
    </div>
    <!-- akhir footer-->
</body>
<script>
    $(document).ready(function() {
        $("#formDaftar").submit(function(event) {

            var ps1 = $("#password").val();
            var ps2 = $("#ulangpassword").val();
            var ps1length = $("#password").val().length;

            if (ps1.length >= 8) {
                $("#valkurang").html("");
                if(ps1 == ps2) {
                    $(".modal-text").html(
                        `Selamat Pendaftaran A.N. ${
                        $("#namalengkap").val().toUpperCase() + " Telah Berhasil"
                    }`
                    );
                    $('#modalberhasil').modal('show');
                    $("#valpass").html("");
                } else {
                    $("#valpass").html("Password Tidak Sesuai");
                }
            } else {
                $("#valkurang").html("Password Kurang Dari 8");
            }

            event.preventDefault();
        });
    });
</script>

</html>