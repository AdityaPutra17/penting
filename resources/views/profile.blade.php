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

    
   <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Profile</h5>
      <p class="card-text">{{$data->nama}}</p>
      <p class="card-text">{{$data->npm}}</p>
      <p class="card-text">{{$data->gender}}</p>
      <p class="card-text">{{$data->tgl_lahir}}</p>
      <p class="card-text">{{$data->alamat}}</p>
      
    </div>
  </div>
    @include('footer')
</body>
</html>