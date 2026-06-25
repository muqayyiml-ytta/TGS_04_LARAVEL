@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<style>
    .card-profile {
        background-color: #ffffff;
        max-width: 550px;
        margin: 0 auto;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        border: 1px solid #e0e0e0;
    }
    .card-profile h2 {
        margin-top: 0;
        color: #333;
        text-align: center;
        border-bottom: 2px solid #0056b3;
        padding-bottom: 12px;
        margin-bottom: 20px;
    }
    .table-biodata {
        width: 100%;
        border-collapse: collapse;
    }
    .table-biodata td {
        padding: 12px 8px;
        border-bottom: 1px solid #f0f0f0;
        font-size: 16px;
    }
    .table-biodata td.label {
        font-weight: bold;
        color: #555;
        width: 35%;
    }
    .table-biodata td.value {
        color: #222;
    }
</style>

<div class="card-profile">
    <h2>Data Profil Mahasiswa</h2>
    
    <table class="table-biodata">
        <tr>
            <td class="label">Nama</td>
            <td class="value">: {{ $mahasiswa['nama'] }}</td>
        </tr>
        <tr>
            <td class="label">NIM</td>
            <td class="value">: {{ $mahasiswa['nim'] }}</td>
        </tr>
        <tr>
            <td class="label">Program Studi</td>
            <td class="value">: {{ $mahasiswa['prodi'] }}</td>
        </tr>
        <tr>
            <td class="label">Semester</td>
            <td class="value">: {{ $mahasiswa['semester'] }}</td>
        </tr>
        <tr>
            <td class="label">Hobi</td>
            <td class="value">: {{ $mahasiswa['hobi'] }}</td>
        </tr>
    </table>
</div>
@endsection