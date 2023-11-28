@extends('master')

@section('title', 'Edit Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br/>
    <br/>

    @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label text-right">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="jabatan" class="col-sm-3 col-form-label text-right">Jabatan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="umur" class="col-sm-3 col-form-label text-right">Umur</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label text-right">Alamat</label>
                <div class="col-sm-9">
                    <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection
