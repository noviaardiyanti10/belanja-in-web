<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="login w-100 min-vh-100 overflow-hidden">
        <div class="row">
            <div class="col-md-6 left-side d-flex justify-content-center align-items-center">
                <div>
                    <h1 class="fw-semibold text-center mb-5">Belanja.in</h1>
                    <p class="text-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
            <div class="col-md-6 right-side d-flex justify-content-center align-items-center">
                <div>
                    <h5>Selamat Datang Admin</h5>
                    <p>Silahkan masukkan email atau nomor telepon dan password
                        Anda untuk mulai menggunakan aplikasi</p>

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email / Nomor Telepon</label>
                            <input type="email" class="form-control" id="email" placeholder="Contoh: admin@gmail.com">
                          </div>

                          <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password">
                          </div>
                          
                          <button type="submit" class="btn btn-login text-light w-100 mt-4">MASUK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>