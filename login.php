<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link rel="icon" href="img/1.png" type="image/png">

</head>

<body class="bg-light">
    <div class="container-fluid">
        <!-- Navbar 1-->
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark col">
                <div class="navbar-brand">
                    <img src="img/1.png" alt="">
                </div>
                <div class="navbar-nav mr-auto">
                    <div class="navbar-brand">
                        <h3>ST. Dharma Duta</h3>
                        <h4>Banjar Delod Rurung</h4>
                    </div>
                </div>
            </nav>
        </div>


        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-3">
                <form class="bg-white form-container">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label" for="checkbox">Ingat Saya</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block login-btn">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- footer-->
    <hr>
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

</html>