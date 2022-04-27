@extends('layout.main')

@section('container')
    <style>
        td,th{
            padding-left: 5px;
            padding-right: 10px;
            align-content: left;
        }
    </style>

    <h1>Halaman about</h1>

            <p>Aplikasi Web Ini Menggunakan :</p>
            <ul>
                <li>Laravel</li>
            </ul>
    
        <h2>Pembuat Web</h2>
    <table>
        <th>Nama</th><th>NIM</th>
        <tr>
            <td>{{ $nama1 }}</td>
            <td>{{ $nim1 }}</td>
        </tr>
        <tr>
            <td>{{ $nama2 }}</td>
            <td>{{ $nim2 }}</td>
        </tr>
    </table>
@endsection