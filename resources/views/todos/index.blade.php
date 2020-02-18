<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', 'MyApp')}}</title>
</head>
<body>

    <h1>This is my to do list app:</h1>


    <table class="table">
        <thead>
            <tr>
                
                <th>Morning</th>
                <th>Afternoon</th>
                <th>Evening</th>
                <th>Tomorrow</th>
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
    
</body>
</html>