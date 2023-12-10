@extends('master')

@section('title', 'Mobil')

@section('konten')

    <h3>Data Stock Mobil</h3>

    <a href="/mobil/tambahmobil" class="mb-4 btn btn-primary"> + Tambah Stock Mobil</a>

    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Mobil</th>
            <th>Merk Mobil</th>
            <th>Stock Mobil</th>
            <th>Ketersedian Mobil</th>
        </tr>
        @foreach($mobil as $nk)
        <tr>
            <td>{{ $nk->kodemobil }}</td>
            <td>{{ $nk->merkmobil }}</td>
            <td>{{ $nk->stockmobil }}</td>
            <td>{{ $nk->tersedia }}</td>
        </tr>
        @endforeach
    </table>
@endsection
