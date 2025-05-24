@extends('admin.layout')

@section('content')
    <h3>Data Pasien</h3>

    {{-- <form method="GET" action="{{ route('patient') }}">
        <select name="rumah_sakit_id" onchange="this.form.submit()">
            <option value="">Filter Rumah Sakit</option>
            @foreach ($rumahSakits as $rs)
                <option value="{{ $rs->id }}" {{ $filter == $rs->id ? 'selected' : '' }}>{{ $rs->nama }}</option>
            @endforeach
        </select>
    </form> --}}

    <table class="table table-bordered">
        <tr>
            <thead>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telpon</th>
                <th>Rumah Sakit</th>
                <th>Aksi</th>
            </thead>
        </tr>
        @foreach ($data as $patient)
            <tr>
                <tbody>
                    <td>{{ $patient->nama }}</td>
                    <td>{{ $patient->alamat }}</td>
                    <td>{{ $patient->no_telpon }}</td>
                    <td>{{ $patient->rumahSakit->nama }}</td>
                    <td>
                        <a href="{{ route('patient.edit', $patient->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <button class="btn btn-sm btn-danger btn-delete" data-id="{{ $patient->id }}">Hapus</button>
                    </td>
                </tbody>
            </tr>
        @endforeach
    </table>

    <hr>

    <section>
        <h1 class="text-center">Form Tambah Pasien</h1>
        <form method="POST" action="{{ route('patient.store') }}">
            {{-- <form method="POST" action="{{ route('patients.store') }}"> --}}
            @csrf
            <div class="d-flex flex-column gap-2 p-4">
                <input type="text" name="nama" placeholder="Nama Pasien" required>
                <input type="text" name="alamat" placeholder="Alamat" required>
                <input type="text" name="no_telpon" placeholder="No Telepon" required>
                <select name="rumah_sakit_id" required>
                    <option value="">-- Pilih Rumah Sakit --</option>
                    @foreach ($rumahSakits as $rs)
                        <option value="{{ $rs->id }}">{{ $rs->nama }}</option>
                    @endforeach
                </select>
                <button class="btn btn-success" type="submit">Tambah</button>
            </div>
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.btn-delete').click(function() {
                let id = $(this).data('id');
                if (confirm("Yakin ingin menghapus data ini?")) {
                    $.ajax({
                        url: '/patient/' + id,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert('Data berhasil dihapus');
                            location
                                .reload();
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
