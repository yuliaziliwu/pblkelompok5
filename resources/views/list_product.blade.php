@extends('layout.list')

@section('title', 'SKINCARE')

@section('content')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Merk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $post)
                <tr>
                    <td>{{ $post['id'] }}</td>
                    <td>{{ $post['produk'] }}</td>
                    <td>{{ $post['merk'] }}</td>
                    <td>{{ $post['harga'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


