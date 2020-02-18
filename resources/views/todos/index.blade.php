<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>{{config('app.name', 'MyApp')}}</title>
</head>
<body class="bg-dark">


    <h1 class="text-light p-3">This is my to do list app:</h1>

    <div class="container">
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
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-outline-primary ml-3 mt-3" href="../create" role="button">Create new task</a>
    <a class="btn btn-outline-secondary ml-3 mt-3" href="/" role="button">Go to Homepage</a>
</div>
    
</body>
</html>