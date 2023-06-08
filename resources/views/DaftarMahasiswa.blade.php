<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('navbar')
    <h1>Daftar Mahasiswa</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Program Studi</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $nama = ['AdityaPutra','Mahesa Alghifari', 'Adrian Adhari', 'Nagasa', 'Frila'];
                    $npm = ['212310025', '212310006', '212310035', '212310048', '212310014'];
                    $prodi = ['TI','TI','TI','TI', 'SI'];
                @endphp
            
                @for ($i = 0; $i < count($nama); $i++)
                <tr>
                    <td>{{ $nama[$i] }}</td>
                    <td>{{ $npm[$i] }}</td>
                    <td>{{ $prodi[$i] }}</td>
                </tr>
                @endfor
                </tbody>
            </table>   
    @include('footer')
</body>
</html>