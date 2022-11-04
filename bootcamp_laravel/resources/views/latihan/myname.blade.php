<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card" width="18rem">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Puan_Maharani%2C_Ketua_DPR_RI.jpg" alt="Puan Maharani, Ketua DPR RI.jpg">
                <div class="class-body">
                    <h5 class="card-title">{{ $data['name'] }} - ({{$data['age']}})</h5>
                    <p class="card-text">{{ $data['address'] }}</p>    
                    <p><strong class="card-text">{{ $data['hobi'] }}</strong></p>
                    <a href="#" class="btn btn-primary">go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    {{-- {{$data['name']}} <br>
    {{$data['age']}} <br>
    {{$data['address']}} <br>

    <p>Pemanggilan menggunakan foreach</p>
    @foreach ($data as $val)
        {{$val}} <br>
    @endforeach --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>