@extends('admin.layout')

@section('content')
    <div class="container mt-4">
        <h2>Edit Pasien</h2>
        <form action="{{ route('patient.update', $patient->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-2">
                <label>Nama Pasien</label>
                <input type="text" name="nama" value="{{ old('nama', $patient->nama) }}" class="form-control" required>
            </div>

            <div class="mb-2">
                <label>Alamat</label>
                <input type="text" name="alamat" value="{{ old('alamat', $patient->alamat) }}" class="form-control"
                    required>
            </div>

            <div class="mb-2">
                <label>No Telpon</label>
                <input type="number" name="no_telpon" value="{{ old('email', $patient->no_telpon) }}" class="form-control"
                    required>
            </div>

            <div class="mb-2">
                <label>Rumah Sakit</label>
                <select name="rumah_sakit_id" class="form-control">
                    @foreach ($rumahSakitList as $rs)
                        <option value="{{ $rs->id }}"
                            {{ $rs->id == old('rumah_sakit_id', $patient->rumah_sakit_id) ? 'selected' : '' }}>
                            {{ $rs->nama }}
                        </option>
                    @endforeach
                </select>
                @error('rumah_sakit_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
