<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

    <title>Rekam Medis</title>
</head>

<body>

    <main>
        <section class="hero bg-base-200 min-h-screen">
            <div class="hero-content flex-col lg:flex-row-reverse">
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl text-[#6ae65f] font-bold">Login Sekarang!</h1>
                    <p class="py-6">
                        Selamat datang di sistem rekamedis silahkan login
                    </p>
                </div>
                <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                    <div class="card-body">
                        <form method="POST" action="/login">
                            @csrf
                            <fieldset class="fieldset">
                                <label class="label">Username</label>
                                <input name="username" type="text" class="input" value="{{ old('username') }}"
                                    placeholder="username" />
                                @error('username')
                                    <div class="text-[red]">{{ $message }}</div>
                                @enderror

                                <label class="label">Password</label>
                                <input name="password" type="password" class="input" value="{{ old('password') }}"
                                    placeholder="Password" />
                                @error('password')
                                    <div class="text-[#ee5656]">{{ $message }}</div>
                                @enderror

                                <button class="text-[white] btn bg-[#4dc242] mt-4">Login</button>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>

</html>
