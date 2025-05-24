<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-4">

        <div class="container">
            <a class="navbar-brand" href="{{ route('hospital') }}">Sistem Rekam Medis</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('hospital') }}">Rumah Sakit</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="{{ route('patient') }}">Pasien</a></li> --}}
                </ul>
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="d-flex justify-end">
                <button class="btn btn-danger m-2" type="submit">Logout</button>
            </div>
        </form>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
