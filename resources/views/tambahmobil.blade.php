@extends('master')

@section('title', 'Stock Mobil')

@section('konten')
    <h3>Tambah Mobill</h3>

    <a href="/mobil"> Kembali</a>

    <br/>
    <br/>

    <form action="/mobil/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="kodemobil" class="col-sm-3 col-form-label text-right">Kode Mobil</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="kodemobil" name="kodemobil">
            </div>
        </div>

        <div class="form-group row">
            <label for="merkmobil" class="col-sm-3 col-form-label text-right">Merk Mobil</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="merkmobil" name="merkmobil">
            </div>
        </div>

        <div class="form-group row">
            <label for="stockmobil" class="col-sm-3 col-form-label text-right">Stock Mobil</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="stockmobil" name="stockmobil"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-sm-3 col-form-label text-right">Ketersediaan</label>
            <div class="col-sm-9">
                <select class="form-control" id="tersedia" name="tersedia">
                    <option value="Y">Y</option>
                    <option value="N">N</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>

    </form>
@endsection
