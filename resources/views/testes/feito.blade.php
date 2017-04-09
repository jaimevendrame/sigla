<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>PRONAP</title>
    <!--CSS Personalizado-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/pronap.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!-- Optional theme -->
    <link rel="stylesheet" href="{{url('assets/font-awesome/css/font-awesome.min.css')}}">
    <!-- Optional theme -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-theme.min.css')}}">
    <!-- Chamadas JS -->
    <!--jQuery-->
    <script src="{{url('assets/js/jquery-3.2.0.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>

</head>
<body>
<div class="container col-md-12">
    <div class="col-md-10 text-center">


        <div class="errors-msg alert alert-danger" >
            {{--<h1>Olá, {{$data->name}}</h1>--}}
            <h2>teste já feito.</h2>
            {{$pesquisa}}


            @forelse($alunos as $aluno)
            {{$aluno->name}}
                @empty
                lalal
            @endforelse

        </div>


    </div>
</div>


</body>
</html>