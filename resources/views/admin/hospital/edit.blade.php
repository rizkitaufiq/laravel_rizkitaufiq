@extends('admin.layout')

@section('content')
    <div class="container mt-4">
        <h2>Edit Rumah Sakit</h2>
        <form action="{{ route('hospital.update', $hospital->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-2">
                <input type="text" name="nama" value="{{ old('nama', $hospital->nama) }}" class="form-control" required>
            </div>
            <div class="mb-2">
                <input type="text" name="alamat" value="{{ old('alamat', $hospital->alamat) }}" class="form-control"
                    required>
            </div>
            <div class="mb-2">
                <input type="email" name="email" value="{{ old('email', $hospital->email) }}" class="form-control"
                    required>
            </div>
            <div class="mb-2">
                <input type="text" name="telepon" value="{{ old('telepon', $hospital->telepon) }}" class="form-control"
                    required>
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
