<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <title>Rekam Medis</title>
</head>

<body>

    <main>
        <section class="min-vh-100 d-flex align-items-center bg-light">
            <div class="container">
                <div class="row justify-content-center align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                        <h1 class="display-4 fw-bold text-success">Login Sekarang!</h1>
                        <p class="lead mt-3">
                            Selamat datang di sistem rekamedis silahkan login
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <form method="POST" action="/login">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input name="username" type="text" class="form-control"
                                            placeholder="username" value="{{ old('username') }}">
                                        @error('username')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input name="password" type="password" class="form-control"
                                            placeholder="Password" value="{{ old('password') }}">
                                        @error('password')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success w-100 mt-3">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>

</body>

</html>
