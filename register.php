<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SAW</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="ipsi.png" type="image/x-icon">
    <style>
        #bekgron2 {background-color:d7d7d7;height: 100%;width: 100%;  background-position: center; background-size: cover}
        #bekgron {background-image: url(Laga3.jpg); height: 100%;  background-position: center; background-repeat: no-repeat; background-size: cover;
                }
        .tengah {margin-left:auto;margin-right:auto;display:block;width:150px;vertical-align: middle;}
        .font {color:white;font-family:sans-serif;text-align:center;font-size: 4rem;
                margin-bottom: 1rem}
        .font1 {color:white;font-family:sans-serif;text-align:center;font-size: 4rem;
                 margin-bottom: 0.1rem}
    </style>
</head>

<body>
    <div id="auth">

        <div class="row h-100 bg-body">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                        <div id="bekgron">
                        <br><br><br><br><br><br><br>
                        <img class="tengah" src="ipsi.png">
                        <br>
                        <p class="font">Ikatan Pencak Silat Indonesia<br></p>
                        <p class="font1">Kabupaten Cirebon</p> 
                        </div>   
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div id="bekgron2">
                <div id="auth-left">
                    <br><br><br><br><br>
                    <h1 class="auth-title text-secondary">Registrasi.</h1>
                    <div class="row">
                    <div>
                    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
                    <form action="register-act.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                            <div class="form-control-icon">
                                <i class="bi bi-person-badge"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send</button>
                       
                    </form>
                </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
