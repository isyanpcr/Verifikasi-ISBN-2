<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Editor - Perpustakaan ISBN</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url(https://pcr.ac.id/assets/media/pcr_media20210421024826.jpg);
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 500px;
            text-align: center;
            align-content: center;
        }

        .login-container h1 {
            margin-bottom: 20px;
            color: #007bff;
            align-content: center;
        }

        .login-container input {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 400px;
            height: 25px;
            align-content: center;

        }

        .login-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 24px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            width: 400px;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container mt-5">
                    <h1>Silahkan Login Sebagai Editor</h1>
                    <img src="https://smkpgripekanbaru.sch.id/wp-content/uploads/2022/06/caltex-logo.png"
                        alt="Library Icon" width="200" class="mb-4"><br><br>
                    <form action="Login.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Masukkan Email"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Log In</button>
                    </form>
                    <form action="DaftarEditor.php" method="POST">
                        <h5>Belum Punya Akun ?</h5>
                        <button type="submit" class="btn btn-primary btn-block">Buat Akun</button>
                    </form>
                    <div class="footer mt-3">
                        © 2024 Perpustakaan ISBN. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>