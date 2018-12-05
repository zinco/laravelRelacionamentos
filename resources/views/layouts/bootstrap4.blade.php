<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}" >
    <title>{!! isset($title)? $title : "Sem titulo"  !!} - VP</title>
</head>
<body>
@include('menu.horizontal')


<div class='container'>

@yield('conteudo')
</div>


    <script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
     <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
    
    <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
     <script src="{{URL::to('tinymce\js\tinymce\tinymce.min.js')}}"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</body>
</html>