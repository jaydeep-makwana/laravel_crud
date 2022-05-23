<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS\show.css')}}">
    <!-- <link rel="stylesheet" href="{{url('CSS\style.css')}}"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Content</title>
</head>

<body>


    <div class="container-fluid h-100 w-100 p-0 bg-dark text-white text-center">
        <h1>Welcome</h1>
        <hr>
        <h2>
            @if(!isset($data))
            List Of Mobiles <br>
            <hr>
            @foreach($array as $value)

                @if($value == 'realme')
                <i>{{$value}} <br> </i>
                @else
                {{$value}} <br>
                @endif

            @endforeach

            @else
                Hello  {{$data}}
            @endif
        </h2>
    </div>


</body>

</html>