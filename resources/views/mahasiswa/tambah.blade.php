@extends('template.main')

@section('title', 'Tambah Data Mahasiswa')
    
@section('content')
    <h2>Tambah Data Mahasiswa</h2>

    <div class="card">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ url('mahasiswa') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="npm" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" cols="10" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection