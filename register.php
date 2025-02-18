<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Ke ToDoList</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-dark" style="color: white;"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body" style="background-color:gainsboro">
                                        <?php
                                          if(isset($_POST[ 'register'])) {
                                            $username = $_POST['username'];
                                            $email = $_POST['email'];
                                            $password = md5($_POST['password']);
                                            $name = $_POST['name'];

                                            $insert = mysqli_query($koneksi, "INSERT INTO users(username,email,password,name) VALUES('$username','$email','$password','$name')");

                                            if($insert){
                                                echo '<script>alert("Selamat, Register Berhasil. Silahkan Login."); location.href="login.php"</script>';
                                            }else{
                                                echo '<script>alert("Register Gagal, Silahkan Ulangi Kembali");</script>';
                                            }
                                        }
                                        ?>
                                        <form method="post">
                                        <div class="form-floating mb-5 ">
                                                <input class="form-control" type="text" required name="nama" placeholder="Masukkan Nama Lengkap" />
                                                <label >Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-5">
                                                <input class="form-control" type="username" required name="email" placeholder="Masukkan Username" />
                                                <label >Email</label>
                                            </div>
                                            <div class="form-floating mb-5">
                                                <input class="form-control" type="username" required name="no_telepon" placeholder="Masukkan No. Telepon" />
                                                <label >No. Telepon</label>
                                            </div>
                                            <div class="form-floating mb-5">
                                                <textarea name="alamat" rows="5" required class="form-control"></textarea>
                                                <label >Alamat</label>
                                            </div>
                                            <div class="form-floating mb-5">
                                                <textarea name="username" rows="5" required class="form-control"></textarea>
                                                <label >Username</label>
                                            </div>
                                            <div class="form-floating mb-5">
                                                <input class="form-control" id="inputPassword" required name="password" type="password" placeholder="Masukkan Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                                <a class="btn btn-danger" href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-1 bg-dark">
                                        <div class="small"><a href="register.html">
                                            &copy; 2024 ToDoList.
                                        </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
