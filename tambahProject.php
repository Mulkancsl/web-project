<?php

    require "functions.php";

    if( isset($_POST["submit"]) ) {
    
        if( tambahProject($_POST) > 0 ) {
            echo "
                <script>
                    alert('Alhamdulilah, Project baru berhasil ditambahkan!');
                    document.location.href = 'http://localhost/project1';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Maaf, Project baru gagal ditambahkan!');
                    document.location.href = 'http://localhost/project1';
                </script>
            ";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home
    </title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script src="./js/bootstrap.min.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container"> 
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <h1>Halaman Tambah Project</h1>
        <a href="http://localhost/project1">Kembali</a>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6"> 
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="judul">Title</label>
                            <input type="text" class="form-control mb-3" name="judul" id="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control mb-3" id="exampleFormControlTextarea1" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <select name="teknologi" class="form-control form-control-sm mb-3" required>
                                <option selected disabled>Pilih Bahasa Pemrograman</option>
                                <option>C</option>
                                <option>C++</option>
                                <option>C#</option>
                                <option>Dart</option>
                                <option>Java</option>
                                <option>Javascript</option>
                                <option>PHP</option>
                                <option>Ruby</option>
                            </select>
                        </div>
                        <div class="form-gruop">
                            <label for="link">Masukkan Link Project</label>
                            <input type="text" class="form-control mb-3" name="link" id="link" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-dark btn-block">Dark</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
  </body>
</html>   
    