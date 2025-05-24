@extends('admin.layout')

@section('content')
    <section class="container">
        <h2>Data Rumah Sakit</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Rumah Sakit</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $hospital)
                    <tr>
                        <td>{{ $hospital->nama }}</td>
                        <td>{{ $hospital->alamat }}</td>
                        <td>{{ $hospital->email }}</td>
                        <td>{{ $hospital->telepon }}</td>
                        <td>
                            <a href="{{ route('hospital.edit', $hospital->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <button class="btn btn-sm btn-danger btn-delete" data-id="{{ $hospital->id }}">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <section class="mt-8">
            <h1 class="text-center">Form Tambah Rumah Sakit</h1>
            <form action="{{ route('hospital.store') }}" method="POST">
                @csrf
                <div class="d-flex flex-column gap-2 p-4">
                    <input type="text" name="nama" placeholder="Nama" required>
                    <input type="text" name="alamat" placeholder="Alamat" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="telepon" placeholder="Telepon" required>
                    <button class="btn btn-success" type="submit">Tambah</button>
                </div>
            </form>
        </section>

    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.btn-delete').click(function() {
                let id = $(this).data('id');
                if (confirm("Yakin ingin menghapus data ini?")) {
                    $.ajax({
                        url: '/hospital/' + id,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert('Data berhasil dihapus');
                            location
                        .reload(); // atau hapus baris dari DOM jika ingin tanpa reload
                        },
                        error: function(xhr) {
                            alert('Terjadi kesalahan: ' + xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
@endsection
