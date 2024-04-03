@extends('layout.limbah')
 
@section('content')

    <h1>Jumlah Limbah</h1>

    <div class="card">
        <div class="card-header">
            <h4 class="text-center">JUMLAH LIMBAH B 3 DI TPS</h4>
        </div>
        <div class="mx-4 mb-3">
            <a href="/limbah_keluar" class="btn btn-success ms-2">Export Data Excel</a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No. </th>
                    <th scope="col">Jenis Limbah B3 Masuk</th>
                    <th scope="col">Jumlah Limbah B3 (KG)</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($jumlah_limbah as $jl)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $jl->jenis_limbah }}</td>
                            <td>{{ $jl->jumlah_limbah }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 
@endsection
