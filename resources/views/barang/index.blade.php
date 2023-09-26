@extends('layout.app')  

@section('content')

        <tbody>
            @foreach ($data_barang as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nama_barang }}</td>
                    <td>{{ 'Rp'.number_format($b->harga, 2, ',', '.') }}</td>
                    <td>{{ $a->stok }}</td>
                    <td>{{ $a->id_supplier }}</td>
                </tr>
            @endforeach
        </tbody>

@endsection
