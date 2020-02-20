<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <title>{{config('app.name', 'MyApp')}}</title>
</head>
<body class="bg-dark py-3">


    <h1 class="text-light p-3">This is my to do list app:</h1>

    <div class="container">
        
    <a class="btn btn-outline-secondary ml-3 my-3" href="/" role="button">Go to Homepage</a>
    @if (Session::has('message'))
    <div class="alert alert-success ml-3">
        {{ Session::get('message') }}
    </div>
        
    @endif
    <table class="table table-striped table-dark m-3">
        <thead>
            <tr>
                
                <th scope="col">Morning</th>
                <th scope="col">Afternoon</th>
                <th scope="col">Evening</th>
                <th scope="col">Tomorrow</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $todo)
                <tr>
                <td>{{$todo->morning}}</td>
                <td>{{$todo->afternoon}}</td>
                <td>{{$todo->evening}}</td>
                <td>{{$todo->tomorrow}}</td>
                <td>
                <div class="d-flex">
                    <a class="btn btn-outline-info mr-2" href="/edit/{{$todo->id}}" role="button">Edit</a>
                
                
                {!!Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'], null, array('id' => 'onClick'))}}
                
                {!!Form::close()!!}
            </div>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-outline-success ml-3 mt-3" href="/create" role="button">Add new todo</a>
    

    
</div>
        <script>
            $(document).ready(function(){
                $("#onClick").click(function(){
                    swal("Hello world!");
                });
            });
        </script>
        
    


    
    
</body>
</html>