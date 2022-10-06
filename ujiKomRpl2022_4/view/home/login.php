<?php

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login | Peduli Diri</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        main.main_deg {
            padding: 45px;
        }

        .h3_deg {
            text-align: center;
            font-family: sans-serif;
        }

        a.text_link {
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <main class="main_deg ml-5 mr-5">
        <div class="card">
            <div class="card-body">
                <h3 class="h3_deg">Log In</h3>
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="nik">NIK :</label>
                        <div class="col-sm-11">
                            <input type="number" name="nik" id="nik" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-1 col-form-label">Name :</label>
                        <div class="col-sm-11">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama Lengkap Anda">
                        </div>
                    </div>
                    <a href="#" class="text_link">Belum terdaftar?</a>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
            </div>
        </div>
    </main>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>